<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Resources\ObjectRepository;

/**
 * Class Object
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Resources\ObjectRepository")
 * @ORM\Table(name="object")
 */
class Object
{
    /**
     * @var string
     *
     * @ORM\Column(name="obName", type="string", length=255, nullable=false)
     */
    private $obname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="obTypeId", type="integer", nullable=false)
     */
    private $obtypeid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="obRegion", type="integer", nullable=false)
     */
    private $obregion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="obStateId", type="integer", nullable=false)
     */
    private $obstateid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="obCity", type="integer", nullable=false)
     */
    private $obcity = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="obDate", type="datetime", nullable=false)
     */
    private $obdate = '2010-01-01 01:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="obDateEnd", type="datetime", nullable=false)
     */
    private $obdateend = '2011-01-01 01:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="obTxt", type="text", length=65535, nullable=false)
     */
    private $obtxt;

    /**
     * @var string
     *
     * @ORM\Column(name="obCennik", type="text", length=65535, nullable=false)
     */
    private $obcennik;

    /**
     * @var integer
     *
     * @ORM\Column(name="obPriceOn", type="integer", nullable=false)
     */
    private $obpriceon = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="obUslugi", type="string", length=55, nullable=false)
     */
    private $obuslugi = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="obUserId", type="integer", nullable=false)
     */
    private $obuserid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="obTel", type="string", length=20, nullable=false)
     */
    private $obtel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="obEmail", type="string", length=255, nullable=false)
     */
    private $obemail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="obWww", type="string", length=255, nullable=false)
     */
    private $obwww = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="obConfirm", type="integer", nullable=true)
     */
    private $obconfirm = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="obAdress", type="string", length=255, nullable=false)
     */
    private $obadress = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="obPromo", type="integer", nullable=false)
     */
    private $obpromo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="obPromoDateEnd", type="datetime", nullable=false)
     */
    private $obpromodateend = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="obWyroz", type="integer", nullable=false)
     */
    private $obwyroz = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="obWyrozDateEnd", type="datetime", nullable=false)
     */
    private $obwyrozdateend = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="obKolor", type="integer", nullable=false)
     */
    private $obkolor = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="obKolorDateEnd", type="datetime", nullable=false)
     */
    private $obkolordateend = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="clicked", type="integer", nullable=false)
     */
    private $clicked;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=false)
     */
    private $views = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="gg", type="string", length=11, nullable=false)
     */
    private $gg;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float", precision=10, scale=0, nullable=false)
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(name="lng", type="float", precision=10, scale=0, nullable=false)
     */
    private $lng;

    /**
     * @var integer
     *
     * @ORM\Column(name="zoom", type="integer", nullable=false)
     */
    private $zoom = '10';

    /**
     * @var string
     *
     * @ORM\Column(name="obKlucze", type="string", length=400, nullable=false)
     */
    private $obklucze;

    /**
     * @var string
     *
     * @ORM\Column(name="obOpis", type="string", length=400, nullable=false)
     */
    private $obopis;

    /**
     * @var integer
     *
     * @ORM\Column(name="obKat", type="integer", nullable=false)
     */
    private $obkat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="obJezyk", type="integer", nullable=false)
     */
    private $objezyk = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="obRoom", type="integer", nullable=false)
     */
    private $obroom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="obBed", type="integer", nullable=false)
     */
    private $obbed = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="obOkolica", type="text", length=65535, nullable=false)
     */
    private $obokolica;

    /**
     * @var string
     *
     * @ORM\Column(name="obA", type="string", length=255, nullable=false)
     */
    private $oba;

    /**
     * @var string
     *
     * @ORM\Column(name="obB", type="string", length=255, nullable=false)
     */
    private $obb;

    /**
     * @var string
     *
     * @ORM\Column(name="obC", type="string", length=255, nullable=false)
     */
    private $obc;

    /**
     * @var integer
     *
     * @ORM\Column(name="obCenaA1", type="integer", nullable=false)
     */
    private $obcenaa1;

    /**
     * @var integer
     *
     * @ORM\Column(name="obCenaA2", type="integer", nullable=false)
     */
    private $obcenaa2;

    /**
     * @var integer
     *
     * @ORM\Column(name="obCenaB1", type="integer", nullable=false)
     */
    private $obcenab1;

    /**
     * @var integer
     *
     * @ORM\Column(name="obCenaB2", type="integer", nullable=false)
     */
    private $obcenab2;

    /**
     * @var integer
     *
     * @ORM\Column(name="obCenaC1", type="integer", nullable=false)
     */
    private $obcenac1;

    /**
     * @var integer
     *
     * @ORM\Column(name="obCenaC2", type="integer", nullable=false)
     */
    private $obcenac2;

    /**
     * @var integer
     *
     * @ORM\Column(name="obCenaD1", type="integer", nullable=false)
     */
    private $obcenad1;

    /**
     * @var integer
     *
     * @ORM\Column(name="obCenaD2", type="integer", nullable=false)
     */
    private $obcenad2;

    /**
     * @var integer
     *
     * @ORM\Column(name="obRabat", type="integer", nullable=false)
     */
    private $obrabat;

    /**
     * @var string
     *
     * @ORM\Column(name="obMiejsce1", type="string", length=100, nullable=false)
     */
    private $obmiejsce1;

    /**
     * @var string
     *
     * @ORM\Column(name="obMiejsce2", type="string", length=100, nullable=false)
     */
    private $obmiejsce2;

    /**
     * @var string
     *
     * @ORM\Column(name="obMiejsce3", type="string", length=100, nullable=false)
     */
    private $obmiejsce3;

    /**
     * @var string
     *
     * @ORM\Column(name="obMiejsce4", type="string", length=100, nullable=false)
     */
    private $obmiejsce4;

    /**
     * @var string
     *
     * @ORM\Column(name="obDostepnosc", type="string", length=50, nullable=false)
     */
    private $obdostepnosc;

    /**
     * @var integer
     *
     * @ORM\Column(name="obIloscApart", type="integer", nullable=false)
     */
    private $obiloscapart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="obPokoj1ilosc", type="integer", nullable=false)
     */
    private $obpokoj1ilosc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="obPokoj2ilosc", type="integer", nullable=false)
     */
    private $obpokoj2ilosc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="obPokoj3ilosc", type="integer", nullable=false)
     */
    private $obpokoj3ilosc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="obPunkty", type="integer", nullable=false)
     */
    private $obpunkty = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="obFilm", type="string", length=100, nullable=false)
     */
    private $obfilm;

    /**
     * @var string
     *
     * @ORM\Column(name="obIP", type="string", length=20, nullable=false)
     */
    private $obip;

    /**
     * @var string
     *
     * @ORM\Column(name="obMiasto", type="string", length=100, nullable=false)
     */
    private $obmiasto;

    /**
     * @var integer
     *
     * @ORM\Column(name="obId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $obid;



    /**
     * Set obname
     *
     * @param string $obname
     *
     * @return Object
     */
    public function setObname($obname)
    {
        $this->obname = $obname;

        return $this;
    }

    /**
     * Get obname
     *
     * @return string
     */
    public function getObname()
    {
        return $this->obname;
    }

    /**
     * Set obtypeid
     *
     * @param integer $obtypeid
     *
     * @return Object
     */
    public function setObtypeid($obtypeid)
    {
        $this->obtypeid = $obtypeid;

        return $this;
    }

    /**
     * Get obtypeid
     *
     * @return integer
     */
    public function getObtypeid()
    {
        return $this->obtypeid;
    }

    /**
     * Set obregion
     *
     * @param integer $obregion
     *
     * @return Object
     */
    public function setObregion($obregion)
    {
        $this->obregion = $obregion;

        return $this;
    }

    /**
     * Get obregion
     *
     * @return integer
     */
    public function getObregion()
    {
        return $this->obregion;
    }

    /**
     * Set obstateid
     *
     * @param integer $obstateid
     *
     * @return Object
     */
    public function setObstateid($obstateid)
    {
        $this->obstateid = $obstateid;

        return $this;
    }

    /**
     * Get obstateid
     *
     * @return integer
     */
    public function getObstateid()
    {
        return $this->obstateid;
    }

    /**
     * Set obcity
     *
     * @param integer $obcity
     *
     * @return Object
     */
    public function setObcity($obcity)
    {
        $this->obcity = $obcity;

        return $this;
    }

    /**
     * Get obcity
     *
     * @return integer
     */
    public function getObcity()
    {
        return $this->obcity;
    }

    /**
     * Set obdate
     *
     * @param \DateTime $obdate
     *
     * @return Object
     */
    public function setObdate($obdate)
    {
        $this->obdate = $obdate;

        return $this;
    }

    /**
     * Get obdate
     *
     * @return \DateTime
     */
    public function getObdate()
    {
        return $this->obdate;
    }

    /**
     * Set obdateend
     *
     * @param \DateTime $obdateend
     *
     * @return Object
     */
    public function setObdateend($obdateend)
    {
        $this->obdateend = $obdateend;

        return $this;
    }

    /**
     * Get obdateend
     *
     * @return \DateTime
     */
    public function getObdateend()
    {
        return $this->obdateend;
    }

    /**
     * Set obtxt
     *
     * @param string $obtxt
     *
     * @return Object
     */
    public function setObtxt($obtxt)
    {
        $this->obtxt = $obtxt;

        return $this;
    }

    /**
     * Get obtxt
     *
     * @return string
     */
    public function getObtxt()
    {
        return $this->obtxt;
    }

    /**
     * Set obcennik
     *
     * @param string $obcennik
     *
     * @return Object
     */
    public function setObcennik($obcennik)
    {
        $this->obcennik = $obcennik;

        return $this;
    }

    /**
     * Get obcennik
     *
     * @return string
     */
    public function getObcennik()
    {
        return $this->obcennik;
    }

    /**
     * Set obpriceon
     *
     * @param integer $obpriceon
     *
     * @return Object
     */
    public function setObpriceon($obpriceon)
    {
        $this->obpriceon = $obpriceon;

        return $this;
    }

    /**
     * Get obpriceon
     *
     * @return integer
     */
    public function getObpriceon()
    {
        return $this->obpriceon;
    }

    /**
     * Set obuslugi
     *
     * @param string $obuslugi
     *
     * @return Object
     */
    public function setObuslugi($obuslugi)
    {
        $this->obuslugi = $obuslugi;

        return $this;
    }

    /**
     * Get obuslugi
     *
     * @return string
     */
    public function getObuslugi()
    {
        return $this->obuslugi;
    }

    /**
     * Set obuserid
     *
     * @param integer $obuserid
     *
     * @return Object
     */
    public function setObuserid($obuserid)
    {
        $this->obuserid = $obuserid;

        return $this;
    }

    /**
     * Get obuserid
     *
     * @return integer
     */
    public function getObuserid()
    {
        return $this->obuserid;
    }

    /**
     * Set obtel
     *
     * @param string $obtel
     *
     * @return Object
     */
    public function setObtel($obtel)
    {
        $this->obtel = $obtel;

        return $this;
    }

    /**
     * Get obtel
     *
     * @return string
     */
    public function getObtel()
    {
        return $this->obtel;
    }

    /**
     * Set obemail
     *
     * @param string $obemail
     *
     * @return Object
     */
    public function setObemail($obemail)
    {
        $this->obemail = $obemail;

        return $this;
    }

    /**
     * Get obemail
     *
     * @return string
     */
    public function getObemail()
    {
        return $this->obemail;
    }

    /**
     * Set obwww
     *
     * @param string $obwww
     *
     * @return Object
     */
    public function setObwww($obwww)
    {
        $this->obwww = $obwww;

        return $this;
    }

    /**
     * Get obwww
     *
     * @return string
     */
    public function getObwww()
    {
        return $this->obwww;
    }

    /**
     * Set obconfirm
     *
     * @param integer $obconfirm
     *
     * @return Object
     */
    public function setObconfirm($obconfirm)
    {
        $this->obconfirm = $obconfirm;

        return $this;
    }

    /**
     * Get obconfirm
     *
     * @return integer
     */
    public function getObconfirm()
    {
        return $this->obconfirm;
    }

    /**
     * Set obadress
     *
     * @param string $obadress
     *
     * @return Object
     */
    public function setObadress($obadress)
    {
        $this->obadress = $obadress;

        return $this;
    }

    /**
     * Get obadress
     *
     * @return string
     */
    public function getObadress()
    {
        return $this->obadress;
    }

    /**
     * Set obpromo
     *
     * @param integer $obpromo
     *
     * @return Object
     */
    public function setObpromo($obpromo)
    {
        $this->obpromo = $obpromo;

        return $this;
    }

    /**
     * Get obpromo
     *
     * @return integer
     */
    public function getObpromo()
    {
        return $this->obpromo;
    }

    /**
     * Set obpromodateend
     *
     * @param \DateTime $obpromodateend
     *
     * @return Object
     */
    public function setObpromodateend($obpromodateend)
    {
        $this->obpromodateend = $obpromodateend;

        return $this;
    }

    /**
     * Get obpromodateend
     *
     * @return \DateTime
     */
    public function getObpromodateend()
    {
        return $this->obpromodateend;
    }

    /**
     * Set obwyroz
     *
     * @param integer $obwyroz
     *
     * @return Object
     */
    public function setObwyroz($obwyroz)
    {
        $this->obwyroz = $obwyroz;

        return $this;
    }

    /**
     * Get obwyroz
     *
     * @return integer
     */
    public function getObwyroz()
    {
        return $this->obwyroz;
    }

    /**
     * Set obwyrozdateend
     *
     * @param \DateTime $obwyrozdateend
     *
     * @return Object
     */
    public function setObwyrozdateend($obwyrozdateend)
    {
        $this->obwyrozdateend = $obwyrozdateend;

        return $this;
    }

    /**
     * Get obwyrozdateend
     *
     * @return \DateTime
     */
    public function getObwyrozdateend()
    {
        return $this->obwyrozdateend;
    }

    /**
     * Set obkolor
     *
     * @param integer $obkolor
     *
     * @return Object
     */
    public function setObkolor($obkolor)
    {
        $this->obkolor = $obkolor;

        return $this;
    }

    /**
     * Get obkolor
     *
     * @return integer
     */
    public function getObkolor()
    {
        return $this->obkolor;
    }

    /**
     * Set obkolordateend
     *
     * @param \DateTime $obkolordateend
     *
     * @return Object
     */
    public function setObkolordateend($obkolordateend)
    {
        $this->obkolordateend = $obkolordateend;

        return $this;
    }

    /**
     * Get obkolordateend
     *
     * @return \DateTime
     */
    public function getObkolordateend()
    {
        return $this->obkolordateend;
    }

    /**
     * Set clicked
     *
     * @param integer $clicked
     *
     * @return Object
     */
    public function setClicked($clicked)
    {
        $this->clicked = $clicked;

        return $this;
    }

    /**
     * Get clicked
     *
     * @return integer
     */
    public function getClicked()
    {
        return $this->clicked;
    }

    /**
     * Set views
     *
     * @param integer $views
     *
     * @return Object
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set gg
     *
     * @param string $gg
     *
     * @return Object
     */
    public function setGg($gg)
    {
        $this->gg = $gg;

        return $this;
    }

    /**
     * Get gg
     *
     * @return string
     */
    public function getGg()
    {
        return $this->gg;
    }

    /**
     * Set lat
     *
     * @param float $lat
     *
     * @return Object
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param float $lng
     *
     * @return Object
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set zoom
     *
     * @param integer $zoom
     *
     * @return Object
     */
    public function setZoom($zoom)
    {
        $this->zoom = $zoom;

        return $this;
    }

    /**
     * Get zoom
     *
     * @return integer
     */
    public function getZoom()
    {
        return $this->zoom;
    }

    /**
     * Set obklucze
     *
     * @param string $obklucze
     *
     * @return Object
     */
    public function setObklucze($obklucze)
    {
        $this->obklucze = $obklucze;

        return $this;
    }

    /**
     * Get obklucze
     *
     * @return string
     */
    public function getObklucze()
    {
        return $this->obklucze;
    }

    /**
     * Set obopis
     *
     * @param string $obopis
     *
     * @return Object
     */
    public function setObopis($obopis)
    {
        $this->obopis = $obopis;

        return $this;
    }

    /**
     * Get obopis
     *
     * @return string
     */
    public function getObopis()
    {
        return $this->obopis;
    }

    /**
     * Set obkat
     *
     * @param integer $obkat
     *
     * @return Object
     */
    public function setObkat($obkat)
    {
        $this->obkat = $obkat;

        return $this;
    }

    /**
     * Get obkat
     *
     * @return integer
     */
    public function getObkat()
    {
        return $this->obkat;
    }

    /**
     * Set objezyk
     *
     * @param integer $objezyk
     *
     * @return Object
     */
    public function setObjezyk($objezyk)
    {
        $this->objezyk = $objezyk;

        return $this;
    }

    /**
     * Get objezyk
     *
     * @return integer
     */
    public function getObjezyk()
    {
        return $this->objezyk;
    }

    /**
     * Set obroom
     *
     * @param integer $obroom
     *
     * @return Object
     */
    public function setObroom($obroom)
    {
        $this->obroom = $obroom;

        return $this;
    }

    /**
     * Get obroom
     *
     * @return integer
     */
    public function getObroom()
    {
        return $this->obroom;
    }

    /**
     * Set obbed
     *
     * @param integer $obbed
     *
     * @return Object
     */
    public function setObbed($obbed)
    {
        $this->obbed = $obbed;

        return $this;
    }

    /**
     * Get obbed
     *
     * @return integer
     */
    public function getObbed()
    {
        return $this->obbed;
    }

    /**
     * Set obokolica
     *
     * @param string $obokolica
     *
     * @return Object
     */
    public function setObokolica($obokolica)
    {
        $this->obokolica = $obokolica;

        return $this;
    }

    /**
     * Get obokolica
     *
     * @return string
     */
    public function getObokolica()
    {
        return $this->obokolica;
    }

    /**
     * Set oba
     *
     * @param string $oba
     *
     * @return Object
     */
    public function setOba($oba)
    {
        $this->oba = $oba;

        return $this;
    }

    /**
     * Get oba
     *
     * @return string
     */
    public function getOba()
    {
        return $this->oba;
    }

    /**
     * Set obb
     *
     * @param string $obb
     *
     * @return Object
     */
    public function setObb($obb)
    {
        $this->obb = $obb;

        return $this;
    }

    /**
     * Get obb
     *
     * @return string
     */
    public function getObb()
    {
        return $this->obb;
    }

    /**
     * Set obc
     *
     * @param string $obc
     *
     * @return Object
     */
    public function setObc($obc)
    {
        $this->obc = $obc;

        return $this;
    }

    /**
     * Get obc
     *
     * @return string
     */
    public function getObc()
    {
        return $this->obc;
    }

    /**
     * Set obcenaa1
     *
     * @param integer $obcenaa1
     *
     * @return Object
     */
    public function setObcenaa1($obcenaa1)
    {
        $this->obcenaa1 = $obcenaa1;

        return $this;
    }

    /**
     * Get obcenaa1
     *
     * @return integer
     */
    public function getObcenaa1()
    {
        return $this->obcenaa1;
    }

    /**
     * Set obcenaa2
     *
     * @param integer $obcenaa2
     *
     * @return Object
     */
    public function setObcenaa2($obcenaa2)
    {
        $this->obcenaa2 = $obcenaa2;

        return $this;
    }

    /**
     * Get obcenaa2
     *
     * @return integer
     */
    public function getObcenaa2()
    {
        return $this->obcenaa2;
    }

    /**
     * Set obcenab1
     *
     * @param integer $obcenab1
     *
     * @return Object
     */
    public function setObcenab1($obcenab1)
    {
        $this->obcenab1 = $obcenab1;

        return $this;
    }

    /**
     * Get obcenab1
     *
     * @return integer
     */
    public function getObcenab1()
    {
        return $this->obcenab1;
    }

    /**
     * Set obcenab2
     *
     * @param integer $obcenab2
     *
     * @return Object
     */
    public function setObcenab2($obcenab2)
    {
        $this->obcenab2 = $obcenab2;

        return $this;
    }

    /**
     * Get obcenab2
     *
     * @return integer
     */
    public function getObcenab2()
    {
        return $this->obcenab2;
    }

    /**
     * Set obcenac1
     *
     * @param integer $obcenac1
     *
     * @return Object
     */
    public function setObcenac1($obcenac1)
    {
        $this->obcenac1 = $obcenac1;

        return $this;
    }

    /**
     * Get obcenac1
     *
     * @return integer
     */
    public function getObcenac1()
    {
        return $this->obcenac1;
    }

    /**
     * Set obcenac2
     *
     * @param integer $obcenac2
     *
     * @return Object
     */
    public function setObcenac2($obcenac2)
    {
        $this->obcenac2 = $obcenac2;

        return $this;
    }

    /**
     * Get obcenac2
     *
     * @return integer
     */
    public function getObcenac2()
    {
        return $this->obcenac2;
    }

    /**
     * Set obcenad1
     *
     * @param integer $obcenad1
     *
     * @return Object
     */
    public function setObcenad1($obcenad1)
    {
        $this->obcenad1 = $obcenad1;

        return $this;
    }

    /**
     * Get obcenad1
     *
     * @return integer
     */
    public function getObcenad1()
    {
        return $this->obcenad1;
    }

    /**
     * Set obcenad2
     *
     * @param integer $obcenad2
     *
     * @return Object
     */
    public function setObcenad2($obcenad2)
    {
        $this->obcenad2 = $obcenad2;

        return $this;
    }

    /**
     * Get obcenad2
     *
     * @return integer
     */
    public function getObcenad2()
    {
        return $this->obcenad2;
    }

    /**
     * Set obrabat
     *
     * @param integer $obrabat
     *
     * @return Object
     */
    public function setObrabat($obrabat)
    {
        $this->obrabat = $obrabat;

        return $this;
    }

    /**
     * Get obrabat
     *
     * @return integer
     */
    public function getObrabat()
    {
        return $this->obrabat;
    }

    /**
     * Set obmiejsce1
     *
     * @param string $obmiejsce1
     *
     * @return Object
     */
    public function setObmiejsce1($obmiejsce1)
    {
        $this->obmiejsce1 = $obmiejsce1;

        return $this;
    }

    /**
     * Get obmiejsce1
     *
     * @return string
     */
    public function getObmiejsce1()
    {
        return $this->obmiejsce1;
    }

    /**
     * Set obmiejsce2
     *
     * @param string $obmiejsce2
     *
     * @return Object
     */
    public function setObmiejsce2($obmiejsce2)
    {
        $this->obmiejsce2 = $obmiejsce2;

        return $this;
    }

    /**
     * Get obmiejsce2
     *
     * @return string
     */
    public function getObmiejsce2()
    {
        return $this->obmiejsce2;
    }

    /**
     * Set obmiejsce3
     *
     * @param string $obmiejsce3
     *
     * @return Object
     */
    public function setObmiejsce3($obmiejsce3)
    {
        $this->obmiejsce3 = $obmiejsce3;

        return $this;
    }

    /**
     * Get obmiejsce3
     *
     * @return string
     */
    public function getObmiejsce3()
    {
        return $this->obmiejsce3;
    }

    /**
     * Set obmiejsce4
     *
     * @param string $obmiejsce4
     *
     * @return Object
     */
    public function setObmiejsce4($obmiejsce4)
    {
        $this->obmiejsce4 = $obmiejsce4;

        return $this;
    }

    /**
     * Get obmiejsce4
     *
     * @return string
     */
    public function getObmiejsce4()
    {
        return $this->obmiejsce4;
    }

    /**
     * Set obdostepnosc
     *
     * @param string $obdostepnosc
     *
     * @return Object
     */
    public function setObdostepnosc($obdostepnosc)
    {
        $this->obdostepnosc = $obdostepnosc;

        return $this;
    }

    /**
     * Get obdostepnosc
     *
     * @return string
     */
    public function getObdostepnosc()
    {
        return $this->obdostepnosc;
    }

    /**
     * Set obiloscapart
     *
     * @param integer $obiloscapart
     *
     * @return Object
     */
    public function setObiloscapart($obiloscapart)
    {
        $this->obiloscapart = $obiloscapart;

        return $this;
    }

    /**
     * Get obiloscapart
     *
     * @return integer
     */
    public function getObiloscapart()
    {
        return $this->obiloscapart;
    }

    /**
     * Set obpokoj1ilosc
     *
     * @param integer $obpokoj1ilosc
     *
     * @return Object
     */
    public function setObpokoj1ilosc($obpokoj1ilosc)
    {
        $this->obpokoj1ilosc = $obpokoj1ilosc;

        return $this;
    }

    /**
     * Get obpokoj1ilosc
     *
     * @return integer
     */
    public function getObpokoj1ilosc()
    {
        return $this->obpokoj1ilosc;
    }

    /**
     * Set obpokoj2ilosc
     *
     * @param integer $obpokoj2ilosc
     *
     * @return Object
     */
    public function setObpokoj2ilosc($obpokoj2ilosc)
    {
        $this->obpokoj2ilosc = $obpokoj2ilosc;

        return $this;
    }

    /**
     * Get obpokoj2ilosc
     *
     * @return integer
     */
    public function getObpokoj2ilosc()
    {
        return $this->obpokoj2ilosc;
    }

    /**
     * Set obpokoj3ilosc
     *
     * @param integer $obpokoj3ilosc
     *
     * @return Object
     */
    public function setObpokoj3ilosc($obpokoj3ilosc)
    {
        $this->obpokoj3ilosc = $obpokoj3ilosc;

        return $this;
    }

    /**
     * Get obpokoj3ilosc
     *
     * @return integer
     */
    public function getObpokoj3ilosc()
    {
        return $this->obpokoj3ilosc;
    }

    /**
     * Set obpunkty
     *
     * @param integer $obpunkty
     *
     * @return Object
     */
    public function setObpunkty($obpunkty)
    {
        $this->obpunkty = $obpunkty;

        return $this;
    }

    /**
     * Get obpunkty
     *
     * @return integer
     */
    public function getObpunkty()
    {
        return $this->obpunkty;
    }

    /**
     * Set obfilm
     *
     * @param string $obfilm
     *
     * @return Object
     */
    public function setObfilm($obfilm)
    {
        $this->obfilm = $obfilm;

        return $this;
    }

    /**
     * Get obfilm
     *
     * @return string
     */
    public function getObfilm()
    {
        return $this->obfilm;
    }

    /**
     * Set obip
     *
     * @param string $obip
     *
     * @return Object
     */
    public function setObip($obip)
    {
        $this->obip = $obip;

        return $this;
    }

    /**
     * Get obip
     *
     * @return string
     */
    public function getObip()
    {
        return $this->obip;
    }

    /**
     * Set obmiasto
     *
     * @param string $obmiasto
     *
     * @return Object
     */
    public function setObmiasto($obmiasto)
    {
        $this->obmiasto = $obmiasto;

        return $this;
    }

    /**
     * Get obmiasto
     *
     * @return string
     */
    public function getObmiasto()
    {
        return $this->obmiasto;
    }

    /**
     * Get obid
     *
     * @return integer
     */
    public function getObid()
    {
        return $this->obid;
    }
}
