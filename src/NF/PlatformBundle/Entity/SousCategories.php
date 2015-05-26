<?php

namespace NF\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousCategories
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NF\PlatformBundle\Entity\SousCategoriesRepository")
 */
class SousCategories
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     *
     * @ORM\ManyToOne(targetEntity="NF\PlatformBundle\Entity\Categories")
     */
    private $categories;

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
     * Set title
     *
     * @param string $title
     * @return SousCategories
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set categories
     *
     * @param \NF\PlatformBundle\Entity\Categories $categories
     *
     * @return SousCategories
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
