<?php

namespace TunisiaMall\TMBundle\Controller\clientController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TMBundle\Entity\Catalogue;
class CCatalogueController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $catalogues=$em->getRepository("TunisiaMallTMBundle:Catalogue")
                ->findAll();
        $catalogues2 = $catalogues;
         $request= $this->getRequest();
        if($request->getMethod()=="POST")
        {
         $search=$request->get('chercher');
         $catalogues = $em->getRepository("TunisiaMallTMBundle:Catalogue")->findByIntitule($search);
        }
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $catalogues,
        $request->query->get('page', 1)/*page number*/,
        8/*limit per page*/);
        return $this->render("TunisiaMallTMBundle:CCatalogue:index.html.twig",array("catalogues"=>$pagination,"catalogues2"=>$catalogues2));
    }
    public function afficherAction($idCatalogue)
    {     $em = $this->getDoctrine()->getManager();
        $catalogues=$em->getRepository("TunisiaMallTMBundle:Catalogue")
                ->findByIdcatalogue($idCatalogue);
        foreach ($catalogues as $catalogue){
            
        $produits=$catalogue->getIdproduit();
        $nom = $catalogue->getIntitule();
        }
        $produits2 = $produits;

        $request= $this->getRequest();
        if($request->getMethod()=="POST")
        {
         $search=$request->get('chercher');
         $produits = $em->getRepository("TunisiaMallTMBundle:Produit")->findByNom($search);
        }
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $produits,
        $request->query->get('page', 1)/*page number*/,
        8/*limit per page*/);
        return $this->render("TunisiaMallTMBundle:CCatalogue:afficherProduits.html.twig",array("produits"=>$pagination,"produits2"=>$produits2, "nomC"=>$nom));   
    }
}
