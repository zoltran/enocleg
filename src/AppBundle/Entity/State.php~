<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * State
 *
 * @ORM\Table(name="state")
 * @ORM\Entity
 */
class State
{
    /**
     * @var string
     *
     * @ORM\Column(name="stateName", type="string", length=50, nullable=false)
     */
    private $statename;

    /**
     * @var integer
     *
     * @ORM\Column(name="stateId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stateid;



    /**
     * Set statename
     *
     * @param string $statename
     *
     * @return State
     */
    public function setStatename($statename)
    {
        $this->statename = $statename;

        return $this;
    }

    /**
     * Get statename
     *
     * @return string
     */
    public function getStatename()
    {
        return $this->statename;
    }

    /**
     * Get stateid
     *
     * @return integer
     */
    public function getStateid()
    {
        return $this->stateid;
    }
}
