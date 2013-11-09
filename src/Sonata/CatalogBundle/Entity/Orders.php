<?php

namespace Sonata\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 */
class Orders
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $status;

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
     * Set status
     *
     * @param boolean $status
     * @return Orders
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

   /**
     * @var \Sonata\CatalogBundle\Entity\Customers
     */
    private $customers;


    /**
     * Set customers
     *
     * @param \Sonata\CatalogBundle\Entity\Customers $customers
     * @return Orders
     */
    public function setCustomers(\Sonata\CatalogBundle\Entity\Customers $customers = null)
    {
        $this->customers = $customers;
    
        return $this;
    }

    /**
     * Get customers
     *
     * @return \Sonata\CatalogBundle\Entity\Customers 
     */
    public function getCustomers()
    {
        return $this->customers;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orderitems;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderitems = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add orderitems
     *
     * @param \Sonata\CatalogBundle\Entity\OrderItems $orderitems
     * @return Orders
     */
    public function addOrderitem(\Sonata\CatalogBundle\Entity\OrderItems $orderitems)
    {
        $orderitems->setOrders($this);
        $this->orderitems[] = $orderitems;
    
        return $this;
    }

    /**
     * Remove orderitems
     *
     * @param \Sonata\CatalogBundle\Entity\OrderItems $orderitems
     */
    public function removeOrderitem(\Sonata\CatalogBundle\Entity\OrderItems $orderitems)
    {
        $this->orderitems->removeElement($orderitems);
    }

    /**
     * Get orderitems
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrderitems()
    {
        return $this->orderitems;
    }
    /**
     * @var \Date
     */
    private $orderedAt;


    /**
     * Set orderedAt
     *
     * @param \Date $orderedAt
     * @return Orders
     */
    public function setOrderedAt($orderedAt)
    {
        $this->orderedAt = $orderedAt;
    
        return $this;
    }

    /**
     * Get orderedAt
     *
     * @return \Date
     */
    public function getOrderedAt()
    {
        return $this->orderedAt;
    }
    
    

}