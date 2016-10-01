<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity
 */
class Region
{
    /**
     * @var string
     *
     * @ORM\Column(name="regionName", type="string", length=55, nullable=false)
     */
    private $regionname;

    /**
     * @var integer
     *
     * @ORM\Column(name="regionKat", type="integer", nullable=false)
     */
    private $regionkat;

    /**
     * @var integer
     *
     * @ORM\Column(name="regionId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $regionid;



    /**
     * Set regionname
     *
     * @param string $regionname
     *
     * @return Region
     */
    public function setRegionname($regionname)
    {
        $this->regionname = $regionname;

        return $this;
    }

    /**
     * Get regionname
     *
     * @return string
     */
    public function getRegionname()
    {
        return $this->regionname;
    }

    /**
     * Set regionkat
     *
     * @param integer $regionkat
     *
     * @return Region
     */
    public function setRegionkat($regionkat)
    {
        $this->regionkat = $regionkat;

        return $this;
    }

    /**
     * Get regionkat
     *
     * @return integer
     */
    public function getRegionkat()
    {
        return $this->regionkat;
    }

    /**
     * Get regionid
     *
     * @return integer
     */
    public function getRegionid()
    {
        return $this->regionid;
    }
}
