<?php

namespace TunisiaMall\TMBundle\Controller\adminController;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class StatistiqueController extends Controller {

    public function chartPieAction() {
        $em = $this->getDoctrine()->getManager();
        $Rs = $em->getRepository('TunisiaMallTMBundle:Compte')->UserType("ResponsableEnseigne");
        $Rn = $em->getRepository('TunisiaMallTMBundle:Compte')->UserType("ResponsableBoutique");
        $C = $em->getRepository('TunisiaMallTMBundle:Compte')->UserType("Client");
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('  Nombre des utilisateur ');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'color' => '#8b7d6b',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $data = array(
            array("Responsable Enseigne", intval($Rs)),
            array("Responsable Boutique", intval($Rn)),
            array("Client", intval($C)),
        );
        $ob->series(array(array('type' => 'pie', 'name' => 'Nombre', 'color' => '#ccac00', 'data' => $data)));
        return $this->render('TunisiaMallTMBundle:adminView:Statistique.html.twig', array(
                    'Responsable Enseigne' => $Rs, "Responsable Boutique" => $Rn,'Client' => $C, 'chart' => $ob,
        ));
    }
    public function chartPie2Action(){
        $em = $this->getDoctrine()->getManager();
        $nb=$em->getRepository('TunisiaMallTMBundle:Packspub')->NombrePack();
        $nv=$em->getRepository('TunisiaMallTMBundle:Packspub')->NombrePackV();
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('  Pack Vendu ');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'color' => '#8b7d6b',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $data = array(
            array("Packs Vendus", intval($nv)),
            array("Packs Libres", intval($nb)),
        );
        $ob->series(array(array('type' => 'pie', 'name' => 'Nombre', 'color' => '#ccac00', 'data' => $data)));
        return $this->render('TunisiaMallTMBundle:adminView:StatP.html.twig', array(
                    'Pack Libres' => $nb, "Pack Vendus" => $nv, 'chart' => $ob,
        ));
        
        
        
    }
      
}