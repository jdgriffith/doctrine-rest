<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Committee
 *
 * @ORM\Table(name="committee")
 * @ORM\Entity
 */
class Committee
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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="state_census_code", type="string", length=255, nullable=true)
     */
    private $stateCensusCode;

    /**
     * @var string
     *
     * @ORM\Column(name="district_committee_type_code", type="string", length=255, nullable=true)
     */
    private $districtCommitteeTypeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_code", type="string", length=255, nullable=true)
     */
    private $committeeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_name", type="string", length=255, nullable=true)
     */
    private $committeeName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Legislator", mappedBy="committee")
     */
    private $legislator;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->legislator = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * @return Committee
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
     * @return Committee
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
     * Set stateCensusCode
     *
     * @param string $stateCensusCode
     * @return Committee
     */
    public function setStateCensusCode($stateCensusCode)
    {
        $this->stateCensusCode = $stateCensusCode;

        return $this;
    }

    /**
     * Get stateCensusCode
     *
     * @return string 
     */
    public function getStateCensusCode()
    {
        return $this->stateCensusCode;
    }

    /**
     * Set districtCommitteeTypeCode
     *
     * @param string $districtCommitteeTypeCode
     * @return Committee
     */
    public function setDistrictCommitteeTypeCode($districtCommitteeTypeCode)
    {
        $this->districtCommitteeTypeCode = $districtCommitteeTypeCode;

        return $this;
    }

    /**
     * Get districtCommitteeTypeCode
     *
     * @return string 
     */
    public function getDistrictCommitteeTypeCode()
    {
        return $this->districtCommitteeTypeCode;
    }

    /**
     * Set committeeCode
     *
     * @param string $committeeCode
     * @return Committee
     */
    public function setCommitteeCode($committeeCode)
    {
        $this->committeeCode = $committeeCode;

        return $this;
    }

    /**
     * Get committeeCode
     *
     * @return string 
     */
    public function getCommitteeCode()
    {
        return $this->committeeCode;
    }

    /**
     * Set committeeName
     *
     * @param string $committeeName
     * @return Committee
     */
    public function setCommitteeName($committeeName)
    {
        $this->committeeName = $committeeName;

        return $this;
    }

    /**
     * Get committeeName
     *
     * @return string 
     */
    public function getCommitteeName()
    {
        return $this->committeeName;
    }

    /**
     * Add legislator
     *
     * @param \Schema\Bundle\Entity\Legislator $legislator
     * @return Committee
     */
    public function addLegislator(\Schema\Bundle\Entity\Legislator $legislator)
    {
        $this->legislator[] = $legislator;

        return $this;
    }

    /**
     * Remove legislator
     *
     * @param \Schema\Bundle\Entity\Legislator $legislator
     */
    public function removeLegislator(\Schema\Bundle\Entity\Legislator $legislator)
    {
        $this->legislator->removeElement($legislator);
    }

    /**
     * Get legislator
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLegislator()
    {
        return $this->legislator;
    }
}
