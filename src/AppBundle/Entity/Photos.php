<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 *
 * @ORM\Table(name="photos")
 * @ORM\Entity(repositoryClass="AppBundle\Resources\PhotosRepository")
 */
class Photos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="photoObjectId", type="integer", nullable=false)
     */
    private $photoobjectid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="photoUrl", type="string", length=255, nullable=false)
     */
    private $photourl = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="photoId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $photoid;



    /**
     * Set photoobjectid
     *
     * @param integer $photoobjectid
     *
     * @return Photos
     */
    public function setPhotoobjectid($photoobjectid)
    {
        $this->photoobjectid = $photoobjectid;

        return $this;
    }

    /**
     * Get photoobjectid
     *
     * @return integer
     */
    public function getPhotoobjectid()
    {
        return $this->photoobjectid;
    }

    /**
     * Set photourl
     *
     * @param string $photourl
     *
     * @return Photos
     */
    public function setPhotourl($photourl)
    {
        $this->photourl = $photourl;

        return $this;
    }

    /**
     * Get photourl
     *
     * @return string
     */
    public function getPhotourl()
    {
        return $this->photourl;
    }

    /**
     * Get photoid
     *
     * @return integer
     */
    public function getPhotoid()
    {
        return $this->photoid;
    }
}
