<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LegalBroadcast
 *
 * @ORM\Table(name="legal_broadcast")
 * @ORM\Entity
 */
class LegalBroadcast
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
     * @ORM\Column(name="name", type="string", length=75, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="cell", type="string", length=45, nullable=true)
     */
    private $cell;

    /**
     * @var string
     *
     * @ORM\Column(name="home", type="string", length=45, nullable=true)
     */
    private $home;

    /**
     * @var string
     *
     * @ORM\Column(name="other_phone", type="string", length=45, nullable=true)
     */
    private $otherPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;



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
     * @return LegalBroadcast
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
     * Set cell
     *
     * @param string $cell
     * @return LegalBroadcast
     */
    public function setCell($cell)
    {
        $this->cell = $cell;

        return $this;
    }

    /**
     * Get cell
     *
     * @return string 
     */
    public function getCell()
    {
        return $this->cell;
    }

    /**
     * Set home
     *
     * @param string $home
     * @return LegalBroadcast
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home
     *
     * @return string 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set otherPhone
     *
     * @param string $otherPhone
     * @return LegalBroadcast
     */
    public function setOtherPhone($otherPhone)
    {
        $this->otherPhone = $otherPhone;

        return $this;
    }

    /**
     * Get otherPhone
     *
     * @return string 
     */
    public function getOtherPhone()
    {
        return $this->otherPhone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return LegalBroadcast
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
