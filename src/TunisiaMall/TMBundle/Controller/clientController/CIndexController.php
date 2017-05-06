<?php

namespace TunisiaMall\TMBundle\Controller\clientController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
class CIndexController extends Controller
{
    public function indexAction(Request $request)
{
        
        $formB=new \TunisiaMall\TMBundle\Form\CommentairemallType();
       $m=new \TunisiaMall\TMBundle\Entity\Commentairemall();
       $em66 = $this->getDoctrine()->getManager();
        $compte=$em66->getRepository("TunisiaMallTMBundle:Compte")
                ->findOneBy(array("login"=>"bassemlog"));
       $m->setClient($compte);
       $form=$this->createForm($formB,$m);
       $req=$this->get('request');
       if($form->handleRequest($req)->isValid())
       {
           $em=  $this->getDoctrine()->getManager();
           $em->persist($m);
           $em->flush();
       }
      
      
       $formB2=new \TunisiaMall\TMBundle\Form\ReclamationmallType();
       $m2=new \TunisiaMall\TMBundle\Entity\Reclamationmall();
       $form2=$this->createForm($formB2,$m2);
        if($form2->handleRequest($req)->isValid())
       {
            
           $em=  $this->getDoctrine()->getManager();
           $m2->setClient($compte);
           $em->persist($m2);
           $em->flush();
       }
       $req2=$this->get('request');
        $em23=$this->getDoctrine()->getManager(); 

   $Commentairemall=$em23->getRepository("TunisiaMallTMBundle:Commentairemall")
                ->findAll();
   return $this->render("TunisiaMallTMBundle:clientView:CAccueil.html.twig",array("commentaire"=>$Commentairemall,'f'=>$form->createView(),'f2'=>$form2->createView()));
    }
    public function indexModifAction()
    {
        return $this->render("TunisiaMallTMBundle:clientView:CIndex.html.twig");
    }
    public function handlerAction(Request $request) {
        
        
        
        
        
   
}
  public function villesAction(Request $request,$cp) 
    {
        /*$em = $this->getDoctrine()->getManager();
        
        $villeCodePostal = $em->getRepository('TunisiaMallTMBundle:Produit')->findOneBy(array('idproduit' => $cp));
        
        if ($villeCodePostal) {
            $ville = $villeCodePostal->getNom();
        } else {
            $ville = null;
        }
        $response = new JsonResponse();
        return $response->setData(array('ville' => $ville));
        */
        //*****
      
      
      
      /*
              if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $villeCodePostal = $em->getRepository('TunisiaMallTMBundle:Produit')->findBy(array('nomenseigne' => $cp));
            
            if ($villeCodePostal) {
                $villes = array();
                foreach($villeCodePostal as $ville) {
                    $villes[] = $ville->getNom();
                }
            } else {
                $ville = null;
            }

            $response = new JsonResponse();
            return $response->setData(array('ville' => $villes));
        }
         else {
            throw new \Exception('Erreur');
        }
    }
    public function demandsAction(Request $request)
{
    $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TunisiaMallTMBundle:Produit')->findAll();
                
    return $this->render('TunisiaMallTMBundle:clientView:gg.html.twig', array(
       'paniers' => $entity
        ));
       * 
       */
}
    
}
