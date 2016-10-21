<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Object;
use Behat\Mink\Exception\ExpectationException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;

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
        $idObject = '1792';
            $em = $this->getDoctrine()->getManager()
                ->getRepository('AppBundle:Object');
            $allDateObject = $em ->findAll();
            $object = $em->find($idObject);

            $nameObject = $object->getObname();

            $string = $object->getObtxt();
            $string1 = strip_tags(html_entity_decode($string, ENT_QUOTES, "UTF-8"));
            $textObject = substr($string1, 0, 150);

            $city = $this->getCityName($object);

            $photo = $this->getMidiFoto($object);

            $allType = array(
                'city' => $city,
                'photo' => $photo,
                'textObject' => $textObject,
                'nameObject' => $nameObject
            );
        if(1) {
            $nameOb= array();
            foreach ($allDateObject as $item) {
                $idObject = $item->getObid();
                $nameOb = $item->getObname($idObject);
            }
//            throw new ExpectationException($nameOb, $this->getSession());
//            return $nameOb;
        }

        return $this->render('base.html.twig', array(
//            'city' =>$city,
//            'photo' =>$photo,
//            'nameObject' => $nameObject
//            'allType' => $allType
            'nameOb' => $nameOb
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
