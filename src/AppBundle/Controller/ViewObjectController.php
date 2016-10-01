<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewObjectController extends Controller
{

    /**
     * @Route("/noclegi/Alwernia/dom", name="viewObject")
     */
    public function viewObjectAction()
    {

        
        return $this->render('View/ViewObject.html.twig');
    }
}
