<?php

namespace FuroBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FuroController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->redirectToRoute('furo_list');
    }

    public function listAction(Request $request)
    {
        return $this->render('FuroBundle:Furo:list.html.twig');
    }

    public function newAction(Request $request, $step = 1)
    {
        return $this->render('FuroBundle:Furo:new.html.twig');
    }
}
