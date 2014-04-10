<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LatePayments
 *
 * @ORM\Table(name="late_payments", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_FCE421F97597D3FE", columns={"member_id"})})
 * @ORM\Entity
 */
class LatePayments
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
     * @ORM\Column(name="old_reason", type="string", length=45, nullable=true)
     */
    private $oldReason;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sent_date", type="datetime", nullable=true)
     */
    private $sentDate;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set oldReason
     *
     * @param string $oldReason
     * @return LatePayments
     */
    public function setOldReason($oldReason)
    {
        $this->oldReason = $oldReason;

        return $this;
    }

    /**
     * Get oldReason
     *
     * @return string 
     */
    public function getOldReason()
    {
        return $this->oldReason;
    }

    /**
     * Set sentDate
     *
     * @param \DateTime $sentDate
     * @return LatePayments
     */
    public function setSentDate($sentDate)
    {
        $this->sentDate = $sentDate;

        return $this;
    }

    /**
     * Get sentDate
     *
     * @return \DateTime 
     */
    public function getSentDate()
    {
        return $this->sentDate;
    }

    /**
     * Set member
     *
     * @param \Schema\Bundle\Entity\Member $member
     * @return LatePayments
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
}
