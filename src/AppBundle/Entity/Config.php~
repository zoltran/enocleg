<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table(name="config")
 * @ORM\Entity
 */
class Config
{
    /**
     * @var string
     *
     * @ORM\Column(name="cfgName", type="string", length=255, nullable=false)
     */
    private $cfgname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cfgTxt", type="text", nullable=false)
     */
    private $cfgtxt;

    /**
     * @var integer
     *
     * @ORM\Column(name="cfgId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cfgid;



    /**
     * Set cfgname
     *
     * @param string $cfgname
     *
     * @return Config
     */
    public function setCfgname($cfgname)
    {
        $this->cfgname = $cfgname;

        return $this;
    }

    /**
     * Get cfgname
     *
     * @return string
     */
    public function getCfgname()
    {
        return $this->cfgname;
    }

    /**
     * Set cfgtxt
     *
     * @param string $cfgtxt
     *
     * @return Config
     */
    public function setCfgtxt($cfgtxt)
    {
        $this->cfgtxt = $cfgtxt;

        return $this;
    }

    /**
     * Get cfgtxt
     *
     * @return string
     */
    public function getCfgtxt()
    {
        return $this->cfgtxt;
    }

    /**
     * Get cfgid
     *
     * @return integer
     */
    public function getCfgid()
    {
        return $this->cfgid;
    }
}
