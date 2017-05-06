<?php

namespace TunisiaMall\TMBundle\Controller\resEnsController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TMBundle\Entity\Produit;
use TunisiaMall\TMBundle\Form\ProduitType;

class ProduitController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $entitiesT = $em->getRepository('TunisiaMallTMBundle:Produit')->findAll();
        $entities = $objet = $this->get('knp_paginator')->paginate($entitiesT, $this->get('request')->query->get('page', 1), 3);
        return $this->render('TunisiaMallTMBundle:Produit:indexP.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function createAction(Request $request) {
        $entity = new Produit();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->uploadProfilePicture();
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirectToRoute('produit_produit');
    }

    private function createCreateForm(Produit $entity) {
        $form = $this->createForm(new \TunisiaMall\TMBundle\Form\ProduitType(), $entity, array(
            'action' => $this->generateUrl('produit_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    public function newAction() {
        $entity = new Produit();
        $form = $this->createCreateForm($entity);

        return $this->render('TunisiaMallTMBundle:Produit:newP.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TunisiaMallTMBundle:Produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find produit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TunisiaMallTMBundle:Produit:showP.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TunisiaMallTMBundle:Produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find produit entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('TunisiaMallTMBundle:Produit:editP.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView()
        ));
    }

    private function createEditForm(Produit $entity) {
        $form = $this->createForm(new ProduitType(), $entity, array(
            'action' => $this->generateUrl('produit_update', array('id' => $entity->getIdproduit())),
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }

    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TunisiaMallTMBundle:Produit')->find($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find produit entity.');
        }


        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirectToRoute('produit_produit');
    }

    public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('TunisiaMallTMBundle:Produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find produit entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('produit_produit'));
    }

}
