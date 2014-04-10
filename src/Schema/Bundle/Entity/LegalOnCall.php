<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LegalOnCall
 *
 * @ORM\Table(name="legal_on_call", indexes={@ORM\Index(name="IDX_42DEBB0E4C19F89F", columns={"lawyer_id"})})
 * @ORM\Entity
 */
class LegalOnCall
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
     * @ORM\Column(name="begin", type="datetime", nullable=true)
     */
    private $begin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime", nullable=true)
     */
    private $end;

    /**
     * @var \Lawyer
     *
     * @ORM\ManyToOne(targetEntity="Lawyer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lawyer_id", referencedColumnName="id")
     * })
     */
    private $lawyer;



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
     * Set begin
     *
     * @param \DateTime $begin
     * @return LegalOnCall
     */
    public function setBegin($begin)
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * Get begin
     *
     * @return \DateTime 
     */
    public function getBegin()
    {
        return $this->begin;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     * @return LegalOnCall
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime 
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set lawyer
     *
     * @param \Schema\Bundle\Entity\Lawyer $lawyer
     * @return LegalOnCall
     */
    public function setLawyer(\Schema\Bundle\Entity\Lawyer $lawyer = null)
    {
        $this->lawyer = $lawyer;

        return $this;
    }

    /**
     * Get lawyer
     *
     * @return \Schema\Bundle\Entity\Lawyer 
     */
    public function getLawyer()
    {
        return $this->lawyer;
    }
}
