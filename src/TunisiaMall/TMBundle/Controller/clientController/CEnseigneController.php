<?php

namespace TunisiaMall\TMBundle\Controller\clientController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
class CEnseigneController extends Controller
{
    public function indexAction(Request $request)
{
        
        $em = $this->getDoctrine()->getManager();
        $enseigne=$em->getRepository("TunisiaMallTMBundle:Enseigne")
                ->findAll();
        $enseignes2 = $enseigne;
         $request= $this->getRequest();
        if($request->getMethod()=="POST")
        {
         $search=$request->get('chercher');
    
         $enseigne = $em->getRepository("TunisiaMallTMBundle:Enseigne")->findBy(array("nomenseigne"=>$search));
         

 
    
        }
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $enseigne,
        $request->query->get('page', 1)/*page number*/,
        8/*limit per page*/);
//       
//   $formB=new \TunisiaMall\TMBundle\Form\CommentairemallType();
//       $m=new \TunisiaMall\TMBundle\Entity\Commentairemall();
//       $em66 = $this->getDoctrine()->getManager();
//        $compte=$em66->getRepository("TunisiaMallTMBundle:Compte")
//                ->findOneBy(array("login"=>"bassemlog"));
//       $m->setClient($compte);
//       $form=$this->createForm($formB,$m);
//       $req=$this->get('request');
//       if($form->handleRequest($req)->isValid())
//       {
//           $em=  $this->getDoctrine()->getManager();
//           
//           $em->persist($m);
//           $em->flush();
//       }
//          //formType w fiha el modif ta assemi el formulaire 
//       $formB2=new \TunisiaMall\TMBundle\Form\ReclamationmallType();
//       $m2=new \TunisiaMall\TMBundle\Entity\Reclamationmall();
//       $form2=$this->createForm($formB2,$m2);
//       $req2=$this->get('request');
//        $em23=$this->getDoctrine()->getManager(); 
//
//   $Commentairemall=$em23->getRepository("TunisiaMallTMBundle:Commentairemall")
//                ->findAll();
        return $this->render("TunisiaMallTMBundle:clientView:CEnseigne.html.twig",array("enseignes"=>$pagination,"enseignes2"=>$enseignes2));
}
//   public function commentaireAction(Request $request)
//{
//       
//$formB=new \TunisiaMall\TMBundle\Form\CommentairemallType();
//       $m=new \TunisiaMall\TMBundle\Entity\Commentairemall();
//       $em = $this->getDoctrine()->getManager();
//        $compte=$em->getRepository("TunisiaMallTMBundle:Compte")
//                ->findBy(array("loginClient"=>"bassemlog"));
//       $m->setClient($compte);
//       $form=$this->createForm($formB,$m);
//       $req=$this->get('request');
//       if($form->handleRequest($req)->isValid())
//       {
//           $em=  $this->getDoctrine()->getManager();
//           
//           $em->persist($m);
//           $em->flush();
//       }
// return
//$this->render('MyAppParcBundle:Model:formulairev2.html.twig',
//         array('f'=>$form->createView()));        
//
//        }
}
