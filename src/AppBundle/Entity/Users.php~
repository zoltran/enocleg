<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="userName", type="string", length=255, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="userPass", type="string", length=255, nullable=false)
     */
    private $userpass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="userEmail", type="string", length=255, nullable=false)
     */
    private $useremail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="userFirma", type="string", length=255, nullable=false)
     */
    private $userfirma;

    /**
     * @var string
     *
     * @ORM\Column(name="userFrom", type="string", length=255, nullable=false)
     */
    private $userfrom = '';

    /**
     * @var string
     *
     * @ORM\Column(name="userUlica", type="string", length=150, nullable=false)
     */
    private $userulica;

    /**
     * @var string
     *
     * @ORM\Column(name="userPoczta", type="string", length=50, nullable=false)
     */
    private $userpoczta;

    /**
     * @var string
     *
     * @ORM\Column(name="userNip", type="string", length=50, nullable=false)
     */
    private $usernip;

    /**
     * @var string
     *
     * @ORM\Column(name="userRegon", type="string", length=50, nullable=false)
     */
    private $userregon;

    /**
     * @var string
     *
     * @ORM\Column(name="userTel", type="string", length=30, nullable=false)
     */
    private $usertel;

    /**
     * @var string
     *
     * @ORM\Column(name="userTel2", type="string", length=30, nullable=false)
     */
    private $usertel2;

    /**
     * @var string
     *
     * @ORM\Column(name="userEmail2", type="string", length=50, nullable=false)
     */
    private $useremail2;

    /**
     * @var string
     *
     * @ORM\Column(name="userImie", type="string", length=30, nullable=false)
     */
    private $userimie;

    /**
     * @var string
     *
     * @ORM\Column(name="userNazwisko", type="string", length=30, nullable=false)
     */
    private $usernazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="userPesel", type="string", length=15, nullable=false)
     */
    private $userpesel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="userDate", type="datetime", nullable=false)
     */
    private $userdate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="userHash", type="string", length=255, nullable=false)
     */
    private $userhash = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="userConfirm", type="integer", nullable=false)
     */
    private $userconfirm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;



    /**
     * Set username
     *
     * @param string $username
     *
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set userpass
     *
     * @param string $userpass
     *
     * @return Users
     */
    public function setUserpass($userpass)
    {
        $this->userpass = $userpass;

        return $this;
    }

    /**
     * Get userpass
     *
     * @return string
     */
    public function getUserpass()
    {
        return $this->userpass;
    }

    /**
     * Set useremail
     *
     * @param string $useremail
     *
     * @return Users
     */
    public function setUseremail($useremail)
    {
        $this->useremail = $useremail;

        return $this;
    }

    /**
     * Get useremail
     *
     * @return string
     */
    public function getUseremail()
    {
        return $this->useremail;
    }

    /**
     * Set userfirma
     *
     * @param string $userfirma
     *
     * @return Users
     */
    public function setUserfirma($userfirma)
    {
        $this->userfirma = $userfirma;

        return $this;
    }

    /**
     * Get userfirma
     *
     * @return string
     */
    public function getUserfirma()
    {
        return $this->userfirma;
    }

    /**
     * Set userfrom
     *
     * @param string $userfrom
     *
     * @return Users
     */
    public function setUserfrom($userfrom)
    {
        $this->userfrom = $userfrom;

        return $this;
    }

    /**
     * Get userfrom
     *
     * @return string
     */
    public function getUserfrom()
    {
        return $this->userfrom;
    }

    /**
     * Set userulica
     *
     * @param string $userulica
     *
     * @return Users
     */
    public function setUserulica($userulica)
    {
        $this->userulica = $userulica;

        return $this;
    }

    /**
     * Get userulica
     *
     * @return string
     */
    public function getUserulica()
    {
        return $this->userulica;
    }

    /**
     * Set userpoczta
     *
     * @param string $userpoczta
     *
     * @return Users
     */
    public function setUserpoczta($userpoczta)
    {
        $this->userpoczta = $userpoczta;

        return $this;
    }

    /**
     * Get userpoczta
     *
     * @return string
     */
    public function getUserpoczta()
    {
        return $this->userpoczta;
    }

    /**
     * Set usernip
     *
     * @param string $usernip
     *
     * @return Users
     */
    public function setUsernip($usernip)
    {
        $this->usernip = $usernip;

        return $this;
    }

    /**
     * Get usernip
     *
     * @return string
     */
    public function getUsernip()
    {
        return $this->usernip;
    }

    /**
     * Set userregon
     *
     * @param string $userregon
     *
     * @return Users
     */
    public function setUserregon($userregon)
    {
        $this->userregon = $userregon;

        return $this;
    }

    /**
     * Get userregon
     *
     * @return string
     */
    public function getUserregon()
    {
        return $this->userregon;
    }

    /**
     * Set usertel
     *
     * @param string $usertel
     *
     * @return Users
     */
    public function setUsertel($usertel)
    {
        $this->usertel = $usertel;

        return $this;
    }

    /**
     * Get usertel
     *
     * @return string
     */
    public function getUsertel()
    {
        return $this->usertel;
    }

    /**
     * Set usertel2
     *
     * @param string $usertel2
     *
     * @return Users
     */
    public function setUsertel2($usertel2)
    {
        $this->usertel2 = $usertel2;

        return $this;
    }

    /**
     * Get usertel2
     *
     * @return string
     */
    public function getUsertel2()
    {
        return $this->usertel2;
    }

    /**
     * Set useremail2
     *
     * @param string $useremail2
     *
     * @return Users
     */
    public function setUseremail2($useremail2)
    {
        $this->useremail2 = $useremail2;

        return $this;
    }

    /**
     * Get useremail2
     *
     * @return string
     */
    public function getUseremail2()
    {
        return $this->useremail2;
    }

    /**
     * Set userimie
     *
     * @param string $userimie
     *
     * @return Users
     */
    public function setUserimie($userimie)
    {
        $this->userimie = $userimie;

        return $this;
    }

    /**
     * Get userimie
     *
     * @return string
     */
    public function getUserimie()
    {
        return $this->userimie;
    }

    /**
     * Set usernazwisko
     *
     * @param string $usernazwisko
     *
     * @return Users
     */
    public function setUsernazwisko($usernazwisko)
    {
        $this->usernazwisko = $usernazwisko;

        return $this;
    }

    /**
     * Get usernazwisko
     *
     * @return string
     */
    public function getUsernazwisko()
    {
        return $this->usernazwisko;
    }

    /**
     * Set userpesel
     *
     * @param string $userpesel
     *
     * @return Users
     */
    public function setUserpesel($userpesel)
    {
        $this->userpesel = $userpesel;

        return $this;
    }

    /**
     * Get userpesel
     *
     * @return string
     */
    public function getUserpesel()
    {
        return $this->userpesel;
    }

    /**
     * Set userdate
     *
     * @param \DateTime $userdate
     *
     * @return Users
     */
    public function setUserdate($userdate)
    {
        $this->userdate = $userdate;

        return $this;
    }

    /**
     * Get userdate
     *
     * @return \DateTime
     */
    public function getUserdate()
    {
        return $this->userdate;
    }

    /**
     * Set userhash
     *
     * @param string $userhash
     *
     * @return Users
     */
    public function setUserhash($userhash)
    {
        $this->userhash = $userhash;

        return $this;
    }

    /**
     * Get userhash
     *
     * @return string
     */
    public function getUserhash()
    {
        return $this->userhash;
    }

    /**
     * Set userconfirm
     *
     * @param integer $userconfirm
     *
     * @return Users
     */
    public function setUserconfirm($userconfirm)
    {
        $this->userconfirm = $userconfirm;

        return $this;
    }

    /**
     * Get userconfirm
     *
     * @return integer
     */
    public function getUserconfirm()
    {
        return $this->userconfirm;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
