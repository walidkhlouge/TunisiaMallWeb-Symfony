<?php
                                          
namespace TunisiaMall\TMBundle\Controller\resEnsController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EIndexController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('TunisiaMallTMBundle:resEnsView:EIndex.html.twig');
    }
}
