<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Miasto", inversedBy="objectCity")
     * @ORM\JoinColumn(name="obCity", referencedColumnName="miastoId")
     */
    private $cityName;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Photos", inversedBy="photosCity")
     * @ORM\JoinColumn(name="obId", referencedColumnName="photoObjectId")
     */
    private $photosGet;


    /**
     * Object constructor.
     */
    public function __construct()
    {
        $this->cityName = new ArrayCollection();
        $this->photosGet = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getObid()
    {
        return $this->obid;
    }

    /**
     * @return string
     */
    public function getObname()
    {
        return $this->obname;
    }

    /**
     * @param string $obname
     */
    public function setObname($obname)
    {
        $this->obname = $obname;
    }

    /**
     * @return int
     */
    public function getObtypeid()
    {
        return $this->obtypeid;
    }

    /**
     * @param int $obtypeid
     */
    public function setObtypeid($obtypeid)
    {
        $this->obtypeid = $obtypeid;
    }

    /**
     * @return int
     */
    public function getObregion()
    {
        return $this->obregion;
    }

    /**
     * @param int $obregion
     */
    public function setObregion($obregion)
    {
        $this->obregion = $obregion;
    }

    /**
     * @return int
     */
    public function getObstateid()
    {
        return $this->obstateid;
    }

    /**
     * @param int $obstateid
     */
    public function setObstateid($obstateid)
    {
        $this->obstateid = $obstateid;
    }

    /**
     * @return int
     */
    public function getObcity()
    {
        return $this->obcity;
    }

    /**
     * @param int $obcity
     */
    public function setObcity($obcity)
    {
        $this->obcity = $obcity;
    }

    /**
     * @return \DateTime
     */
    public function getObdate()
    {
        return $this->obdate;
    }

    /**
     * @param \DateTime $obdate
     */
    public function setObdate($obdate)
    {
        $this->obdate = $obdate;
    }

    /**
     * @return \DateTime
     */
    public function getObdateend()
    {
        return $this->obdateend;
    }

    /**
     * @param \DateTime $obdateend
     */
    public function setObdateend($obdateend)
    {
        $this->obdateend = $obdateend;
    }

    /**
     * @return string
     */
    public function getObtxt()
    {
        return $this->obtxt;
    }

    /**
     * @param string $obtxt
     */
    public function setObtxt($obtxt)
    {
        $this->obtxt = $obtxt;
    }

    /**
     * @return string
     */
    public function getObcennik()
    {
        return $this->obcennik;
    }

    /**
     * @param string $obcennik
     */
    public function setObcennik($obcennik)
    {
        $this->obcennik = $obcennik;
    }

    /**
     * @return int
     */
    public function getObpriceon()
    {
        return $this->obpriceon;
    }

    /**
     * @param int $obpriceon
     */
    public function setObpriceon($obpriceon)
    {
        $this->obpriceon = $obpriceon;
    }

    /**
     * @return string
     */
    public function getObuslugi()
    {
        return $this->obuslugi;
    }

    /**
     * @param string $obuslugi
     */
    public function setObuslugi($obuslugi)
    {
        $this->obuslugi = $obuslugi;
    }

    /**
     * @return int
     */
    public function getObuserid()
    {
        return $this->obuserid;
    }

    /**
     * @param int $obuserid
     */
    public function setObuserid($obuserid)
    {
        $this->obuserid = $obuserid;
    }

    /**
     * @return string
     */
    public function getObtel()
    {
        return $this->obtel;
    }

    /**
     * @param string $obtel
     */
    public function setObtel($obtel)
    {
        $this->obtel = $obtel;
    }

    /**
     * @return string
     */
    public function getObemail()
    {
        return $this->obemail;
    }

    /**
     * @param string $obemail
     */
    public function setObemail($obemail)
    {
        $this->obemail = $obemail;
    }

    /**
     * @return string
     */
    public function getObwww()
    {
        return $this->obwww;
    }

    /**
     * @param string $obwww
     */
    public function setObwww($obwww)
    {
        $this->obwww = $obwww;
    }

    /**
     * @return int
     */
    public function getObconfirm()
    {
        return $this->obconfirm;
    }

    /**
     * @param int $obconfirm
     */
    public function setObconfirm($obconfirm)
    {
        $this->obconfirm = $obconfirm;
    }

    /**
     * @return string
     */
    public function getObadress()
    {
        return $this->obadress;
    }

    /**
     * @param string $obadress
     */
    public function setObadress($obadress)
    {
        $this->obadress = $obadress;
    }

    /**
     * @return int
     */
    public function getObpromo()
    {
        return $this->obpromo;
    }

    /**
     * @param int $obpromo
     */
    public function setObpromo($obpromo)
    {
        $this->obpromo = $obpromo;
    }

    /**
     * @return \DateTime
     */
    public function getObpromodateend()
    {
        return $this->obpromodateend;
    }

    /**
     * @param \DateTime $obpromodateend
     */
    public function setObpromodateend($obpromodateend)
    {
        $this->obpromodateend = $obpromodateend;
    }

    /**
     * @return int
     */
    public function getObwyroz()
    {
        return $this->obwyroz;
    }

    /**
     * @param int $obwyroz
     */
    public function setObwyroz($obwyroz)
    {
        $this->obwyroz = $obwyroz;
    }

    /**
     * @return \DateTime
     */
    public function getObwyrozdateend()
    {
        return $this->obwyrozdateend;
    }

    /**
     * @param \DateTime $obwyrozdateend
     */
    public function setObwyrozdateend($obwyrozdateend)
    {
        $this->obwyrozdateend = $obwyrozdateend;
    }

    /**
     * @return int
     */
    public function getObkolor()
    {
        return $this->obkolor;
    }

    /**
     * @param int $obkolor
     */
    public function setObkolor($obkolor)
    {
        $this->obkolor = $obkolor;
    }

    /**
     * @return \DateTime
     */
    public function getObkolordateend()
    {
        return $this->obkolordateend;
    }

    /**
     * @param \DateTime $obkolordateend
     */
    public function setObkolordateend($obkolordateend)
    {
        $this->obkolordateend = $obkolordateend;
    }

    /**
     * @return int
     */
    public function getClicked()
    {
        return $this->clicked;
    }

    /**
     * @param int $clicked
     */
    public function setClicked($clicked)
    {
        $this->clicked = $clicked;
    }

    /**
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @param int $views
     */
    public function setViews($views)
    {
        $this->views = $views;
    }

    /**
     * @return string
     */
    public function getGg()
    {
        return $this->gg;
    }

    /**
     * @param string $gg
     */
    public function setGg($gg)
    {
        $this->gg = $gg;
    }

    /**
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param float $lng
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    /**
     * @return int
     */
    public function getZoom()
    {
        return $this->zoom;
    }

    /**
     * @param int $zoom
     */
    public function setZoom($zoom)
    {
        $this->zoom = $zoom;
    }

    /**
     * @return string
     */
    public function getObklucze()
    {
        return $this->obklucze;
    }

    /**
     * @param string $obklucze
     */
    public function setObklucze($obklucze)
    {
        $this->obklucze = $obklucze;
    }

    /**
     * @return string
     */
    public function getObopis()
    {
        return $this->obopis;
    }

    /**
     * @param string $obopis
     */
    public function setObopis($obopis)
    {
        $this->obopis = $obopis;
    }

    /**
     * @return int
     */
    public function getObkat()
    {
        return $this->obkat;
    }

    /**
     * @param int $obkat
     */
    public function setObkat($obkat)
    {
        $this->obkat = $obkat;
    }

    /**
     * @return int
     */
    public function getObjezyk()
    {
        return $this->objezyk;
    }

    /**
     * @param int $objezyk
     */
    public function setObjezyk($objezyk)
    {
        $this->objezyk = $objezyk;
    }

    /**
     * @return int
     */
    public function getObroom()
    {
        return $this->obroom;
    }

    /**
     * @param int $obroom
     */
    public function setObroom($obroom)
    {
        $this->obroom = $obroom;
    }

    /**
     * @return int
     */
    public function getObbed()
    {
        return $this->obbed;
    }

    /**
     * @param int $obbed
     */
    public function setObbed($obbed)
    {
        $this->obbed = $obbed;
    }

    /**
     * @return string
     */
    public function getObokolica()
    {
        return $this->obokolica;
    }

    /**
     * @param string $obokolica
     */
    public function setObokolica($obokolica)
    {
        $this->obokolica = $obokolica;
    }

    /**
     * @return string
     */
    public function getOba()
    {
        return $this->oba;
    }

    /**
     * @param string $oba
     */
    public function setOba($oba)
    {
        $this->oba = $oba;
    }

    /**
     * @return string
     */
    public function getObb()
    {
        return $this->obb;
    }

    /**
     * @param string $obb
     */
    public function setObb($obb)
    {
        $this->obb = $obb;
    }

    /**
     * @return string
     */
    public function getObc()
    {
        return $this->obc;
    }

    /**
     * @param string $obc
     */
    public function setObc($obc)
    {
        $this->obc = $obc;
    }

    /**
     * @return int
     */
    public function getObcenaa1()
    {
        return $this->obcenaa1;
    }

    /**
     * @param int $obcenaa1
     */
    public function setObcenaa1($obcenaa1)
    {
        $this->obcenaa1 = $obcenaa1;
    }

    /**
     * @return int
     */
    public function getObcenaa2()
    {
        return $this->obcenaa2;
    }

    /**
     * @param int $obcenaa2
     */
    public function setObcenaa2($obcenaa2)
    {
        $this->obcenaa2 = $obcenaa2;
    }

    /**
     * @return int
     */
    public function getObcenab1()
    {
        return $this->obcenab1;
    }

    /**
     * @param int $obcenab1
     */
    public function setObcenab1($obcenab1)
    {
        $this->obcenab1 = $obcenab1;
    }

    /**
     * @return int
     */
    public function getObcenab2()
    {
        return $this->obcenab2;
    }

    /**
     * @param int $obcenab2
     */
    public function setObcenab2($obcenab2)
    {
        $this->obcenab2 = $obcenab2;
    }

    /**
     * @return int
     */
    public function getObcenac1()
    {
        return $this->obcenac1;
    }

    /**
     * @param int $obcenac1
     */
    public function setObcenac1($obcenac1)
    {
        $this->obcenac1 = $obcenac1;
    }

    /**
     * @return int
     */
    public function getObcenac2()
    {
        return $this->obcenac2;
    }

    /**
     * @param int $obcenac2
     */
    public function setObcenac2($obcenac2)
    {
        $this->obcenac2 = $obcenac2;
    }

    /**
     * @return int
     */
    public function getObcenad1()
    {
        return $this->obcenad1;
    }

    /**
     * @param int $obcenad1
     */
    public function setObcenad1($obcenad1)
    {
        $this->obcenad1 = $obcenad1;
    }

    /**
     * @return int
     */
    public function getObcenad2()
    {
        return $this->obcenad2;
    }

    /**
     * @param int $obcenad2
     */
    public function setObcenad2($obcenad2)
    {
        $this->obcenad2 = $obcenad2;
    }

    /**
     * @return int
     */
    public function getObrabat()
    {
        return $this->obrabat;
    }

    /**
     * @param int $obrabat
     */
    public function setObrabat($obrabat)
    {
        $this->obrabat = $obrabat;
    }

    /**
     * @return string
     */
    public function getObmiejsce1()
    {
        return $this->obmiejsce1;
    }

    /**
     * @param string $obmiejsce1
     */
    public function setObmiejsce1($obmiejsce1)
    {
        $this->obmiejsce1 = $obmiejsce1;
    }

    /**
     * @return string
     */
    public function getObmiejsce2()
    {
        return $this->obmiejsce2;
    }

    /**
     * @param string $obmiejsce2
     */
    public function setObmiejsce2($obmiejsce2)
    {
        $this->obmiejsce2 = $obmiejsce2;
    }

    /**
     * @return string
     */
    public function getObmiejsce3()
    {
        return $this->obmiejsce3;
    }

    /**
     * @param string $obmiejsce3
     */
    public function setObmiejsce3($obmiejsce3)
    {
        $this->obmiejsce3 = $obmiejsce3;
    }

    /**
     * @return string
     */
    public function getObmiejsce4()
    {
        return $this->obmiejsce4;
    }

    /**
     * @param string $obmiejsce4
     */
    public function setObmiejsce4($obmiejsce4)
    {
        $this->obmiejsce4 = $obmiejsce4;
    }

    /**
     * @return string
     */
    public function getObdostepnosc()
    {
        return $this->obdostepnosc;
    }

    /**
     * @param string $obdostepnosc
     */
    public function setObdostepnosc($obdostepnosc)
    {
        $this->obdostepnosc = $obdostepnosc;
    }

    /**
     * @return int
     */
    public function getObiloscapart()
    {
        return $this->obiloscapart;
    }

    /**
     * @param int $obiloscapart
     */
    public function setObiloscapart($obiloscapart)
    {
        $this->obiloscapart = $obiloscapart;
    }

    /**
     * @return int
     */
    public function getObpokoj1ilosc()
    {
        return $this->obpokoj1ilosc;
    }

    /**
     * @param int $obpokoj1ilosc
     */
    public function setObpokoj1ilosc($obpokoj1ilosc)
    {
        $this->obpokoj1ilosc = $obpokoj1ilosc;
    }

    /**
     * @return int
     */
    public function getObpokoj2ilosc()
    {
        return $this->obpokoj2ilosc;
    }

    /**
     * @param int $obpokoj2ilosc
     */
    public function setObpokoj2ilosc($obpokoj2ilosc)
    {
        $this->obpokoj2ilosc = $obpokoj2ilosc;
    }

    /**
     * @return int
     */
    public function getObpokoj3ilosc()
    {
        return $this->obpokoj3ilosc;
    }

    /**
     * @param int $obpokoj3ilosc
     */
    public function setObpokoj3ilosc($obpokoj3ilosc)
    {
        $this->obpokoj3ilosc = $obpokoj3ilosc;
    }

    /**
     * @return int
     */
    public function getObpunkty()
    {
        return $this->obpunkty;
    }

    /**
     * @param int $obpunkty
     */
    public function setObpunkty($obpunkty)
    {
        $this->obpunkty = $obpunkty;
    }

    /**
     * @return string
     */
    public function getObfilm()
    {
        return $this->obfilm;
    }

    /**
     * @param string $obfilm
     */
    public function setObfilm($obfilm)
    {
        $this->obfilm = $obfilm;
    }

    /**
     * @return string
     */
    public function getObip()
    {
        return $this->obip;
    }

    /**
     * @param string $obip
     */
    public function setObip($obip)
    {
        $this->obip = $obip;
    }

    /**
     * @return string
     */
    public function getObmiasto()
    {
        return $this->obmiasto;
    }

    /**
     * @param string $obmiasto
     */
    public function setObmiasto($obmiasto)
    {
        $this->obmiasto = $obmiasto;
    }

    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param mixed $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     * Add obiect
     *
     * @param \AppBundle\Entity\Miasto $obiect
     *
     * @return Object|Object
     */
    public function addObiect(\AppBundle\Entity\Miasto $obiect)
    {
        $this->cityName[] = $obiect;

        return $this;
    }

    /**
     * Remove obiect
     *
     * @param \AppBundle\Entity\Miasto $obiect
     */
    public function removeObiect(\AppBundle\Entity\Miasto $obiect)
    {
        $this->cityName->removeElement($obiect);
    }

    /**
     * @return mixed
     */
    public function getPhotosGet()
    {
        return $this->photosGet;
    }

    /**
     * @param mixed $photosGet
     */
    public function setPhotosGet($photosGet)
    {
        $this->photosGet = $photosGet;
    }


}
