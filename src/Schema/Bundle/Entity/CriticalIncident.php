<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CriticalIncident
 *
 * @ORM\Table(name="critical_incident", indexes={@ORM\Index(name="IDX_F3836034C19F89F", columns={"lawyer_id"})})
 * @ORM\Entity
 */
class CriticalIncident
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
     * @ORM\Column(name="involved_officer_id", type="integer", nullable=true)
     */
    private $involvedOfficerId;

    /**
     * @var string
     *
     * @ORM\Column(name="involved_officer_name", type="string", length=100, nullable=true)
     */
    private $involvedOfficerName;

    /**
     * @var integer
     *
     * @ORM\Column(name="cover_officer_id", type="integer", nullable=true)
     */
    private $coverOfficerId;

    /**
     * @var string
     *
     * @ORM\Column(name="cover_officer_name", type="string", length=100, nullable=true)
     */
    private $coverOfficerName;

    /**
     * @var string
     *
     * @ORM\Column(name="incident", type="text", nullable=true)
     */
    private $incident;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=45, nullable=true)
     */
    private $location;

    /**
     * @var boolean
     *
     * @ORM\Column(name="responded", type="boolean", nullable=true)
     */
    private $responded;

    /**
     * @var string
     *
     * @ORM\Column(name="tclose_id", type="string", length=45, nullable=true)
     */
    private $tcloseId;

    /**
     * @var string
     *
     * @ORM\Column(name="badge_number", type="string", length=45, nullable=true)
     */
    private $badgeNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=100, nullable=true)
     */
    private $department;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_occurred", type="datetime", nullable=true)
     */
    private $timeOccurred;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_responded", type="datetime", nullable=true)
     */
    private $timeResponded;

    /**
     * @var string
     *
     * @ORM\Column(name="involved_officer_number", type="string", length=15, nullable=true)
     */
    private $involvedOfficerNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="private", type="boolean", nullable=true)
     */
    private $private;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_cover_officer", type="boolean", nullable=true)
     */
    private $isCoverOfficer;

    /**
     * @var \Lawyer
     *
     * @ORM\ManyToOne(targetEntity="Lawyer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lawyer_id", referencedColumnName="id")
     * })
     */
    private $lawyer;



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
     * Set involvedOfficerId
     *
     * @param integer $involvedOfficerId
     * @return CriticalIncident
     */
    public function setInvolvedOfficerId($involvedOfficerId)
    {
        $this->involvedOfficerId = $involvedOfficerId;

        return $this;
    }

    /**
     * Get involvedOfficerId
     *
     * @return integer 
     */
    public function getInvolvedOfficerId()
    {
        return $this->involvedOfficerId;
    }

    /**
     * Set involvedOfficerName
     *
     * @param string $involvedOfficerName
     * @return CriticalIncident
     */
    public function setInvolvedOfficerName($involvedOfficerName)
    {
        $this->involvedOfficerName = $involvedOfficerName;

        return $this;
    }

    /**
     * Get involvedOfficerName
     *
     * @return string 
     */
    public function getInvolvedOfficerName()
    {
        return $this->involvedOfficerName;
    }

    /**
     * Set coverOfficerId
     *
     * @param integer $coverOfficerId
     * @return CriticalIncident
     */
    public function setCoverOfficerId($coverOfficerId)
    {
        $this->coverOfficerId = $coverOfficerId;

        return $this;
    }

    /**
     * Get coverOfficerId
     *
     * @return integer 
     */
    public function getCoverOfficerId()
    {
        return $this->coverOfficerId;
    }

    /**
     * Set coverOfficerName
     *
     * @param string $coverOfficerName
     * @return CriticalIncident
     */
    public function setCoverOfficerName($coverOfficerName)
    {
        $this->coverOfficerName = $coverOfficerName;

        return $this;
    }

    /**
     * Get coverOfficerName
     *
     * @return string 
     */
    public function getCoverOfficerName()
    {
        return $this->coverOfficerName;
    }

    /**
     * Set incident
     *
     * @param string $incident
     * @return CriticalIncident
     */
    public function setIncident($incident)
    {
        $this->incident = $incident;

        return $this;
    }

    /**
     * Get incident
     *
     * @return string 
     */
    public function getIncident()
    {
        return $this->incident;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return CriticalIncident
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set responded
     *
     * @param boolean $responded
     * @return CriticalIncident
     */
    public function setResponded($responded)
    {
        $this->responded = $responded;

        return $this;
    }

    /**
     * Get responded
     *
     * @return boolean 
     */
    public function getResponded()
    {
        return $this->responded;
    }

    /**
     * Set tcloseId
     *
     * @param string $tcloseId
     * @return CriticalIncident
     */
    public function setTcloseId($tcloseId)
    {
        $this->tcloseId = $tcloseId;

        return $this;
    }

    /**
     * Get tcloseId
     *
     * @return string 
     */
    public function getTcloseId()
    {
        return $this->tcloseId;
    }

    /**
     * Set badgeNumber
     *
     * @param string $badgeNumber
     * @return CriticalIncident
     */
    public function setBadgeNumber($badgeNumber)
    {
        $this->badgeNumber = $badgeNumber;

        return $this;
    }

    /**
     * Get badgeNumber
     *
     * @return string 
     */
    public function getBadgeNumber()
    {
        return $this->badgeNumber;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return CriticalIncident
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
     * Set timeOccurred
     *
     * @param \DateTime $timeOccurred
     * @return CriticalIncident
     */
    public function setTimeOccurred($timeOccurred)
    {
        $this->timeOccurred = $timeOccurred;

        return $this;
    }

    /**
     * Get timeOccurred
     *
     * @return \DateTime 
     */
    public function getTimeOccurred()
    {
        return $this->timeOccurred;
    }

    /**
     * Set timeResponded
     *
     * @param \DateTime $timeResponded
     * @return CriticalIncident
     */
    public function setTimeResponded($timeResponded)
    {
        $this->timeResponded = $timeResponded;

        return $this;
    }

    /**
     * Get timeResponded
     *
     * @return \DateTime 
     */
    public function getTimeResponded()
    {
        return $this->timeResponded;
    }

    /**
     * Set involvedOfficerNumber
     *
     * @param string $involvedOfficerNumber
     * @return CriticalIncident
     */
    public function setInvolvedOfficerNumber($involvedOfficerNumber)
    {
        $this->involvedOfficerNumber = $involvedOfficerNumber;

        return $this;
    }

    /**
     * Get involvedOfficerNumber
     *
     * @return string 
     */
    public function getInvolvedOfficerNumber()
    {
        return $this->involvedOfficerNumber;
    }

    /**
     * Set private
     *
     * @param boolean $private
     * @return CriticalIncident
     */
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Get private
     *
     * @return boolean 
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set isCoverOfficer
     *
     * @param boolean $isCoverOfficer
     * @return CriticalIncident
     */
    public function setIsCoverOfficer($isCoverOfficer)
    {
        $this->isCoverOfficer = $isCoverOfficer;

        return $this;
    }

    /**
     * Get isCoverOfficer
     *
     * @return boolean 
     */
    public function getIsCoverOfficer()
    {
        return $this->isCoverOfficer;
    }

    /**
     * Set lawyer
     *
     * @param \Schema\Bundle\Entity\Lawyer $lawyer
     * @return CriticalIncident
     */
    public function setLawyer(\Schema\Bundle\Entity\Lawyer $lawyer = null)
    {
        $this->lawyer = $lawyer;

        return $this;
    }

    /**
     * Get lawyer
     *
     * @return \Schema\Bundle\Entity\Lawyer 
     */
    public function getLawyer()
    {
        return $this->lawyer;
    }
}
