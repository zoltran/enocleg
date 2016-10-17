<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oferujacy
 *
 * @ORM\Table(name="oferujacy")
 * @ORM\Entity
 */
class Oferujacy
{
    /**
     * @var string
     *
     * @ORM\Column(name="oferName", type="string", length=50, nullable=false)
     */
    private $ofername;

    /**
     * @var integer
     *
     * @ORM\Column(name="oferId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $oferid;



    /**
     * Set ofername
     *
     * @param string $ofername
     *
     * @return Oferujacy
     */
    public function setOfername($ofername)
    {
        $this->ofername = $ofername;

        return $this;
    }

    /**
     * Get ofername
     *
     * @return string
     */
    public function getOfername()
    {
        return $this->ofername;
    }

    /**
     * Get oferid
     *
     * @return integer
     */
    public function getOferid()
    {
        return $this->oferid;
    }
}
