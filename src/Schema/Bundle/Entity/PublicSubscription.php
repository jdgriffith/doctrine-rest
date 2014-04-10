<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicSubscription
 *
 * @ORM\Table(name="public_subscription")
 * @ORM\Entity
 */
class PublicSubscription
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
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="subscription_id_code", type="string", length=1, nullable=true)
     */
    private $subscriptionIdCode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=true)
     */
    private $dateAdded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_removed", type="datetime", nullable=true)
     */
    private $dateRemoved;

    /**
     * @var integer
     *
     * @ORM\Column(name="address_id", type="integer", nullable=true)
     */
    private $addressId;

    /**
     * @var string
     *
     * @ORM\Column(name="agency_text", type="text", nullable=true)
     */
    private $agencyText;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;



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
     * Set email
     *
     * @param string $email
     * @return PublicSubscription
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set subscriptionIdCode
     *
     * @param string $subscriptionIdCode
     * @return PublicSubscription
     */
    public function setSubscriptionIdCode($subscriptionIdCode)
    {
        $this->subscriptionIdCode = $subscriptionIdCode;

        return $this;
    }

    /**
     * Get subscriptionIdCode
     *
     * @return string 
     */
    public function getSubscriptionIdCode()
    {
        return $this->subscriptionIdCode;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return PublicSubscription
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     * @return PublicSubscription
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime 
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateRemoved
     *
     * @param \DateTime $dateRemoved
     * @return PublicSubscription
     */
    public function setDateRemoved($dateRemoved)
    {
        $this->dateRemoved = $dateRemoved;

        return $this;
    }

    /**
     * Get dateRemoved
     *
     * @return \DateTime 
     */
    public function getDateRemoved()
    {
        return $this->dateRemoved;
    }

    /**
     * Set addressId
     *
     * @param integer $addressId
     * @return PublicSubscription
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Get addressId
     *
     * @return integer 
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set agencyText
     *
     * @param string $agencyText
     * @return PublicSubscription
     */
    public function setAgencyText($agencyText)
    {
        $this->agencyText = $agencyText;

        return $this;
    }

    /**
     * Get agencyText
     *
     * @return string 
     */
    public function getAgencyText()
    {
        return $this->agencyText;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PublicSubscription
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
}
