<?php

namespace Schema\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", indexes={@ORM\Index(name="fk_notification_type_notification_idx", columns={"notification_type_id"})})
 * @ORM\Entity
 */
class Notification
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
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="event", type="string", length=45, nullable=true)
     */
    private $event;

    /**
     * @var \NotificationType
     *
     * @ORM\ManyToOne(targetEntity="NotificationType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="notification_type_id", referencedColumnName="id")
     * })
     */
    private $notificationType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="FosUserUser", inversedBy="notification")
     * @ORM\JoinTable(name="notification_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="notification_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   }
     * )
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Notification
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
     * @return Notification
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
     * Set event
     *
     * @param string $event
     * @return Notification
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return string 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set notificationType
     *
     * @param \Schema\Bundle\Entity\NotificationType $notificationType
     * @return Notification
     */
    public function setNotificationType(\Schema\Bundle\Entity\NotificationType $notificationType = null)
    {
        $this->notificationType = $notificationType;

        return $this;
    }

    /**
     * Get notificationType
     *
     * @return \Schema\Bundle\Entity\NotificationType 
     */
    public function getNotificationType()
    {
        return $this->notificationType;
    }

    /**
     * Add user
     *
     * @param \Schema\Bundle\Entity\FosUserUser $user
     * @return Notification
     */
    public function addUser(\Schema\Bundle\Entity\FosUserUser $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Schema\Bundle\Entity\FosUserUser $user
     */
    public function removeUser(\Schema\Bundle\Entity\FosUserUser $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
}
