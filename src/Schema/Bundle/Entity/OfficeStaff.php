<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfficeStaff
 *
 * @ORM\Table(name="office_staff", indexes={@ORM\Index(name="fk_office_office_staff_idx", columns={"office_id"})})
 * @ORM\Entity
 */
class OfficeStaff
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
     * @ORM\Column(name="first_name", type="string", length=100, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=100, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="cell", type="string", length=45, nullable=true)
     */
    private $cell;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var \Office
     *
     * @ORM\ManyToOne(targetEntity="Office")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="office_id", referencedColumnName="id")
     * })
     */
    private $office;



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
     * Set firstName
     *
     * @param string $firstName
     * @return OfficeStaff
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return OfficeStaff
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return OfficeStaff
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set cell
     *
     * @param string $cell
     * @return OfficeStaff
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
     * Set email
     *
     * @param string $email
     * @return OfficeStaff
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

    /**
     * Set office
     *
     * @param \Schema\Bundle\Entity\Office $office
     * @return OfficeStaff
     */
    public function setOffice(\Schema\Bundle\Entity\Office $office = null)
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Get office
     *
     * @return \Schema\Bundle\Entity\Office 
     */
    public function getOffice()
    {
        return $this->office;
    }
}
