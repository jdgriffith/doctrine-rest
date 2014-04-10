<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RealEstate
 *
 * @ORM\Table(name="real_estate")
 * @ORM\Entity
 */
class RealEstate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bls_in_texas", type="boolean", nullable=true)
     */
    private $blsInTexas;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="market_value", type="text", nullable=true)
     */
    private $marketValue;



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
     * Set order
     *
     * @param integer $order
     * @return RealEstate
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer 
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set blsInTexas
     *
     * @param boolean $blsInTexas
     * @return RealEstate
     */
    public function setBlsInTexas($blsInTexas)
    {
        $this->blsInTexas = $blsInTexas;

        return $this;
    }

    /**
     * Get blsInTexas
     *
     * @return boolean 
     */
    public function getBlsInTexas()
    {
        return $this->blsInTexas;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return RealEstate
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
     * Set marketValue
     *
     * @param string $marketValue
     * @return RealEstate
     */
    public function setMarketValue($marketValue)
    {
        $this->marketValue = $marketValue;

        return $this;
    }

    /**
     * Get marketValue
     *
     * @return string 
     */
    public function getMarketValue()
    {
        return $this->marketValue;
    }
}
