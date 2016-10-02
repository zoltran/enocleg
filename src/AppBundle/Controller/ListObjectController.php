<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Object;
use AppBundle\Form\TestList;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListObjectController extends Controller
{
    /**
     * @Route("/lista", name="listObject")
     */
    public function ListObjectAction()
    {
        return $this->render('List/listObject.html.twig');
    }

    /**
     * @Route("/lista/testowa/new", name="testowoNewObject")
     */
    public function NewListAction(Request $request)
    {
        $objekt = new Object();

        $form= $this->createForm(TestList::class, $objekt);
        $form->handleRequest($request);

        if (($form->isSubmitted()) && ($form->isValid())) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($objekt);
            $em->flush();


            $this->addFlash('success', 'Udało się wysłać wiadomość');

            return $this->redirectToRoute('testowoNewObject', array());
        }

        return $this->render('List/listTest.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/lista/testowa", name="testListObject")
     */
    public function TestListAction()
    {

        $em = $this->getDoctrine()->getManager();
        $objekt= $em->getRepository('AppBundle:Object')->findOneBy();



        return $this->render('List/listTest.html.twig', array(
            'objects' => $objekt
        ));
    }




}
