<?php

namespace TunisiaMall\TMBundle\Controller\clientController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CProduitController extends Controller
{
    public function indexAction() {
        $em3 = $this->getDoctrine()->getManager();
        $produits = $em3->getRepository("TunisiaMallTMBundle:Produit")
               ->findAll();
         $request= $this->getRequest();
         $produits2 = $produits;
          if($request->getMethod()=="POST")
        {
         $search=$request->get('chercher');
    
         $produits = $em3->getRepository("TunisiaMallTMBundle:Produit")->findBy(array("nom"=>$search));

        }
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $produits,
        $request->query->get('page', 1)/*page number*/,
        8/*limit per page*/);
           $em4 = $this->getDoctrine()->getManager();
        $taille= $em4->getRepository("TunisiaMallTMBundle:Produittaille")
               ->findAll();
          $em23=$this->getDoctrine()->getManager();
             $panier=$em23->getRepository('TunisiaMallTMBundle:Panier')->findBy(array("loginclient"=>"bassemlog"));
//        return $this->render("TunisiaMallTMBundle:clientView:CProduit.html.twig",array("produits"=>$produits));
     
        return $this->render("TunisiaMallTMBundle:clientView:CProduit.html.twig",array('pagination' => $pagination,'tailles'=>$taille,'paniers'=>$panier,"produits2"=>$produits2));
    }
    public function indexByBoutAction($idBoutique){
        $em3 = $this->getDoctrine()->getManager();
        $produits = $em3->getRepository("TunisiaMallTMBundle:Produit")
                ->findByIdboutique($idBoutique); 
         $produits2 =$produits;
          $request= $this->getRequest();
          if($request->getMethod()=="POST")
        {
         $search=$request->get('chercher');
    
         $produits = $em3->getRepository("TunisiaMallTMBundle:Produit")->findBy(array("nom"=>$search));

         
        }
              
        
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $produits,
        $request->query->get('page', 1)/*page number*/,
        3/*limit per page*/);
           $em4 = $this->getDoctrine()->getManager();
        $taille= $em4->getRepository("TunisiaMallTMBundle:Produittaille")
               ->findAll();
          $em23=$this->getDoctrine()->getManager();
             $panier=$em23->getRepository('TunisiaMallTMBundle:Panier')->findBy(array("loginclient"=>"bassemlog"));
//        return $this->render("TunisiaMallTMBundle:clientView:CProduit.html.twig",array("produits"=>$produits));
     
        return $this->render("TunisiaMallTMBundle:clientView:CProduit.html.twig",array('pagination' => $pagination,'tailles'=>$taille,'paniers'=>$panier,"produits2"=>$produits2));
    }
}
