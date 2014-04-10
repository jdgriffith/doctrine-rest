<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberStatusHistory
 *
 * @ORM\Table(name="member_status_history", indexes={@ORM\Index(name="IDX_CB87DE7D7597D3FE", columns={"member_id"}), @ORM\Index(name="IDX_CB87DE7D6DE5EE7F", columns={"member_status_type"}), @ORM\Index(name="IDX_CB87DE7D5D5A2101", columns={"local_id"}), @ORM\Index(name="IDX_CB87DE7DDC058279", columns={"payment_type_id"})})
 * @ORM\Entity
 */
class MemberStatusHistory
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \Local
     *
     * @ORM\ManyToOne(targetEntity="Local")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="local_id", referencedColumnName="id")
     * })
     */
    private $local;

    /**
     * @var \MemberStatusType
     *
     * @ORM\ManyToOne(targetEntity="MemberStatusType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_status_type", referencedColumnName="id")
     * })
     */
    private $memberStatusType;

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
     * @var \PaymentType
     *
     * @ORM\ManyToOne(targetEntity="PaymentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_type_id", referencedColumnName="id")
     * })
     */
    private $paymentType;



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
     * Set date
     *
     * @param \DateTime $date
     * @return MemberStatusHistory
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
     * Set local
     *
     * @param \Schema\Bundle\Entity\Local $local
     * @return MemberStatusHistory
     */
    public function setLocal(\Schema\Bundle\Entity\Local $local = null)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return \Schema\Bundle\Entity\Local 
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set memberStatusType
     *
     * @param \Schema\Bundle\Entity\MemberStatusType $memberStatusType
     * @return MemberStatusHistory
     */
    public function setMemberStatusType(\Schema\Bundle\Entity\MemberStatusType $memberStatusType = null)
    {
        $this->memberStatusType = $memberStatusType;

        return $this;
    }

    /**
     * Get memberStatusType
     *
     * @return \Schema\Bundle\Entity\MemberStatusType 
     */
    public function getMemberStatusType()
    {
        return $this->memberStatusType;
    }

    /**
     * Set member
     *
     * @param \Schema\Bundle\Entity\Member $member
     * @return MemberStatusHistory
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
     * Set paymentType
     *
     * @param \Schema\Bundle\Entity\PaymentType $paymentType
     * @return MemberStatusHistory
     */
    public function setPaymentType(\Schema\Bundle\Entity\PaymentType $paymentType = null)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return \Schema\Bundle\Entity\PaymentType 
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }
}
