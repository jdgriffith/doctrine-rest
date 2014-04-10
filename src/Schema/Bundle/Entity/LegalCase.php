<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LegalCase
 *
 * @ORM\Table(name="legal_case", indexes={@ORM\Index(name="IDX_557377B37597D3FE", columns={"member_id"}), @ORM\Index(name="IDX_557377B34C19F89F", columns={"lawyer_id"})})
 * @ORM\Entity
 */
class LegalCase
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
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="negotiated_cap", type="integer", nullable=true)
     */
    private $negotiatedCap;

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
     * Set name
     *
     * @param string $name
     * @return LegalCase
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
     * @return LegalCase
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return LegalCase
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return LegalCase
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
     * Set negotiatedCap
     *
     * @param integer $negotiatedCap
     * @return LegalCase
     */
    public function setNegotiatedCap($negotiatedCap)
    {
        $this->negotiatedCap = $negotiatedCap;

        return $this;
    }

    /**
     * Get negotiatedCap
     *
     * @return integer 
     */
    public function getNegotiatedCap()
    {
        return $this->negotiatedCap;
    }

    /**
     * Set lawyer
     *
     * @param \Schema\Bundle\Entity\Lawyer $lawyer
     * @return LegalCase
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

    /**
     * Set member
     *
     * @param \Schema\Bundle\Entity\Member $member
     * @return LegalCase
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
