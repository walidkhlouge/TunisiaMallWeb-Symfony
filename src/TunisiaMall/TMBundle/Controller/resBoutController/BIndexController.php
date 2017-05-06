<?php
namespace TunisiaMall\TMBundle\Controller\resBoutController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TunisiaMall\TMBundle\Form\compteForm;

class BIndexController extends Controller
{
    
    //Afficher le profil du responsable boutique 
  public function afficherprofilAction($login)
    {
        $em=$this->getDoctrine()->getManager();
           $comptes= $em->getRepository('TunisiaMallTMBundle:Compte')->findByLogin($login);
      return $this->render('TunisiaMallTMBundle:resBoutView:AfficherProfil.html.twig',array('comptes'=>$comptes));
   
   }
   
   //Afficher les details du responsable boutique 
  public function afficherdetailsAction($login)
    {
        $em=$this->getDoctrine()->getManager();
           $comptes= $em->getRepository('TunisiaMallTMBundle:Compte')->findByLogin($login);
      return $this->render('TunisiaMallTMBundle:resBoutView:Profil.html.twig',array('comptes'=>$comptes));
   
   }
   
   //Modifier les coordonnées du responsable boutique
  function modifierprofilAction($login, Request $request)
    {
       $em=$this->getDoctrine()->getManager();
       $compte= $em->getRepository('TunisiaMallTMBundle:Compte')->find($login);
       $comptes= $em->getRepository('TunisiaMallTMBundle:Compte')->findByLogin($login);
       
       $form=$this->createForm(new compteForm(),$compte);
       $req=$this->get('request');
       if($form->handleRequest($req)->isValid())
       {
       $em->persist($compte);
       $em->flush();
       }
         return $this->render('TunisiaMallTMBundle:resBoutView:ModifierProfil.html.twig',
         array('f'=>$form->createView(),'comptes'=>$compte,'comptes'=>$comptes)); 
       } 
       }

