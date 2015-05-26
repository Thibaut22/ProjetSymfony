<?php

namespace NF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MontantTotalJour
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NF\PlatformBundle\Entity\MontantTotalJourRepository")
 */
class MontantTotalJour
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
     * @ORM\ManyToOne(targetEntity="NF\PlatformBundle\Entity\User")
     */
    private $user;


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
     * @return MontantTotalJour
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return MontantTotalJour
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
     *
     * @return MontantTotalJour
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
     * @return MontantTotalJour
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
}
