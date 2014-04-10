<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberStatementPattern
 *
 * @ORM\Table(name="member_statement_pattern", indexes={@ORM\Index(name="fk_statement_pattern_member_statement_pattern_idx", columns={"statement_pattern_id"})})
 * @ORM\Entity
 */
class MemberStatementPattern
{
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
     * @var \StatementPattern
     *
     * @ORM\ManyToOne(targetEntity="StatementPattern")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="statement_pattern_id", referencedColumnName="id")
     * })
     */
    private $statementPattern;



    /**
     * Set member
     *
     * @param \Schema\Bundle\Entity\Member $member
     * @return MemberStatementPattern
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

    /**
     * Set statementPattern
     *
     * @param \Schema\Bundle\Entity\StatementPattern $statementPattern
     * @return MemberStatementPattern
     */
    public function setStatementPattern(\Schema\Bundle\Entity\StatementPattern $statementPattern = null)
    {
        $this->statementPattern = $statementPattern;

        return $this;
    }

    /**
     * Get statementPattern
     *
     * @return \Schema\Bundle\Entity\StatementPattern 
     */
    public function getStatementPattern()
    {
        return $this->statementPattern;
    }
}