<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressApplication
 *
 * @ORM\Table(name="address_application", indexes={@ORM\Index(name="IDX_B394FE0A1E4EB97C", columns={"real_estate_id"}), @ORM\Index(name="IDX_B394FE0A5D5A2101", columns={"local_id"}), @ORM\Index(name="IDX_B394FE0A7597D3FE", columns={"member_id"}), @ORM\Index(name="IDX_B394FE0AB08FA272", columns={"district_id"}), @ORM\Index(name="IDX_B394FE0AD182060A", columns={"prospect_id"}), @ORM\Index(name="IDX_B394FE0AF5B7AF75", columns={"address_id"}), @ORM\Index(name="IDX_B394FE0AFFA0C224", columns={"office_id"}), @ORM\Index(name="IDX_B394FE0AF603EE73", columns={"vendor_id"})})
 * @ORM\Entity
 */
class AddressApplication
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
     * @var \RealEstate
     *
     * @ORM\ManyToOne(targetEntity="RealEstate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="real_estate_id", referencedColumnName="id")
     * })
     */
    private $realEstate;

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
     * @var \District
     *
     * @ORM\ManyToOne(targetEntity="District")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="district_id", referencedColumnName="id")
     * })
     */
    private $district;

    /**
     * @var \Prospect
     *
     * @ORM\ManyToOne(targetEntity="Prospect")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prospect_id", referencedColumnName="id")
     * })
     */
    private $prospect;

    /**
     * @var \Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     * })
     */
    private $address;

    /**
     * @var \Vendor
     *
     * @ORM\ManyToOne(targetEntity="Vendor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vendor_id", referencedColumnName="id")
     * })
     */
    private $vendor;

    /**
     * @var \Office
     *
     * @ORM\ManyToOne(targetEntity="Office")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="office_id", referencedColumnName="id")
     * })
     */
    private $office;



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
     * Set realEstate
     *
     * @param \Schema\Bundle\Entity\RealEstate $realEstate
     * @return AddressApplication
     */
    public function setRealEstate(\Schema\Bundle\Entity\RealEstate $realEstate = null)
    {
        $this->realEstate = $realEstate;

        return $this;
    }

    /**
     * Get realEstate
     *
     * @return \Schema\Bundle\Entity\RealEstate 
     */
    public function getRealEstate()
    {
        return $this->realEstate;
    }

    /**
     * Set local
     *
     * @param \Schema\Bundle\Entity\Local $local
     * @return AddressApplication
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
     * @return AddressApplication
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
     * Set district
     *
     * @param \Schema\Bundle\Entity\District $district
     * @return AddressApplication
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
     * Set prospect
     *
     * @param \Schema\Bundle\Entity\Prospect $prospect
     * @return AddressApplication
     */
    public function setProspect(\Schema\Bundle\Entity\Prospect $prospect = null)
    {
        $this->prospect = $prospect;

        return $this;
    }

    /**
     * Get prospect
     *
     * @return \Schema\Bundle\Entity\Prospect 
     */
    public function getProspect()
    {
        return $this->prospect;
    }

    /**
     * Set address
     *
     * @param \Schema\Bundle\Entity\Address $address
     * @return AddressApplication
     */
    public function setAddress(\Schema\Bundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \Schema\Bundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set vendor
     *
     * @param \Schema\Bundle\Entity\Vendor $vendor
     * @return AddressApplication
     */
    public function setVendor(\Schema\Bundle\Entity\Vendor $vendor = null)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return \Schema\Bundle\Entity\Vendor 
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set office
     *
     * @param \Schema\Bundle\Entity\Office $office
     * @return AddressApplication
     */
    public function setOffice(\Schema\Bundle\Entity\Office $office = null)
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Get office
     *
     * @return \Schema\Bundle\Entity\Office 
     */
    public function getOffice()
    {
        return $this->office;
    }
}
