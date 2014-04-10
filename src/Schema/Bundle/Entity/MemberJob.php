<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberJob
 *
 * @ORM\Table(name="member_job", indexes={@ORM\Index(name="IDX_CA7CC0A37597D3FE", columns={"member_id"}), @ORM\Index(name="IDX_CA7CC0A38907B2A", columns={"member_officer_type_id"})})
 * @ORM\Entity
 */
class MemberJob
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
     * @ORM\Column(name="title", type="string", length=60, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=100, nullable=true)
     */
    private $department;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_date", type="datetime", nullable=true)
     */
    private $beginDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

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
     * @var \MemberOfficerType
     *
     * @ORM\ManyToOne(targetEntity="MemberOfficerType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_officer_type_id", referencedColumnName="id")
     * })
     */
    private $memberOfficerType;



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
     * Set title
     *
     * @param string $title
     * @return MemberJob
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return MemberJob
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set beginDate
     *
     * @param \DateTime $beginDate
     * @return MemberJob
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get beginDate
     *
     * @return \DateTime 
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return MemberJob
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set member
     *
     * @param \Schema\Bundle\Entity\Member $member
     * @return MemberJob
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
     * Set memberOfficerType
     *
     * @param \Schema\Bundle\Entity\MemberOfficerType $memberOfficerType
     * @return MemberJob
     */
    public function setMemberOfficerType(\Schema\Bundle\Entity\MemberOfficerType $memberOfficerType = null)
    {
        $this->memberOfficerType = $memberOfficerType;

        return $this;
    }

    /**
     * Get memberOfficerType
     *
     * @return \Schema\Bundle\Entity\MemberOfficerType 
     */
    public function getMemberOfficerType()
    {
        return $this->memberOfficerType;
    }
}
