<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MembersChangePaymentTypeHistory
 *
 * @ORM\Table(name="members_change_payment_type_history", indexes={@ORM\Index(name="IDX_A1E9285A7597D3FE", columns={"member_id"})})
 * @ORM\Entity
 */
class MembersChangePaymentTypeHistory
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
     * @ORM\Column(name="reviewed", type="boolean", nullable=true)
     */
    private $reviewed;

    /**
     * @var integer
     *
     * @ORM\Column(name="current_payment_type_id", type="integer", nullable=true)
     */
    private $currentPaymentTypeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="new_payment_type_id", type="integer", nullable=true)
     */
    private $newPaymentTypeId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true)
     */
    private $updateDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_user_id", type="integer", nullable=true)
     */
    private $updatedUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="current_account", type="string", length=45, nullable=true)
     */
    private $currentAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="current_account_code", type="string", length=45, nullable=true)
     */
    private $currentAccountCode;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reviewed
     *
     * @param boolean $reviewed
     * @return MembersChangePaymentTypeHistory
     */
    public function setReviewed($reviewed)
    {
        $this->reviewed = $reviewed;

        return $this;
    }

    /**
     * Get reviewed
     *
     * @return boolean 
     */
    public function getReviewed()
    {
        return $this->reviewed;
    }

    /**
     * Set currentPaymentTypeId
     *
     * @param integer $currentPaymentTypeId
     * @return MembersChangePaymentTypeHistory
     */
    public function setCurrentPaymentTypeId($currentPaymentTypeId)
    {
        $this->currentPaymentTypeId = $currentPaymentTypeId;

        return $this;
    }

    /**
     * Get currentPaymentTypeId
     *
     * @return integer 
     */
    public function getCurrentPaymentTypeId()
    {
        return $this->currentPaymentTypeId;
    }

    /**
     * Set newPaymentTypeId
     *
     * @param integer $newPaymentTypeId
     * @return MembersChangePaymentTypeHistory
     */
    public function setNewPaymentTypeId($newPaymentTypeId)
    {
        $this->newPaymentTypeId = $newPaymentTypeId;

        return $this;
    }

    /**
     * Get newPaymentTypeId
     *
     * @return integer 
     */
    public function getNewPaymentTypeId()
    {
        return $this->newPaymentTypeId;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return MembersChangePaymentTypeHistory
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set updatedUserId
     *
     * @param integer $updatedUserId
     * @return MembersChangePaymentTypeHistory
     */
    public function setUpdatedUserId($updatedUserId)
    {
        $this->updatedUserId = $updatedUserId;

        return $this;
    }

    /**
     * Get updatedUserId
     *
     * @return integer 
     */
    public function getUpdatedUserId()
    {
        return $this->updatedUserId;
    }

    /**
     * Set currentAccount
     *
     * @param string $currentAccount
     * @return MembersChangePaymentTypeHistory
     */
    public function setCurrentAccount($currentAccount)
    {
        $this->currentAccount = $currentAccount;

        return $this;
    }

    /**
     * Get currentAccount
     *
     * @return string 
     */
    public function getCurrentAccount()
    {
        return $this->currentAccount;
    }

    /**
     * Set currentAccountCode
     *
     * @param string $currentAccountCode
     * @return MembersChangePaymentTypeHistory
     */
    public function setCurrentAccountCode($currentAccountCode)
    {
        $this->currentAccountCode = $currentAccountCode;

        return $this;
    }

    /**
     * Get currentAccountCode
     *
     * @return string 
     */
    public function getCurrentAccountCode()
    {
        return $this->currentAccountCode;
    }

    /**
     * Set member
     *
     * @param \Schema\Bundle\Entity\Member $member
     * @return MembersChangePaymentTypeHistory
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
}
