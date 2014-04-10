<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SweepLogin
 *
 * @ORM\Table(name="sweep_login")
 * @ORM\Entity
 */
class SweepLogin
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
     * @var integer
     *
     * @ORM\Column(name="sweep_id", type="integer", nullable=true)
     */
    private $sweepId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="member_id", type="integer", nullable=true)
     */
    private $memberId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=45, nullable=true)
     */
    private $userName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="login_date", type="datetime", nullable=true)
     */
    private $loginDate;



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
     * Set sweepId
     *
     * @param integer $sweepId
     * @return SweepLogin
     */
    public function setSweepId($sweepId)
    {
        $this->sweepId = $sweepId;

        return $this;
    }

    /**
     * Get sweepId
     *
     * @return integer 
     */
    public function getSweepId()
    {
        return $this->sweepId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return SweepLogin
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     * @return SweepLogin
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get memberId
     *
     * @return integer 
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return SweepLogin
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set loginDate
     *
     * @param \DateTime $loginDate
     * @return SweepLogin
     */
    public function setLoginDate($loginDate)
    {
        $this->loginDate = $loginDate;

        return $this;
    }

    /**
     * Get loginDate
     *
     * @return \DateTime 
     */
    public function getLoginDate()
    {
        return $this->loginDate;
    }
}
