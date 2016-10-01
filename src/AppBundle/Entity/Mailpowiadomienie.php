<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mailpowiadomienie
 *
 * @ORM\Table(name="mailpowiadomienie")
 * @ORM\Entity
 */
class Mailpowiadomienie
{
    /**
     * @var string
     *
     * @ORM\Column(name="mailOd", type="string", length=255, nullable=false)
     */
    private $mailod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mailDo", type="string", length=255, nullable=false)
     */
    private $maildo = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mailData", type="datetime", nullable=false)
     */
    private $maildata = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="mailId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mailid;



    /**
     * Set mailod
     *
     * @param string $mailod
     *
     * @return Mailpowiadomienie
     */
    public function setMailod($mailod)
    {
        $this->mailod = $mailod;

        return $this;
    }

    /**
     * Get mailod
     *
     * @return string
     */
    public function getMailod()
    {
        return $this->mailod;
    }

    /**
     * Set maildo
     *
     * @param string $maildo
     *
     * @return Mailpowiadomienie
     */
    public function setMaildo($maildo)
    {
        $this->maildo = $maildo;

        return $this;
    }

    /**
     * Get maildo
     *
     * @return string
     */
    public function getMaildo()
    {
        return $this->maildo;
    }

    /**
     * Set maildata
     *
     * @param \DateTime $maildata
     *
     * @return Mailpowiadomienie
     */
    public function setMaildata($maildata)
    {
        $this->maildata = $maildata;

        return $this;
    }

    /**
     * Get maildata
     *
     * @return \DateTime
     */
    public function getMaildata()
    {
        return $this->maildata;
    }

    /**
     * Get mailid
     *
     * @return integer
     */
    public function getMailid()
    {
        return $this->mailid;
    }
}
