<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListObjectController extends Controller
{
    /**
     * @Route("/lista", name="listObject")
     */
    public function ListObjectAction()
    {
        return $this->render('List/listObject.html.twig');
    }
}
