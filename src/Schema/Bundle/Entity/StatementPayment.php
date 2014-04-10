<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatementPayment
 *
 * @ORM\Table(name="statement_payment", indexes={@ORM\Index(name="fk_member_credit_statement_payment_idx", columns={"member_credit_id"}), @ORM\Index(name="fk_group_credit_statement_payment_idx", columns={"group_credit_id"}), @ORM\Index(name="fk_statement_statement_payment_idx", columns={"statement_id"}), @ORM\Index(name="fk_payment_type_statement_payment_idx", columns={"payment_type_id"}), @ORM\Index(name="IDX_67111B536F2EE724", columns={"parent_statement_payment_id"})})
 * @ORM\Entity
 */
class StatementPayment
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
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="ach_transaction_number", type="string", length=45, nullable=true)
     */
    private $achTransactionNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="check_number", type="string", length=45, nullable=true)
     */
    private $checkNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="authorize_transaction_id", type="string", length=100, nullable=true)
     */
    private $authorizeTransactionId;

    /**
     * @var string
     *
     * @ORM\Column(name="paypal_transaction_id", type="string", length=100, nullable=true)
     */
    private $paypalTransactionId;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_date", type="datetime", nullable=true)
     */
    private $paymentDate;

    /**
     * @var \StatementPayment
     *
     * @ORM\ManyToOne(targetEntity="StatementPayment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_statement_payment_id", referencedColumnName="id")
     * })
     */
    private $parentStatementPayment;

    /**
     * @var \GroupCredit
     *
     * @ORM\ManyToOne(targetEntity="GroupCredit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_credit_id", referencedColumnName="id")
     * })
     */
    private $groupCredit;

    /**
     * @var \MemberCredit
     *
     * @ORM\ManyToOne(targetEntity="MemberCredit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_credit_id", referencedColumnName="id")
     * })
     */
    private $memberCredit;

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
     * @var \Statement
     *
     * @ORM\ManyToOne(targetEntity="Statement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="statement_id", referencedColumnName="id")
     * })
     */
    private $statement;



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
     * Set amount
     *
     * @param float $amount
     * @return StatementPayment
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
     * Set achTransactionNumber
     *
     * @param string $achTransactionNumber
     * @return StatementPayment
     */
    public function setAchTransactionNumber($achTransactionNumber)
    {
        $this->achTransactionNumber = $achTransactionNumber;

        return $this;
    }

    /**
     * Get achTransactionNumber
     *
     * @return string 
     */
    public function getAchTransactionNumber()
    {
        return $this->achTransactionNumber;
    }

    /**
     * Set checkNumber
     *
     * @param string $checkNumber
     * @return StatementPayment
     */
    public function setCheckNumber($checkNumber)
    {
        $this->checkNumber = $checkNumber;

        return $this;
    }

    /**
     * Get checkNumber
     *
     * @return string 
     */
    public function getCheckNumber()
    {
        return $this->checkNumber;
    }

    /**
     * Set authorizeTransactionId
     *
     * @param string $authorizeTransactionId
     * @return StatementPayment
     */
    public function setAuthorizeTransactionId($authorizeTransactionId)
    {
        $this->authorizeTransactionId = $authorizeTransactionId;

        return $this;
    }

    /**
     * Get authorizeTransactionId
     *
     * @return string 
     */
    public function getAuthorizeTransactionId()
    {
        return $this->authorizeTransactionId;
    }

    /**
     * Set paypalTransactionId
     *
     * @param string $paypalTransactionId
     * @return StatementPayment
     */
    public function setPaypalTransactionId($paypalTransactionId)
    {
        $this->paypalTransactionId = $paypalTransactionId;

        return $this;
    }

    /**
     * Get paypalTransactionId
     *
     * @return string 
     */
    public function getPaypalTransactionId()
    {
        return $this->paypalTransactionId;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return StatementPayment
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set paymentDate
     *
     * @param \DateTime $paymentDate
     * @return StatementPayment
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return \DateTime 
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Set parentStatementPayment
     *
     * @param \Schema\Bundle\Entity\StatementPayment $parentStatementPayment
     * @return StatementPayment
     */
    public function setParentStatementPayment(\Schema\Bundle\Entity\StatementPayment $parentStatementPayment = null)
    {
        $this->parentStatementPayment = $parentStatementPayment;

        return $this;
    }

    /**
     * Get parentStatementPayment
     *
     * @return \Schema\Bundle\Entity\StatementPayment 
     */
    public function getParentStatementPayment()
    {
        return $this->parentStatementPayment;
    }

    /**
     * Set groupCredit
     *
     * @param \Schema\Bundle\Entity\GroupCredit $groupCredit
     * @return StatementPayment
     */
    public function setGroupCredit(\Schema\Bundle\Entity\GroupCredit $groupCredit = null)
    {
        $this->groupCredit = $groupCredit;

        return $this;
    }

    /**
     * Get groupCredit
     *
     * @return \Schema\Bundle\Entity\GroupCredit 
     */
    public function getGroupCredit()
    {
        return $this->groupCredit;
    }

    /**
     * Set memberCredit
     *
     * @param \Schema\Bundle\Entity\MemberCredit $memberCredit
     * @return StatementPayment
     */
    public function setMemberCredit(\Schema\Bundle\Entity\MemberCredit $memberCredit = null)
    {
        $this->memberCredit = $memberCredit;

        return $this;
    }

    /**
     * Get memberCredit
     *
     * @return \Schema\Bundle\Entity\MemberCredit 
     */
    public function getMemberCredit()
    {
        return $this->memberCredit;
    }

    /**
     * Set paymentType
     *
     * @param \Schema\Bundle\Entity\PaymentType $paymentType
     * @return StatementPayment
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
     * Set statement
     *
     * @param \Schema\Bundle\Entity\Statement $statement
     * @return StatementPayment
     */
    public function setStatement(\Schema\Bundle\Entity\Statement $statement = null)
    {
        $this->statement = $statement;

        return $this;
    }

    /**
     * Get statement
     *
     * @return \Schema\Bundle\Entity\Statement 
     */
    public function getStatement()
    {
        return $this->statement;
    }
}
