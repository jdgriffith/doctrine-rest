<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubscriptionType
 *
 * @ORM\Table(name="subscription_type")
 * @ORM\Entity
 */
class SubscriptionType
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="disp_order", type="integer", nullable=true)
     */
    private $dispOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public_allowed", type="boolean", nullable=true)
     */
    private $publicAllowed;



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
     * @return SubscriptionType
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
     * Set dispOrder
     *
     * @param integer $dispOrder
     * @return SubscriptionType
     */
    public function setDispOrder($dispOrder)
    {
        $this->dispOrder = $dispOrder;

        return $this;
    }

    /**
     * Get dispOrder
     *
     * @return integer 
     */
    public function getDispOrder()
    {
        return $this->dispOrder;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SubscriptionType
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
     * Set publicAllowed
     *
     * @param boolean $publicAllowed
     * @return SubscriptionType
     */
    public function setPublicAllowed($publicAllowed)
    {
        $this->publicAllowed = $publicAllowed;

        return $this;
    }

    /**
     * Get publicAllowed
     *
     * @return boolean 
     */
    public function getPublicAllowed()
    {
        return $this->publicAllowed;
    }
}
