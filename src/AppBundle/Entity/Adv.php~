<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adv
 *
 * @ORM\Table(name="adv")
 * @ORM\Entity
 */
class Adv
{
    /**
     * @var string
     *
     * @ORM\Column(name="advName", type="string", length=255, nullable=false)
     */
    private $advname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="advHtml", type="text", nullable=false)
     */
    private $advhtml;

    /**
     * @var integer
     *
     * @ORM\Column(name="advId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $advid;



    /**
     * Set advname
     *
     * @param string $advname
     *
     * @return Adv
     */
    public function setAdvname($advname)
    {
        $this->advname = $advname;

        return $this;
    }

    /**
     * Get advname
     *
     * @return string
     */
    public function getAdvname()
    {
        return $this->advname;
    }

    /**
     * Set advhtml
     *
     * @param string $advhtml
     *
     * @return Adv
     */
    public function setAdvhtml($advhtml)
    {
        $this->advhtml = $advhtml;

        return $this;
    }

    /**
     * Get advhtml
     *
     * @return string
     */
    public function getAdvhtml()
    {
        return $this->advhtml;
    }

    /**
     * Get advid
     *
     * @return integer
     */
    public function getAdvid()
    {
        return $this->advid;
    }
}
