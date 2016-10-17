<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kategoria
 *
 * @ORM\Table(name="kategoria")
 * @ORM\Entity
 */
class Kategoria
{
    /**
     * @var string
     *
     * @ORM\Column(name="katPL", type="string", length=50, nullable=false)
     */
    private $katpl;

    /**
     * @var string
     *
     * @ORM\Column(name="katEN", type="string", length=50, nullable=false)
     */
    private $katen;

    /**
     * @var string
     *
     * @ORM\Column(name="katGR", type="string", length=50, nullable=false)
     */
    private $katgr;

    /**
     * @var integer
     *
     * @ORM\Column(name="katId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $katid;



    /**
     * Set katpl
     *
     * @param string $katpl
     *
     * @return Kategoria
     */
    public function setKatpl($katpl)
    {
        $this->katpl = $katpl;

        return $this;
    }

    /**
     * Get katpl
     *
     * @return string
     */
    public function getKatpl()
    {
        return $this->katpl;
    }

    /**
     * Set katen
     *
     * @param string $katen
     *
     * @return Kategoria
     */
    public function setKaten($katen)
    {
        $this->katen = $katen;

        return $this;
    }

    /**
     * Get katen
     *
     * @return string
     */
    public function getKaten()
    {
        return $this->katen;
    }

    /**
     * Set katgr
     *
     * @param string $katgr
     *
     * @return Kategoria
     */
    public function setKatgr($katgr)
    {
        $this->katgr = $katgr;

        return $this;
    }

    /**
     * Get katgr
     *
     * @return string
     */
    public function getKatgr()
    {
        return $this->katgr;
    }

    /**
     * Get katid
     *
     * @return integer
     */
    public function getKatid()
    {
        return $this->katid;
    }
}
