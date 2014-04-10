<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prospect
 *
 * @ORM\Table(name="prospect", indexes={@ORM\Index(name="IDX_C9CE8C7D8C8A35C6", columns={"bene_address_id"}), @ORM\Index(name="IDX_C9CE8C7D5D5A2101", columns={"local_id"}), @ORM\Index(name="IDX_C9CE8C7D7597D3FE", columns={"member_id"})})
 * @ORM\Entity
 */
class Prospect
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
     * @var boolean
     *
     * @ORM\Column(name="packet_sent", type="boolean", nullable=true)
     */
    private $packetSent;

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
     * @ORM\Column(name="suffix", type="string", length=45, nullable=true)
     */
    private $suffix;

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
     * @var boolean
     *
     * @ORM\Column(name="second_can_contact", type="boolean", nullable=true)
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
     * @ORM\Column(name="guide_sent", type="string", length=45, nullable=true)
     */
    private $guideSent;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=200, nullable=true)
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
     * @ORM\Column(name="contest", type="string", length=45, nullable=true)
     */
    private $contest;

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
     * @var \Member
     *
     * @ORM\ManyToOne(targetEntity="Member")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     * })
     */
    private $member;

    /**
     * @var \Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bene_address_id", referencedColumnName="id")
     * })
     */
    private $beneAddress;



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
     * Set packetSent
     *
     * @param boolean $packetSent
     * @return Prospect
     */
    public function setPacketSent($packetSent)
    {
        $this->packetSent = $packetSent;

        return $this;
    }

    /**
     * Get packetSent
     *
     * @return boolean 
     */
    public function getPacketSent()
    {
        return $this->packetSent;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Prospect
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
     * @return Prospect
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
     * Set suffix
     *
     * @param string $suffix
     * @return Prospect
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
     * Set firstCanContact
     *
     * @param boolean $firstCanContact
     * @return Prospect
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
     * @return Prospect
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
     * @param boolean $secondCanContact
     * @return Prospect
     */
    public function setSecondCanContact($secondCanContact)
    {
        $this->secondCanContact = $secondCanContact;

        return $this;
    }

    /**
     * Get secondCanContact
     *
     * @return boolean 
     */
    public function getSecondCanContact()
    {
        return $this->secondCanContact;
    }

    /**
     * Set secondPhoneType
     *
     * @param string $secondPhoneType
     * @return Prospect
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
     * Set guideSent
     *
     * @param string $guideSent
     * @return Prospect
     */
    public function setGuideSent($guideSent)
    {
        $this->guideSent = $guideSent;

        return $this;
    }

    /**
     * Get guideSent
     *
     * @return string 
     */
    public function getGuideSent()
    {
        return $this->guideSent;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Prospect
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
     * Set comments
     *
     * @param string $comments
     * @return Prospect
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
     * @return Prospect
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
     * @return Prospect
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
     * Set local
     *
     * @param \Schema\Bundle\Entity\Local $local
     * @return Prospect
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
     * Set member
     *
     * @param \Schema\Bundle\Entity\Member $member
     * @return Prospect
     */
    public function setMember(\Schema\Bundle\Entity\Member $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \Schema\Bundle\Entity\Member 
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set beneAddress
     *
     * @param \Schema\Bundle\Entity\Address $beneAddress
     * @return Prospect
     */
    public function setBeneAddress(\Schema\Bundle\Entity\Address $beneAddress = null)
    {
        $this->beneAddress = $beneAddress;

        return $this;
    }

    /**
     * Get beneAddress
     *
     * @return \Schema\Bundle\Entity\Address 
     */
    public function getBeneAddress()
    {
        return $this->beneAddress;
    }
}
