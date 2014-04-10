<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Report
 *
 * @ORM\Table(name="report", indexes={@ORM\Index(name="fk_schedule_report_idx", columns={"schedule_id"}), @ORM\Index(name="fk_notification_idx", columns={"notification_id"}), @ORM\Index(name="fk_report_type_report_idx", columns={"report_type_id"}), @ORM\Index(name="IDX_C42F77847E3C61F9", columns={"owner_id"})})
 * @ORM\Entity
 */
class Report
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var array
     *
     * @ORM\Column(name="fields", type="array", nullable=true)
     */
    private $fields;

    /**
     * @var array
     *
     * @ORM\Column(name="calculated_fields", type="array", nullable=true)
     */
    private $calculatedFields;

    /**
     * @var array
     *
     * @ORM\Column(name="filters", type="array", nullable=true)
     */
    private $filters;

    /**
     * @var string
     *
     * @ORM\Column(name="main_entity", type="string", length=255, nullable=false)
     */
    private $mainEntity;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     * })
     */
    private $owner;

    /**
     * @var \Notification
     *
     * @ORM\ManyToOne(targetEntity="Notification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="notification_id", referencedColumnName="id")
     * })
     */
    private $notification;

    /**
     * @var \ReportType
     *
     * @ORM\ManyToOne(targetEntity="ReportType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="report_type_id", referencedColumnName="id")
     * })
     */
    private $reportType;

    /**
     * @var \Schedule
     *
     * @ORM\ManyToOne(targetEntity="Schedule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="schedule_id", referencedColumnName="id")
     * })
     */
    private $schedule;



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
     * @return Report
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
     * Set fields
     *
     * @param array $fields
     * @return Report
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Get fields
     *
     * @return array 
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set calculatedFields
     *
     * @param array $calculatedFields
     * @return Report
     */
    public function setCalculatedFields($calculatedFields)
    {
        $this->calculatedFields = $calculatedFields;

        return $this;
    }

    /**
     * Get calculatedFields
     *
     * @return array 
     */
    public function getCalculatedFields()
    {
        return $this->calculatedFields;
    }

    /**
     * Set filters
     *
     * @param array $filters
     * @return Report
     */
    public function setFilters($filters)
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * Get filters
     *
     * @return array 
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Set mainEntity
     *
     * @param string $mainEntity
     * @return Report
     */
    public function setMainEntity($mainEntity)
    {
        $this->mainEntity = $mainEntity;

        return $this;
    }

    /**
     * Get mainEntity
     *
     * @return string 
     */
    public function getMainEntity()
    {
        return $this->mainEntity;
    }

    /**
     * Set owner
     *
     * @param \Schema\Bundle\Entity\FosUserUser $owner
     * @return Report
     */
    public function setOwner(\Schema\Bundle\Entity\FosUserUser $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return \Schema\Bundle\Entity\FosUserUser 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set notification
     *
     * @param \Schema\Bundle\Entity\Notification $notification
     * @return Report
     */
    public function setNotification(\Schema\Bundle\Entity\Notification $notification = null)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * Get notification
     *
     * @return \Schema\Bundle\Entity\Notification 
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Set reportType
     *
     * @param \Schema\Bundle\Entity\ReportType $reportType
     * @return Report
     */
    public function setReportType(\Schema\Bundle\Entity\ReportType $reportType = null)
    {
        $this->reportType = $reportType;

        return $this;
    }

    /**
     * Get reportType
     *
     * @return \Schema\Bundle\Entity\ReportType 
     */
    public function getReportType()
    {
        return $this->reportType;
    }

    /**
     * Set schedule
     *
     * @param \Schema\Bundle\Entity\Schedule $schedule
     * @return Report
     */
    public function setSchedule(\Schema\Bundle\Entity\Schedule $schedule = null)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Get schedule
     *
     * @return \Schema\Bundle\Entity\Schedule 
     */
    public function getSchedule()
    {
        return $this->schedule;
    }
}
