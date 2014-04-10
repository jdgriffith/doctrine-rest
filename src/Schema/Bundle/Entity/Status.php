<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status
 *
 * @ORM\Table(name="status", indexes={@ORM\Index(name="IDX_7B00651C7597D3FE", columns={"member_id"}), @ORM\Index(name="IDX_7B00651CD182060A", columns={"prospect_id"}), @ORM\Index(name="IDX_7B00651CCD9CFB16", columns={"status_type_id"})})
 * @ORM\Entity
 */
class Status
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
     * @ORM\Column(name="status_datetime", type="datetime", nullable=true)
     */
    private $statusDatetime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="status_from_date", type="datetime", nullable=true)
     */
    private $statusFromDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="status_thru_date", type="datetime", nullable=true)
     */
    private $statusThruDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="from_date", type="datetime", nullable=true)
     */
    private $fromDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="thru_date", type="datetime", nullable=true)
     */
    private $thruDate;

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
     * @var \StatusType
     *
     * @ORM\ManyToOne(targetEntity="StatusType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_type_id", referencedColumnName="id")
     * })
     */
    private $statusType;

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
     * Set statusDatetime
     *
     * @param \DateTime $statusDatetime
     * @return Status
     */
    public function setStatusDatetime($statusDatetime)
    {
        $this->statusDatetime = $statusDatetime;

        return $this;
    }

    /**
     * Get statusDatetime
     *
     * @return \DateTime 
     */
    public function getStatusDatetime()
    {
        return $this->statusDatetime;
    }

    /**
     * Set statusFromDate
     *
     * @param \DateTime $statusFromDate
     * @return Status
     */
    public function setStatusFromDate($statusFromDate)
    {
        $this->statusFromDate = $statusFromDate;

        return $this;
    }

    /**
     * Get statusFromDate
     *
     * @return \DateTime 
     */
    public function getStatusFromDate()
    {
        return $this->statusFromDate;
    }

    /**
     * Set statusThruDate
     *
     * @param \DateTime $statusThruDate
     * @return Status
     */
    public function setStatusThruDate($statusThruDate)
    {
        $this->statusThruDate = $statusThruDate;

        return $this;
    }

    /**
     * Get statusThruDate
     *
     * @return \DateTime 
     */
    public function getStatusThruDate()
    {
        return $this->statusThruDate;
    }

    /**
     * Set fromDate
     *
     * @param \DateTime $fromDate
     * @return Status
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * Get fromDate
     *
     * @return \DateTime 
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Set thruDate
     *
     * @param \DateTime $thruDate
     * @return Status
     */
    public function setThruDate($thruDate)
    {
        $this->thruDate = $thruDate;

        return $this;
    }

    /**
     * Get thruDate
     *
     * @return \DateTime 
     */
    public function getThruDate()
    {
        return $this->thruDate;
    }

    /**
     * Set member
     *
     * @param \Schema\Bundle\Entity\Member $member
     * @return Status
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
     * Set statusType
     *
     * @param \Schema\Bundle\Entity\StatusType $statusType
     * @return Status
     */
    public function setStatusType(\Schema\Bundle\Entity\StatusType $statusType = null)
    {
        $this->statusType = $statusType;

        return $this;
    }

    /**
     * Get statusType
     *
     * @return \Schema\Bundle\Entity\StatusType 
     */
    public function getStatusType()
    {
        return $this->statusType;
    }

    /**
     * Set prospect
     *
     * @param \Schema\Bundle\Entity\Prospect $prospect
     * @return Status
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
