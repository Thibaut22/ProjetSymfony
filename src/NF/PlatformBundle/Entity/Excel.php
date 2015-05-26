<?php

namespace NF\PlatformBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Doctrine\ORM\Mapping as ORM;

/**
 * Excel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NF\PlatformBundle\Entity\ExcelRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Excel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     *
     * @ORM\ManyToOne(targetEntity="NF\PlatformBundle\Entity\User")
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="numSemaine", type="integer")
     */
    private $numSemaine;

    private $file;

    private $tempFilename;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Excel
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set numSemaine
     *
     * @param integer $numSemaine
     *
     * @return Excel
     */
    public function setNumSemaine($numSemaine)
    {
        $this->numSemaine = $numSemaine;

        return $this;
    }

    /**
     * Get numSemaine
     *
     * @return integer
     */
    public function getNumSemaine()
    {
        return $this->numSemaine;
    }

    /**
     * Set user
     *
     * @param \NF\PlatformBundle\Entity\User $user
     *
     * @return Excel
     */
    public function setUser(\NF\PlatformBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \NF\PlatformBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

     public function getFile(){
        return $this->file;
    }

    public function setFile(UploadedFile $file){

        $this->file = $file;

        // On vérifie si on avait déjà un fichier pour cette entité
        if(null !== $this->url){
            // On sauvegarde l'extension du fichier pour le supprimer plus tard
            $this->tempFilename = $this->url;

         
            $this->url = null;;
        }

    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload(){

        // Si jamais il n'y a pas de fichier (champ facultatif)
        if(null === $this->file){
            return;
        }
        // Le nom du fichier est son id, on doit juste stocker également son extension
        // Pour faire proper, on devrait renommer cet attribut en "extension", plutot que "url"
        $this->url = $this->file->guessExtension();
    }

     /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload(){

        //Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
        if (null === $this->file) {
            return;
        }

       // Si on avait un ancien fichier, on le supprime
        if (null !== $this->tempFilename){
            $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
            if(file_exists($oldFile)){
                unlink($oldFile);
            }
        }

        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->file->move(
            $this->getUploadRootDir(), // Le répertoire de destination
            $this->id.'_'.$this->getUser()->getLastname().'.'.$this->url   // Le nom du fichier à créer, ici "id.extension"
        );
    }

     public function getUploadDir(){
        // On retourne le chemin relatif vers l'image pour un navigateur (relatif au repartoire)
        return 'uploads/excel';
    }

    protected function getUploadRootDir(){

        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getWebPath(){
        return $this->getUploadDir().'/'.$this->getId().'_'.$this->getUser()->getLastname().'.'.$this->getUrl();
    }
}
