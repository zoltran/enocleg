<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="type")
 * @ORM\Entity
 */
class Type
{
    /**
     * @var string
     *
     * @ORM\Column(name="typePL", type="string", length=80, nullable=false)
     */
    private $typepl;

    /**
     * @var string
     *
     * @ORM\Column(name="typeEN", type="string", length=80, nullable=false)
     */
    private $typeen;

    /**
     * @var string
     *
     * @ORM\Column(name="typeGR", type="string", length=80, nullable=false)
     */
    private $typegr;

    /**
     * @var string
     *
     * @ORM\Column(name="typeFR", type="string", length=80, nullable=false)
     */
    private $typefr;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typeid;



    /**
     * Set typepl
     *
     * @param string $typepl
     *
     * @return Type
     */
    public function setTypepl($typepl)
    {
        $this->typepl = $typepl;

        return $this;
    }

    /**
     * Get typepl
     *
     * @return string
     */
    public function getTypepl()
    {
        return $this->typepl;
    }

    /**
     * Set typeen
     *
     * @param string $typeen
     *
     * @return Type
     */
    public function setTypeen($typeen)
    {
        $this->typeen = $typeen;

        return $this;
    }

    /**
     * Get typeen
     *
     * @return string
     */
    public function getTypeen()
    {
        return $this->typeen;
    }

    /**
     * Set typegr
     *
     * @param string $typegr
     *
     * @return Type
     */
    public function setTypegr($typegr)
    {
        $this->typegr = $typegr;

        return $this;
    }

    /**
     * Get typegr
     *
     * @return string
     */
    public function getTypegr()
    {
        return $this->typegr;
    }

    /**
     * Set typefr
     *
     * @param string $typefr
     *
     * @return Type
     */
    public function setTypefr($typefr)
    {
        $this->typefr = $typefr;

        return $this;
    }

    /**
     * Get typefr
     *
     * @return string
     */
    public function getTypefr()
    {
        return $this->typefr;
    }

    /**
     * Get typeid
     *
     * @return integer
     */
    public function getTypeid()
    {
        return $this->typeid;
    }
}
