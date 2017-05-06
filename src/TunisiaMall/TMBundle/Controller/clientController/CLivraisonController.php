<?php

namespace TunisiaMall\TMBundle\Controller\clientController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
class CLivraisonController extends Controller {

    
    public function indexAction(){
        
        $em1 = $this->getDoctrine()->getManager();
        $userManager = $this->container->get('fos_user.user_manager');
$user = $userManager->findUserByUsername($this->container->get('security.context')
                    ->getToken()
                    ->getUser());
        $commandes=$em1->getRepository("TunisiaMallTMBundle:Commande")->findBy(array("loginclient"=>($user->getUsername())));
        $i = 0;
        $prix=0;
        $idc=1;
        $idcs = new \ArrayObject();
        $adresses = new \ArrayObject();
        $dates = new \ArrayObject();
        $prixs = new \ArrayObject();
        foreach ($commandes as $commande)
        {
            $produit = $commande->getIdproduit();
            if( $i == 0 )
            {
            $idcs->append($idc);
            $adresses->append($commande->getAdresseLivraison());
            $dates->append($commande->getTimeLivraison());
            $prix= $prix + ($commande->getQuantite())*($produit->getPrixventeunitaire());
           
            }
            else if ($commande->getIdcommande()==1)
            {
                $prixs->append($prix);
                $prix=0;
                $idcs->append($idc);
            $adresses->append($commande->getAdresseLivraison());
            $dates->append($commande->getTimeLivraison());
            
            $prix= $prix + ($commande->getQuantite())*($produit->getPrixventeunitaire());
               
            }
            else 
            {
              $prix= $prix + $commande->getQuantite()*$produit->getPrixventeunitaire();   
            }
            
            $i++;
        }
        $prixs->append($prix);
     
      $max = count($prixs);
    return $this->render("TunisiaMallTMBundle:clientView:CLivraison.html.twig",array("id"=>$idcs, "prix"=>$prixs, "addresse"=>$adresses, "date"=>$dates, "max"=>$max));
    }
    
}
