<?php

namespace NF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MontantJour
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NF\PlatformBundle\Entity\MontantJourRepository")
 */
class MontantJour
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="NF\PlatformBundle\Entity\User")
     */

    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="NF\PlatformBundle\Entity\Categories")
     */
    private $categories;



    public function __construct(){
        $this->date=new \DateTime();
        $this->numSemaine =$this->date->format('W');
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
     * @return MontantJour
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
     * @return MontantJour
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return MontantJour
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
     * Set user
     *
     * @param \NF\PlatformBundle\Entity\User $user
     *
     * @return MontantJour
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
     * @return MontantJour
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
