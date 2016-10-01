<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Baner
 *
 * @ORM\Table(name="baner")
 * @ORM\Entity
 */
class Baner
{
    /**
     * @var string
     *
     * @ORM\Column(name="banerKod", type="text", nullable=false)
     */
    private $banerkod;

    /**
     * @var string
     *
     * @ORM\Column(name="banerUrl", type="string", length=100, nullable=false)
     */
    private $banerurl;

    /**
     * @var integer
     *
     * @ORM\Column(name="banerPozycja", type="integer", nullable=false)
     */
    private $banerpozycja;

    /**
     * @var integer
     *
     * @ORM\Column(name="banerMiejsce", type="integer", nullable=false)
     */
    private $banermiejsce;

    /**
     * @var integer
     *
     * @ORM\Column(name="banerId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $banerid;



    /**
     * Set banerkod
     *
     * @param string $banerkod
     *
     * @return Baner
     */
    public function setBanerkod($banerkod)
    {
        $this->banerkod = $banerkod;

        return $this;
    }

    /**
     * Get banerkod
     *
     * @return string
     */
    public function getBanerkod()
    {
        return $this->banerkod;
    }

    /**
     * Set banerurl
     *
     * @param string $banerurl
     *
     * @return Baner
     */
    public function setBanerurl($banerurl)
    {
        $this->banerurl = $banerurl;

        return $this;
    }

    /**
     * Get banerurl
     *
     * @return string
     */
    public function getBanerurl()
    {
        return $this->banerurl;
    }

    /**
     * Set banerpozycja
     *
     * @param integer $banerpozycja
     *
     * @return Baner
     */
    public function setBanerpozycja($banerpozycja)
    {
        $this->banerpozycja = $banerpozycja;

        return $this;
    }

    /**
     * Get banerpozycja
     *
     * @return integer
     */
    public function getBanerpozycja()
    {
        return $this->banerpozycja;
    }

    /**
     * Set banermiejsce
     *
     * @param integer $banermiejsce
     *
     * @return Baner
     */
    public function setBanermiejsce($banermiejsce)
    {
        $this->banermiejsce = $banermiejsce;

        return $this;
    }

    /**
     * Get banermiejsce
     *
     * @return integer
     */
    public function getBanermiejsce()
    {
        return $this->banermiejsce;
    }

    /**
     * Get banerid
     *
     * @return integer
     */
    public function getBanerid()
    {
        return $this->banerid;
    }
}
