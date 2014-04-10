<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportCategoryList
 *
 * @ORM\Table(name="report_category_list")
 * @ORM\Entity
 */
class ReportCategoryList
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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="on_report_menu", type="boolean", nullable=true)
     */
    private $onReportMenu;



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
     * @return ReportCategoryList
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
     * Set description
     *
     * @param string $description
     * @return ReportCategoryList
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set onReportMenu
     *
     * @param boolean $onReportMenu
     * @return ReportCategoryList
     */
    public function setOnReportMenu($onReportMenu)
    {
        $this->onReportMenu = $onReportMenu;

        return $this;
    }

    /**
     * Get onReportMenu
     *
     * @return boolean 
     */
    public function getOnReportMenu()
    {
        return $this->onReportMenu;
    }
}
