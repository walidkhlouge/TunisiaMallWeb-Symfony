<?php

namespace TunisiaMall\TMBundle\Controller\resEnsController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TMBundle\Entity\CarteFidelite;
use TunisiaMall\TMBundle\Form\CarteFideliteType;

/**
 * Description of FideliteController
 *
 * @author Hanene
 */
class FideliteController extends Controller {

    //put your code here



    public function indexAction() {

        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository
                        ('TunisiaMallTMBundle:CarteFidelite')->findAll();
        $request = $this->get('request');
        $modelesall=$modeles;
        if ($request->getMethod() == "POST") {
            $search = $request->get('search');
            $modelesall = $em->getRepository
                            ('TunisiaMallTMBundle:CarteFidelite')->
                    findBy(array("nomenseigne" => $search));
          
        }

        return $this->render
                        ('TunisiaMallTMBundle:Fidelite:gestionFid.html.twig'
                        , array("modeles" => $modelesall,"modelesall"=>$modeles));
    }
    
  public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TunisiaMallTMBundle:CarteFidelite')->find($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find carte entity.');
        }


        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirectToRoute('enseigne_fid');
    }
    
     public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TunisiaMallTMBundle:CarteFidelite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Boutique entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('TunisiaMallTMBundle:Fidelite:editC.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView()
        ));
    }
    
    
    
    
    
     private function createEditForm(CarteFidelite $entity) {
        $form = $this->createForm(new CarteFideliteType(), $entity, array(
            'action' => $this->generateUrl('carte_edit', array('id' => $entity->getIdcartefidelite())),
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    
       public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('TunisiaMallTMBundle:CarteFidelite')->find($id);
        $em->remove($entity);
        $em->flush();
        return $this->redirectToRoute('enseigne_fid');
    }
    private function createCreateForm(CarteFidelite $entity) {
        $form = $this->createForm(new CarteFideliteType(), $entity, array(
            'action' => $this->generateUrl('carte_add'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }
      public function createAction(Request $request) {
        $entity = new CarteFidelite();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
        }

         return $this->redirectToRoute('enseigne_fid');
    }
    
     public function newAction() {
        $entity = new CarteFidelite();
        $form = $this->createCreateForm($entity);

        return $this->render('TunisiaMallTMBundle:Fidelite:newC.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }
        
}
