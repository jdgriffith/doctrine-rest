<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportCategory
 *
 * @ORM\Table(name="report_category")
 * @ORM\Entity
 */
class ReportCategory
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
     * @ORM\Column(name="report_meta_id", type="integer", nullable=true)
     */
    private $reportMetaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="report_category_list_id", type="integer", nullable=true)
     */
    private $reportCategoryListId;



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
     * Set reportMetaId
     *
     * @param integer $reportMetaId
     * @return ReportCategory
     */
    public function setReportMetaId($reportMetaId)
    {
        $this->reportMetaId = $reportMetaId;

        return $this;
    }

    /**
     * Get reportMetaId
     *
     * @return integer 
     */
    public function getReportMetaId()
    {
        return $this->reportMetaId;
    }

    /**
     * Set reportCategoryListId
     *
     * @param integer $reportCategoryListId
     * @return ReportCategory
     */
    public function setReportCategoryListId($reportCategoryListId)
    {
        $this->reportCategoryListId = $reportCategoryListId;

        return $this;
    }

    /**
     * Get reportCategoryListId
     *
     * @return integer 
     */
    public function getReportCategoryListId()
    {
        return $this->reportCategoryListId;
    }
}
