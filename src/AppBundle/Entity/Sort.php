<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sort
 *
 * @ORM\Table(name="sort")
 * @ORM\Entity
 */
class Sort
{
    /**
     * @var string
     *
     * @ORM\Column(name="sortName", type="string", length=50, nullable=false)
     */
    private $sortname;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sortid;



    /**
     * Set sortname
     *
     * @param string $sortname
     *
     * @return Sort
     */
    public function setSortname($sortname)
    {
        $this->sortname = $sortname;

        return $this;
    }

    /**
     * Get sortname
     *
     * @return string
     */
    public function getSortname()
    {
        return $this->sortname;
    }

    /**
     * Get sortid
     *
     * @return integer
     */
    public function getSortid()
    {
        return $this->sortid;
    }
}
