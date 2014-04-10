<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LegislativeDistrict
 *
 * @ORM\Table(name="legislative_district")
 * @ORM\Entity
 */
class LegislativeDistrict
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
     * @ORM\Column(name="type_code", type="string", length=1, nullable=true)
     */
    private $typeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=3, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;



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
     * @return LegislativeDistrict
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
     * Set typeCode
     *
     * @param string $typeCode
     * @return LegislativeDistrict
     */
    public function setTypeCode($typeCode)
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Get typeCode
     *
     * @return string 
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return LegislativeDistrict
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return LegislativeDistrict
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
}
