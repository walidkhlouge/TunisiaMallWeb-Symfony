<?php

namespace TunisiaMall\TMBundle\Controller\adminController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AProduitController extends Controller
{
    public function indexAction()
    {
        return $this->render('TunisiaMallTMBundle:adminView:AProduit.html.twig');
    }
}
