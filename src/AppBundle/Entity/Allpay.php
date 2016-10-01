<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Allpay
 *
 * @ORM\Table(name="allpay")
 * @ORM\Entity
 */
class Allpay
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="code14", type="string", length=15, nullable=false)
     */
    private $code14 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="code30", type="string", length=15, nullable=false)
     */
    private $code30 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=5, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="prom30_via", type="string", length=6, nullable=false)
     */
    private $prom30Via = '';

    /**
     * @var string
     *
     * @ORM\Column(name="prom60_via", type="string", length=6, nullable=false)
     */
    private $prom60Via = '';

    /**
     * @var string
     *
     * @ORM\Column(name="prom_type", type="string", length=3, nullable=false)
     */
    private $promType = '';

    /**
     * @var float
     *
     * @ORM\Column(name="prom_cena30", type="float", precision=5, scale=2, nullable=false)
     */
    private $promCena30 = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="prom_cena60", type="float", precision=5, scale=2, nullable=false)
     */
    private $promCena60 = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="oglstan_type", type="string", length=10, nullable=false)
     */
    private $oglstanType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="oglstan_sms", type="string", length=15, nullable=false)
     */
    private $oglstanSms = '';

    /**
     * @var string
     *
     * @ORM\Column(name="oglstanvia_type", type="string", length=15, nullable=false)
     */
    private $oglstanviaType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="oglstanvia_kod", type="string", length=8, nullable=false)
     */
    private $oglstanviaKod = '';

    /**
     * @var float
     *
     * @ORM\Column(name="oglstanvia_cena", type="float", precision=5, scale=2, nullable=false)
     */
    private $oglstanviaCena = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nazwa;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Allpay
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code14
     *
     * @param string $code14
     *
     * @return Allpay
     */
    public function setCode14($code14)
    {
        $this->code14 = $code14;

        return $this;
    }

    /**
     * Get code14
     *
     * @return string
     */
    public function getCode14()
    {
        return $this->code14;
    }

    /**
     * Set code30
     *
     * @param string $code30
     *
     * @return Allpay
     */
    public function setCode30($code30)
    {
        $this->code30 = $code30;

        return $this;
    }

    /**
     * Get code30
     *
     * @return string
     */
    public function getCode30()
    {
        return $this->code30;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Allpay
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set prom30Via
     *
     * @param string $prom30Via
     *
     * @return Allpay
     */
    public function setProm30Via($prom30Via)
    {
        $this->prom30Via = $prom30Via;

        return $this;
    }

    /**
     * Get prom30Via
     *
     * @return string
     */
    public function getProm30Via()
    {
        return $this->prom30Via;
    }

    /**
     * Set prom60Via
     *
     * @param string $prom60Via
     *
     * @return Allpay
     */
    public function setProm60Via($prom60Via)
    {
        $this->prom60Via = $prom60Via;

        return $this;
    }

    /**
     * Get prom60Via
     *
     * @return string
     */
    public function getProm60Via()
    {
        return $this->prom60Via;
    }

    /**
     * Set promType
     *
     * @param string $promType
     *
     * @return Allpay
     */
    public function setPromType($promType)
    {
        $this->promType = $promType;

        return $this;
    }

    /**
     * Get promType
     *
     * @return string
     */
    public function getPromType()
    {
        return $this->promType;
    }

    /**
     * Set promCena30
     *
     * @param float $promCena30
     *
     * @return Allpay
     */
    public function setPromCena30($promCena30)
    {
        $this->promCena30 = $promCena30;

        return $this;
    }

    /**
     * Get promCena30
     *
     * @return float
     */
    public function getPromCena30()
    {
        return $this->promCena30;
    }

    /**
     * Set promCena60
     *
     * @param float $promCena60
     *
     * @return Allpay
     */
    public function setPromCena60($promCena60)
    {
        $this->promCena60 = $promCena60;

        return $this;
    }

    /**
     * Get promCena60
     *
     * @return float
     */
    public function getPromCena60()
    {
        return $this->promCena60;
    }

    /**
     * Set oglstanType
     *
     * @param string $oglstanType
     *
     * @return Allpay
     */
    public function setOglstanType($oglstanType)
    {
        $this->oglstanType = $oglstanType;

        return $this;
    }

    /**
     * Get oglstanType
     *
     * @return string
     */
    public function getOglstanType()
    {
        return $this->oglstanType;
    }

    /**
     * Set oglstanSms
     *
     * @param string $oglstanSms
     *
     * @return Allpay
     */
    public function setOglstanSms($oglstanSms)
    {
        $this->oglstanSms = $oglstanSms;

        return $this;
    }

    /**
     * Get oglstanSms
     *
     * @return string
     */
    public function getOglstanSms()
    {
        return $this->oglstanSms;
    }

    /**
     * Set oglstanviaType
     *
     * @param string $oglstanviaType
     *
     * @return Allpay
     */
    public function setOglstanviaType($oglstanviaType)
    {
        $this->oglstanviaType = $oglstanviaType;

        return $this;
    }

    /**
     * Get oglstanviaType
     *
     * @return string
     */
    public function getOglstanviaType()
    {
        return $this->oglstanviaType;
    }

    /**
     * Set oglstanviaKod
     *
     * @param string $oglstanviaKod
     *
     * @return Allpay
     */
    public function setOglstanviaKod($oglstanviaKod)
    {
        $this->oglstanviaKod = $oglstanviaKod;

        return $this;
    }

    /**
     * Get oglstanviaKod
     *
     * @return string
     */
    public function getOglstanviaKod()
    {
        return $this->oglstanviaKod;
    }

    /**
     * Set oglstanviaCena
     *
     * @param float $oglstanviaCena
     *
     * @return Allpay
     */
    public function setOglstanviaCena($oglstanviaCena)
    {
        $this->oglstanviaCena = $oglstanviaCena;

        return $this;
    }

    /**
     * Get oglstanviaCena
     *
     * @return float
     */
    public function getOglstanviaCena()
    {
        return $this->oglstanviaCena;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }
}
