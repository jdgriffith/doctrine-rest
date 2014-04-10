<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedback
 *
 * @ORM\Table(name="feedback", indexes={@ORM\Index(name="IDX_D22944585415AC30", columns={"feedback_type_id"})})
 * @ORM\Entity
 */
class Feedback
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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="affects", type="text", nullable=true)
     */
    private $affects;

    /**
     * @var string
     *
     * @ORM\Column(name="desired", type="text", nullable=true)
     */
    private $desired;

    /**
     * @var \FeedbackType
     *
     * @ORM\ManyToOne(targetEntity="FeedbackType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="feedback_type_id", referencedColumnName="id")
     * })
     */
    private $feedbackType;



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
     * Set description
     *
     * @param string $description
     * @return Feedback
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
     * Set affects
     *
     * @param string $affects
     * @return Feedback
     */
    public function setAffects($affects)
    {
        $this->affects = $affects;

        return $this;
    }

    /**
     * Get affects
     *
     * @return string 
     */
    public function getAffects()
    {
        return $this->affects;
    }

    /**
     * Set desired
     *
     * @param string $desired
     * @return Feedback
     */
    public function setDesired($desired)
    {
        $this->desired = $desired;

        return $this;
    }

    /**
     * Get desired
     *
     * @return string 
     */
    public function getDesired()
    {
        return $this->desired;
    }

    /**
     * Set feedbackType
     *
     * @param \Schema\Bundle\Entity\FeedbackType $feedbackType
     * @return Feedback
     */
    public function setFeedbackType(\Schema\Bundle\Entity\FeedbackType $feedbackType = null)
    {
        $this->feedbackType = $feedbackType;

        return $this;
    }

    /**
     * Get feedbackType
     *
     * @return \Schema\Bundle\Entity\FeedbackType 
     */
    public function getFeedbackType()
    {
        return $this->feedbackType;
    }
}
