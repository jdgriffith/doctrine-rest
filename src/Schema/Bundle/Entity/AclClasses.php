<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclClasses
 *
 * @ORM\Table(name="acl_classes", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_69DD750638A36066", columns={"class_type"})})
 * @ORM\Entity
 */
class AclClasses
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
     * @ORM\Column(name="class_type", type="string", length=200, nullable=false)
     */
    private $classType;



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
     * Set classType
     *
     * @param string $classType
     * @return AclClasses
     */
    public function setClassType($classType)
    {
        $this->classType = $classType;

        return $this;
    }

    /**
     * Get classType
     *
     * @return string 
     */
    public function getClassType()
    {
        return $this->classType;
    }
}
