<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aktkategoria
 *
 * @ORM\Table(name="aktKategoria")
 * @ORM\Entity
 */
class Aktkategoria
{
    /**
     * @var string
     *
     * @ORM\Column(name="aktkatName", type="string", length=255, nullable=false)
     */
    private $aktkatname;

    /**
     * @var integer
     *
     * @ORM\Column(name="aktkatId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aktkatid;



    /**
     * Set aktkatname
     *
     * @param string $aktkatname
     *
     * @return Aktkategoria
     */
    public function setAktkatname($aktkatname)
    {
        $this->aktkatname = $aktkatname;

        return $this;
    }

    /**
     * Get aktkatname
     *
     * @return string
     */
    public function getAktkatname()
    {
        return $this->aktkatname;
    }

    /**
     * Get aktkatid
     *
     * @return integer
     */
    public function getAktkatid()
    {
        return $this->aktkatid;
    }
}
