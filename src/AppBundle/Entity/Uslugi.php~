<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uslugi
 *
 * @ORM\Table(name="uslugi")
 * @ORM\Entity
 */
class Uslugi
{
    /**
     * @var string
     *
     * @ORM\Column(name="usPL", type="string", length=55, nullable=false)
     */
    private $uspl;

    /**
     * @var string
     *
     * @ORM\Column(name="usEN", type="string", length=55, nullable=false)
     */
    private $usen;

    /**
     * @var string
     *
     * @ORM\Column(name="usGR", type="string", length=55, nullable=false)
     */
    private $usgr;

    /**
     * @var integer
     *
     * @ORM\Column(name="usId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usid;



    /**
     * Set uspl
     *
     * @param string $uspl
     *
     * @return Uslugi
     */
    public function setUspl($uspl)
    {
        $this->uspl = $uspl;

        return $this;
    }

    /**
     * Get uspl
     *
     * @return string
     */
    public function getUspl()
    {
        return $this->uspl;
    }

    /**
     * Set usen
     *
     * @param string $usen
     *
     * @return Uslugi
     */
    public function setUsen($usen)
    {
        $this->usen = $usen;

        return $this;
    }

    /**
     * Get usen
     *
     * @return string
     */
    public function getUsen()
    {
        return $this->usen;
    }

    /**
     * Set usgr
     *
     * @param string $usgr
     *
     * @return Uslugi
     */
    public function setUsgr($usgr)
    {
        $this->usgr = $usgr;

        return $this;
    }

    /**
     * Get usgr
     *
     * @return string
     */
    public function getUsgr()
    {
        return $this->usgr;
    }

    /**
     * Get usid
     *
     * @return integer
     */
    public function getUsid()
    {
        return $this->usid;
    }
}
