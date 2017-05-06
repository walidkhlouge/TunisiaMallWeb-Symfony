<?php

namespace TunisiaMall\TMBundle\Controller\adminController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TMBundle\Entity\Packpublicitaire;
use TunisiaMall\TMBundle\Form\PackpublicitaireType;
use TunisiaMall\TMBundle\Form\PackspubType;
use TunisiaMall\TMBundle\Entity\Packspub;
class PackController extends Controller{
     public function creerpackAction(){
       
            //formType w fiha el modif ta assemi el formulaire 
       $formB=new PackspubType();
       $m=new Packspub();
       $form=$this->createForm($formB,$m);
       $req=$this->get('request');
       if($form->handleRequest($req)->isValid())
       {
           $em=  $this->getDoctrine()->getManager();
           $em->persist($m);
           $em->flush();
           return $this->redirectToRoute('ListePack');
       }
 return
$this->render('TunisiaMallTMBundle:adminView:AjoutP.html.twig',
         array('f'=>$form->createView()));        

        
}
    public function listePAction() {
        $em = $this->getDoctrine()->getManager();
        $listePacks = $em->getRepository('TunisiaMallTMBundle:Packspub')->findAll();
        return $this->render('TunisiaMallTMBundle:adminView:Pack.html.twig', array('listePacks' => $listePacks));
    }
    
}