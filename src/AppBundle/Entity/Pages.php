<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pages
 *
 * @ORM\Table(name="pages")
 * @ORM\Entity
 */
class Pages
{
    /**
     * @var string
     *
     * @ORM\Column(name="pagesTitle", type="string", length=255, nullable=false)
     */
    private $pagestitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pagesTxt", type="text", nullable=false)
     */
    private $pagestxt;

    /**
     * @var integer
     *
     * @ORM\Column(name="pagesJezyk", type="integer", nullable=false)
     */
    private $pagesjezyk = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="pagId", type="integer", nullable=false)
     */
    private $pagid;

    /**
     * @var integer
     *
     * @ORM\Column(name="pagesId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pagesid;



    /**
     * Set pagestitle
     *
     * @param string $pagestitle
     *
     * @return Pages
     */
    public function setPagestitle($pagestitle)
    {
        $this->pagestitle = $pagestitle;

        return $this;
    }

    /**
     * Get pagestitle
     *
     * @return string
     */
    public function getPagestitle()
    {
        return $this->pagestitle;
    }

    /**
     * Set pagestxt
     *
     * @param string $pagestxt
     *
     * @return Pages
     */
    public function setPagestxt($pagestxt)
    {
        $this->pagestxt = $pagestxt;

        return $this;
    }

    /**
     * Get pagestxt
     *
     * @return string
     */
    public function getPagestxt()
    {
        return $this->pagestxt;
    }

    /**
     * Set pagesjezyk
     *
     * @param integer $pagesjezyk
     *
     * @return Pages
     */
    public function setPagesjezyk($pagesjezyk)
    {
        $this->pagesjezyk = $pagesjezyk;

        return $this;
    }

    /**
     * Get pagesjezyk
     *
     * @return integer
     */
    public function getPagesjezyk()
    {
        return $this->pagesjezyk;
    }

    /**
     * Set pagid
     *
     * @param integer $pagid
     *
     * @return Pages
     */
    public function setPagid($pagid)
    {
        $this->pagid = $pagid;

        return $this;
    }

    /**
     * Get pagid
     *
     * @return integer
     */
    public function getPagid()
    {
        return $this->pagid;
    }

    /**
     * Get pagesid
     *
     * @return integer
     */
    public function getPagesid()
    {
        return $this->pagesid;
    }
}
