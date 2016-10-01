<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banmiejsce
 *
 * @ORM\Table(name="banmiejsce")
 * @ORM\Entity
 */
class Banmiejsce
{
    /**
     * @var string
     *
     * @ORM\Column(name="miejsceName", type="string", length=255, nullable=false)
     */
    private $miejscename = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="miejsceId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $miejsceid;



    /**
     * Set miejscename
     *
     * @param string $miejscename
     *
     * @return Banmiejsce
     */
    public function setMiejscename($miejscename)
    {
        $this->miejscename = $miejscename;

        return $this;
    }

    /**
     * Get miejscename
     *
     * @return string
     */
    public function getMiejscename()
    {
        return $this->miejscename;
    }

    /**
     * Get miejsceid
     *
     * @return integer
     */
    public function getMiejsceid()
    {
        return $this->miejsceid;
    }
}
