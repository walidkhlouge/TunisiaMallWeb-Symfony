<?php

namespace TunisiaMall\TMBundle\Controller\resEnsController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TunisiaMall\TMBundle\Entity\Catalogue;

/**
 * Description of CatalogueController
 *
 * @author Hanene
 */
class CatalogueController extends Controller {

    //put your code here

    public function SupprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $objet = $em->getRepository('TunisiaMallTMBundle:Produit')->find($id);
        $em->remove($objet);
        $em->flush();
        return $this->redirectToRoute('enseigne_catalogue');
    }

    public function indexAction() {

        $em = $this->getDoctrine()->getManager();
        $obj = $em->getRepository('TunisiaMallTMBundle:Compte')->find("ramilog");
        $enseigne = $em->getRepository('TunisiaMallTMBundle:Enseigne')->findOneBy(array("loginresponsableenseigne" => $obj));
        $entities = $em->getRepository('TunisiaMallTMBundle:Produit')->findBy(array('nomenseigne' => $enseigne));
        $catalogues = $em->getRepository('TunisiaMallTMBundle:Catalogue')->findAll(array('enseigne' => $enseigne));

        $a = new \Doctrine\Common\Collections\ArrayCollection();

        if (count($catalogues) != 0) {


            foreach ($catalogues as $Inc) {
                foreach ($entities as $prod) {

                    if (!$Inc->getIdproduit()->contains($prod)) {
                        $a->add($prod);
                    }
                }
            }
        }

        if (count($a) == 0 && count($catalogues) == 0)
            return $this->render('TunisiaMallTMBundle:resEnsView:Catalogue.html.twig', array(
                        'entities' => $entities));

        return $this->render('TunisiaMallTMBundle:resEnsView:Catalogue.html.twig', array(
                    'entities' => $a));
    }

    public function AjoutAction($id, $nom) {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('TunisiaMallTMBundle:Produit')->find($id);

        $entityC = $em->getRepository('TunisiaMallTMBundle:Catalogue')->findOneBy(array("enseigne" => $nom));


        if (empty($entityC)) {
            $entityC = new Catalogue();
            $entityC->setEnseigne($entity->getNomenseigne());
            $entityC->setIntitule($entity->getNomenseigne());
            $entityC->setType('vetements');

            $em->persist($entityC);
        }

        $entityC->addIdproduit($entity);

        $entity->addIdcatalogue($entityC);
        $em->persist($entity);
        $em->persist($entityC);

        $em->flush();


        return $this->redirectToRoute('enseigne_catalogue');
    }

    public function voirCataAction() {


        $em = $this->getDoctrine()->getManager();
        $obj = $em->getRepository('TunisiaMallTMBundle:Compte')->find("ramilog");
        $enseigne = $em->getRepository('TunisiaMallTMBundle:Enseigne')->findOneBy(array("loginresponsableenseigne" => $obj));
        $entities = $em->getRepository('TunisiaMallTMBundle:Produit')->findBy(array('nomenseigne' => $enseigne));
        $catalogues = $em->getRepository('TunisiaMallTMBundle:Catalogue')->findAll(array('enseigne' => $enseigne));


        $a = new \Doctrine\Common\Collections\ArrayCollection();




        foreach ($catalogues as $Inc) {
            foreach ($entities as $prod) {
                if ($Inc->getIdproduit()->contains($prod)) {
                    $a->add($prod);
                }
            }
        }


        return $this->render('TunisiaMallTMBundle:resEnsView:voirCatalogue.html.twig', array(
                    'entities' => $a));
    }

}
