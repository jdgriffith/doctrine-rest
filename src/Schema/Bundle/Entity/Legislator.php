<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Legislator
 *
 * @ORM\Table(name="legislator", indexes={@ORM\Index(name="IDX_A7DD3A46B08FA272", columns={"district_id"})})
 * @ORM\Entity
 */
class Legislator
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
     * @ORM\Column(name="legislator_identification_number", type="string", length=6, nullable=true)
     */
    private $legislatorIdentificationNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=15, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=12, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="middle_name", type="string", length=12, nullable=true)
     */
    private $middleName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=20, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="suffix", type="string", length=3, nullable=true)
     */
    private $suffix;

    /**
     * @var string
     *
     * @ORM\Column(name="party", type="string", length=3, nullable=true)
     */
    private $party;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=1, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=100, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="district_office_address_line_1", type="string", length=255, nullable=true)
     */
    private $districtOfficeAddressLine1;

    /**
     * @var string
     *
     * @ORM\Column(name="district_office_address_line_2", type="string", length=255, nullable=true)
     */
    private $districtOfficeAddressLine2;

    /**
     * @var string
     *
     * @ORM\Column(name="district_office_city", type="string", length=255, nullable=true)
     */
    private $districtOfficeCity;

    /**
     * @var string
     *
     * @ORM\Column(name="district_office_state", type="string", length=255, nullable=true)
     */
    private $districtOfficeState;

    /**
     * @var string
     *
     * @ORM\Column(name="district_office_zip_plus", type="string", length=255, nullable=true)
     */
    private $districtOfficeZipPlus;

    /**
     * @var string
     *
     * @ORM\Column(name="district_office_phone", type="string", length=255, nullable=true)
     */
    private $districtOfficePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="district_office_fax", type="string", length=255, nullable=true)
     */
    private $districtOfficeFax;

    /**
     * @var string
     *
     * @ORM\Column(name="capitolt_office_address_line_1", type="string", length=255, nullable=true)
     */
    private $capitoltOfficeAddressLine1;

    /**
     * @var string
     *
     * @ORM\Column(name="capitolt_office_address_line_2", type="string", length=255, nullable=true)
     */
    private $capitoltOfficeAddressLine2;

    /**
     * @var string
     *
     * @ORM\Column(name="capitolt_office_city", type="string", length=255, nullable=true)
     */
    private $capitoltOfficeCity;

    /**
     * @var string
     *
     * @ORM\Column(name="capitolt_office_state", type="string", length=255, nullable=true)
     */
    private $capitoltOfficeState;

    /**
     * @var string
     *
     * @ORM\Column(name="capitolt_office_zip_plus", type="string", length=255, nullable=true)
     */
    private $capitoltOfficeZipPlus;

    /**
     * @var string
     *
     * @ORM\Column(name="capitolt_office_phone", type="string", length=255, nullable=true)
     */
    private $capitoltOfficePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="capitolt_office_fax", type="string", length=255, nullable=true)
     */
    private $capitoltOfficeFax;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_1", type="string", length=255, nullable=true)
     */
    private $committeeAssignment1;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_2", type="string", length=255, nullable=true)
     */
    private $committeeAssignment2;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_3", type="string", length=255, nullable=true)
     */
    private $committeeAssignment3;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_4", type="string", length=255, nullable=true)
     */
    private $committeeAssignment4;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_5", type="string", length=255, nullable=true)
     */
    private $committeeAssignment5;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_6", type="string", length=255, nullable=true)
     */
    private $committeeAssignment6;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_7", type="string", length=255, nullable=true)
     */
    private $committeeAssignment7;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_8", type="string", length=255, nullable=true)
     */
    private $committeeAssignment8;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_9", type="string", length=255, nullable=true)
     */
    private $committeeAssignment9;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_10", type="string", length=255, nullable=true)
     */
    private $committeeAssignment10;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_11", type="string", length=255, nullable=true)
     */
    private $committeeAssignment11;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_12", type="string", length=255, nullable=true)
     */
    private $committeeAssignment12;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_13", type="string", length=255, nullable=true)
     */
    private $committeeAssignment13;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_14", type="string", length=255, nullable=true)
     */
    private $committeeAssignment14;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_15", type="string", length=255, nullable=true)
     */
    private $committeeAssignment15;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_16", type="string", length=255, nullable=true)
     */
    private $committeeAssignment16;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_17", type="string", length=255, nullable=true)
     */
    private $committeeAssignment17;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_18", type="string", length=255, nullable=true)
     */
    private $committeeAssignment18;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_19", type="string", length=255, nullable=true)
     */
    private $committeeAssignment19;

    /**
     * @var string
     *
     * @ORM\Column(name="committee_assignment_20", type="string", length=255, nullable=true)
     */
    private $committeeAssignment20;

    /**
     * @var \District
     *
     * @ORM\ManyToOne(targetEntity="District")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="district_id", referencedColumnName="id")
     * })
     */
    private $district;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Committee", inversedBy="legislator")
     * @ORM\JoinTable(name="legislator_committee",
     *   joinColumns={
     *     @ORM\JoinColumn(name="legislator_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="committee_id", referencedColumnName="id")
     *   }
     * )
     */
    private $committee;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->committee = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set stateCensusCode
     *
     * @param string $stateCensusCode
     * @return Legislator
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
     * @return Legislator
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
     * @return Legislator
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
     * Set legislatorIdentificationNumber
     *
     * @param string $legislatorIdentificationNumber
     * @return Legislator
     */
    public function setLegislatorIdentificationNumber($legislatorIdentificationNumber)
    {
        $this->legislatorIdentificationNumber = $legislatorIdentificationNumber;

        return $this;
    }

    /**
     * Get legislatorIdentificationNumber
     *
     * @return string 
     */
    public function getLegislatorIdentificationNumber()
    {
        return $this->legislatorIdentificationNumber;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Legislator
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Legislator
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
     * Set middleName
     *
     * @param string $middleName
     * @return Legislator
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
     * Set lastName
     *
     * @param string $lastName
     * @return Legislator
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
     * @return Legislator
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
     * Set party
     *
     * @param string $party
     * @return Legislator
     */
    public function setParty($party)
    {
        $this->party = $party;

        return $this;
    }

    /**
     * Get party
     *
     * @return string 
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Legislator
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Legislator
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
     * Set url
     *
     * @param string $url
     * @return Legislator
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set districtOfficeAddressLine1
     *
     * @param string $districtOfficeAddressLine1
     * @return Legislator
     */
    public function setDistrictOfficeAddressLine1($districtOfficeAddressLine1)
    {
        $this->districtOfficeAddressLine1 = $districtOfficeAddressLine1;

        return $this;
    }

    /**
     * Get districtOfficeAddressLine1
     *
     * @return string 
     */
    public function getDistrictOfficeAddressLine1()
    {
        return $this->districtOfficeAddressLine1;
    }

    /**
     * Set districtOfficeAddressLine2
     *
     * @param string $districtOfficeAddressLine2
     * @return Legislator
     */
    public function setDistrictOfficeAddressLine2($districtOfficeAddressLine2)
    {
        $this->districtOfficeAddressLine2 = $districtOfficeAddressLine2;

        return $this;
    }

    /**
     * Get districtOfficeAddressLine2
     *
     * @return string 
     */
    public function getDistrictOfficeAddressLine2()
    {
        return $this->districtOfficeAddressLine2;
    }

    /**
     * Set districtOfficeCity
     *
     * @param string $districtOfficeCity
     * @return Legislator
     */
    public function setDistrictOfficeCity($districtOfficeCity)
    {
        $this->districtOfficeCity = $districtOfficeCity;

        return $this;
    }

    /**
     * Get districtOfficeCity
     *
     * @return string 
     */
    public function getDistrictOfficeCity()
    {
        return $this->districtOfficeCity;
    }

    /**
     * Set districtOfficeState
     *
     * @param string $districtOfficeState
     * @return Legislator
     */
    public function setDistrictOfficeState($districtOfficeState)
    {
        $this->districtOfficeState = $districtOfficeState;

        return $this;
    }

    /**
     * Get districtOfficeState
     *
     * @return string 
     */
    public function getDistrictOfficeState()
    {
        return $this->districtOfficeState;
    }

    /**
     * Set districtOfficeZipPlus
     *
     * @param string $districtOfficeZipPlus
     * @return Legislator
     */
    public function setDistrictOfficeZipPlus($districtOfficeZipPlus)
    {
        $this->districtOfficeZipPlus = $districtOfficeZipPlus;

        return $this;
    }

    /**
     * Get districtOfficeZipPlus
     *
     * @return string 
     */
    public function getDistrictOfficeZipPlus()
    {
        return $this->districtOfficeZipPlus;
    }

    /**
     * Set districtOfficePhone
     *
     * @param string $districtOfficePhone
     * @return Legislator
     */
    public function setDistrictOfficePhone($districtOfficePhone)
    {
        $this->districtOfficePhone = $districtOfficePhone;

        return $this;
    }

    /**
     * Get districtOfficePhone
     *
     * @return string 
     */
    public function getDistrictOfficePhone()
    {
        return $this->districtOfficePhone;
    }

    /**
     * Set districtOfficeFax
     *
     * @param string $districtOfficeFax
     * @return Legislator
     */
    public function setDistrictOfficeFax($districtOfficeFax)
    {
        $this->districtOfficeFax = $districtOfficeFax;

        return $this;
    }

    /**
     * Get districtOfficeFax
     *
     * @return string 
     */
    public function getDistrictOfficeFax()
    {
        return $this->districtOfficeFax;
    }

    /**
     * Set capitoltOfficeAddressLine1
     *
     * @param string $capitoltOfficeAddressLine1
     * @return Legislator
     */
    public function setCapitoltOfficeAddressLine1($capitoltOfficeAddressLine1)
    {
        $this->capitoltOfficeAddressLine1 = $capitoltOfficeAddressLine1;

        return $this;
    }

    /**
     * Get capitoltOfficeAddressLine1
     *
     * @return string 
     */
    public function getCapitoltOfficeAddressLine1()
    {
        return $this->capitoltOfficeAddressLine1;
    }

    /**
     * Set capitoltOfficeAddressLine2
     *
     * @param string $capitoltOfficeAddressLine2
     * @return Legislator
     */
    public function setCapitoltOfficeAddressLine2($capitoltOfficeAddressLine2)
    {
        $this->capitoltOfficeAddressLine2 = $capitoltOfficeAddressLine2;

        return $this;
    }

    /**
     * Get capitoltOfficeAddressLine2
     *
     * @return string 
     */
    public function getCapitoltOfficeAddressLine2()
    {
        return $this->capitoltOfficeAddressLine2;
    }

    /**
     * Set capitoltOfficeCity
     *
     * @param string $capitoltOfficeCity
     * @return Legislator
     */
    public function setCapitoltOfficeCity($capitoltOfficeCity)
    {
        $this->capitoltOfficeCity = $capitoltOfficeCity;

        return $this;
    }

    /**
     * Get capitoltOfficeCity
     *
     * @return string 
     */
    public function getCapitoltOfficeCity()
    {
        return $this->capitoltOfficeCity;
    }

    /**
     * Set capitoltOfficeState
     *
     * @param string $capitoltOfficeState
     * @return Legislator
     */
    public function setCapitoltOfficeState($capitoltOfficeState)
    {
        $this->capitoltOfficeState = $capitoltOfficeState;

        return $this;
    }

    /**
     * Get capitoltOfficeState
     *
     * @return string 
     */
    public function getCapitoltOfficeState()
    {
        return $this->capitoltOfficeState;
    }

    /**
     * Set capitoltOfficeZipPlus
     *
     * @param string $capitoltOfficeZipPlus
     * @return Legislator
     */
    public function setCapitoltOfficeZipPlus($capitoltOfficeZipPlus)
    {
        $this->capitoltOfficeZipPlus = $capitoltOfficeZipPlus;

        return $this;
    }

    /**
     * Get capitoltOfficeZipPlus
     *
     * @return string 
     */
    public function getCapitoltOfficeZipPlus()
    {
        return $this->capitoltOfficeZipPlus;
    }

    /**
     * Set capitoltOfficePhone
     *
     * @param string $capitoltOfficePhone
     * @return Legislator
     */
    public function setCapitoltOfficePhone($capitoltOfficePhone)
    {
        $this->capitoltOfficePhone = $capitoltOfficePhone;

        return $this;
    }

    /**
     * Get capitoltOfficePhone
     *
     * @return string 
     */
    public function getCapitoltOfficePhone()
    {
        return $this->capitoltOfficePhone;
    }

    /**
     * Set capitoltOfficeFax
     *
     * @param string $capitoltOfficeFax
     * @return Legislator
     */
    public function setCapitoltOfficeFax($capitoltOfficeFax)
    {
        $this->capitoltOfficeFax = $capitoltOfficeFax;

        return $this;
    }

    /**
     * Get capitoltOfficeFax
     *
     * @return string 
     */
    public function getCapitoltOfficeFax()
    {
        return $this->capitoltOfficeFax;
    }

    /**
     * Set committeeAssignment1
     *
     * @param string $committeeAssignment1
     * @return Legislator
     */
    public function setCommitteeAssignment1($committeeAssignment1)
    {
        $this->committeeAssignment1 = $committeeAssignment1;

        return $this;
    }

    /**
     * Get committeeAssignment1
     *
     * @return string 
     */
    public function getCommitteeAssignment1()
    {
        return $this->committeeAssignment1;
    }

    /**
     * Set committeeAssignment2
     *
     * @param string $committeeAssignment2
     * @return Legislator
     */
    public function setCommitteeAssignment2($committeeAssignment2)
    {
        $this->committeeAssignment2 = $committeeAssignment2;

        return $this;
    }

    /**
     * Get committeeAssignment2
     *
     * @return string 
     */
    public function getCommitteeAssignment2()
    {
        return $this->committeeAssignment2;
    }

    /**
     * Set committeeAssignment3
     *
     * @param string $committeeAssignment3
     * @return Legislator
     */
    public function setCommitteeAssignment3($committeeAssignment3)
    {
        $this->committeeAssignment3 = $committeeAssignment3;

        return $this;
    }

    /**
     * Get committeeAssignment3
     *
     * @return string 
     */
    public function getCommitteeAssignment3()
    {
        return $this->committeeAssignment3;
    }

    /**
     * Set committeeAssignment4
     *
     * @param string $committeeAssignment4
     * @return Legislator
     */
    public function setCommitteeAssignment4($committeeAssignment4)
    {
        $this->committeeAssignment4 = $committeeAssignment4;

        return $this;
    }

    /**
     * Get committeeAssignment4
     *
     * @return string 
     */
    public function getCommitteeAssignment4()
    {
        return $this->committeeAssignment4;
    }

    /**
     * Set committeeAssignment5
     *
     * @param string $committeeAssignment5
     * @return Legislator
     */
    public function setCommitteeAssignment5($committeeAssignment5)
    {
        $this->committeeAssignment5 = $committeeAssignment5;

        return $this;
    }

    /**
     * Get committeeAssignment5
     *
     * @return string 
     */
    public function getCommitteeAssignment5()
    {
        return $this->committeeAssignment5;
    }

    /**
     * Set committeeAssignment6
     *
     * @param string $committeeAssignment6
     * @return Legislator
     */
    public function setCommitteeAssignment6($committeeAssignment6)
    {
        $this->committeeAssignment6 = $committeeAssignment6;

        return $this;
    }

    /**
     * Get committeeAssignment6
     *
     * @return string 
     */
    public function getCommitteeAssignment6()
    {
        return $this->committeeAssignment6;
    }

    /**
     * Set committeeAssignment7
     *
     * @param string $committeeAssignment7
     * @return Legislator
     */
    public function setCommitteeAssignment7($committeeAssignment7)
    {
        $this->committeeAssignment7 = $committeeAssignment7;

        return $this;
    }

    /**
     * Get committeeAssignment7
     *
     * @return string 
     */
    public function getCommitteeAssignment7()
    {
        return $this->committeeAssignment7;
    }

    /**
     * Set committeeAssignment8
     *
     * @param string $committeeAssignment8
     * @return Legislator
     */
    public function setCommitteeAssignment8($committeeAssignment8)
    {
        $this->committeeAssignment8 = $committeeAssignment8;

        return $this;
    }

    /**
     * Get committeeAssignment8
     *
     * @return string 
     */
    public function getCommitteeAssignment8()
    {
        return $this->committeeAssignment8;
    }

    /**
     * Set committeeAssignment9
     *
     * @param string $committeeAssignment9
     * @return Legislator
     */
    public function setCommitteeAssignment9($committeeAssignment9)
    {
        $this->committeeAssignment9 = $committeeAssignment9;

        return $this;
    }

    /**
     * Get committeeAssignment9
     *
     * @return string 
     */
    public function getCommitteeAssignment9()
    {
        return $this->committeeAssignment9;
    }

    /**
     * Set committeeAssignment10
     *
     * @param string $committeeAssignment10
     * @return Legislator
     */
    public function setCommitteeAssignment10($committeeAssignment10)
    {
        $this->committeeAssignment10 = $committeeAssignment10;

        return $this;
    }

    /**
     * Get committeeAssignment10
     *
     * @return string 
     */
    public function getCommitteeAssignment10()
    {
        return $this->committeeAssignment10;
    }

    /**
     * Set committeeAssignment11
     *
     * @param string $committeeAssignment11
     * @return Legislator
     */
    public function setCommitteeAssignment11($committeeAssignment11)
    {
        $this->committeeAssignment11 = $committeeAssignment11;

        return $this;
    }

    /**
     * Get committeeAssignment11
     *
     * @return string 
     */
    public function getCommitteeAssignment11()
    {
        return $this->committeeAssignment11;
    }

    /**
     * Set committeeAssignment12
     *
     * @param string $committeeAssignment12
     * @return Legislator
     */
    public function setCommitteeAssignment12($committeeAssignment12)
    {
        $this->committeeAssignment12 = $committeeAssignment12;

        return $this;
    }

    /**
     * Get committeeAssignment12
     *
     * @return string 
     */
    public function getCommitteeAssignment12()
    {
        return $this->committeeAssignment12;
    }

    /**
     * Set committeeAssignment13
     *
     * @param string $committeeAssignment13
     * @return Legislator
     */
    public function setCommitteeAssignment13($committeeAssignment13)
    {
        $this->committeeAssignment13 = $committeeAssignment13;

        return $this;
    }

    /**
     * Get committeeAssignment13
     *
     * @return string 
     */
    public function getCommitteeAssignment13()
    {
        return $this->committeeAssignment13;
    }

    /**
     * Set committeeAssignment14
     *
     * @param string $committeeAssignment14
     * @return Legislator
     */
    public function setCommitteeAssignment14($committeeAssignment14)
    {
        $this->committeeAssignment14 = $committeeAssignment14;

        return $this;
    }

    /**
     * Get committeeAssignment14
     *
     * @return string 
     */
    public function getCommitteeAssignment14()
    {
        return $this->committeeAssignment14;
    }

    /**
     * Set committeeAssignment15
     *
     * @param string $committeeAssignment15
     * @return Legislator
     */
    public function setCommitteeAssignment15($committeeAssignment15)
    {
        $this->committeeAssignment15 = $committeeAssignment15;

        return $this;
    }

    /**
     * Get committeeAssignment15
     *
     * @return string 
     */
    public function getCommitteeAssignment15()
    {
        return $this->committeeAssignment15;
    }

    /**
     * Set committeeAssignment16
     *
     * @param string $committeeAssignment16
     * @return Legislator
     */
    public function setCommitteeAssignment16($committeeAssignment16)
    {
        $this->committeeAssignment16 = $committeeAssignment16;

        return $this;
    }

    /**
     * Get committeeAssignment16
     *
     * @return string 
     */
    public function getCommitteeAssignment16()
    {
        return $this->committeeAssignment16;
    }

    /**
     * Set committeeAssignment17
     *
     * @param string $committeeAssignment17
     * @return Legislator
     */
    public function setCommitteeAssignment17($committeeAssignment17)
    {
        $this->committeeAssignment17 = $committeeAssignment17;

        return $this;
    }

    /**
     * Get committeeAssignment17
     *
     * @return string 
     */
    public function getCommitteeAssignment17()
    {
        return $this->committeeAssignment17;
    }

    /**
     * Set committeeAssignment18
     *
     * @param string $committeeAssignment18
     * @return Legislator
     */
    public function setCommitteeAssignment18($committeeAssignment18)
    {
        $this->committeeAssignment18 = $committeeAssignment18;

        return $this;
    }

    /**
     * Get committeeAssignment18
     *
     * @return string 
     */
    public function getCommitteeAssignment18()
    {
        return $this->committeeAssignment18;
    }

    /**
     * Set committeeAssignment19
     *
     * @param string $committeeAssignment19
     * @return Legislator
     */
    public function setCommitteeAssignment19($committeeAssignment19)
    {
        $this->committeeAssignment19 = $committeeAssignment19;

        return $this;
    }

    /**
     * Get committeeAssignment19
     *
     * @return string 
     */
    public function getCommitteeAssignment19()
    {
        return $this->committeeAssignment19;
    }

    /**
     * Set committeeAssignment20
     *
     * @param string $committeeAssignment20
     * @return Legislator
     */
    public function setCommitteeAssignment20($committeeAssignment20)
    {
        $this->committeeAssignment20 = $committeeAssignment20;

        return $this;
    }

    /**
     * Get committeeAssignment20
     *
     * @return string 
     */
    public function getCommitteeAssignment20()
    {
        return $this->committeeAssignment20;
    }

    /**
     * Set district
     *
     * @param \Schema\Bundle\Entity\District $district
     * @return Legislator
     */
    public function setDistrict(\Schema\Bundle\Entity\District $district = null)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return \Schema\Bundle\Entity\District 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Add committee
     *
     * @param \Schema\Bundle\Entity\Committee $committee
     * @return Legislator
     */
    public function addCommittee(\Schema\Bundle\Entity\Committee $committee)
    {
        $this->committee[] = $committee;

        return $this;
    }

    /**
     * Remove committee
     *
     * @param \Schema\Bundle\Entity\Committee $committee
     */
    public function removeCommittee(\Schema\Bundle\Entity\Committee $committee)
    {
        $this->committee->removeElement($committee);
    }

    /**
     * Get committee
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommittee()
    {
        return $this->committee;
    }
}
