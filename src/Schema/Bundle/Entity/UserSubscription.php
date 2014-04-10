<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSubscription
 *
 * @ORM\Table(name="user_subscription", indexes={@ORM\Index(name="IDX_230A18D17597D3FE", columns={"member_id"}), @ORM\Index(name="IDX_230A18D1D182060A", columns={"prospect_id"})})
 * @ORM\Entity
 */
class UserSubscription
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
     * @ORM\Column(name="subscription_type", type="integer", nullable=true)
     */
    private $subscriptionType;

    /**
     * @var \Member
     *
     * @ORM\ManyToOne(targetEntity="Member")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     * })
     */
    private $member;

    /**
     * @var \Prospect
     *
     * @ORM\ManyToOne(targetEntity="Prospect")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prospect_id", referencedColumnName="id")
     * })
     */
    private $prospect;



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
     * Set subscriptionType
     *
     * @param integer $subscriptionType
     * @return UserSubscription
     */
    public function setSubscriptionType($subscriptionType)
    {
        $this->subscriptionType = $subscriptionType;

        return $this;
    }

    /**
     * Get subscriptionType
     *
     * @return integer 
     */
    public function getSubscriptionType()
    {
        return $this->subscriptionType;
    }

    /**
     * Set member
     *
     * @param \Schema\Bundle\Entity\Member $member
     * @return UserSubscription
     */
    public function setMember(\Schema\Bundle\Entity\Member $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \Schema\Bundle\Entity\Member 
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set prospect
     *
     * @param \Schema\Bundle\Entity\Prospect $prospect
     * @return UserSubscription
     */
    public function setProspect(\Schema\Bundle\Entity\Prospect $prospect = null)
    {
        $this->prospect = $prospect;

        return $this;
    }

    /**
     * Get prospect
     *
     * @return \Schema\Bundle\Entity\Prospect 
     */
    public function getProspect()
    {
        return $this->prospect;
    }
}
