<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LegalCharge
 *
 * @ORM\Table(name="legal_charge", indexes={@ORM\Index(name="fk_legal_case_legal_charge_idx", columns={"legal_case_id"}), @ORM\Index(name="IDX_B95D7E4F4C19F89F", columns={"lawyer_id"})})
 * @ORM\Entity
 */
class LegalCharge
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
     * @var \DateTime
     *
     * @ORM\Column(name="charge_date", type="datetime", nullable=true)
     */
    private $chargeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $amount;

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
     * @var \LegalCase
     *
     * @ORM\ManyToOne(targetEntity="LegalCase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="legal_case_id", referencedColumnName="id")
     * })
     */
    private $legalCase;



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
     * Set chargeDate
     *
     * @param \DateTime $chargeDate
     * @return LegalCharge
     */
    public function setChargeDate($chargeDate)
    {
        $this->chargeDate = $chargeDate;

        return $this;
    }

    /**
     * Get chargeDate
     *
     * @return \DateTime 
     */
    public function getChargeDate()
    {
        return $this->chargeDate;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return LegalCharge
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
     * Set amount
     *
     * @param float $amount
     * @return LegalCharge
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set lawyer
     *
     * @param \Schema\Bundle\Entity\Lawyer $lawyer
     * @return LegalCharge
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
     * Set legalCase
     *
     * @param \Schema\Bundle\Entity\LegalCase $legalCase
     * @return LegalCharge
     */
    public function setLegalCase(\Schema\Bundle\Entity\LegalCase $legalCase = null)
    {
        $this->legalCase = $legalCase;

        return $this;
    }

    /**
     * Get legalCase
     *
     * @return \Schema\Bundle\Entity\LegalCase 
     */
    public function getLegalCase()
    {
        return $this->legalCase;
    }
}
