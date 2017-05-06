<?php

/* TunisiaMallTMBundle:resEnsView:StatsEnseigne.html.twig */
class __TwigTemplate_6a302245ff08dcaa5b5a6cc0a570324e9ab9a47e53e9bc80851ab7daaccbe730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::resEnsView/EIndex.html.twig", "TunisiaMallTMBundle:resEnsView:StatsEnseigne.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TunisiaMallTMBundle::resEnsView/EIndex.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "     <div class=\"side-body \">
        <h1>Statistique</h1>
    
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    
    ";
        // line 13
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
  
</script>

<div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:resEnsView:StatsEnseigne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "TunisiaMallTMBundle::resEnsView/EIndex.html.twig" %}*/
/* {% block content %}*/
/*      <div class="side-body ">*/
/*         <h1>Statistique</h1>*/
/*     */
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/* */
/* <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/* <script type="text/javascript">*/
/*     */
/*     {{ chart(chart) }}*/
/*   */
/* </script>*/
/* */
/* <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* </div>*/
/* {%endblock%}*/
