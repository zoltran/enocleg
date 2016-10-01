<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rozrywka
 *
 * @ORM\Table(name="rozrywka")
 * @ORM\Entity
 */
class Rozrywka
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rozOgl", type="integer", nullable=false)
     */
    private $rozogl;

    /**
     * @var integer
     *
     * @ORM\Column(name="rozSpa", type="integer", nullable=false)
     */
    private $rozspa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozKBasen", type="integer", nullable=false)
     */
    private $rozkbasen = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozOBasen", type="integer", nullable=false)
     */
    private $rozobasen = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozAquapark", type="integer", nullable=false)
     */
    private $rozaquapark = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozSauna", type="integer", nullable=false)
     */
    private $rozsauna = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozJacuzi", type="integer", nullable=false)
     */
    private $rozjacuzi = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozSolarium", type="integer", nullable=false)
     */
    private $rozsolarium = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozMasaz", type="integer", nullable=false)
     */
    private $rozmasaz = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozOdnowa", type="integer", nullable=false)
     */
    private $rozodnowa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozKosmetyk", type="integer", nullable=false)
     */
    private $rozkosmetyk = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozFitnes", type="integer", nullable=false)
     */
    private $rozfitnes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozSilownia", type="integer", nullable=false)
     */
    private $rozsilownia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozTziemny", type="integer", nullable=false)
     */
    private $roztziemny = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozSquash", type="integer", nullable=false)
     */
    private $rozsquash = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozTstolowy", type="integer", nullable=false)
     */
    private $roztstolowy = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozSiatkowka", type="integer", nullable=false)
     */
    private $rozsiatkowka = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozBoisko", type="integer", nullable=false)
     */
    private $rozboisko = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozSala", type="integer", nullable=false)
     */
    private $rozsala = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozParklinowy", type="integer", nullable=false)
     */
    private $rozparklinowy = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozLodowisko", type="integer", nullable=false)
     */
    private $rozlodowisko = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozStok", type="integer", nullable=false)
     */
    private $rozstok = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozWypozyczalniaS", type="integer", nullable=false)
     */
    private $rozwypozyczalnias = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozWypozyczalniaW", type="integer", nullable=false)
     */
    private $rozwypozyczalniaw = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozWypozyczalniaR", type="integer", nullable=false)
     */
    private $rozwypozyczalniar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozBar", type="integer", nullable=false)
     */
    private $rozbar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozKlub", type="integer", nullable=false)
     */
    private $rozklub = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozBilard", type="integer", nullable=false)
     */
    private $rozbilard = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozKregielnia", type="integer", nullable=false)
     */
    private $rozkregielnia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rozUser", type="integer", nullable=false)
     */
    private $rozuser;

    /**
     * @var integer
     *
     * @ORM\Column(name="rozId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rozid;



    /**
     * Set rozogl
     *
     * @param integer $rozogl
     *
     * @return Rozrywka
     */
    public function setRozogl($rozogl)
    {
        $this->rozogl = $rozogl;

        return $this;
    }

    /**
     * Get rozogl
     *
     * @return integer
     */
    public function getRozogl()
    {
        return $this->rozogl;
    }

    /**
     * Set rozspa
     *
     * @param integer $rozspa
     *
     * @return Rozrywka
     */
    public function setRozspa($rozspa)
    {
        $this->rozspa = $rozspa;

        return $this;
    }

    /**
     * Get rozspa
     *
     * @return integer
     */
    public function getRozspa()
    {
        return $this->rozspa;
    }

    /**
     * Set rozkbasen
     *
     * @param integer $rozkbasen
     *
     * @return Rozrywka
     */
    public function setRozkbasen($rozkbasen)
    {
        $this->rozkbasen = $rozkbasen;

        return $this;
    }

    /**
     * Get rozkbasen
     *
     * @return integer
     */
    public function getRozkbasen()
    {
        return $this->rozkbasen;
    }

    /**
     * Set rozobasen
     *
     * @param integer $rozobasen
     *
     * @return Rozrywka
     */
    public function setRozobasen($rozobasen)
    {
        $this->rozobasen = $rozobasen;

        return $this;
    }

    /**
     * Get rozobasen
     *
     * @return integer
     */
    public function getRozobasen()
    {
        return $this->rozobasen;
    }

    /**
     * Set rozaquapark
     *
     * @param integer $rozaquapark
     *
     * @return Rozrywka
     */
    public function setRozaquapark($rozaquapark)
    {
        $this->rozaquapark = $rozaquapark;

        return $this;
    }

    /**
     * Get rozaquapark
     *
     * @return integer
     */
    public function getRozaquapark()
    {
        return $this->rozaquapark;
    }

    /**
     * Set rozsauna
     *
     * @param integer $rozsauna
     *
     * @return Rozrywka
     */
    public function setRozsauna($rozsauna)
    {
        $this->rozsauna = $rozsauna;

        return $this;
    }

    /**
     * Get rozsauna
     *
     * @return integer
     */
    public function getRozsauna()
    {
        return $this->rozsauna;
    }

    /**
     * Set rozjacuzi
     *
     * @param integer $rozjacuzi
     *
     * @return Rozrywka
     */
    public function setRozjacuzi($rozjacuzi)
    {
        $this->rozjacuzi = $rozjacuzi;

        return $this;
    }

    /**
     * Get rozjacuzi
     *
     * @return integer
     */
    public function getRozjacuzi()
    {
        return $this->rozjacuzi;
    }

    /**
     * Set rozsolarium
     *
     * @param integer $rozsolarium
     *
     * @return Rozrywka
     */
    public function setRozsolarium($rozsolarium)
    {
        $this->rozsolarium = $rozsolarium;

        return $this;
    }

    /**
     * Get rozsolarium
     *
     * @return integer
     */
    public function getRozsolarium()
    {
        return $this->rozsolarium;
    }

    /**
     * Set rozmasaz
     *
     * @param integer $rozmasaz
     *
     * @return Rozrywka
     */
    public function setRozmasaz($rozmasaz)
    {
        $this->rozmasaz = $rozmasaz;

        return $this;
    }

    /**
     * Get rozmasaz
     *
     * @return integer
     */
    public function getRozmasaz()
    {
        return $this->rozmasaz;
    }

    /**
     * Set rozodnowa
     *
     * @param integer $rozodnowa
     *
     * @return Rozrywka
     */
    public function setRozodnowa($rozodnowa)
    {
        $this->rozodnowa = $rozodnowa;

        return $this;
    }

    /**
     * Get rozodnowa
     *
     * @return integer
     */
    public function getRozodnowa()
    {
        return $this->rozodnowa;
    }

    /**
     * Set rozkosmetyk
     *
     * @param integer $rozkosmetyk
     *
     * @return Rozrywka
     */
    public function setRozkosmetyk($rozkosmetyk)
    {
        $this->rozkosmetyk = $rozkosmetyk;

        return $this;
    }

    /**
     * Get rozkosmetyk
     *
     * @return integer
     */
    public function getRozkosmetyk()
    {
        return $this->rozkosmetyk;
    }

    /**
     * Set rozfitnes
     *
     * @param integer $rozfitnes
     *
     * @return Rozrywka
     */
    public function setRozfitnes($rozfitnes)
    {
        $this->rozfitnes = $rozfitnes;

        return $this;
    }

    /**
     * Get rozfitnes
     *
     * @return integer
     */
    public function getRozfitnes()
    {
        return $this->rozfitnes;
    }

    /**
     * Set rozsilownia
     *
     * @param integer $rozsilownia
     *
     * @return Rozrywka
     */
    public function setRozsilownia($rozsilownia)
    {
        $this->rozsilownia = $rozsilownia;

        return $this;
    }

    /**
     * Get rozsilownia
     *
     * @return integer
     */
    public function getRozsilownia()
    {
        return $this->rozsilownia;
    }

    /**
     * Set roztziemny
     *
     * @param integer $roztziemny
     *
     * @return Rozrywka
     */
    public function setRoztziemny($roztziemny)
    {
        $this->roztziemny = $roztziemny;

        return $this;
    }

    /**
     * Get roztziemny
     *
     * @return integer
     */
    public function getRoztziemny()
    {
        return $this->roztziemny;
    }

    /**
     * Set rozsquash
     *
     * @param integer $rozsquash
     *
     * @return Rozrywka
     */
    public function setRozsquash($rozsquash)
    {
        $this->rozsquash = $rozsquash;

        return $this;
    }

    /**
     * Get rozsquash
     *
     * @return integer
     */
    public function getRozsquash()
    {
        return $this->rozsquash;
    }

    /**
     * Set roztstolowy
     *
     * @param integer $roztstolowy
     *
     * @return Rozrywka
     */
    public function setRoztstolowy($roztstolowy)
    {
        $this->roztstolowy = $roztstolowy;

        return $this;
    }

    /**
     * Get roztstolowy
     *
     * @return integer
     */
    public function getRoztstolowy()
    {
        return $this->roztstolowy;
    }

    /**
     * Set rozsiatkowka
     *
     * @param integer $rozsiatkowka
     *
     * @return Rozrywka
     */
    public function setRozsiatkowka($rozsiatkowka)
    {
        $this->rozsiatkowka = $rozsiatkowka;

        return $this;
    }

    /**
     * Get rozsiatkowka
     *
     * @return integer
     */
    public function getRozsiatkowka()
    {
        return $this->rozsiatkowka;
    }

    /**
     * Set rozboisko
     *
     * @param integer $rozboisko
     *
     * @return Rozrywka
     */
    public function setRozboisko($rozboisko)
    {
        $this->rozboisko = $rozboisko;

        return $this;
    }

    /**
     * Get rozboisko
     *
     * @return integer
     */
    public function getRozboisko()
    {
        return $this->rozboisko;
    }

    /**
     * Set rozsala
     *
     * @param integer $rozsala
     *
     * @return Rozrywka
     */
    public function setRozsala($rozsala)
    {
        $this->rozsala = $rozsala;

        return $this;
    }

    /**
     * Get rozsala
     *
     * @return integer
     */
    public function getRozsala()
    {
        return $this->rozsala;
    }

    /**
     * Set rozparklinowy
     *
     * @param integer $rozparklinowy
     *
     * @return Rozrywka
     */
    public function setRozparklinowy($rozparklinowy)
    {
        $this->rozparklinowy = $rozparklinowy;

        return $this;
    }

    /**
     * Get rozparklinowy
     *
     * @return integer
     */
    public function getRozparklinowy()
    {
        return $this->rozparklinowy;
    }

    /**
     * Set rozlodowisko
     *
     * @param integer $rozlodowisko
     *
     * @return Rozrywka
     */
    public function setRozlodowisko($rozlodowisko)
    {
        $this->rozlodowisko = $rozlodowisko;

        return $this;
    }

    /**
     * Get rozlodowisko
     *
     * @return integer
     */
    public function getRozlodowisko()
    {
        return $this->rozlodowisko;
    }

    /**
     * Set rozstok
     *
     * @param integer $rozstok
     *
     * @return Rozrywka
     */
    public function setRozstok($rozstok)
    {
        $this->rozstok = $rozstok;

        return $this;
    }

    /**
     * Get rozstok
     *
     * @return integer
     */
    public function getRozstok()
    {
        return $this->rozstok;
    }

    /**
     * Set rozwypozyczalnias
     *
     * @param integer $rozwypozyczalnias
     *
     * @return Rozrywka
     */
    public function setRozwypozyczalnias($rozwypozyczalnias)
    {
        $this->rozwypozyczalnias = $rozwypozyczalnias;

        return $this;
    }

    /**
     * Get rozwypozyczalnias
     *
     * @return integer
     */
    public function getRozwypozyczalnias()
    {
        return $this->rozwypozyczalnias;
    }

    /**
     * Set rozwypozyczalniaw
     *
     * @param integer $rozwypozyczalniaw
     *
     * @return Rozrywka
     */
    public function setRozwypozyczalniaw($rozwypozyczalniaw)
    {
        $this->rozwypozyczalniaw = $rozwypozyczalniaw;

        return $this;
    }

    /**
     * Get rozwypozyczalniaw
     *
     * @return integer
     */
    public function getRozwypozyczalniaw()
    {
        return $this->rozwypozyczalniaw;
    }

    /**
     * Set rozwypozyczalniar
     *
     * @param integer $rozwypozyczalniar
     *
     * @return Rozrywka
     */
    public function setRozwypozyczalniar($rozwypozyczalniar)
    {
        $this->rozwypozyczalniar = $rozwypozyczalniar;

        return $this;
    }

    /**
     * Get rozwypozyczalniar
     *
     * @return integer
     */
    public function getRozwypozyczalniar()
    {
        return $this->rozwypozyczalniar;
    }

    /**
     * Set rozbar
     *
     * @param integer $rozbar
     *
     * @return Rozrywka
     */
    public function setRozbar($rozbar)
    {
        $this->rozbar = $rozbar;

        return $this;
    }

    /**
     * Get rozbar
     *
     * @return integer
     */
    public function getRozbar()
    {
        return $this->rozbar;
    }

    /**
     * Set rozklub
     *
     * @param integer $rozklub
     *
     * @return Rozrywka
     */
    public function setRozklub($rozklub)
    {
        $this->rozklub = $rozklub;

        return $this;
    }

    /**
     * Get rozklub
     *
     * @return integer
     */
    public function getRozklub()
    {
        return $this->rozklub;
    }

    /**
     * Set rozbilard
     *
     * @param integer $rozbilard
     *
     * @return Rozrywka
     */
    public function setRozbilard($rozbilard)
    {
        $this->rozbilard = $rozbilard;

        return $this;
    }

    /**
     * Get rozbilard
     *
     * @return integer
     */
    public function getRozbilard()
    {
        return $this->rozbilard;
    }

    /**
     * Set rozkregielnia
     *
     * @param integer $rozkregielnia
     *
     * @return Rozrywka
     */
    public function setRozkregielnia($rozkregielnia)
    {
        $this->rozkregielnia = $rozkregielnia;

        return $this;
    }

    /**
     * Get rozkregielnia
     *
     * @return integer
     */
    public function getRozkregielnia()
    {
        return $this->rozkregielnia;
    }

    /**
     * Set rozuser
     *
     * @param integer $rozuser
     *
     * @return Rozrywka
     */
    public function setRozuser($rozuser)
    {
        $this->rozuser = $rozuser;

        return $this;
    }

    /**
     * Get rozuser
     *
     * @return integer
     */
    public function getRozuser()
    {
        return $this->rozuser;
    }

    /**
     * Get rozid
     *
     * @return integer
     */
    public function getRozid()
    {
        return $this->rozid;
    }
}
