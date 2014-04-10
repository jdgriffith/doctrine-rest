<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatementPattern
 *
 * @ORM\Table(name="statement_pattern")
 * @ORM\Entity
 */
class StatementPattern
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
     * @ORM\Column(name="interval", type="string", length=45, nullable=true)
     */
    private $interval;

    /**
     * @var string
     *
     * @ORM\Column(name="post_day", type="string", length=45, nullable=true)
     */
    private $postDay;



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
     * Set interval
     *
     * @param string $interval
     * @return StatementPattern
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;

        return $this;
    }

    /**
     * Get interval
     *
     * @return string 
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Set postDay
     *
     * @param string $postDay
     * @return StatementPattern
     */
    public function setPostDay($postDay)
    {
        $this->postDay = $postDay;

        return $this;
    }

    /**
     * Get postDay
     *
     * @return string 
     */
    public function getPostDay()
    {
        return $this->postDay;
    }
}
