<?php

namespace NF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MontantCategorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NF\PlatformBundle\Entity\MontantCategorieRepository")
 */
class MontantCategorie
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
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="numSemaine", type="integer")
     */
    private $numSemaine;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

     /**
     * @ORM\ManyToOne(targetEntity="NF\PlatformBundle\Entity\User")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="NF\PlatformBundle\Entity\Categories")
     */
    private $categories;


    public function __construct(){
        $date = new \DateTime();
        $this->numSemaine=$date->format('W');
        $this->annee=$date->format('Y');
    }

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
     * Set montant
     *
     * @param float $montant
     *
     * @return MontantCategorie
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set numSemaine
     *
     * @param integer $numSemaine
     *
     * @return MontantCategorie
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
     * Set annee
     *
     * @param integer $annee
     *
     * @return MontantCategorie
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set user
     *
     * @param \NF\PlatformBundle\Entity\User $user
     *
     * @return MontantCategorie
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

    /**
     * Set categories
     *
     * @param \NF\PlatformBundle\Entity\Categories $categories
     *
     * @return MontantCategorie
     */
    public function setCategories(\NF\PlatformBundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \NF\PlatformBundle\Entity\Categories
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
