<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Local
 *
 * @ORM\Table(name="local", indexes={@ORM\Index(name="fk_region_local_idx", columns={"region_id"}), @ORM\Index(name="fk_payment_type_local_idx", columns={"payment_type_id"}), @ORM\Index(name="fk_employee_type_local_idx", columns={"employee_type_id"}), @ORM\Index(name="fk_charter_type_idx", columns={"charter_type_id"})})
 * @ORM\Entity
 */
class Local
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
     * @var boolean
     *
     * @ORM\Column(name="bargaining", type="boolean", nullable=true)
     */
    private $bargaining;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_affiliate_local", type="boolean", nullable=true)
     */
    private $isAffiliateLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="association_name", type="string", length=50, nullable=true)
     */
    private $associationName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="civil_service", type="boolean", nullable=true)
     */
    private $civilService;

    /**
     * @var boolean
     *
     * @ORM\Column(name="meet_confer", type="boolean", nullable=true)
     */
    private $meetConfer;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var \CharterType
     *
     * @ORM\ManyToOne(targetEntity="CharterType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="charter_type_id", referencedColumnName="id")
     * })
     */
    private $charterType;

    /**
     * @var \EmployeeType
     *
     * @ORM\ManyToOne(targetEntity="EmployeeType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_type_id", referencedColumnName="id")
     * })
     */
    private $employeeType;

    /**
     * @var \PaymentType
     *
     * @ORM\ManyToOne(targetEntity="PaymentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_type_id", referencedColumnName="id")
     * })
     */
    private $paymentType;

    /**
     * @var \Region
     *
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     * })
     */
    private $region;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LocalGroup", mappedBy="local")
     */
    private $localGroup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Statement", mappedBy="local")
     */
    private $statement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->localGroup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->statement = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Local
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
     * Set bargaining
     *
     * @param boolean $bargaining
     * @return Local
     */
    public function setBargaining($bargaining)
    {
        $this->bargaining = $bargaining;

        return $this;
    }

    /**
     * Get bargaining
     *
     * @return boolean 
     */
    public function getBargaining()
    {
        return $this->bargaining;
    }

    /**
     * Set isAffiliateLocal
     *
     * @param boolean $isAffiliateLocal
     * @return Local
     */
    public function setIsAffiliateLocal($isAffiliateLocal)
    {
        $this->isAffiliateLocal = $isAffiliateLocal;

        return $this;
    }

    /**
     * Get isAffiliateLocal
     *
     * @return boolean 
     */
    public function getIsAffiliateLocal()
    {
        return $this->isAffiliateLocal;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Local
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
     * Set associationName
     *
     * @param string $associationName
     * @return Local
     */
    public function setAssociationName($associationName)
    {
        $this->associationName = $associationName;

        return $this;
    }

    /**
     * Get associationName
     *
     * @return string 
     */
    public function getAssociationName()
    {
        return $this->associationName;
    }

    /**
     * Set civilService
     *
     * @param boolean $civilService
     * @return Local
     */
    public function setCivilService($civilService)
    {
        $this->civilService = $civilService;

        return $this;
    }

    /**
     * Get civilService
     *
     * @return boolean 
     */
    public function getCivilService()
    {
        return $this->civilService;
    }

    /**
     * Set meetConfer
     *
     * @param boolean $meetConfer
     * @return Local
     */
    public function setMeetConfer($meetConfer)
    {
        $this->meetConfer = $meetConfer;

        return $this;
    }

    /**
     * Get meetConfer
     *
     * @return boolean 
     */
    public function getMeetConfer()
    {
        return $this->meetConfer;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Local
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set charterType
     *
     * @param \Schema\Bundle\Entity\CharterType $charterType
     * @return Local
     */
    public function setCharterType(\Schema\Bundle\Entity\CharterType $charterType = null)
    {
        $this->charterType = $charterType;

        return $this;
    }

    /**
     * Get charterType
     *
     * @return \Schema\Bundle\Entity\CharterType 
     */
    public function getCharterType()
    {
        return $this->charterType;
    }

    /**
     * Set employeeType
     *
     * @param \Schema\Bundle\Entity\EmployeeType $employeeType
     * @return Local
     */
    public function setEmployeeType(\Schema\Bundle\Entity\EmployeeType $employeeType = null)
    {
        $this->employeeType = $employeeType;

        return $this;
    }

    /**
     * Get employeeType
     *
     * @return \Schema\Bundle\Entity\EmployeeType 
     */
    public function getEmployeeType()
    {
        return $this->employeeType;
    }

    /**
     * Set paymentType
     *
     * @param \Schema\Bundle\Entity\PaymentType $paymentType
     * @return Local
     */
    public function setPaymentType(\Schema\Bundle\Entity\PaymentType $paymentType = null)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return \Schema\Bundle\Entity\PaymentType 
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set region
     *
     * @param \Schema\Bundle\Entity\Region $region
     * @return Local
     */
    public function setRegion(\Schema\Bundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \Schema\Bundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Add localGroup
     *
     * @param \Schema\Bundle\Entity\LocalGroup $localGroup
     * @return Local
     */
    public function addLocalGroup(\Schema\Bundle\Entity\LocalGroup $localGroup)
    {
        $this->localGroup[] = $localGroup;

        return $this;
    }

    /**
     * Remove localGroup
     *
     * @param \Schema\Bundle\Entity\LocalGroup $localGroup
     */
    public function removeLocalGroup(\Schema\Bundle\Entity\LocalGroup $localGroup)
    {
        $this->localGroup->removeElement($localGroup);
    }

    /**
     * Get localGroup
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLocalGroup()
    {
        return $this->localGroup;
    }

    /**
     * Add statement
     *
     * @param \Schema\Bundle\Entity\Statement $statement
     * @return Local
     */
    public function addStatement(\Schema\Bundle\Entity\Statement $statement)
    {
        $this->statement[] = $statement;

        return $this;
    }

    /**
     * Remove statement
     *
     * @param \Schema\Bundle\Entity\Statement $statement
     */
    public function removeStatement(\Schema\Bundle\Entity\Statement $statement)
    {
        $this->statement->removeElement($statement);
    }

    /**
     * Get statement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStatement()
    {
        return $this->statement;
    }
}
