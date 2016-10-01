<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewObjectController extends Controller
{
    /**
     * @Route("/noclegi/{miasto}/dom", name="viewObject")
     */
    public function viewObjectAction($miasto)
    {
        $miasto = 'Alwernia';
        return $this->render('View/ViewObject.html.twig', array('miasto' => $miasto));
    }
}
