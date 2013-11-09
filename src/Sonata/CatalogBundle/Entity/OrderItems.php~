<?php

namespace Sonata\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderItems
 */
class OrderItems
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantity;


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
     * Set quantity
     *
     * @param integer $quantity
     * @return OrderItems
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * @var \Sonata\CatalogBundle\Entity\Orders
     */
    private $orders;

    /**
     * @var \Sonata\CatalogBundle\Entity\Product
     */
    private $products;


    /**
     * Set orders
     *
     * @param \Sonata\CatalogBundle\Entity\Orders $orders
     * @return OrderItems
     */
    public function setOrders(\Sonata\CatalogBundle\Entity\Orders $orders = null)
    {
        $this->orders = $orders;
    
        return $this;
    }

    /**
     * Get orders
     *
     * @return \Sonata\CatalogBundle\Entity\Orders 
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set products
     *
     * @param \Sonata\CatalogBundle\Entity\Product $products
     * @return OrderItems
     */
    public function setProducts(\Sonata\CatalogBundle\Entity\Product $products = null)
    {
        $this->products = $products;
    
        return $this;
    }

    /**
     * Get products
     *
     * @return \Sonata\CatalogBundle\Entity\Product 
     */
    public function getProducts()
    {
        return $this->products;
    }
    /**
     * @var \Sonata\CatalogBundle\Entity\Product
     */
    private $product;


    /**
     * Set product
     *
     * @param \Sonata\CatalogBundle\Entity\Product $product
     * @return OrderItems
     */
    public function setProduct(\Sonata\CatalogBundle\Entity\Product $product = null)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \Sonata\CatalogBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $total;


    /**
     * Set price
     *
     * @param float $price
     * @return OrderItems
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set total
     *
     * @param float $total
     * @return OrderItems
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @ORM\PostPersist
     */
    public function uploads()
    {
        // Add your code here
    }

    /**
     * @ORM\PrePersist
     */
    public function uploading()
    {
        // Add your code here
    }
}