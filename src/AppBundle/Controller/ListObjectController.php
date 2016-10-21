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
        $em = $this->getDoctrine()->getManager()
        -> getRepository('AppBundle:Object');
        $object = $em->findAll();

//        $id = $this->getIdAdva($em);
        foreach ($object as $adv){
            $arrayTable = array();
            $arrayTable = $adv->getObid();

        }
//        var_dump($jola);
//        print $jola;
//        $testowo = $this->getCityName();
//        $nameObject = $object->getObname($objects);
//
//        $string = $object->getObtxt($objects);
//        $string1 = strip_tags(html_entity_decode($string, ENT_QUOTES, "UTF-8"));
//        $textObject = substr($string1, 0, 150);

//        foreach ($object as $city){
//            echo $object->get;
//        }
//        $city=array();

//        $photo = $this->getMidiFoto($objects);

        $allType = array(
//            'city' => $city
//            'photo' => $photo,
//            'textObject' => $textObject,
//            'nameObject' => $nameObject
        );


        return $this->render(':List:listTest.html.twig', array(
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
        print_r($object); die;

        $city = $object->getCityName()->getMiastoname();

        return $city;
    }

    /**
     * @return mixed
     */
    protected function getIdAdva($em)
    {
        $idAvd = $em ->getAdvid();

        return $idAvd;
    }
//
//    /**
//     * @param $object
//     * @return mixed
//     */
//    private function getMidiFoto($object)
//    {
//        $photo = $object->getPhotosGet()->getPhotourl();
//
//        return $photo;
//    }



}
