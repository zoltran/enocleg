<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aktualnosci
 *
 * @ORM\Table(name="aktualnosci")
 * @ORM\Entity
 */
class Aktualnosci
{
    /**
     * @var string
     *
     * @ORM\Column(name="aktTitle", type="string", length=500, nullable=false)
     */
    private $akttitle;

    /**
     * @var string
     *
     * @ORM\Column(name="aktTxt", type="text", nullable=false)
     */
    private $akttxt;

    /**
     * @var integer
     *
     * @ORM\Column(name="aktJezyk", type="integer", nullable=false)
     */
    private $aktjezyk = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="aktKat", type="integer", nullable=false)
     */
    private $aktkat = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="aktId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aktid;



    /**
     * Set akttitle
     *
     * @param string $akttitle
     *
     * @return Aktualnosci
     */
    public function setAkttitle($akttitle)
    {
        $this->akttitle = $akttitle;

        return $this;
    }

    /**
     * Get akttitle
     *
     * @return string
     */
    public function getAkttitle()
    {
        return $this->akttitle;
    }

    /**
     * Set akttxt
     *
     * @param string $akttxt
     *
     * @return Aktualnosci
     */
    public function setAkttxt($akttxt)
    {
        $this->akttxt = $akttxt;

        return $this;
    }

    /**
     * Get akttxt
     *
     * @return string
     */
    public function getAkttxt()
    {
        return $this->akttxt;
    }

    /**
     * Set aktjezyk
     *
     * @param integer $aktjezyk
     *
     * @return Aktualnosci
     */
    public function setAktjezyk($aktjezyk)
    {
        $this->aktjezyk = $aktjezyk;

        return $this;
    }

    /**
     * Get aktjezyk
     *
     * @return integer
     */
    public function getAktjezyk()
    {
        return $this->aktjezyk;
    }

    /**
     * Set aktkat
     *
     * @param integer $aktkat
     *
     * @return Aktualnosci
     */
    public function setAktkat($aktkat)
    {
        $this->aktkat = $aktkat;

        return $this;
    }

    /**
     * Get aktkat
     *
     * @return integer
     */
    public function getAktkat()
    {
        return $this->aktkat;
    }

    /**
     * Get aktid
     *
     * @return integer
     */
    public function getAktid()
    {
        return $this->aktid;
    }
}
