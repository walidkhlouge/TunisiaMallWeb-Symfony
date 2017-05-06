<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EEnseigneController
 *
 * @author ACER
 */

namespace TunisiaMall\TMBundle\Controller\resEnsController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EEnseigneController extends Controller {

    function SupprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $objet = $em->getRepository('TunisiaMallTMBundle:Enseigne')->find($id);
        $em->remove($objet);
        $em->flush();
        return $this->redirectToRoute('affichage_page');
    }

    function AjouterAction() {
        $em = $this->getDoctrine()->getManager();
        $objetT = $em->getRepository('TunisiaMallTMBundle:Enseigne')->findAll();
        $formB = new \TunisiaMall\TMBundle\Form\EnseigneType();
        $m = new \TunisiaMall\TMBundle\Entity\Enseigne();
        $form = $this->createForm($formB, $m);
        $req = $this->get('request');
        
        if ($form->handleRequest($req)->isValid()) {
           
            $em = $this->getDoctrine()->getManager();
            $m->uploadProfilePicture();
         
            $em->persist($m);
            $em->flush();
        }
        $objet = $this->get('knp_paginator')->paginate($objetT, $this->get('request')->query->get('page', 1), 1);
        return $this->render('TunisiaMallTMBundle:resEnsView:EEnseigne.html.twig', array('f' => $form->createView(), 'm' => $objet));
    }

    function modifierAction($id) {

        $em = $this->getDoctrine()->getManager();
        $model = $em->getRepository('TunisiaMallTMBundle:Enseigne')->find($id);
        $formB = new \TunisiaMall\TMBundle\Form\EnseigneType();
        $form = $this->createForm($formB, $model);
        $req = $this->get('request');
        if ($form->handleRequest($req)->isValid()) {
            $em->persist($model);
            $em->flush();
        }
        return $this->render('TunisiaMallTMBundle:resEnsView:formModif.html.twig', array('f' => $form->createView()));
    }

}
