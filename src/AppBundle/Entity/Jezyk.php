<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jezyk
 *
 * @ORM\Table(name="jezyk")
 * @ORM\Entity
 */
class Jezyk
{
    /**
     * @var string
     *
     * @ORM\Column(name="jezName", type="string", length=50, nullable=false)
     */
    private $jezname;

    /**
     * @var integer
     *
     * @ORM\Column(name="jezId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $jezid;



    /**
     * Set jezname
     *
     * @param string $jezname
     *
     * @return Jezyk
     */
    public function setJezname($jezname)
    {
        $this->jezname = $jezname;

        return $this;
    }

    /**
     * Get jezname
     *
     * @return string
     */
    public function getJezname()
    {
        return $this->jezname;
    }

    /**
     * Get jezid
     *
     * @return integer
     */
    public function getJezid()
    {
        return $this->jezid;
    }
}
