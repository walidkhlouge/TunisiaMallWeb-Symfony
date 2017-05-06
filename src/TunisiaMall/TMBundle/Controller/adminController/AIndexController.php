<?php

namespace TunisiaMall\TMBundle\Controller\adminController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AIndexController extends Controller
{
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();
        $listeComs = $em->getRepository('TunisiaMallTMBundle:Commentairemall')->findAll();
          $S=$em->getRepository('TunisiaMallTMBundle:Packspub')->SommeP();
   
        return $this->render('TunisiaMallTMBundle:adminView:AIndex.html.twig', array('listeComs' => $listeComs,'s'=> $S));
    }
    public function afficherAction()
    {
        return $this->render('TunisiaMallTMBundle:adminView:Gestion.html.twig');
    }
    public function commentaireAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $listeComs = $em->getRepository('TunisiaMallTMBundle:Commentairemall')->findAll();
        return $this->render('TunisiaMallTMBundle:adminView:AIndex.html.twig', array('listeComs' => $listeComs));
    }
    public function SumPAction(){
       $em = $this->getDoctrine()->getManager(); 
    
    $S=$em->getRepository('TunisiaMallTMBundle:Packspub')->SommeP();
    var_dump($S);
    die("gfdg");
    return $this->render('TunisiaMallTMBundle:adminView:AIndex.html.twig',array('s'=> $S));
}
}
