<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CensusCode
 *
 * @ORM\Table(name="census_code")
 * @ORM\Entity
 */
class CensusCode
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
     * @ORM\Column(name="state_census_code", type="string", length=225, nullable=true)
     */
    private $stateCensusCode;

    /**
     * @var string
     *
     * @ORM\Column(name="country_type_code", type="string", length=225, nullable=true)
     */
    private $countryTypeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="state_country_name", type="string", length=225, nullable=true)
     */
    private $stateCountryName;



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
     * @return CensusCode
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
     * Set countryTypeCode
     *
     * @param string $countryTypeCode
     * @return CensusCode
     */
    public function setCountryTypeCode($countryTypeCode)
    {
        $this->countryTypeCode = $countryTypeCode;

        return $this;
    }

    /**
     * Get countryTypeCode
     *
     * @return string 
     */
    public function getCountryTypeCode()
    {
        return $this->countryTypeCode;
    }

    /**
     * Set stateCountryName
     *
     * @param string $stateCountryName
     * @return CensusCode
     */
    public function setStateCountryName($stateCountryName)
    {
        $this->stateCountryName = $stateCountryName;

        return $this;
    }

    /**
     * Get stateCountryName
     *
     * @return string 
     */
    public function getStateCountryName()
    {
        return $this->stateCountryName;
    }
}
