<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photgaleria
 *
 * @ORM\Table(name="photgaleria")
 * @ORM\Entity
 */
class Photgaleria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="galKatId", type="integer", nullable=false)
     */
    private $galkatid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="galUrl", type="string", length=255, nullable=false)
     */
    private $galurl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="galName", type="string", length=100, nullable=false)
     */
    private $galname;

    /**
     * @var integer
     *
     * @ORM\Column(name="galId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $galid;



    /**
     * Set galkatid
     *
     * @param integer $galkatid
     *
     * @return Photgaleria
     */
    public function setGalkatid($galkatid)
    {
        $this->galkatid = $galkatid;

        return $this;
    }

    /**
     * Get galkatid
     *
     * @return integer
     */
    public function getGalkatid()
    {
        return $this->galkatid;
    }

    /**
     * Set galurl
     *
     * @param string $galurl
     *
     * @return Photgaleria
     */
    public function setGalurl($galurl)
    {
        $this->galurl = $galurl;

        return $this;
    }

    /**
     * Get galurl
     *
     * @return string
     */
    public function getGalurl()
    {
        return $this->galurl;
    }

    /**
     * Set galname
     *
     * @param string $galname
     *
     * @return Photgaleria
     */
    public function setGalname($galname)
    {
        $this->galname = $galname;

        return $this;
    }

    /**
     * Get galname
     *
     * @return string
     */
    public function getGalname()
    {
        return $this->galname;
    }

    /**
     * Get galid
     *
     * @return integer
     */
    public function getGalid()
    {
        return $this->galid;
    }
}
