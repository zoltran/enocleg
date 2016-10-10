<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Miasto;
use AppBundle\Entity\Object;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListObjectController extends Controller
{


    /**
     * @Route("/lista/testowa/{miasto}", name="testListObject")
     */
    public function TestListAction(Miasto $miasto)
    {
        $em = $this->getDoctrine()->getManager()->getRepository('AppBundle:Object');

//        $object = Object::class;
        $object= $em->findPageForUser($miasto);

        return $this->render('List/listTest.html.twig', [
            'object' => $object
        ]);
    }


}
