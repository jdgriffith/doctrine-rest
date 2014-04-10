<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Member
 *
 * @ORM\Table(name="member", indexes={@ORM\Index(name="fk_payment_type_member_idx", columns={"payment_type_id"}), @ORM\Index(name="fk_local_member_idx", columns={"local_id"}), @ORM\Index(name="IDX_70E4FA78297122A5", columns={"member_status_type_id"}), @ORM\Index(name="IDX_70E4FA78DAF39619", columns={"employeeType_id"})})
 * @ORM\Entity
 */
class Member
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
     * @ORM\Column(name="first_name", type="string", length=45, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=45, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="middle_name", type="string", length=45, nullable=true)
     */
    private $middleName;

    /**
     * @var string
     *
     * @ORM\Column(name="suffix", type="string", length=45, nullable=true)
     */
    private $suffix;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="payment", type="string", length=3, nullable=true)
     */
    private $payment;

    /**
     * @var float
     *
     * @ORM\Column(name="dues", type="float", precision=10, scale=0, nullable=true)
     */
    private $dues;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="join_date", type="datetime", nullable=true)
     */
    private $joinDate;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=100, nullable=true)
     */
    private $reason;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", nullable=true)
     */
    private $comments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="benefit_date", type="datetime", nullable=true)
     */
    private $benefitDate;

    /**
     * @var string
     *
     * @ORM\Column(name="contest", type="string", length=100, nullable=true)
     */
    private $contest;

    /**
     * @var string
     *
     * @ORM\Column(name="guide", type="string", length=45, nullable=true)
     */
    private $guide;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="ssn", type="string", length=11, nullable=true)
     */
    private $ssn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="admin_contact_date", type="datetime", nullable=true)
     */
    private $adminContactDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="legal_contact_date", type="datetime", nullable=true)
     */
    private $legalContactDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="political_contact_date", type="datetime", nullable=true)
     */
    private $politicalContactDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="organizing_contact_date", type="datetime", nullable=true)
     */
    private $organizingContactDate;

    /**
     * @var string
     *
     * @ORM\Column(name="optional_field_1", type="string", length=50, nullable=true)
     */
    private $optionalField1;

    /**
     * @var string
     *
     * @ORM\Column(name="optional_field_2", type="string", length=50, nullable=true)
     */
    private $optionalField2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="first_can_contact", type="boolean", nullable=true)
     */
    private $firstCanContact;

    /**
     * @var string
     *
     * @ORM\Column(name="first_phone_type", type="string", length=1, nullable=true)
     */
    private $firstPhoneType;

    /**
     * @var string
     *
     * @ORM\Column(name="second_can_contact", type="string", length=45, nullable=true)
     */
    private $secondCanContact;

    /**
     * @var string
     *
     * @ORM\Column(name="second_phone_type", type="string", length=1, nullable=true)
     */
    private $secondPhoneType;

    /**
     * @var string
     *
     * @ORM\Column(name="elected_office_held", type="string", length=45, nullable=true)
     */
    private $electedOfficeHeld;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hold_elected_office_st_date", type="datetime", nullable=true)
     */
    private $holdElectedOfficeStDate;

    /**
     * @var string
     *
     * @ORM\Column(name="state_house_district", type="string", length=45, nullable=true)
     */
    private $stateHouseDistrict;

    /**
     * @var string
     *
     * @ORM\Column(name="state_senate_district", type="string", length=45, nullable=true)
     */
    private $stateSenateDistrict;

    /**
     * @var string
     *
     * @ORM\Column(name="fed_house_district", type="string", length=45, nullable=true)
     */
    private $fedHouseDistrict;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_registered_voter", type="boolean", nullable=true)
     */
    private $isRegisteredVoter;

    /**
     * @var string
     *
     * @ORM\Column(name="authorize_customer_id", type="string", length=20, nullable=true)
     */
    private $authorizeCustomerId;

    /**
     * @var string
     *
     * @ORM\Column(name="pid", type="string", length=8, nullable=true)
     */
    private $pid;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="cell", type="string", length=15, nullable=true)
     */
    private $cell;

    /**
     * @var boolean
     *
     * @ORM\Column(name="recurring", type="boolean", nullable=true)
     */
    private $recurring;

    /**
     * @var string
     *
     * @ORM\Column(name="recurring_date", type="string", length=15, nullable=true)
     */
    private $recurringDate;

    /**
     * @var string
     *
     * @ORM\Column(name="recurring_profile_id", type="string", length=30, nullable=true)
     */
    private $recurringProfileId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="card_sent_date", type="datetime", nullable=true)
     */
    private $cardSentDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="packet_sent_date", type="datetime", nullable=true)
     */
    private $packetSentDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="money_date", type="datetime", nullable=true)
     */
    private $moneyDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dues_date", type="datetime", nullable=true)
     */
    private $duesDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth_date", type="datetime", nullable=true)
     */
    private $birthDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="status_date", type="datetime", nullable=true)
     */
    private $statusDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="join_packet_sent_date", type="datetime", nullable=true)
     */
    private $joinPacketSentDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="card_requested_date", type="datetime", nullable=true)
     */
    private $cardRequestedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="packet_requested_date", type="datetime", nullable=true)
     */
    private $packetRequestedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="join_packet_requested_date", type="datetime", nullable=true)
     */
    private $joinPacketRequestedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="home_phone", type="string", length=15, nullable=true)
     */
    private $homePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="work_phone", type="string", length=15, nullable=true)
     */
    private $workPhone;

    /**
     * @var \MemberStatusType
     *
     * @ORM\ManyToOne(targetEntity="MemberStatusType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_status_type_id", referencedColumnName="id")
     * })
     */
    private $memberStatusType;

    /**
     * @var \EmployeeType
     *
     * @ORM\ManyToOne(targetEntity="EmployeeType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employeeType_id", referencedColumnName="id")
     * })
     */
    private $employeetype;

    /**
     * @var \Local
     *
     * @ORM\ManyToOne(targetEntity="Local")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="local_id", referencedColumnName="id")
     * })
     */
    private $local;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Document", mappedBy="member")
     */
    private $document;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Address", inversedBy="member")
     * @ORM\JoinTable(name="member_address",
     *   joinColumns={
     *     @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     *   }
     * )
     */
    private $address;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Beneficiary", inversedBy="member")
     * @ORM\JoinTable(name="member_beneficiary",
     *   joinColumns={
     *     @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="beneficiary_id", referencedColumnName="id")
     *   }
     * )
     */
    private $beneficiary;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Statement", inversedBy="member")
     * @ORM\JoinTable(name="member_statement",
     *   joinColumns={
     *     @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="statement_id", referencedColumnName="id")
     *   }
     * )
     */
    private $statement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->document = new \Doctrine\Common\Collections\ArrayCollection();
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
        $this->beneficiary = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set firstName
     *
     * @param string $firstName
     * @return Member
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Member
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     * @return Member
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Get middleName
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set suffix
     *
     * @param string $suffix
     * @return Member
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * Get suffix
     *
     * @return string 
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Member
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
     * Set payment
     *
     * @param string $payment
     * @return Member
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return string 
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set dues
     *
     * @param float $dues
     * @return Member
     */
    public function setDues($dues)
    {
        $this->dues = $dues;

        return $this;
    }

    /**
     * Get dues
     *
     * @return float 
     */
    public function getDues()
    {
        return $this->dues;
    }

    /**
     * Set joinDate
     *
     * @param \DateTime $joinDate
     * @return Member
     */
    public function setJoinDate($joinDate)
    {
        $this->joinDate = $joinDate;

        return $this;
    }

    /**
     * Get joinDate
     *
     * @return \DateTime 
     */
    public function getJoinDate()
    {
        return $this->joinDate;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return Member
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Member
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set benefitDate
     *
     * @param \DateTime $benefitDate
     * @return Member
     */
    public function setBenefitDate($benefitDate)
    {
        $this->benefitDate = $benefitDate;

        return $this;
    }

    /**
     * Get benefitDate
     *
     * @return \DateTime 
     */
    public function getBenefitDate()
    {
        return $this->benefitDate;
    }

    /**
     * Set contest
     *
     * @param string $contest
     * @return Member
     */
    public function setContest($contest)
    {
        $this->contest = $contest;

        return $this;
    }

    /**
     * Get contest
     *
     * @return string 
     */
    public function getContest()
    {
        return $this->contest;
    }

    /**
     * Set guide
     *
     * @param string $guide
     * @return Member
     */
    public function setGuide($guide)
    {
        $this->guide = $guide;

        return $this;
    }

    /**
     * Get guide
     *
     * @return string 
     */
    public function getGuide()
    {
        return $this->guide;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Member
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set ssn
     *
     * @param string $ssn
     * @return Member
     */
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;

        return $this;
    }

    /**
     * Get ssn
     *
     * @return string 
     */
    public function getSsn()
    {
        return $this->ssn;
    }

    /**
     * Set adminContactDate
     *
     * @param \DateTime $adminContactDate
     * @return Member
     */
    public function setAdminContactDate($adminContactDate)
    {
        $this->adminContactDate = $adminContactDate;

        return $this;
    }

    /**
     * Get adminContactDate
     *
     * @return \DateTime 
     */
    public function getAdminContactDate()
    {
        return $this->adminContactDate;
    }

    /**
     * Set legalContactDate
     *
     * @param \DateTime $legalContactDate
     * @return Member
     */
    public function setLegalContactDate($legalContactDate)
    {
        $this->legalContactDate = $legalContactDate;

        return $this;
    }

    /**
     * Get legalContactDate
     *
     * @return \DateTime 
     */
    public function getLegalContactDate()
    {
        return $this->legalContactDate;
    }

    /**
     * Set politicalContactDate
     *
     * @param \DateTime $politicalContactDate
     * @return Member
     */
    public function setPoliticalContactDate($politicalContactDate)
    {
        $this->politicalContactDate = $politicalContactDate;

        return $this;
    }

    /**
     * Get politicalContactDate
     *
     * @return \DateTime 
     */
    public function getPoliticalContactDate()
    {
        return $this->politicalContactDate;
    }

    /**
     * Set organizingContactDate
     *
     * @param \DateTime $organizingContactDate
     * @return Member
     */
    public function setOrganizingContactDate($organizingContactDate)
    {
        $this->organizingContactDate = $organizingContactDate;

        return $this;
    }

    /**
     * Get organizingContactDate
     *
     * @return \DateTime 
     */
    public function getOrganizingContactDate()
    {
        return $this->organizingContactDate;
    }

    /**
     * Set optionalField1
     *
     * @param string $optionalField1
     * @return Member
     */
    public function setOptionalField1($optionalField1)
    {
        $this->optionalField1 = $optionalField1;

        return $this;
    }

    /**
     * Get optionalField1
     *
     * @return string 
     */
    public function getOptionalField1()
    {
        return $this->optionalField1;
    }

    /**
     * Set optionalField2
     *
     * @param string $optionalField2
     * @return Member
     */
    public function setOptionalField2($optionalField2)
    {
        $this->optionalField2 = $optionalField2;

        return $this;
    }

    /**
     * Get optionalField2
     *
     * @return string 
     */
    public function getOptionalField2()
    {
        return $this->optionalField2;
    }

    /**
     * Set firstCanContact
     *
     * @param boolean $firstCanContact
     * @return Member
     */
    public function setFirstCanContact($firstCanContact)
    {
        $this->firstCanContact = $firstCanContact;

        return $this;
    }

    /**
     * Get firstCanContact
     *
     * @return boolean 
     */
    public function getFirstCanContact()
    {
        return $this->firstCanContact;
    }

    /**
     * Set firstPhoneType
     *
     * @param string $firstPhoneType
     * @return Member
     */
    public function setFirstPhoneType($firstPhoneType)
    {
        $this->firstPhoneType = $firstPhoneType;

        return $this;
    }

    /**
     * Get firstPhoneType
     *
     * @return string 
     */
    public function getFirstPhoneType()
    {
        return $this->firstPhoneType;
    }

    /**
     * Set secondCanContact
     *
     * @param string $secondCanContact
     * @return Member
     */
    public function setSecondCanContact($secondCanContact)
    {
        $this->secondCanContact = $secondCanContact;

        return $this;
    }

    /**
     * Get secondCanContact
     *
     * @return string 
     */
    public function getSecondCanContact()
    {
        return $this->secondCanContact;
    }

    /**
     * Set secondPhoneType
     *
     * @param string $secondPhoneType
     * @return Member
     */
    public function setSecondPhoneType($secondPhoneType)
    {
        $this->secondPhoneType = $secondPhoneType;

        return $this;
    }

    /**
     * Get secondPhoneType
     *
     * @return string 
     */
    public function getSecondPhoneType()
    {
        return $this->secondPhoneType;
    }

    /**
     * Set electedOfficeHeld
     *
     * @param string $electedOfficeHeld
     * @return Member
     */
    public function setElectedOfficeHeld($electedOfficeHeld)
    {
        $this->electedOfficeHeld = $electedOfficeHeld;

        return $this;
    }

    /**
     * Get electedOfficeHeld
     *
     * @return string 
     */
    public function getElectedOfficeHeld()
    {
        return $this->electedOfficeHeld;
    }

    /**
     * Set holdElectedOfficeStDate
     *
     * @param \DateTime $holdElectedOfficeStDate
     * @return Member
     */
    public function setHoldElectedOfficeStDate($holdElectedOfficeStDate)
    {
        $this->holdElectedOfficeStDate = $holdElectedOfficeStDate;

        return $this;
    }

    /**
     * Get holdElectedOfficeStDate
     *
     * @return \DateTime 
     */
    public function getHoldElectedOfficeStDate()
    {
        return $this->holdElectedOfficeStDate;
    }

    /**
     * Set stateHouseDistrict
     *
     * @param string $stateHouseDistrict
     * @return Member
     */
    public function setStateHouseDistrict($stateHouseDistrict)
    {
        $this->stateHouseDistrict = $stateHouseDistrict;

        return $this;
    }

    /**
     * Get stateHouseDistrict
     *
     * @return string 
     */
    public function getStateHouseDistrict()
    {
        return $this->stateHouseDistrict;
    }

    /**
     * Set stateSenateDistrict
     *
     * @param string $stateSenateDistrict
     * @return Member
     */
    public function setStateSenateDistrict($stateSenateDistrict)
    {
        $this->stateSenateDistrict = $stateSenateDistrict;

        return $this;
    }

    /**
     * Get stateSenateDistrict
     *
     * @return string 
     */
    public function getStateSenateDistrict()
    {
        return $this->stateSenateDistrict;
    }

    /**
     * Set fedHouseDistrict
     *
     * @param string $fedHouseDistrict
     * @return Member
     */
    public function setFedHouseDistrict($fedHouseDistrict)
    {
        $this->fedHouseDistrict = $fedHouseDistrict;

        return $this;
    }

    /**
     * Get fedHouseDistrict
     *
     * @return string 
     */
    public function getFedHouseDistrict()
    {
        return $this->fedHouseDistrict;
    }

    /**
     * Set isRegisteredVoter
     *
     * @param boolean $isRegisteredVoter
     * @return Member
     */
    public function setIsRegisteredVoter($isRegisteredVoter)
    {
        $this->isRegisteredVoter = $isRegisteredVoter;

        return $this;
    }

    /**
     * Get isRegisteredVoter
     *
     * @return boolean 
     */
    public function getIsRegisteredVoter()
    {
        return $this->isRegisteredVoter;
    }

    /**
     * Set authorizeCustomerId
     *
     * @param string $authorizeCustomerId
     * @return Member
     */
    public function setAuthorizeCustomerId($authorizeCustomerId)
    {
        $this->authorizeCustomerId = $authorizeCustomerId;

        return $this;
    }

    /**
     * Get authorizeCustomerId
     *
     * @return string 
     */
    public function getAuthorizeCustomerId()
    {
        return $this->authorizeCustomerId;
    }

    /**
     * Set pid
     *
     * @param string $pid
     * @return Member
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return string 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Member
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
     * Set cell
     *
     * @param string $cell
     * @return Member
     */
    public function setCell($cell)
    {
        $this->cell = $cell;

        return $this;
    }

    /**
     * Get cell
     *
     * @return string 
     */
    public function getCell()
    {
        return $this->cell;
    }

    /**
     * Set recurring
     *
     * @param boolean $recurring
     * @return Member
     */
    public function setRecurring($recurring)
    {
        $this->recurring = $recurring;

        return $this;
    }

    /**
     * Get recurring
     *
     * @return boolean 
     */
    public function getRecurring()
    {
        return $this->recurring;
    }

    /**
     * Set recurringDate
     *
     * @param string $recurringDate
     * @return Member
     */
    public function setRecurringDate($recurringDate)
    {
        $this->recurringDate = $recurringDate;

        return $this;
    }

    /**
     * Get recurringDate
     *
     * @return string 
     */
    public function getRecurringDate()
    {
        return $this->recurringDate;
    }

    /**
     * Set recurringProfileId
     *
     * @param string $recurringProfileId
     * @return Member
     */
    public function setRecurringProfileId($recurringProfileId)
    {
        $this->recurringProfileId = $recurringProfileId;

        return $this;
    }

    /**
     * Get recurringProfileId
     *
     * @return string 
     */
    public function getRecurringProfileId()
    {
        return $this->recurringProfileId;
    }

    /**
     * Set cardSentDate
     *
     * @param \DateTime $cardSentDate
     * @return Member
     */
    public function setCardSentDate($cardSentDate)
    {
        $this->cardSentDate = $cardSentDate;

        return $this;
    }

    /**
     * Get cardSentDate
     *
     * @return \DateTime 
     */
    public function getCardSentDate()
    {
        return $this->cardSentDate;
    }

    /**
     * Set packetSentDate
     *
     * @param \DateTime $packetSentDate
     * @return Member
     */
    public function setPacketSentDate($packetSentDate)
    {
        $this->packetSentDate = $packetSentDate;

        return $this;
    }

    /**
     * Get packetSentDate
     *
     * @return \DateTime 
     */
    public function getPacketSentDate()
    {
        return $this->packetSentDate;
    }

    /**
     * Set moneyDate
     *
     * @param \DateTime $moneyDate
     * @return Member
     */
    public function setMoneyDate($moneyDate)
    {
        $this->moneyDate = $moneyDate;

        return $this;
    }

    /**
     * Get moneyDate
     *
     * @return \DateTime 
     */
    public function getMoneyDate()
    {
        return $this->moneyDate;
    }

    /**
     * Set duesDate
     *
     * @param \DateTime $duesDate
     * @return Member
     */
    public function setDuesDate($duesDate)
    {
        $this->duesDate = $duesDate;

        return $this;
    }

    /**
     * Get duesDate
     *
     * @return \DateTime 
     */
    public function getDuesDate()
    {
        return $this->duesDate;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Member
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set statusDate
     *
     * @param \DateTime $statusDate
     * @return Member
     */
    public function setStatusDate($statusDate)
    {
        $this->statusDate = $statusDate;

        return $this;
    }

    /**
     * Get statusDate
     *
     * @return \DateTime 
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Set joinPacketSentDate
     *
     * @param \DateTime $joinPacketSentDate
     * @return Member
     */
    public function setJoinPacketSentDate($joinPacketSentDate)
    {
        $this->joinPacketSentDate = $joinPacketSentDate;

        return $this;
    }

    /**
     * Get joinPacketSentDate
     *
     * @return \DateTime 
     */
    public function getJoinPacketSentDate()
    {
        return $this->joinPacketSentDate;
    }

    /**
     * Set cardRequestedDate
     *
     * @param \DateTime $cardRequestedDate
     * @return Member
     */
    public function setCardRequestedDate($cardRequestedDate)
    {
        $this->cardRequestedDate = $cardRequestedDate;

        return $this;
    }

    /**
     * Get cardRequestedDate
     *
     * @return \DateTime 
     */
    public function getCardRequestedDate()
    {
        return $this->cardRequestedDate;
    }

    /**
     * Set packetRequestedDate
     *
     * @param \DateTime $packetRequestedDate
     * @return Member
     */
    public function setPacketRequestedDate($packetRequestedDate)
    {
        $this->packetRequestedDate = $packetRequestedDate;

        return $this;
    }

    /**
     * Get packetRequestedDate
     *
     * @return \DateTime 
     */
    public function getPacketRequestedDate()
    {
        return $this->packetRequestedDate;
    }

    /**
     * Set joinPacketRequestedDate
     *
     * @param \DateTime $joinPacketRequestedDate
     * @return Member
     */
    public function setJoinPacketRequestedDate($joinPacketRequestedDate)
    {
        $this->joinPacketRequestedDate = $joinPacketRequestedDate;

        return $this;
    }

    /**
     * Get joinPacketRequestedDate
     *
     * @return \DateTime 
     */
    public function getJoinPacketRequestedDate()
    {
        return $this->joinPacketRequestedDate;
    }

    /**
     * Set homePhone
     *
     * @param string $homePhone
     * @return Member
     */
    public function setHomePhone($homePhone)
    {
        $this->homePhone = $homePhone;

        return $this;
    }

    /**
     * Get homePhone
     *
     * @return string 
     */
    public function getHomePhone()
    {
        return $this->homePhone;
    }

    /**
     * Set workPhone
     *
     * @param string $workPhone
     * @return Member
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;

        return $this;
    }

    /**
     * Get workPhone
     *
     * @return string 
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * Set memberStatusType
     *
     * @param \Schema\Bundle\Entity\MemberStatusType $memberStatusType
     * @return Member
     */
    public function setMemberStatusType(\Schema\Bundle\Entity\MemberStatusType $memberStatusType = null)
    {
        $this->memberStatusType = $memberStatusType;

        return $this;
    }

    /**
     * Get memberStatusType
     *
     * @return \Schema\Bundle\Entity\MemberStatusType 
     */
    public function getMemberStatusType()
    {
        return $this->memberStatusType;
    }

    /**
     * Set employeetype
     *
     * @param \Schema\Bundle\Entity\EmployeeType $employeetype
     * @return Member
     */
    public function setEmployeetype(\Schema\Bundle\Entity\EmployeeType $employeetype = null)
    {
        $this->employeetype = $employeetype;

        return $this;
    }

    /**
     * Get employeetype
     *
     * @return \Schema\Bundle\Entity\EmployeeType 
     */
    public function getEmployeetype()
    {
        return $this->employeetype;
    }

    /**
     * Set local
     *
     * @param \Schema\Bundle\Entity\Local $local
     * @return Member
     */
    public function setLocal(\Schema\Bundle\Entity\Local $local = null)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return \Schema\Bundle\Entity\Local 
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set paymentType
     *
     * @param \Schema\Bundle\Entity\PaymentType $paymentType
     * @return Member
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
     * Add document
     *
     * @param \Schema\Bundle\Entity\Document $document
     * @return Member
     */
    public function addDocument(\Schema\Bundle\Entity\Document $document)
    {
        $this->document[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \Schema\Bundle\Entity\Document $document
     */
    public function removeDocument(\Schema\Bundle\Entity\Document $document)
    {
        $this->document->removeElement($document);
    }

    /**
     * Get document
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Add address
     *
     * @param \Schema\Bundle\Entity\Address $address
     * @return Member
     */
    public function addAddress(\Schema\Bundle\Entity\Address $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * Remove address
     *
     * @param \Schema\Bundle\Entity\Address $address
     */
    public function removeAddress(\Schema\Bundle\Entity\Address $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add beneficiary
     *
     * @param \Schema\Bundle\Entity\Beneficiary $beneficiary
     * @return Member
     */
    public function addBeneficiary(\Schema\Bundle\Entity\Beneficiary $beneficiary)
    {
        $this->beneficiary[] = $beneficiary;

        return $this;
    }

    /**
     * Remove beneficiary
     *
     * @param \Schema\Bundle\Entity\Beneficiary $beneficiary
     */
    public function removeBeneficiary(\Schema\Bundle\Entity\Beneficiary $beneficiary)
    {
        $this->beneficiary->removeElement($beneficiary);
    }

    /**
     * Get beneficiary
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBeneficiary()
    {
        return $this->beneficiary;
    }

    /**
     * Add statement
     *
     * @param \Schema\Bundle\Entity\Statement $statement
     * @return Member
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
