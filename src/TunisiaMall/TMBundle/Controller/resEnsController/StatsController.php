<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StatsController
 *
 * @author ACER
 */

namespace TunisiaMall\TMBundle\Controller\resEnsController;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatsController extends Controller {

    public function chartAction() {
        $ob = new Highchart();
        $ob->chart->renderTo('container');
        $ob->chart->type('pie');
        $ob->title->text('Les enseignes les plus visite.');
        $ob->plotOptions->series(
                array(
                    'dataLabels' => array(
                        'enabled' => true,
                        'format' => '{point.name}: {point.y:.1f}%'
                    )
                )
        );

        $ob->tooltip->headerFormat('<span style="font-size:11px">{series.name}</span><br>');
        $ob->tooltip->pointFormat('<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>');

        $data = array(
            array(
                'name' => 'Zara',
                'y' => 18.73,
                'drilldown' => 'Zara',
                'visible' => true
            ),
            array(
                'name' => 'Celio',
                'y' => 53.61,
                'drilldown' => 'Celio',
                'visible' => true
            ),
            array('Zen', 45.0),
            array('La Coste', 1.5)
        );
        $ob->series(
                array(
                    array(
                        'name' => 'Visite',
                        'colorByPoint' => true,
                        'data' => $data
                    )
                )
        );

        $drilldown = array(
            array(
                'name' => 'Zara',
                'id' => 'Zara',
                'data' => array(
                    array("v8.0", 26.61),
                    array("v9.0", 16.96),
                    array("v6.0", 6.4),
                    array("v7.0", 3.55),
                    array("v8.0", 0.09)
                )
            ),
            array(
                'name' => 'Celio',
                'id' => 'Celio',
                'data' => array(
                    array("v19.0", 7.73),
                    array("v17.0", 1.13),
                    array("v16.0", 0.45),
                    array("v18.0", 0.26)
                )
            ),
        );
        $ob->drilldown->series($drilldown);
        
        return $this->render('TunisiaMallTMBundle:resEnsView:StatsEnseigne.html.twig', array(
                    'chart' => $ob
        ));
    }

}
