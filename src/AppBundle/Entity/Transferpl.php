<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transferpl
 *
 * @ORM\Table(name="transferpl")
 * @ORM\Entity
 */
class Transferpl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_sprzedawcy", type="integer", nullable=false)
     */
    private $idSprzedawcy;

    /**
     * @var string
     *
     * @ORM\Column(name="kwota_zaplacona", type="string", length=20, nullable=false)
     */
    private $kwotaZaplacona;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_transakcji", type="integer", nullable=false)
     */
    private $idTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="kwota_transakcji", type="string", length=20, nullable=false)
     */
    private $kwotaTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="status_transakcji", type="string", length=255, nullable=false)
     */
    private $statusTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="blad", type="string", length=22, nullable=false)
     */
    private $blad;

    /**
     * @var string
     *
     * @ORM\Column(name="ciag_pomocniczy", type="string", length=222, nullable=false)
     */
    private $ciagPomocniczy;

    /**
     * @var string
     *
     * @ORM\Column(name="suma_kontrolna", type="string", length=222, nullable=false)
     */
    private $sumaKontrolna;

    /**
     * @var string
     *
     * @ORM\Column(name="opis_transakcji", type="string", length=222, nullable=false)
     */
    private $opisTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="email_klienta", type="string", length=222, nullable=false)
     */
    private $emailKlienta;

    /**
     * @var string
     *
     * @ORM\Column(name="control", type="string", length=222, nullable=false)
     */
    private $control;

    /**
     * @var integer
     *
     * @ORM\Column(name="idogl", type="integer", nullable=false)
     */
    private $idogl;

    /**
     * @var string
     *
     * @ORM\Column(name="day", type="string", length=100, nullable=false)
     */
    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="option", type="string", length=100, nullable=false)
     */
    private $option;

    /**
     * @var string
     *
     * @ORM\Column(name="dateEnd", type="string", length=100, nullable=false)
     */
    private $dateend;

    /**
     * @var integer
     *
     * @ORM\Column(name="testId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $testid;



    /**
     * Set idSprzedawcy
     *
     * @param integer $idSprzedawcy
     *
     * @return Transferpl
     */
    public function setIdSprzedawcy($idSprzedawcy)
    {
        $this->idSprzedawcy = $idSprzedawcy;

        return $this;
    }

    /**
     * Get idSprzedawcy
     *
     * @return integer
     */
    public function getIdSprzedawcy()
    {
        return $this->idSprzedawcy;
    }

    /**
     * Set kwotaZaplacona
     *
     * @param string $kwotaZaplacona
     *
     * @return Transferpl
     */
    public function setKwotaZaplacona($kwotaZaplacona)
    {
        $this->kwotaZaplacona = $kwotaZaplacona;

        return $this;
    }

    /**
     * Get kwotaZaplacona
     *
     * @return string
     */
    public function getKwotaZaplacona()
    {
        return $this->kwotaZaplacona;
    }

    /**
     * Set idTransakcji
     *
     * @param integer $idTransakcji
     *
     * @return Transferpl
     */
    public function setIdTransakcji($idTransakcji)
    {
        $this->idTransakcji = $idTransakcji;

        return $this;
    }

    /**
     * Get idTransakcji
     *
     * @return integer
     */
    public function getIdTransakcji()
    {
        return $this->idTransakcji;
    }

    /**
     * Set kwotaTransakcji
     *
     * @param string $kwotaTransakcji
     *
     * @return Transferpl
     */
    public function setKwotaTransakcji($kwotaTransakcji)
    {
        $this->kwotaTransakcji = $kwotaTransakcji;

        return $this;
    }

    /**
     * Get kwotaTransakcji
     *
     * @return string
     */
    public function getKwotaTransakcji()
    {
        return $this->kwotaTransakcji;
    }

    /**
     * Set statusTransakcji
     *
     * @param string $statusTransakcji
     *
     * @return Transferpl
     */
    public function setStatusTransakcji($statusTransakcji)
    {
        $this->statusTransakcji = $statusTransakcji;

        return $this;
    }

    /**
     * Get statusTransakcji
     *
     * @return string
     */
    public function getStatusTransakcji()
    {
        return $this->statusTransakcji;
    }

    /**
     * Set blad
     *
     * @param string $blad
     *
     * @return Transferpl
     */
    public function setBlad($blad)
    {
        $this->blad = $blad;

        return $this;
    }

    /**
     * Get blad
     *
     * @return string
     */
    public function getBlad()
    {
        return $this->blad;
    }

    /**
     * Set ciagPomocniczy
     *
     * @param string $ciagPomocniczy
     *
     * @return Transferpl
     */
    public function setCiagPomocniczy($ciagPomocniczy)
    {
        $this->ciagPomocniczy = $ciagPomocniczy;

        return $this;
    }

    /**
     * Get ciagPomocniczy
     *
     * @return string
     */
    public function getCiagPomocniczy()
    {
        return $this->ciagPomocniczy;
    }

    /**
     * Set sumaKontrolna
     *
     * @param string $sumaKontrolna
     *
     * @return Transferpl
     */
    public function setSumaKontrolna($sumaKontrolna)
    {
        $this->sumaKontrolna = $sumaKontrolna;

        return $this;
    }

    /**
     * Get sumaKontrolna
     *
     * @return string
     */
    public function getSumaKontrolna()
    {
        return $this->sumaKontrolna;
    }

    /**
     * Set opisTransakcji
     *
     * @param string $opisTransakcji
     *
     * @return Transferpl
     */
    public function setOpisTransakcji($opisTransakcji)
    {
        $this->opisTransakcji = $opisTransakcji;

        return $this;
    }

    /**
     * Get opisTransakcji
     *
     * @return string
     */
    public function getOpisTransakcji()
    {
        return $this->opisTransakcji;
    }

    /**
     * Set emailKlienta
     *
     * @param string $emailKlienta
     *
     * @return Transferpl
     */
    public function setEmailKlienta($emailKlienta)
    {
        $this->emailKlienta = $emailKlienta;

        return $this;
    }

    /**
     * Get emailKlienta
     *
     * @return string
     */
    public function getEmailKlienta()
    {
        return $this->emailKlienta;
    }

    /**
     * Set control
     *
     * @param string $control
     *
     * @return Transferpl
     */
    public function setControl($control)
    {
        $this->control = $control;

        return $this;
    }

    /**
     * Get control
     *
     * @return string
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Set idogl
     *
     * @param integer $idogl
     *
     * @return Transferpl
     */
    public function setIdogl($idogl)
    {
        $this->idogl = $idogl;

        return $this;
    }

    /**
     * Get idogl
     *
     * @return integer
     */
    public function getIdogl()
    {
        return $this->idogl;
    }

    /**
     * Set day
     *
     * @param string $day
     *
     * @return Transferpl
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set option
     *
     * @param string $option
     *
     * @return Transferpl
     */
    public function setOption($option)
    {
        $this->option = $option;

        return $this;
    }

    /**
     * Get option
     *
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Set dateend
     *
     * @param string $dateend
     *
     * @return Transferpl
     */
    public function setDateend($dateend)
    {
        $this->dateend = $dateend;

        return $this;
    }

    /**
     * Get dateend
     *
     * @return string
     */
    public function getDateend()
    {
        return $this->dateend;
    }

    /**
     * Get testid
     *
     * @return integer
     */
    public function getTestid()
    {
        return $this->testid;
    }
}
