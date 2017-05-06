<?php

namespace TunisiaMall\TMBundle\Controller\clientController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CBoutiqueController extends Controller {

    
    
    public function indexAction() {
         $request= $this->getRequest();
        $session=$this->getRequest()->getSession();
        $em2 = $this->getDoctrine()->getManager();
        $boutiques = $em2->getRepository("TunisiaMallTMBundle:Boutique")->findAll();
       $boutiques2 = $boutiques;
        if($request->getMethod()=="POST")
        {
         $search=$request->get('chercher');
    
         $boutiques = $em2->getRepository("TunisiaMallTMBundle:Boutique")->findBy(array("intitulé"=>$search));
         

 
    
        }

        
        
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $boutiques,
        $request->query->get('page', 1)/*page number*/,
        8/*limit per page*/);
        
        
        return $this->render("TunisiaMallTMBundle:clientView:CBoutique.html.twig",array("boutiques"=>$pagination,"boutiques2"=>$boutiques2));
    }
    
    public function indexByEnsAction($nomEnseigne) {
        
        $em2 = $this->getDoctrine()->getManager();
        $boutiques = $em2->getRepository("TunisiaMallTMBundle:Boutique")->findByNomenseigne($nomEnseigne);

       /* $em3 = $this->getDoctrine()->getManager();
        $produits = $em3->getRepository("TunisiaMallTMBundle:Produit")
                ->findByNomenseigne($nomEnseigne);*/
         $boutiques2 = $boutiques;
         $request= $this->getRequest();
        if($request->getMethod()=="POST")
        {
         $search=$request->get('chercher');
    
         $boutiques = $em2->getRepository("TunisiaMallTMBundle:Boutique")->findBy(array("intitulé"=>$search));
         

 
    
        }
     
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $boutiques,
        $request->query->get('page', 1)/*page number*/,
        8/*limit per page*/);
        return $this->render("TunisiaMallTMBundle:clientView:CBoutique.html.twig",array("boutiques"=>$pagination,"boutiques2"=>$boutiques2));
    }
}
