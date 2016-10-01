<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ratings
 *
 * @ORM\Table(name="ratings")
 * @ORM\Entity
 */
class Ratings
{
    /**
     * @var integer
     *
     * @ORM\Column(name="total_votes", type="integer", nullable=false)
     */
    private $totalVotes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="total_value", type="integer", nullable=false)
     */
    private $totalValue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="used_ips", type="text", nullable=true)
     */
    private $usedIps;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=11)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set totalVotes
     *
     * @param integer $totalVotes
     *
     * @return Ratings
     */
    public function setTotalVotes($totalVotes)
    {
        $this->totalVotes = $totalVotes;

        return $this;
    }

    /**
     * Get totalVotes
     *
     * @return integer
     */
    public function getTotalVotes()
    {
        return $this->totalVotes;
    }

    /**
     * Set totalValue
     *
     * @param integer $totalValue
     *
     * @return Ratings
     */
    public function setTotalValue($totalValue)
    {
        $this->totalValue = $totalValue;

        return $this;
    }

    /**
     * Get totalValue
     *
     * @return integer
     */
    public function getTotalValue()
    {
        return $this->totalValue;
    }

    /**
     * Set usedIps
     *
     * @param string $usedIps
     *
     * @return Ratings
     */
    public function setUsedIps($usedIps)
    {
        $this->usedIps = $usedIps;

        return $this;
    }

    /**
     * Get usedIps
     *
     * @return string
     */
    public function getUsedIps()
    {
        return $this->usedIps;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
