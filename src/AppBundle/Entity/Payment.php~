<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity
 */
class Payment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="payToo", type="integer", nullable=false)
     */
    private $paytoo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="payOption", type="string", length=255, nullable=false)
     */
    private $payoption = '';

    /**
     * @var string
     *
     * @ORM\Column(name="payCodeSms", type="string", length=255, nullable=false)
     */
    private $paycodesms = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="payDay", type="integer", nullable=false)
     */
    private $payday = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="payPrice", type="integer", nullable=false)
     */
    private $payprice = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="payTxt", type="text", nullable=false)
     */
    private $paytxt;

    /**
     * @var string
     *
     * @ORM\Column(name="payDesc", type="string", length=255, nullable=false)
     */
    private $paydesc = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="paySeq", type="integer", nullable=false)
     */
    private $payseq = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="payId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $payid;



    /**
     * Set paytoo
     *
     * @param integer $paytoo
     *
     * @return Payment
     */
    public function setPaytoo($paytoo)
    {
        $this->paytoo = $paytoo;

        return $this;
    }

    /**
     * Get paytoo
     *
     * @return integer
     */
    public function getPaytoo()
    {
        return $this->paytoo;
    }

    /**
     * Set payoption
     *
     * @param string $payoption
     *
     * @return Payment
     */
    public function setPayoption($payoption)
    {
        $this->payoption = $payoption;

        return $this;
    }

    /**
     * Get payoption
     *
     * @return string
     */
    public function getPayoption()
    {
        return $this->payoption;
    }

    /**
     * Set paycodesms
     *
     * @param string $paycodesms
     *
     * @return Payment
     */
    public function setPaycodesms($paycodesms)
    {
        $this->paycodesms = $paycodesms;

        return $this;
    }

    /**
     * Get paycodesms
     *
     * @return string
     */
    public function getPaycodesms()
    {
        return $this->paycodesms;
    }

    /**
     * Set payday
     *
     * @param integer $payday
     *
     * @return Payment
     */
    public function setPayday($payday)
    {
        $this->payday = $payday;

        return $this;
    }

    /**
     * Get payday
     *
     * @return integer
     */
    public function getPayday()
    {
        return $this->payday;
    }

    /**
     * Set payprice
     *
     * @param integer $payprice
     *
     * @return Payment
     */
    public function setPayprice($payprice)
    {
        $this->payprice = $payprice;

        return $this;
    }

    /**
     * Get payprice
     *
     * @return integer
     */
    public function getPayprice()
    {
        return $this->payprice;
    }

    /**
     * Set paytxt
     *
     * @param string $paytxt
     *
     * @return Payment
     */
    public function setPaytxt($paytxt)
    {
        $this->paytxt = $paytxt;

        return $this;
    }

    /**
     * Get paytxt
     *
     * @return string
     */
    public function getPaytxt()
    {
        return $this->paytxt;
    }

    /**
     * Set paydesc
     *
     * @param string $paydesc
     *
     * @return Payment
     */
    public function setPaydesc($paydesc)
    {
        $this->paydesc = $paydesc;

        return $this;
    }

    /**
     * Get paydesc
     *
     * @return string
     */
    public function getPaydesc()
    {
        return $this->paydesc;
    }

    /**
     * Set payseq
     *
     * @param integer $payseq
     *
     * @return Payment
     */
    public function setPayseq($payseq)
    {
        $this->payseq = $payseq;

        return $this;
    }

    /**
     * Get payseq
     *
     * @return integer
     */
    public function getPayseq()
    {
        return $this->payseq;
    }

    /**
     * Get payid
     *
     * @return integer
     */
    public function getPayid()
    {
        return $this->payid;
    }
}
