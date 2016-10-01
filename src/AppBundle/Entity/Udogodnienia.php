<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Udogodnienia
 *
 * @ORM\Table(name="udogodnienia")
 * @ORM\Entity
 */
class Udogodnienia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="udOgl", type="integer", nullable=false)
     */
    private $udogl;

    /**
     * @var integer
     *
     * @ORM\Column(name="udInternet", type="integer", nullable=false)
     */
    private $udinternet = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udKomputer", type="integer", nullable=false)
     */
    private $udkomputer = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udTelewizor", type="integer", nullable=false)
     */
    private $udtelewizor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udParking", type="integer", nullable=false)
     */
    private $udparking = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udLazienka", type="integer", nullable=false)
     */
    private $udlazienka = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udRoom", type="integer", nullable=false)
     */
    private $udroom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udWyzywienie", type="integer", nullable=false)
     */
    private $udwyzywienie = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udKuchnia", type="integer", nullable=false)
     */
    private $udkuchnia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udLodowka", type="integer", nullable=false)
     */
    private $udlodowka = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udPralnia", type="integer", nullable=false)
     */
    private $udpralnia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udPrasowalnia", type="integer", nullable=false)
     */
    private $udprasowalnia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udGrill", type="integer", nullable=false)
     */
    private $udgrill = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udOgnisko", type="integer", nullable=false)
     */
    private $udognisko = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udNiepelnosprawni", type="integer", nullable=false)
     */
    private $udniepelnosprawni = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udOgrod", type="integer", nullable=false)
     */
    private $udogrod = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udPlac", type="integer", nullable=false)
     */
    private $udplac = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udPiaskownica", type="integer", nullable=false)
     */
    private $udpiaskownica = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udSPlaza", type="integer", nullable=false)
     */
    private $udsplaza = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udKSala", type="integer", nullable=false)
     */
    private $udksala = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udKlimatyzacja", type="integer", nullable=false)
     */
    private $udklimatyzacja = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="udUser", type="integer", nullable=false)
     */
    private $uduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="udId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $udid;



    /**
     * Set udogl
     *
     * @param integer $udogl
     *
     * @return Udogodnienia
     */
    public function setUdogl($udogl)
    {
        $this->udogl = $udogl;

        return $this;
    }

    /**
     * Get udogl
     *
     * @return integer
     */
    public function getUdogl()
    {
        return $this->udogl;
    }

    /**
     * Set udinternet
     *
     * @param integer $udinternet
     *
     * @return Udogodnienia
     */
    public function setUdinternet($udinternet)
    {
        $this->udinternet = $udinternet;

        return $this;
    }

    /**
     * Get udinternet
     *
     * @return integer
     */
    public function getUdinternet()
    {
        return $this->udinternet;
    }

    /**
     * Set udkomputer
     *
     * @param integer $udkomputer
     *
     * @return Udogodnienia
     */
    public function setUdkomputer($udkomputer)
    {
        $this->udkomputer = $udkomputer;

        return $this;
    }

    /**
     * Get udkomputer
     *
     * @return integer
     */
    public function getUdkomputer()
    {
        return $this->udkomputer;
    }

    /**
     * Set udtelewizor
     *
     * @param integer $udtelewizor
     *
     * @return Udogodnienia
     */
    public function setUdtelewizor($udtelewizor)
    {
        $this->udtelewizor = $udtelewizor;

        return $this;
    }

    /**
     * Get udtelewizor
     *
     * @return integer
     */
    public function getUdtelewizor()
    {
        return $this->udtelewizor;
    }

    /**
     * Set udparking
     *
     * @param integer $udparking
     *
     * @return Udogodnienia
     */
    public function setUdparking($udparking)
    {
        $this->udparking = $udparking;

        return $this;
    }

    /**
     * Get udparking
     *
     * @return integer
     */
    public function getUdparking()
    {
        return $this->udparking;
    }

    /**
     * Set udlazienka
     *
     * @param integer $udlazienka
     *
     * @return Udogodnienia
     */
    public function setUdlazienka($udlazienka)
    {
        $this->udlazienka = $udlazienka;

        return $this;
    }

    /**
     * Get udlazienka
     *
     * @return integer
     */
    public function getUdlazienka()
    {
        return $this->udlazienka;
    }

    /**
     * Set udroom
     *
     * @param integer $udroom
     *
     * @return Udogodnienia
     */
    public function setUdroom($udroom)
    {
        $this->udroom = $udroom;

        return $this;
    }

    /**
     * Get udroom
     *
     * @return integer
     */
    public function getUdroom()
    {
        return $this->udroom;
    }

    /**
     * Set udwyzywienie
     *
     * @param integer $udwyzywienie
     *
     * @return Udogodnienia
     */
    public function setUdwyzywienie($udwyzywienie)
    {
        $this->udwyzywienie = $udwyzywienie;

        return $this;
    }

    /**
     * Get udwyzywienie
     *
     * @return integer
     */
    public function getUdwyzywienie()
    {
        return $this->udwyzywienie;
    }

    /**
     * Set udkuchnia
     *
     * @param integer $udkuchnia
     *
     * @return Udogodnienia
     */
    public function setUdkuchnia($udkuchnia)
    {
        $this->udkuchnia = $udkuchnia;

        return $this;
    }

    /**
     * Get udkuchnia
     *
     * @return integer
     */
    public function getUdkuchnia()
    {
        return $this->udkuchnia;
    }

    /**
     * Set udlodowka
     *
     * @param integer $udlodowka
     *
     * @return Udogodnienia
     */
    public function setUdlodowka($udlodowka)
    {
        $this->udlodowka = $udlodowka;

        return $this;
    }

    /**
     * Get udlodowka
     *
     * @return integer
     */
    public function getUdlodowka()
    {
        return $this->udlodowka;
    }

    /**
     * Set udpralnia
     *
     * @param integer $udpralnia
     *
     * @return Udogodnienia
     */
    public function setUdpralnia($udpralnia)
    {
        $this->udpralnia = $udpralnia;

        return $this;
    }

    /**
     * Get udpralnia
     *
     * @return integer
     */
    public function getUdpralnia()
    {
        return $this->udpralnia;
    }

    /**
     * Set udprasowalnia
     *
     * @param integer $udprasowalnia
     *
     * @return Udogodnienia
     */
    public function setUdprasowalnia($udprasowalnia)
    {
        $this->udprasowalnia = $udprasowalnia;

        return $this;
    }

    /**
     * Get udprasowalnia
     *
     * @return integer
     */
    public function getUdprasowalnia()
    {
        return $this->udprasowalnia;
    }

    /**
     * Set udgrill
     *
     * @param integer $udgrill
     *
     * @return Udogodnienia
     */
    public function setUdgrill($udgrill)
    {
        $this->udgrill = $udgrill;

        return $this;
    }

    /**
     * Get udgrill
     *
     * @return integer
     */
    public function getUdgrill()
    {
        return $this->udgrill;
    }

    /**
     * Set udognisko
     *
     * @param integer $udognisko
     *
     * @return Udogodnienia
     */
    public function setUdognisko($udognisko)
    {
        $this->udognisko = $udognisko;

        return $this;
    }

    /**
     * Get udognisko
     *
     * @return integer
     */
    public function getUdognisko()
    {
        return $this->udognisko;
    }

    /**
     * Set udniepelnosprawni
     *
     * @param integer $udniepelnosprawni
     *
     * @return Udogodnienia
     */
    public function setUdniepelnosprawni($udniepelnosprawni)
    {
        $this->udniepelnosprawni = $udniepelnosprawni;

        return $this;
    }

    /**
     * Get udniepelnosprawni
     *
     * @return integer
     */
    public function getUdniepelnosprawni()
    {
        return $this->udniepelnosprawni;
    }

    /**
     * Set udogrod
     *
     * @param integer $udogrod
     *
     * @return Udogodnienia
     */
    public function setUdogrod($udogrod)
    {
        $this->udogrod = $udogrod;

        return $this;
    }

    /**
     * Get udogrod
     *
     * @return integer
     */
    public function getUdogrod()
    {
        return $this->udogrod;
    }

    /**
     * Set udplac
     *
     * @param integer $udplac
     *
     * @return Udogodnienia
     */
    public function setUdplac($udplac)
    {
        $this->udplac = $udplac;

        return $this;
    }

    /**
     * Get udplac
     *
     * @return integer
     */
    public function getUdplac()
    {
        return $this->udplac;
    }

    /**
     * Set udpiaskownica
     *
     * @param integer $udpiaskownica
     *
     * @return Udogodnienia
     */
    public function setUdpiaskownica($udpiaskownica)
    {
        $this->udpiaskownica = $udpiaskownica;

        return $this;
    }

    /**
     * Get udpiaskownica
     *
     * @return integer
     */
    public function getUdpiaskownica()
    {
        return $this->udpiaskownica;
    }

    /**
     * Set udsplaza
     *
     * @param integer $udsplaza
     *
     * @return Udogodnienia
     */
    public function setUdsplaza($udsplaza)
    {
        $this->udsplaza = $udsplaza;

        return $this;
    }

    /**
     * Get udsplaza
     *
     * @return integer
     */
    public function getUdsplaza()
    {
        return $this->udsplaza;
    }

    /**
     * Set udksala
     *
     * @param integer $udksala
     *
     * @return Udogodnienia
     */
    public function setUdksala($udksala)
    {
        $this->udksala = $udksala;

        return $this;
    }

    /**
     * Get udksala
     *
     * @return integer
     */
    public function getUdksala()
    {
        return $this->udksala;
    }

    /**
     * Set udklimatyzacja
     *
     * @param integer $udklimatyzacja
     *
     * @return Udogodnienia
     */
    public function setUdklimatyzacja($udklimatyzacja)
    {
        $this->udklimatyzacja = $udklimatyzacja;

        return $this;
    }

    /**
     * Get udklimatyzacja
     *
     * @return integer
     */
    public function getUdklimatyzacja()
    {
        return $this->udklimatyzacja;
    }

    /**
     * Set uduser
     *
     * @param integer $uduser
     *
     * @return Udogodnienia
     */
    public function setUduser($uduser)
    {
        $this->uduser = $uduser;

        return $this;
    }

    /**
     * Get uduser
     *
     * @return integer
     */
    public function getUduser()
    {
        return $this->uduser;
    }

    /**
     * Get udid
     *
     * @return integer
     */
    public function getUdid()
    {
        return $this->udid;
    }
}
