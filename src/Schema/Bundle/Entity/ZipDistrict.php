<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZipDistrict
 *
 * @ORM\Table(name="zip_district")
 * @ORM\Entity
 */
class ZipDistrict
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
     * @ORM\Column(name="zip", type="string", length=5, nullable=true)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_plus_four", type="string", length=4, nullable=true)
     */
    private $zipPlusFour;

    /**
     * @var integer
     *
     * @ORM\Column(name="senatorial_district_id", type="integer", nullable=true)
     */
    private $senatorialDistrictId;

    /**
     * @var integer
     *
     * @ORM\Column(name="congressional_district_id", type="integer", nullable=true)
     */
    private $congressionalDistrictId;

    /**
     * @var integer
     *
     * @ORM\Column(name="state_upper_legislature_district_id", type="integer", nullable=true)
     */
    private $stateUpperLegislatureDistrictId;

    /**
     * @var integer
     *
     * @ORM\Column(name="state_lower_legislature_district_id", type="integer", nullable=true)
     */
    private $stateLowerLegislatureDistrictId;

    /**
     * @var integer
     *
     * @ORM\Column(name="state_governor_id", type="integer", nullable=true)
     */
    private $stateGovernorId;

    /**
     * @var string
     *
     * @ORM\Column(name="county_census_code", type="string", length=3, nullable=true)
     */
    private $countyCensusCode;

    /**
     * @var string
     *
     * @ORM\Column(name="centroid_type", type="string", length=1, nullable=true)
     */
    private $centroidType;

    /**
     * @var string
     *
     * @ORM\Column(name="record_type", type="string", length=2, nullable=true)
     */
    private $recordType;

    /**
     * @var string
     *
     * @ORM\Column(name="peculiarity_flag", type="string", length=1, nullable=true)
     */
    private $peculiarityFlag;

    /**
     * @var string
     *
     * @ORM\Column(name="state_census_code", type="string", length=255, nullable=true)
     */
    private $stateCensusCode;



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
     * Set zip
     *
     * @param string $zip
     * @return ZipDistrict
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set zipPlusFour
     *
     * @param string $zipPlusFour
     * @return ZipDistrict
     */
    public function setZipPlusFour($zipPlusFour)
    {
        $this->zipPlusFour = $zipPlusFour;

        return $this;
    }

    /**
     * Get zipPlusFour
     *
     * @return string 
     */
    public function getZipPlusFour()
    {
        return $this->zipPlusFour;
    }

    /**
     * Set senatorialDistrictId
     *
     * @param integer $senatorialDistrictId
     * @return ZipDistrict
     */
    public function setSenatorialDistrictId($senatorialDistrictId)
    {
        $this->senatorialDistrictId = $senatorialDistrictId;

        return $this;
    }

    /**
     * Get senatorialDistrictId
     *
     * @return integer 
     */
    public function getSenatorialDistrictId()
    {
        return $this->senatorialDistrictId;
    }

    /**
     * Set congressionalDistrictId
     *
     * @param integer $congressionalDistrictId
     * @return ZipDistrict
     */
    public function setCongressionalDistrictId($congressionalDistrictId)
    {
        $this->congressionalDistrictId = $congressionalDistrictId;

        return $this;
    }

    /**
     * Get congressionalDistrictId
     *
     * @return integer 
     */
    public function getCongressionalDistrictId()
    {
        return $this->congressionalDistrictId;
    }

    /**
     * Set stateUpperLegislatureDistrictId
     *
     * @param integer $stateUpperLegislatureDistrictId
     * @return ZipDistrict
     */
    public function setStateUpperLegislatureDistrictId($stateUpperLegislatureDistrictId)
    {
        $this->stateUpperLegislatureDistrictId = $stateUpperLegislatureDistrictId;

        return $this;
    }

    /**
     * Get stateUpperLegislatureDistrictId
     *
     * @return integer 
     */
    public function getStateUpperLegislatureDistrictId()
    {
        return $this->stateUpperLegislatureDistrictId;
    }

    /**
     * Set stateLowerLegislatureDistrictId
     *
     * @param integer $stateLowerLegislatureDistrictId
     * @return ZipDistrict
     */
    public function setStateLowerLegislatureDistrictId($stateLowerLegislatureDistrictId)
    {
        $this->stateLowerLegislatureDistrictId = $stateLowerLegislatureDistrictId;

        return $this;
    }

    /**
     * Get stateLowerLegislatureDistrictId
     *
     * @return integer 
     */
    public function getStateLowerLegislatureDistrictId()
    {
        return $this->stateLowerLegislatureDistrictId;
    }

    /**
     * Set stateGovernorId
     *
     * @param integer $stateGovernorId
     * @return ZipDistrict
     */
    public function setStateGovernorId($stateGovernorId)
    {
        $this->stateGovernorId = $stateGovernorId;

        return $this;
    }

    /**
     * Get stateGovernorId
     *
     * @return integer 
     */
    public function getStateGovernorId()
    {
        return $this->stateGovernorId;
    }

    /**
     * Set countyCensusCode
     *
     * @param string $countyCensusCode
     * @return ZipDistrict
     */
    public function setCountyCensusCode($countyCensusCode)
    {
        $this->countyCensusCode = $countyCensusCode;

        return $this;
    }

    /**
     * Get countyCensusCode
     *
     * @return string 
     */
    public function getCountyCensusCode()
    {
        return $this->countyCensusCode;
    }

    /**
     * Set centroidType
     *
     * @param string $centroidType
     * @return ZipDistrict
     */
    public function setCentroidType($centroidType)
    {
        $this->centroidType = $centroidType;

        return $this;
    }

    /**
     * Get centroidType
     *
     * @return string 
     */
    public function getCentroidType()
    {
        return $this->centroidType;
    }

    /**
     * Set recordType
     *
     * @param string $recordType
     * @return ZipDistrict
     */
    public function setRecordType($recordType)
    {
        $this->recordType = $recordType;

        return $this;
    }

    /**
     * Get recordType
     *
     * @return string 
     */
    public function getRecordType()
    {
        return $this->recordType;
    }

    /**
     * Set peculiarityFlag
     *
     * @param string $peculiarityFlag
     * @return ZipDistrict
     */
    public function setPeculiarityFlag($peculiarityFlag)
    {
        $this->peculiarityFlag = $peculiarityFlag;

        return $this;
    }

    /**
     * Get peculiarityFlag
     *
     * @return string 
     */
    public function getPeculiarityFlag()
    {
        return $this->peculiarityFlag;
    }

    /**
     * Set stateCensusCode
     *
     * @param string $stateCensusCode
     * @return ZipDistrict
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
}
