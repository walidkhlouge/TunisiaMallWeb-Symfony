<?php

namespace TunisiaMall\TMBundle\Controller\clientController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use TunisiaMall\TMBundle\Entity\Commande;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
class CPanierController extends Controller {

    public function indexAction($idProduit,$nombre) {
        $session=$this->getRequest()->getSession();
        
        $em3 = $this->getDoctrine()->getManager();
        $panier = $em3->getRepository("TunisiaMallTMBundle:Panier")
                ->findAll();
        foreach($boissonss as $boiss){
            
        }
        $session->set("paniers", $paneir);
        return $this->redirect($this->generateUrl('client_index_modif') . '#s-boutique');
    }
    public function  ajoutPanierAction($id){
        $panier=new \TunisiaMall\TMBundle\Entity\Panier();
        $em33=$this->getDoctrine()->getManager();
        $produit = $em33->getRepository("TunisiaMallTMBundle:Produit")
               ->find($id);
$panier->setIdproduit($produit);
$em32=$this->getDoctrine()->getManager();
$userManager = $this->container->get('fos_user.user_manager');
$user = $userManager->findUserByUsername($this->container->get('security.context')
                    ->getToken()
                    ->getUser());
    
$compte = $em32->getRepository("TunisiaMallTMBundle:Compte")
               ->findOneBy(array("login"=>$user->getUsername()));
     $panier->setIdproduit($produit);
$panier->setLoginclient($compte);
$panier->setNombre(1);
$request=$this->get('request');
        if($request->get('taille'))
        $panier->setTaille($request->get('taille'));
           $em=  $this->getDoctrine()->getManager();
           $em->persist($panier);
           $em->flush();
       
    
        
  
     $referer = $request->headers->get('referer');    
        return new RedirectResponse($referer);
    }
    public function panierAction(){
        
        $request= $this->get('request');
        
        $date = new \Datetime();    
        $once =0;
        
        $commande = new \TunisiaMall\TMBundle\Entity\Commande();
        $em1 = $this->getDoctrine()->getManager();
        
            $em5=$this->getDoctrine()->getManager();
        $produit5=$em5->getRepository("TunisiaMallTMBundle:Produit")
                ->findAll();
     
        
        
        
        $userManager = $this->container->get('fos_user.user_manager');
$user = $userManager->findUserByUsername($this->container->get('security.context')
                    ->getToken()
                    ->getUser());
    
        
        
        
        $em6=$this->getDoctrine()->getManager();
        $paniers=$em6->getRepository("TunisiaMallTMBundle:Panier")
                ->findBy(array("loginclient"=>$user->getUsername()));
        
        $em4 = $this->getDoctrine()->getManager();
        $taille= $em4->getRepository("TunisiaMallTMBundle:Produittaille")
               ->findAll();
        
        if($request->getMethod()=='POST' && $once==0)
        {
            
            $id=1;
            $once =1;
            foreach( $paniers as $panier ){
                
             $commande = new Commande();
            $commande->setAdresselivraison($request->get('adresseLivraison'));
            $compte=$panier->getLoginclient();
            $idproduit=$panier->getIdproduit();
            $commande->setLoginclient($compte);
            $commande->setIdproduit($idproduit);
            $commande->setQuantite($panier->getNombre());
            $commande->setTaille($panier->getTaille());
            $commande->setIdcommande($id);
            $commande->setTimelivraison($date);
            
            $em1->persist($commande);
            
            $id=$id+1;
            $em1->remove($panier);   
            
            }
            $em1->flush();
                      
            
            return $this->redirectToRoute('client_livraison');
 
        }
       
        return $this->render("TunisiaMallTMBundle:clientView:CPanier.html.twig",array("paniers"=>$paniers,"tailles"=>$taille));
    }
    public function modifPanierAction($id,$taille){
                     $em=$this->getDoctrine()->getManager();
             $panier=$em->getRepository('TunisiaMallTMBundle:Panier')->findOneBy(array("idproduit"=>$id,"taille"=>$taille));
                  $req=$this->getRequest('request');
                  $panier->setNombre($req->get('qte'));
                  $em->persist($panier);
                 $em->flush();
                 return $this->redirectToRoute('client_panier');    
    }
    public function supprimerPanierAction($id,$taille){
                     $em=$this->getDoctrine()->getManager();
             $panier=$em->getRepository('TunisiaMallTMBundle:Panier')->findOneBy(array("idproduit"=>$id,"taille"=>$taille));
             
                   $em->remove($panier);
                 $em->flush();
                 return $this->redirectToRoute('client_panier');    
    }
}
