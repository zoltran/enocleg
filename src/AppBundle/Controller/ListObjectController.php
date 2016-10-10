<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Object;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListObjectController extends Controller
{


    /**
     * @Route("/lista/testowa", name="testListObject")
     */
    public function TestListAction()
    {

        $em = $this->getDoctrine()->getManager()->getRepository('AppBundle:Object');

        $object= $em->findAllordered();

        return $this->render('List/listTest.html.twig', [
            'object' => $object
        ]);
    }


}
