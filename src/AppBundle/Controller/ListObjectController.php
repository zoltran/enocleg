<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ListObjectController
 * @package AppBundle\Controller
 */
class ListObjectController extends Controller
{

    /**
     * @Route("/lista/test", name="testList")
     */
    public function getObject()
    {
        $idObject = 1815;

        $object = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Object')->find($idObject);

        $nameObject = $this->getObname($object);
        $city = $this->getCityName($object);
        $photo = $this->getMidiFoto($object);

        return $this->render('List/listTest.html.twig', array(
            'city' =>$city,
            'photo' =>$photo,
            'nameObject' => $nameObject
    ));
    }

    /**
     * @param $object
     * @return mixed
     */
    private function getCityName($object)
    {

        $city = $object->getCityName()->getMiastoname();

        return $city;
    }

    /**
     * @param $object
     * @return mixed
     */
    private function getMidiFoto($object)
    {
        $photo = $object->getPhotosGet()->getPhotourl();

        return $photo;
    }



}
