<?php
namespace TunisiaMall\TMBundle\Controller\adminController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class UserController extends Controller {
    public function listeAction() {
        $em = $this->getDoctrine()->getManager();
        $listeComptesT = $em->getRepository('TunisiaMallTMBundle:Compte')->findAll();
        $listeComptes = $this->get('knp_paginator')->paginate($listeComptesT, $this->get('request')->query->get('page', 1), 5);
        return $this->render('TunisiaMallTMBundle:adminView:Gestion.html.twig', array('listeComptes' => $listeComptes));
    }
   
    
    
    public function modifierAction($login) {
          $request= $this->getRequest();
         $search=$request->get('chercher');
           if ($search=="Supprimer"){
    $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('TunisiaMallTMBundle:Compte')->find($login);
        $em->remove($modele);
        $em->flush();
        return $this->redirect($this->generateUrl('Gestion')); }
        else if ($search=="Debloquer"){
            $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TunisiaMallTMBundle:Compte');
        $repository->bloquerDebloquerUtilisateur($login, "Not Activated");
        return $this->redirectToRoute('Gestion');}
        else 
            //($search=="Bloquer"){
            $repository = $this->getDoctrine() ->getManager()->getRepository('TunisiaMallTMBundle:Compte');
        $repository->bloquerDebloquerUtilisateur($login,"Activated");
        return $this->redirectToRoute('Gestion');
      }
      
      
      
    public function DebloquerUtilisateurAction($login){
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TunisiaMallTMBundle:Compte');
        
        $repository->bloquerDebloquerUtilisateur($login,"Not Activated");
        
        return $this->redirectToRoute('_Demande');
    }
    
    
    public function demandeAction(){
        $em= $this->getDoctrine()
                ->getManager();
               
        $listeDemandes=$em->getRepository('TunisiaMallTMBundle:Compte')->listedemandeUtilisateur();
        return $this->render('TunisiaMallTMBundle:adminView:demande.html.twig', array('listeDemandes' => $listeDemandes));
        
    }

}