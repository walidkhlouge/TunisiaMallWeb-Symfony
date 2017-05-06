<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ECompteController
 *
 * @author ACER
 */

namespace TunisiaMall\TMBundle\Controller\resEnsController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ECompteController extends Controller {

    function SupprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $objet = $em->getRepository('TunisiaMallTMBundle:Compte')->find($id);
        $em->remove($objet);
        $em->flush();
        return $this->redirectToRoute('affichage_pageC');
    }

    function AffichageAction() {
        $em = $this->getDoctrine()->getManager();
        $objet = $em->getRepository('TunisiaMallTMBundle:Compte')->findAll();
        $model = $em->getRepository('TunisiaMallTMBundle:Boutique')->findAll();
        return $this->render('TunisiaMallTMBundle:resEnsView:ECompte.html.twig', array('m' => $objet, 'f' => $model));
    }

    function ValiderAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $valider = $request->get('valider');
            $objet = $em->getRepository('TunisiaMallTMBundle:Compte')->find($id);
            $boutique = $em->getRepository('TunisiaMallTMBundle:Boutique')->findOneBy(array("intitule" => $valider));
            $boutique->setLoginresponsableboutique($objet);
            $em->persist($boutique);
            $em->flush();
        }
         return $this->redirectToRoute('affichage_pageC');
    }

}
