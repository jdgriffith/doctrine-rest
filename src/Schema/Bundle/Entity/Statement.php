<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statement
 *
 * @ORM\Table(name="statement", indexes={@ORM\Index(name="fk_statement_type_statement_idx", columns={"statement_type_id"}), @ORM\Index(name="fk_statement_statement_idx", columns={"parent_statement_id"})})
 * @ORM\Entity
 */
class Statement
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
     * @ORM\Column(name="post_date", type="datetime", nullable=true)
     */
    private $postDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="due_date", type="datetime", nullable=true)
     */
    private $dueDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_date", type="datetime", nullable=true)
     */
    private $beginDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var float
     *
     * @ORM\Column(name="amount_due", type="float", precision=10, scale=0, nullable=true)
     */
    private $amountDue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="paid", type="boolean", nullable=true)
     */
    private $paid;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note;

    /**
     * @var \StatementType
     *
     * @ORM\ManyToOne(targetEntity="StatementType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="statement_type_id", referencedColumnName="id")
     * })
     */
    private $statementType;

    /**
     * @var \Statement
     *
     * @ORM\ManyToOne(targetEntity="Statement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_statement_id", referencedColumnName="id")
     * })
     */
    private $parentStatement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LocalGroup", mappedBy="statement")
     */
    private $group;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Member", mappedBy="statement")
     */
    private $member;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Local", inversedBy="statement")
     * @ORM\JoinTable(name="statement_local",
     *   joinColumns={
     *     @ORM\JoinColumn(name="statement_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="local_id", referencedColumnName="id")
     *   }
     * )
     */
    private $local;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->group = new \Doctrine\Common\Collections\ArrayCollection();
        $this->member = new \Doctrine\Common\Collections\ArrayCollection();
        $this->local = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set postDate
     *
     * @param \DateTime $postDate
     * @return Statement
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * Get postDate
     *
     * @return \DateTime 
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return Statement
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime 
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set beginDate
     *
     * @param \DateTime $beginDate
     * @return Statement
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get beginDate
     *
     * @return \DateTime 
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Statement
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set amountDue
     *
     * @param float $amountDue
     * @return Statement
     */
    public function setAmountDue($amountDue)
    {
        $this->amountDue = $amountDue;

        return $this;
    }

    /**
     * Get amountDue
     *
     * @return float 
     */
    public function getAmountDue()
    {
        return $this->amountDue;
    }

    /**
     * Set paid
     *
     * @param boolean $paid
     * @return Statement
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get paid
     *
     * @return boolean 
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Statement
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
     * Set statementType
     *
     * @param \Schema\Bundle\Entity\StatementType $statementType
     * @return Statement
     */
    public function setStatementType(\Schema\Bundle\Entity\StatementType $statementType = null)
    {
        $this->statementType = $statementType;

        return $this;
    }

    /**
     * Get statementType
     *
     * @return \Schema\Bundle\Entity\StatementType 
     */
    public function getStatementType()
    {
        return $this->statementType;
    }

    /**
     * Set parentStatement
     *
     * @param \Schema\Bundle\Entity\Statement $parentStatement
     * @return Statement
     */
    public function setParentStatement(\Schema\Bundle\Entity\Statement $parentStatement = null)
    {
        $this->parentStatement = $parentStatement;

        return $this;
    }

    /**
     * Get parentStatement
     *
     * @return \Schema\Bundle\Entity\Statement 
     */
    public function getParentStatement()
    {
        return $this->parentStatement;
    }

    /**
     * Add group
     *
     * @param \Schema\Bundle\Entity\LocalGroup $group
     * @return Statement
     */
    public function addGroup(\Schema\Bundle\Entity\LocalGroup $group)
    {
        $this->group[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \Schema\Bundle\Entity\LocalGroup $group
     */
    public function removeGroup(\Schema\Bundle\Entity\LocalGroup $group)
    {
        $this->group->removeElement($group);
    }

    /**
     * Get group
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Add member
     *
     * @param \Schema\Bundle\Entity\Member $member
     * @return Statement
     */
    public function addMember(\Schema\Bundle\Entity\Member $member)
    {
        $this->member[] = $member;

        return $this;
    }

    /**
     * Remove member
     *
     * @param \Schema\Bundle\Entity\Member $member
     */
    public function removeMember(\Schema\Bundle\Entity\Member $member)
    {
        $this->member->removeElement($member);
    }

    /**
     * Get member
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Add local
     *
     * @param \Schema\Bundle\Entity\Local $local
     * @return Statement
     */
    public function addLocal(\Schema\Bundle\Entity\Local $local)
    {
        $this->local[] = $local;

        return $this;
    }

    /**
     * Remove local
     *
     * @param \Schema\Bundle\Entity\Local $local
     */
    public function removeLocal(\Schema\Bundle\Entity\Local $local)
    {
        $this->local->removeElement($local);
    }

    /**
     * Get local
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLocal()
    {
        return $this->local;
    }
}
