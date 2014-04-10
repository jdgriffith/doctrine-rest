<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonLink
 *
 * @ORM\Table(name="person_link")
 * @ORM\Entity
 */
class PersonLink
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
     * @ORM\Column(name="person_additional_id", type="integer", nullable=true)
     */
    private $personAdditionalId;

    /**
     * @var string
     *
     * @ORM\Column(name="person_type_code", type="string", length=5, nullable=true)
     */
    private $personTypeCode;



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
     * Set personAdditionalId
     *
     * @param integer $personAdditionalId
     * @return PersonLink
     */
    public function setPersonAdditionalId($personAdditionalId)
    {
        $this->personAdditionalId = $personAdditionalId;

        return $this;
    }

    /**
     * Get personAdditionalId
     *
     * @return integer 
     */
    public function getPersonAdditionalId()
    {
        return $this->personAdditionalId;
    }

    /**
     * Set personTypeCode
     *
     * @param string $personTypeCode
     * @return PersonLink
     */
    public function setPersonTypeCode($personTypeCode)
    {
        $this->personTypeCode = $personTypeCode;

        return $this;
    }

    /**
     * Get personTypeCode
     *
     * @return string 
     */
    public function getPersonTypeCode()
    {
        return $this->personTypeCode;
    }
}
