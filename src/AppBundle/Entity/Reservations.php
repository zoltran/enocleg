<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservations
 *
 * @ORM\Table(name="reservations")
 * @ORM\Entity
 */
class Reservations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="object_id", type="integer", nullable=false)
     */
    private $objectId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reservation_from", type="date", nullable=false)
     */
    private $reservationFrom = '0000-00-00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reservation_to", type="date", nullable=false)
     */
    private $reservationTo = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=200, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=200, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="price_paid", type="string", length=200, nullable=true)
     */
    private $pricePaid;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2000, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set objectId
     *
     * @param integer $objectId
     *
     * @return Reservations
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Get objectId
     *
     * @return integer
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set reservationFrom
     *
     * @param \DateTime $reservationFrom
     *
     * @return Reservations
     */
    public function setReservationFrom($reservationFrom)
    {
        $this->reservationFrom = $reservationFrom;

        return $this;
    }

    /**
     * Get reservationFrom
     *
     * @return \DateTime
     */
    public function getReservationFrom()
    {
        return $this->reservationFrom;
    }

    /**
     * Set reservationTo
     *
     * @param \DateTime $reservationTo
     *
     * @return Reservations
     */
    public function setReservationTo($reservationTo)
    {
        $this->reservationTo = $reservationTo;

        return $this;
    }

    /**
     * Get reservationTo
     *
     * @return \DateTime
     */
    public function getReservationTo()
    {
        return $this->reservationTo;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Reservations
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
     * Set phone
     *
     * @param string $phone
     *
     * @return Reservations
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Reservations
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set pricePaid
     *
     * @param string $pricePaid
     *
     * @return Reservations
     */
    public function setPricePaid($pricePaid)
    {
        $this->pricePaid = $pricePaid;

        return $this;
    }

    /**
     * Get pricePaid
     *
     * @return string
     */
    public function getPricePaid()
    {
        return $this->pricePaid;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return Reservations
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Reservations
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
