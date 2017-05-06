<?php

namespace TunisiaMall\TMBundle\Controller\resEnsController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TMBundle\Entity\Boutique;
use TunisiaMall\TMBundle\Form\BoutiqueType;

/**
 * Boutique controller.
 *
 */
class BoutiqueController extends Controller {

    /**
     * Lists all Boutique entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entitiesT = $em->getRepository('TunisiaMallTMBundle:Boutique')->findAll();
        $entities=$objet = $this->get('knp_paginator')->paginate($entitiesT, $this->get('request')->query->get('page', 1), 3);
        return $this->render('TunisiaMallTMBundle:Boutique:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Boutique entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Boutique();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->uploadProfilePicture();
            $em->persist($entity);
            $em->flush();
        }

       return $this->redirectToRoute('enseigne_boutique');
    }

    /**
     * Creates a form to create a Boutique entity.
     *
     * @param Boutique $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Boutique $entity) {
        $form = $this->createForm(new BoutiqueType(), $entity, array(
            'action' => $this->generateUrl('boutique_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Boutique entity.
     *
     */
    public function newAction() {
        $entity = new Boutique();
        $form = $this->createCreateForm($entity);

        return $this->render('TunisiaMallTMBundle:Boutique:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Boutique entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TunisiaMallTMBundle:Boutique')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Boutique entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TunisiaMallTMBundle:Boutique:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Boutique entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TunisiaMallTMBundle:Boutique')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Boutique entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('TunisiaMallTMBundle:Boutique:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView()
        ));
    }

    /**
     * Creates a form to edit a Boutique entity.
     *
     * @param Boutique $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Boutique $entity) {
        $form = $this->createForm(new BoutiqueType(), $entity, array(
            'action' => $this->generateUrl('boutique_update', array('id' => $entity->getIdboutique())),
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }

    /**
     * Edits an existing Boutique entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TunisiaMallTMBundle:Boutique')->find($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Boutique entity.');
        }


        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
        }

      return $this->redirectToRoute('enseigne_boutique'); 
    }

    /**
     * Deletes a Boutique entity.
     *
     */
    public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('TunisiaMallTMBundle:Boutique')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Boutique entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('enseigne_boutique'));
    }

    /**
     * Creates a form to delete a Boutique entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('boutique_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Supprimer'))
                        ->getForm()
        ;
    }

}
