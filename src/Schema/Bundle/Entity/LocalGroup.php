<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocalGroup
 *
 * @ORM\Table(name="local_group")
 * @ORM\Entity
 */
class LocalGroup
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Statement", inversedBy="group")
     * @ORM\JoinTable(name="group_statement",
     *   joinColumns={
     *     @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="statement_id", referencedColumnName="id")
     *   }
     * )
     */
    private $statement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Local", inversedBy="localGroup")
     * @ORM\JoinTable(name="local_group_local",
     *   joinColumns={
     *     @ORM\JoinColumn(name="local_group_id", referencedColumnName="id")
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
        $this->statement = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return LocalGroup
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
     * @return LocalGroup
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
     * Add statement
     *
     * @param \Schema\Bundle\Entity\Statement $statement
     * @return LocalGroup
     */
    public function addStatement(\Schema\Bundle\Entity\Statement $statement)
    {
        $this->statement[] = $statement;

        return $this;
    }

    /**
     * Remove statement
     *
     * @param \Schema\Bundle\Entity\Statement $statement
     */
    public function removeStatement(\Schema\Bundle\Entity\Statement $statement)
    {
        $this->statement->removeElement($statement);
    }

    /**
     * Get statement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStatement()
    {
        return $this->statement;
    }

    /**
     * Add local
     *
     * @param \Schema\Bundle\Entity\Local $local
     * @return LocalGroup
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
