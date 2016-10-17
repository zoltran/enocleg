<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Katgaleria
 *
 * @ORM\Table(name="katgaleria")
 * @ORM\Entity
 */
class Katgaleria
{
    /**
     * @var string
     *
     * @ORM\Column(name="katgPL", type="string", length=50, nullable=false)
     */
    private $katgpl;

    /**
     * @var string
     *
     * @ORM\Column(name="katgOpis", type="string", length=255, nullable=false)
     */
    private $katgopis;

    /**
     * @var integer
     *
     * @ORM\Column(name="katgId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $katgid;



    /**
     * Set katgpl
     *
     * @param string $katgpl
     *
     * @return Katgaleria
     */
    public function setKatgpl($katgpl)
    {
        $this->katgpl = $katgpl;

        return $this;
    }

    /**
     * Get katgpl
     *
     * @return string
     */
    public function getKatgpl()
    {
        return $this->katgpl;
    }

    /**
     * Set katgopis
     *
     * @param string $katgopis
     *
     * @return Katgaleria
     */
    public function setKatgopis($katgopis)
    {
        $this->katgopis = $katgopis;

        return $this;
    }

    /**
     * Get katgopis
     *
     * @return string
     */
    public function getKatgopis()
    {
        return $this->katgopis;
    }

    /**
     * Get katgid
     *
     * @return integer
     */
    public function getKatgid()
    {
        return $this->katgid;
    }
}
