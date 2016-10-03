<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestDoctrinController extends Controller
{
    /**
     * @Route("/test", name="testDoctrin")
     */
    public function doctrinAction()
    {
        $name = 'ala';
        $objectRepository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Object');
        $object= $objectRepository->createQueryBuilder('obj')
            ->select('obj.obfilm')
            ->addOrderBy('obj.obname', 'DESC');
        $query= $object->getQuery();




        return $this->render('List/TestDoctrin.html.twig', [
            'object' => $name
            
        ]);
    }



}
