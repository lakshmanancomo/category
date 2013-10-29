<?php

namespace Sonata\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $summary;

    /**
     * @var boolean
     */
    private $isActivr;

    /**
     * @var string
     */
    private $Slug;


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
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Product
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    
        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set isActivr
     *
     * @param boolean $isActivr
     * @return Product
     */
    public function setIsActivr($isActivr)
    {
        $this->isActivr = $isActivr;
    
        return $this;
    }

    /**
     * Get isActivr
     *
     * @return boolean 
     */
    public function getIsActivr()
    {
        return $this->isActivr;
    }

    /**
     * Set Slug
     *
     * @param string $Slug
     * @return Product
     */
    public function setSlug($Slug)
    {
        $this->Slug = $Slug;
    
        return $this;
    }

    /**
     * Get Slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->Slug;
    }    
    
    /**
     * @var \Sonata\CatalogBundle\Entity\Brand
     */
    private $brand;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set brand
     *
     * @param \Sonata\CatalogBundle\Entity\Brand $brand
     * @return Product
     */
    public function setBrand(\Sonata\CatalogBundle\Entity\Brand $brand = null)
    {
        $this->brand = $brand;
    
        return $this;
    }

    /**
     * Get brand
     *
     * @return \Sonata\CatalogBundle\Entity\Brand 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Add category
     *
     * @param \Sonata\CatalogBundle\Entity\Category $category
     * @return Product
     */
    public function addCategory(\Sonata\CatalogBundle\Entity\Category $category)
    {
        $this->category[] = $category;
    
        return $this;
    }

    /**
     * Remove category
     *
     * @param \Sonata\CatalogBundle\Entity\Category $category
     */
    public function removeCategory(\Sonata\CatalogBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }
    
        public function setCategory(\Sonata\CatalogBundle\Entity\Category $category)
    {
        $this->category[] = $category;
    
        return $this;
    }
}