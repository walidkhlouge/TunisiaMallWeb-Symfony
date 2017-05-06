<?php
                                          
namespace TunisiaMall\TMBundle\Controller\resEnsController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VisitevirtuelleController extends Controller
{
    public function indexAction()
    {
        return $this->render('TunisiaMallTMBundle:resEnsView:Visite.html.twig');
    }
}
