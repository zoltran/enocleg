<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foto
 *
 * @ORM\Table(name="foto")
 * @ORM\Entity
 */
class Foto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fotoObjectId", type="integer", nullable=false)
     */
    private $fotoobjectid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fotoUrl", type="string", length=255, nullable=false)
     */
    private $fotourl = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="fotoId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fotoid;



    /**
     * Set fotoobjectid
     *
     * @param integer $fotoobjectid
     *
     * @return Foto
     */
    public function setFotoobjectid($fotoobjectid)
    {
        $this->fotoobjectid = $fotoobjectid;

        return $this;
    }

    /**
     * Get fotoobjectid
     *
     * @return integer
     */
    public function getFotoobjectid()
    {
        return $this->fotoobjectid;
    }

    /**
     * Set fotourl
     *
     * @param string $fotourl
     *
     * @return Foto
     */
    public function setFotourl($fotourl)
    {
        $this->fotourl = $fotourl;

        return $this;
    }

    /**
     * Get fotourl
     *
     * @return string
     */
    public function getFotourl()
    {
        return $this->fotourl;
    }

    /**
     * Get fotoid
     *
     * @return integer
     */
    public function getFotoid()
    {
        return $this->fotoid;
    }
}
