<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupStatementPattern
 *
 * @ORM\Table(name="group_statement_pattern", indexes={@ORM\Index(name="fk_statement_pattern_group_statement_pattern_idx", columns={"statement_pattern_id"})})
 * @ORM\Entity
 */
class GroupStatementPattern
{
    /**
     * @var \LocalGroup
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="LocalGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

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
     * Set group
     *
     * @param \Schema\Bundle\Entity\LocalGroup $group
     * @return GroupStatementPattern
     */
    public function setGroup(\Schema\Bundle\Entity\LocalGroup $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Schema\Bundle\Entity\LocalGroup 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set statementPattern
     *
     * @param \Schema\Bundle\Entity\StatementPattern $statementPattern
     * @return GroupStatementPattern
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
