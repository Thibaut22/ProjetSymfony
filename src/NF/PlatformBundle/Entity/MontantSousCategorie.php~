<?php

namespace NF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MontantSousCategorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NF\PlatformBundle\Entity\MontantSousCategorieRepository")
 */
class MontantSousCategorie
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
     * @ORM\Column(name="Annee", type="integer")
     */
    private $annee;


    /**
     * @ORM\ManyToOne(targetEntity="NF\PlatformBundle\Entity\User")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="NF\PlatformBundle\Entity\SousCategories")
     */
    private $sousCategories;


    public function __construct(){
        $date = new \DateTime();
        $this->numSemaine =$date->format('W');
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
     * @return MontantSousCategorie
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
     * @return MontantSousCategorie
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
     * @return MontantSousCategorie
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
     * @return MontantSousCategorie
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
     * Set sousCategories
     *
     * @param \NF\PlatformBundle\Entity\SousCategories $sousCategories
     *
     * @return MontantSousCategorie
     */
    public function setSousCategories(\NF\PlatformBundle\Entity\SousCategories $sousCategories = null)
    {
        $this->sousCategories = $sousCategories;

        return $this;
    }

    /**
     * Get sousCategories
     *
     * @return \NF\PlatformBundle\Entity\SousCategories
     */
    public function getSousCategories()
    {
        return $this->sousCategories;
    }
}
