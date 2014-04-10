<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberTransaction
 *
 * @ORM\Table(name="member_transaction", indexes={@ORM\Index(name="IDX_AB0A11137597D3FE", columns={"member_id"})})
 * @ORM\Entity
 */
class MemberTransaction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="authorize_transaction_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $authorizeTransactionId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="transaction_date", type="datetime", nullable=true)
     */
    private $transactionDate;

    /**
     * @var \Member
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Member")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="member_id", referencedColumnName="id")
     * })
     */
    private $member;



    /**
     * Set authorizeTransactionId
     *
     * @param integer $authorizeTransactionId
     * @return MemberTransaction
     */
    public function setAuthorizeTransactionId($authorizeTransactionId)
    {
        $this->authorizeTransactionId = $authorizeTransactionId;

        return $this;
    }

    /**
     * Get authorizeTransactionId
     *
     * @return integer 
     */
    public function getAuthorizeTransactionId()
    {
        return $this->authorizeTransactionId;
    }

    /**
     * Set transactionDate
     *
     * @param \DateTime $transactionDate
     * @return MemberTransaction
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transactionDate = $transactionDate;

        return $this;
    }

    /**
     * Get transactionDate
     *
     * @return \DateTime 
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * Set member
     *
     * @param \Schema\Bundle\Entity\Member $member
     * @return MemberTransaction
     */
    public function setMember(\Schema\Bundle\Entity\Member $member)
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
