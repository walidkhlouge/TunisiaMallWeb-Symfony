<?php

namespace TunisiaMall\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TunisiaMallUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
