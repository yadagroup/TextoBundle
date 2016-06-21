<?php

namespace yadagroup\TextoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('yadagroupTextoBundle:Default:index.html.twig', array('name' => $name));
    }
}
