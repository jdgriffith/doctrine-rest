<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * District
 *
 * @ORM\Table(name="district")
 * @ORM\Entity
 */
class District
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
     * @ORM\Column(name="state_census_code", type="string", length=2, nullable=true)
     */
    private $stateCensusCode;

    /**
     * @var string
     *
     * @ORM\Column(name="district_type_code", type="string", length=1, nullable=true)
     */
    private $districtTypeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="district_code", type="string", length=3, nullable=true)
     */
    private $districtCode;

    /**
     * @var string
     *
     * @ORM\Column(name="district_name", type="string", length=50, nullable=true)
     */
    private $districtName;



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
     * Set stateCensusCode
     *
     * @param string $stateCensusCode
     * @return District
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
     * Set districtTypeCode
     *
     * @param string $districtTypeCode
     * @return District
     */
    public function setDistrictTypeCode($districtTypeCode)
    {
        $this->districtTypeCode = $districtTypeCode;

        return $this;
    }

    /**
     * Get districtTypeCode
     *
     * @return string 
     */
    public function getDistrictTypeCode()
    {
        return $this->districtTypeCode;
    }

    /**
     * Set districtCode
     *
     * @param string $districtCode
     * @return District
     */
    public function setDistrictCode($districtCode)
    {
        $this->districtCode = $districtCode;

        return $this;
    }

    /**
     * Get districtCode
     *
     * @return string 
     */
    public function getDistrictCode()
    {
        return $this->districtCode;
    }

    /**
     * Set districtName
     *
     * @param string $districtName
     * @return District
     */
    public function setDistrictName($districtName)
    {
        $this->districtName = $districtName;

        return $this;
    }

    /**
     * Get districtName
     *
     * @return string 
     */
    public function getDistrictName()
    {
        return $this->districtName;
    }
}
