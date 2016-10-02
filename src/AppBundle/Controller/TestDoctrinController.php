<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Object;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestDoctrinController extends Controller
{
    /**
     * @Route("/test", name="testDoctrin")
     */
    public function doctrinAction()
    {
        $object = new Object();

        $objectRepository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Object');

        $object = $objectRepository->findAll();
        return $this->render('List/TestDoctrin.html.twig', array(
            'object' => $object
        ));
    }

    public function getObject() {

        $query = $this->
//        $qb = $this->entityManager->createQueryBuilder();
//        $qb
//            ->select('a', 'u')
//            ->from('Credit\Entity\UserCreditHistory', 'a')
//            ->leftJoin('a.user', 'u')
//            ->where('u = :user')
//            ->setParameter('user', $users)
//            ->orderBy('a.created_at', 'DESC');
//
//        return $qb->getQuery()->getResult();
    }

//   
}
