<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusHistory
 *
 * @ORM\Table(name="status_history")
 * @ORM\Entity
 */
class StatusHistory
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
     * @ORM\Column(name="member_id", type="integer", nullable=true)
     */
    private $memberId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="status_date", type="datetime", nullable=true)
     */
    private $statusDate;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=100, nullable=true)
     */
    private $reason;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="first_payment_date", type="datetime", nullable=true)
     */
    private $firstPaymentDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="recorded_date", type="datetime", nullable=true)
     */
    private $recordedDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_user_id", type="integer", nullable=true)
     */
    private $updatedUserId;



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
     * Set memberId
     *
     * @param integer $memberId
     * @return StatusHistory
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get memberId
     *
     * @return integer 
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return StatusHistory
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set statusDate
     *
     * @param \DateTime $statusDate
     * @return StatusHistory
     */
    public function setStatusDate($statusDate)
    {
        $this->statusDate = $statusDate;

        return $this;
    }

    /**
     * Get statusDate
     *
     * @return \DateTime 
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return StatusHistory
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set firstPaymentDate
     *
     * @param \DateTime $firstPaymentDate
     * @return StatusHistory
     */
    public function setFirstPaymentDate($firstPaymentDate)
    {
        $this->firstPaymentDate = $firstPaymentDate;

        return $this;
    }

    /**
     * Get firstPaymentDate
     *
     * @return \DateTime 
     */
    public function getFirstPaymentDate()
    {
        return $this->firstPaymentDate;
    }

    /**
     * Set recordedDate
     *
     * @param \DateTime $recordedDate
     * @return StatusHistory
     */
    public function setRecordedDate($recordedDate)
    {
        $this->recordedDate = $recordedDate;

        return $this;
    }

    /**
     * Get recordedDate
     *
     * @return \DateTime 
     */
    public function getRecordedDate()
    {
        return $this->recordedDate;
    }

    /**
     * Set updatedUserId
     *
     * @param integer $updatedUserId
     * @return StatusHistory
     */
    public function setUpdatedUserId($updatedUserId)
    {
        $this->updatedUserId = $updatedUserId;

        return $this;
    }

    /**
     * Get updatedUserId
     *
     * @return integer 
     */
    public function getUpdatedUserId()
    {
        return $this->updatedUserId;
    }
}
