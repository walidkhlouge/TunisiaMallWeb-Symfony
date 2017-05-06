<?php

namespace TunisiaMall\TMBundle\Controller\resBoutController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TMBundle\Form\ProduitForm;
use TunisiaMall\TMBundle\Form\ProduittailleForm;
use TunisiaMall\TMBundle\Entity\Produittaille;


class BProduitController  extends Controller

{
    //Afficher les produits de l'enseigne
    public function enafficherproduitAction($login)
    {
         
$em = $this->getDoctrine()->getManager();
$comptes= $em->getRepository('TunisiaMallTMBundle:Compte')->findByLogin($login);

 $boutique= $em->getRepository('TunisiaMallTMBundle:Boutique')->findOneBy(array("loginresponsableboutique"=>$login));

      $entities=$em->getRepository('TunisiaMallTMBundle:Produit')->findByNomenseigne($boutique->getNomenseigne()->getNomenseigne());
      return $this->render('TunisiaMallTMBundle:resBoutView:ProduitEnseigne.html.twig', array(
      'entities' => $entities,"comptes"=>$comptes,"idboutique"=>$boutique->getIdboutique()));
        
    }
    
    //Afficher produit de la boutique
     public function afficherproduitAction($login)
    {
                  $em = $this->getDoctrine()->getManager();
$comptes= $em->getRepository('TunisiaMallTMBundle:Compte')->findByLogin($login);

 $boutique= $em->getRepository('TunisiaMallTMBundle:Boutique')->findOneBy(array("loginresponsableboutique"=>$login));


         $entities=$em->getRepository('TunisiaMallTMBundle:Produit')->findBy(array("idboutique"=>$boutique->getIdboutique(),"nomenseigne"=>$boutique->getNomenseigne()->getNomenseigne()));

        return $this->render('TunisiaMallTMBundle:resBoutView:ProduitBoutique.html.twig', array(
            'entities' => $entities,'comptes'=>$comptes));
    
    }
    
    //Supprimer produit de la boutique
   /*  public function deleteAction($id, $login)
    {        /* var_dump($login);
              var_dump($id);
    
    die("kjkjk");*/
      /*   $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TunisiaMallTMBundle:Produit')->find($id);
            $comptes= $em->getRepository('TunisiaMallTMBundle:Compte')->findOneBy(array("login"=>$login));
         
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Produit entity.');
            }
            $em->remove($entity);
            $em->flush();
            
       return $this->redirect($this->generateUrl('boutique_afficher_produit', array('login' => $comptes->getLogin())));
        }*/
     
   //Modifier les produits de la boutique     
   function updateprodAction($id , $login)
   {
        
   $em=$this->getDoctrine()->getManager();
   $produit=$em->getRepository('TunisiaMallTMBundle:Produit')
         ->find($id);
    $comptes= $em->getRepository('TunisiaMallTMBundle:Compte')->findByLogin($login);
    $form=$this->createForm(new ProduitForm(),$produit);
    $req=$this->get('request');
    if($form->handleRequest($req)->isValid())
     {
    $em->persist($produit);
    $em->flush();
     }
  return $this->render('TunisiaMallTMBundle:resBoutView:ModifierProduit.html.twig',
         array('f'=>$form->createView(),'produit'=>$produit,'comptes'=>$comptes)); 
     } 
     
     
     //ajouter un produit
     function AjouterprodAction($id , $login)
   {
         
    $em=$this->getDoctrine()->getManager();
   $boutique= $em->getRepository('TunisiaMallTMBundle:Boutique')->findOneBy(array("loginresponsableboutique"=>$login));
   $produit=$em->getRepository('TunisiaMallTMBundle:Produit')
         ->find($id);
    $comptes= $em->getRepository('TunisiaMallTMBundle:Compte')->findByLogin($login);
    $form=$this->createForm(new ProduitForm() ,$produit);
    $req=$this->get('request');
    if($form->handleRequest($req)->isValid())
     {
        $produit->setIdboutique($boutique);
    $em->persist($produit);
    $em->flush();
     }
  return $this->render('TunisiaMallTMBundle:resBoutView:AjouterProduit.html.twig',
         array('f'=>$form->createView(),'produit'=>$produit,'comptes'=>$comptes)); 
     }
     
     //supprimer des produit de la boutique
     
     public function deleteAction($id,$login){
        $em=$this->getDoctrine()->getManager();
       $comptes= $em->getRepository('TunisiaMallTMBundle:Compte')->findByLogin($login);
        $model = $em->getRepository('TunisiaMallTMBundle:Produit')->find($id);
    
        
        $model->setIdboutique(null);
        $em->persist($model);
                 $em->flush();
                 return $this->redirect($this->generateUrl('boutique_afficher_produit', array("login"=>$login)));
        
     }
        
        //Ajouter les tailles 
       function AjoutertailleAction($id,$login)
    { 
           
    $em=$this->getDoctrine()->getManager();

       $formB=new ProduittailleForm();
       $m=new Produittaille();
       $form=$this->createForm($formB,$m);
       $req=$this->get('request');
         $comptes= $em->getRepository('TunisiaMallTMBundle:Compte')->findByLogin($login);
         
    if($req->getMethod()=="POST")
       {
        
       $produit=$em->getRepository('TunisiaMallTMBundle:Produit')
         ->find($id);
        $prodt=new Produittaille();
        $prodt->setTaille($req->get('taille'));
        $prodt->setQuantite($req->get('quantite'));
        $prodt->setIdproduit($produit);
        $prodtailletexite= $em->getRepository('TunisiaMallTMBundle:Produittaille')->findOneby(array("idproduit"=>$produit,"taille"=>$req->get('taille')));
        if($prodtailletexite!=null)
        {
            $quantite=$req->get('quantite')+$prodtailletexite->getQuantite();
        $prodtailletexite->setQuantite($quantite);
        $em->persist($prodtailletexite);
        $em->flush();
        }
        else{
        $em->persist($prodt);
        $em->flush();
             
        }
        }


        return
        $this->render('TunisiaMallTMBundle:resBoutView:AjouterTaille.html.twig',
        array('f'=>$form->createView(),"comptes"=>$comptes,"id"=>$id));
    }}
