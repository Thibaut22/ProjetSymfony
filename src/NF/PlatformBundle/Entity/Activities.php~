<?php

namespace NF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Activities
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NF\PlatformBundle\Entity\ActivitiesRepository")
 */
class Activities
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="numSemaine", type="integer")
     */
    private $numSemaine;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;


    /**
     * @var string
     *
     * @ORM\Column(name="coment", type="text")
     */
    private $coment;

    /**
     *
     * @ORM\ManyToOne(targetEntity="NF\PlatformBundle\Entity\User")
     */
    private $user;

    /**
     *
     * @ORM\ManyToOne(targetEntity="NF\PlatformBundle\Entity\SousCategories")
     */
    private $sousCategories;



    public function __construct(){
        $this->date = new \DateTime();
        $this->numSemaine = $this->date->format('W');
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
     * Set date
     *
     * @param \DateTime $date
     * @return Activities
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set numSemaine
     *
     * @param integer $numSemaine
     * @return Activities
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
     * Set montant
     *
     * @param float $montant
     * @return Activities
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
     * Set coment
     *
     * @param string $coment
     * @return Activities
     */
    public function setComent($coment)
    {
        $this->coment = $coment;

        return $this;
    }

    /**
     * Get coment
     *
     * @return string 
     */
    public function getComent()
    {
        return $this->coment;
    }

    /**
     * Set user
     *
     * @param \NF\PlatformBundle\Entity\User $user
     *
     * @return Activities
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
     * @return Activities
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
