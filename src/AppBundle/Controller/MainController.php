<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MainController
 * @package AppBundle\Controller
 */
class MainController extends Controller
{
    /**
     * @Route("/", name="homePage")
     */
    public function mainController()
    {
        $idObject = 1792;

        $object = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Object')->find($idObject);

        $nameObject = $object->getObname();
//        $string = $object->getObtxt();
//        $textObject = substr($string, 3, 100);
        $textObject= $object->getObtxt();
        $city = $this->getCityName($object);
        $photo = $this->getMidiFoto($object);
        $allType = array(
            'city' =>$city,
            'photo' =>$photo,
            'textObject' => $textObject,
            'nameObject' => $nameObject
        );

        return $this->render('base.html.twig', array(
//            'city' =>$city,
//            'photo' =>$photo,
//            'nameObject' => $nameObject
            'allType' => $allType
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
