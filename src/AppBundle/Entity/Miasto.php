<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Miasto
 *
 * @ORM\Table(name="miasto")
 * @ORM\Entity(repositoryClass="MiastoRepository")
 */
class Miasto
{
    /**
     * @var string
     *
     * @ORM\Column(name="miastoName", type="string", length=55, nullable=false)
     */
    public $miastoname;

    /**
     * @var integer
     *
     * @ORM\Column(name="miastoReg", type="integer", nullable=false)
     */
    private $miastoreg = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="miastoId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $miastoid;

//    /**
//     * @var Object
//     *
//     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Object", mappedBy="Miasto" )
//     */
//    private $objectCity;



    /**
     * Set miastoname
     *
     * @param string $miastoname
     *
     * @return Miasto
     */
    public function setMiastoname($miastoname)
    {
        $this->miastoname = $miastoname;

        return $this;
    }

    /**
     * Get miastoname
     *
     * @return string
     */
    public function getMiastoname()
    {
        return $this->miastoname;
    }

    /**
     * Set miastoreg
     *
     * @param integer $miastoreg
     *
     * @return Miasto
     */
    public function setMiastoreg($miastoreg)
    {
        $this->miastoreg = $miastoreg;

        return $this;
    }

    /**
     * Get miastoreg
     *
     * @return integer
     */
    public function getMiastoreg()
    {
        return $this->miastoreg;
    }

    /**
     * Get miastoid
     *
     * @return integer
     */
    public function getMiastoid()
    {
        return $this->miastoid;
    }

//    /**
//     * @return array
//     */
//    public function getObjectCity()
//    {
//        return $this->objectCity;
//    }
//
//    /**
//     * @param array $objectCity
//     */
//    public function setObjectCity($objectCity)
//    {
//        $this->objectCity = $objectCity;
//    }
}
