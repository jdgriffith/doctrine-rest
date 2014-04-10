<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberAdditionsDeletions
 *
 * @ORM\Table(name="member_additions_deletions", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_267B8ADE7597D3FE", columns={"member_id"})})
 * @ORM\Entity
 */
class MemberAdditionsDeletions
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
     * @ORM\Column(name="activity_date", type="datetime", nullable=true)
     */
    private $activityDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="accepted", type="boolean", nullable=true)
     */
    private $accepted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rejected", type="boolean", nullable=true)
     */
    private $rejected;

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
     * Set activityDate
     *
     * @param \DateTime $activityDate
     * @return MemberAdditionsDeletions
     */
    public function setActivityDate($activityDate)
    {
        $this->activityDate = $activityDate;

        return $this;
    }

    /**
     * Get activityDate
     *
     * @return \DateTime 
     */
    public function getActivityDate()
    {
        return $this->activityDate;
    }

    /**
     * Set accepted
     *
     * @param boolean $accepted
     * @return MemberAdditionsDeletions
     */
    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;

        return $this;
    }

    /**
     * Get accepted
     *
     * @return boolean 
     */
    public function getAccepted()
    {
        return $this->accepted;
    }

    /**
     * Set rejected
     *
     * @param boolean $rejected
     * @return MemberAdditionsDeletions
     */
    public function setRejected($rejected)
    {
        $this->rejected = $rejected;

        return $this;
    }

    /**
     * Get rejected
     *
     * @return boolean 
     */
    public function getRejected()
    {
        return $this->rejected;
    }

    /**
     * Set member
     *
     * @param \Schema\Bundle\Entity\Member $member
     * @return MemberAdditionsDeletions
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