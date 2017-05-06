<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EPacksController
 *
 * @author ACER
 */

namespace TunisiaMall\TMBundle\Controller\resEnsController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EPacksController extends Controller {

    function AffichageAction() {
        $em = $this->getDoctrine()->getManager();
        $objet = $em->getRepository('TunisiaMallTMBundle:Packspub')->findAll();
        $objet2 = $em->getRepository('TunisiaMallTMBundle:Enseigne')->findAll();
        return $this->render('TunisiaMallTMBundle:resEnsView:EPacks.html.twig', array('m' => $objet, 'e' => $objet2));
    }

    function ValiderAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $valider = $request->get('valider');
            $objet = $em->getRepository('TunisiaMallTMBundle:Packspub')->find($id);
            $bo = $em->getRepository('TunisiaMallTMBundle:Enseigne')->findOneBy(array("nomenseigne" => $valider));
            $bo->setIdpack($objet->getId());
            $em->persist($bo);
            $em->flush();
        }
        return $this->redirectToRoute('affichage_pageP');
    }

}
