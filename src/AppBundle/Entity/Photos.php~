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
     * @ORM\Id
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
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $photoid;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Object", mappedBy="photosGet")
     */
    private $photosCity;

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

    /**
     * @return mixed
     */
    public function getPhotosCity()
    {
        return $this->photosCity;
    }

    /**
     * @param mixed $photosCity
     */
    public function setPhotosCity($photosCity)
    {
        $this->photosCity = $photosCity;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->photosCity = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add photosCity
     *
     * @param \AppBundle\Entity\Object $photosCity
     *
     * @return Photos
     */
    public function addPhotosCity(\AppBundle\Entity\Object $photosCity)
    {
        $this->photosCity[] = $photosCity;

        return $this;
    }

    /**
     * Remove photosCity
     *
     * @param \AppBundle\Entity\Object $photosCity
     */
    public function removePhotosCity(\AppBundle\Entity\Object $photosCity)
    {
        $this->photosCity->removeElement($photosCity);
    }

    /**
     * Set photoid
     *
     * @param integer $photoid
     *
     * @return Photos
     */
    public function setPhotoid($photoid)
    {
        $this->photoid = $photoid;

        return $this;
    }
}
