<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ColumnMeta
 *
 * @ORM\Table(name="column_meta")
 * @ORM\Entity
 */
class ColumnMeta
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
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="display", type="string", length=45, nullable=true)
     */
    private $display;

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_quote", type="boolean", nullable=true)
     */
    private $useQuote;

    /**
     * @var boolean
     *
     * @ORM\Column(name="do_filter", type="boolean", nullable=true)
     */
    private $doFilter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="do_display", type="boolean", nullable=true)
     */
    private $doDisplay;

    /**
     * @var integer
     *
     * @ORM\Column(name="sql_db_type", type="integer", nullable=true)
     */
    private $sqlDbType;



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
     * Set name
     *
     * @param string $name
     * @return ColumnMeta
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set display
     *
     * @param string $display
     * @return ColumnMeta
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * Get display
     *
     * @return string 
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set useQuote
     *
     * @param boolean $useQuote
     * @return ColumnMeta
     */
    public function setUseQuote($useQuote)
    {
        $this->useQuote = $useQuote;

        return $this;
    }

    /**
     * Get useQuote
     *
     * @return boolean 
     */
    public function getUseQuote()
    {
        return $this->useQuote;
    }

    /**
     * Set doFilter
     *
     * @param boolean $doFilter
     * @return ColumnMeta
     */
    public function setDoFilter($doFilter)
    {
        $this->doFilter = $doFilter;

        return $this;
    }

    /**
     * Get doFilter
     *
     * @return boolean 
     */
    public function getDoFilter()
    {
        return $this->doFilter;
    }

    /**
     * Set doDisplay
     *
     * @param boolean $doDisplay
     * @return ColumnMeta
     */
    public function setDoDisplay($doDisplay)
    {
        $this->doDisplay = $doDisplay;

        return $this;
    }

    /**
     * Get doDisplay
     *
     * @return boolean 
     */
    public function getDoDisplay()
    {
        return $this->doDisplay;
    }

    /**
     * Set sqlDbType
     *
     * @param integer $sqlDbType
     * @return ColumnMeta
     */
    public function setSqlDbType($sqlDbType)
    {
        $this->sqlDbType = $sqlDbType;

        return $this;
    }

    /**
     * Get sqlDbType
     *
     * @return integer 
     */
    public function getSqlDbType()
    {
        return $this->sqlDbType;
    }
}
