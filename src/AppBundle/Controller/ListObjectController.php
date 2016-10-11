<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Miasto;
use AppBundle\SQL\cityName;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListObjectController extends Controller
{


    /**
     * @Route("/lista/testowa/{miasto}", name="testListObject")
     */
    public function TestListAction()
    {
        $miasto = $this->getDoctrine()->getManager()->getRepository(Miasto::class);
            $nameMiasto = $miasto->find('Poznań');
        var_dump($nameMiasto); die;
        $mojeMiasto = $this->getCityName($miasto);

        //        $em = $this->getDoctrine()->getManager()->getRepository('AppBundle:Object');

//        $object = Object::class;
//        $object= $this->findAllCity();

        return $this->render('List/listTest.html.twig', [
            'object' => $mojeMiasto
        ]);
    }

    public function getCityName($miasto)
    {
        $conn = $this->get('database_connection');
        $miasto1 = $conn->fetchAll
        ("
            SELECT cit.miastoName, obj.obName 
            FROM object obj 
            Left JOIN miasto cit 
            ON obj.obCity = cit.miastoId
            WHERE cit.miastoName = '$miasto' 
        ");

        return $miasto1;
    }


}
