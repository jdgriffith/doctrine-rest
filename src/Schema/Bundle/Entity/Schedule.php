<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schedule
 *
 * @ORM\Table(name="schedule", indexes={@ORM\Index(name="fk_schedule_type_schedule_idx", columns={"schedule_type_id"})})
 * @ORM\Entity
 */
class Schedule
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=255, nullable=true)
     */
    private $time;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_recurring", type="boolean", nullable=false)
     */
    private $isRecurring;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_from", type="datetime", nullable=false)
     */
    private $startFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_at", type="datetime", nullable=true)
     */
    private $endAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_scheduled_at", type="datetime", nullable=true)
     */
    private $lastScheduledAt;

    /**
     * @var \ScheduleType
     *
     * @ORM\ManyToOne(targetEntity="ScheduleType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="schedule_type_id", referencedColumnName="id")
     * })
     */
    private $scheduleType;



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
     * @return Schedule
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
     * Set description
     *
     * @param string $description
     * @return Schedule
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
     * Set time
     *
     * @param string $time
     * @return Schedule
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set isRecurring
     *
     * @param boolean $isRecurring
     * @return Schedule
     */
    public function setIsRecurring($isRecurring)
    {
        $this->isRecurring = $isRecurring;

        return $this;
    }

    /**
     * Get isRecurring
     *
     * @return boolean 
     */
    public function getIsRecurring()
    {
        return $this->isRecurring;
    }

    /**
     * Set startFrom
     *
     * @param \DateTime $startFrom
     * @return Schedule
     */
    public function setStartFrom($startFrom)
    {
        $this->startFrom = $startFrom;

        return $this;
    }

    /**
     * Get startFrom
     *
     * @return \DateTime 
     */
    public function getStartFrom()
    {
        return $this->startFrom;
    }

    /**
     * Set endAt
     *
     * @param \DateTime $endAt
     * @return Schedule
     */
    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;

        return $this;
    }

    /**
     * Get endAt
     *
     * @return \DateTime 
     */
    public function getEndAt()
    {
        return $this->endAt;
    }

    /**
     * Set lastScheduledAt
     *
     * @param \DateTime $lastScheduledAt
     * @return Schedule
     */
    public function setLastScheduledAt($lastScheduledAt)
    {
        $this->lastScheduledAt = $lastScheduledAt;

        return $this;
    }

    /**
     * Get lastScheduledAt
     *
     * @return \DateTime 
     */
    public function getLastScheduledAt()
    {
        return $this->lastScheduledAt;
    }

    /**
     * Set scheduleType
     *
     * @param \Schema\Bundle\Entity\ScheduleType $scheduleType
     * @return Schedule
     */
    public function setScheduleType(\Schema\Bundle\Entity\ScheduleType $scheduleType = null)
    {
        $this->scheduleType = $scheduleType;

        return $this;
    }

    /**
     * Get scheduleType
     *
     * @return \Schema\Bundle\Entity\ScheduleType 
     */
    public function getScheduleType()
    {
        return $this->scheduleType;
    }
}
