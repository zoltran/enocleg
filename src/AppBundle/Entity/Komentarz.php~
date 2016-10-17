<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Komentarz
 *
 * @ORM\Table(name="komentarz")
 * @ORM\Entity
 */
class Komentarz
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idOgloszenia", type="integer", nullable=false)
     */
    private $idogloszenia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="trescKomentarz", type="string", length=355, nullable=false)
     */
    private $tresckomentarz = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="idKomentarz", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idkomentarz;



    /**
     * Set idogloszenia
     *
     * @param integer $idogloszenia
     *
     * @return Komentarz
     */
    public function setIdogloszenia($idogloszenia)
    {
        $this->idogloszenia = $idogloszenia;

        return $this;
    }

    /**
     * Get idogloszenia
     *
     * @return integer
     */
    public function getIdogloszenia()
    {
        return $this->idogloszenia;
    }

    /**
     * Set tresckomentarz
     *
     * @param string $tresckomentarz
     *
     * @return Komentarz
     */
    public function setTresckomentarz($tresckomentarz)
    {
        $this->tresckomentarz = $tresckomentarz;

        return $this;
    }

    /**
     * Get tresckomentarz
     *
     * @return string
     */
    public function getTresckomentarz()
    {
        return $this->tresckomentarz;
    }

    /**
     * Get idkomentarz
     *
     * @return integer
     */
    public function getIdkomentarz()
    {
        return $this->idkomentarz;
    }
}
