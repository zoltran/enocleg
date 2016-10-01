<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsleter
 *
 * @ORM\Table(name="newsleter")
 * @ORM\Entity
 */
class Newsleter
{
    /**
     * @var string
     *
     * @ORM\Column(name="new", type="string", length=255, nullable=false)
     */
    private $new = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="newData", type="datetime", nullable=false)
     */
    private $newdata = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="newId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newid;



    /**
     * Set new
     *
     * @param string $new
     *
     * @return Newsleter
     */
    public function setNew($new)
    {
        $this->new = $new;

        return $this;
    }

    /**
     * Get new
     *
     * @return string
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Set newdata
     *
     * @param \DateTime $newdata
     *
     * @return Newsleter
     */
    public function setNewdata($newdata)
    {
        $this->newdata = $newdata;

        return $this;
    }

    /**
     * Get newdata
     *
     * @return \DateTime
     */
    public function getNewdata()
    {
        return $this->newdata;
    }

    /**
     * Get newid
     *
     * @return integer
     */
    public function getNewid()
    {
        return $this->newid;
    }
}
