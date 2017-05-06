<?php

/**
 * Description of MapCotroller
 *
 * @author Nada
 */

namespace TunisiaMall\TMBundle\Controller\clientController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MapController extends Controller {
    
    public function indexAction()
    {
        $latitude = '36.8468986';
        $longitude='10.2641808';
        return $this->render('TunisiaMallTMBundle:clientView:googleMap.html.twig',array('latitude'=> $latitude,'longitude'=> $longitude));
    }
}
