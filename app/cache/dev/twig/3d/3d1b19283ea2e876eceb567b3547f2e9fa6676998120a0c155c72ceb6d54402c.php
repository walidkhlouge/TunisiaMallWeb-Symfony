<?php

/* TunisiaMallTMBundle:Fidelite:gestionFid.html.twig */
class __TwigTemplate_78e3866d0947b8dd3711c6238654859ea6e9de9ea550edcfc2a5c865551f32a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::resEnsView/EIndex.html.twig", "TunisiaMallTMBundle:Fidelite:gestionFid.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"side-body padding-top\">
    
    
    
    <form method=\"POST\" action=\"\">   
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
   
                    <select name=\"search\" class=\"selectpicker\" data-live-search=\"true\" onChange=\"this.form.submit()\">
                                <option disabled selected value> -- Recherche des Cartes ? -- </option>
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modelesall"]) ? $context["modelesall"] : $this->getContext($context, "modelesall")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "                       <option data-tokens = \" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nomenseigne", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nomenseigne", array()), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </select></br></br></br>  
                 </form>
<table  class=\"table table-bordered table-striped table-hover table-condensed\"  >
    <tr>
         <td>Id</td>
         <td>Points</td>
         <td>Login</td>
         <td>Enseigne</td>
         <td>Point fidelite Unitaire </td>
         <td>Taux reduction Unitaire</td>
         <td class=\"table-info\">Actions</td>
       
    </tr>
    
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 33
            echo "    <tr>
        <th>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idcartefidelite", array()), "html", null, true);
            echo "</th>
        <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "pointfidele", array()), "html", null, true);
            echo "</th>
        <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "loginclient", array()), "html", null, true);
            echo "</th>
        <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nomenseigne", array()), "html", null, true);
            echo "</th>
        <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "pointfidelefixe", array()), "html", null, true);
            echo "</th>
        <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "reductionfixe", array()), "html", null, true);
            echo "</th>
        <th>  <a type=\"button\" class=\"btn btn-info\" class=\"fa fa-plus\"  href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carte_edit", array("id" => $this->getAttribute($context["i"], "idcartefidelite", array()))), "html", null, true);
            echo "\">Modifier</a> 
          <a   class=\"btn btn-danger\" class=\"fa fa-plus\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carte_delete", array("id" => $this->getAttribute($context["i"], "idcartefidelite", array()))), "html", null, true);
            echo "\">Supprimer</a>

 </th>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "   
</table> 
   <a type=\"button\" class=\"btn btn-success\" class=\"fa fa-plus\"  href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("carte_ajout");
        echo "\">Ajouter</a> 
   </div>
    ";
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        echo " 
    ";
        // line 53
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
   

";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:Fidelite:gestionFid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  131 => 52,  124 => 48,  120 => 46,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  81 => 34,  78 => 33,  74 => 32,  58 => 18,  47 => 16,  43 => 15,  32 => 6,  29 => 5,  11 => 2,);
    }
}
/* */
/* {% extends "TunisiaMallTMBundle::resEnsView/EIndex.html.twig" %}*/
/* */
/* */
/* {% block content %}*/
/*     <div class="side-body padding-top">*/
/*     */
/*     */
/*     */
/*     <form method="POST" action="">   */
/*                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; */
/*    */
/*                     <select name="search" class="selectpicker" data-live-search="true" onChange="this.form.submit()">*/
/*                                 <option disabled selected value> -- Recherche des Cartes ? -- </option>*/
/*                         {% for i in modelesall %}*/
/*                        <option data-tokens = " {{i.nomenseigne}}" >{{i.nomenseigne}}</option>*/
/*   {%endfor %}*/
/*                     </select></br></br></br>  */
/*                  </form>*/
/* <table  class="table table-bordered table-striped table-hover table-condensed"  >*/
/*     <tr>*/
/*          <td>Id</td>*/
/*          <td>Points</td>*/
/*          <td>Login</td>*/
/*          <td>Enseigne</td>*/
/*          <td>Point fidelite Unitaire </td>*/
/*          <td>Taux reduction Unitaire</td>*/
/*          <td class="table-info">Actions</td>*/
/*        */
/*     </tr>*/
/*     */
/*     {% for i in modeles %}*/
/*     <tr>*/
/*         <th>{{i.idcartefidelite}}</th>*/
/*         <th>{{i.pointfidele}}</th>*/
/*         <th>{{i.loginclient}}</th>*/
/*         <th>{{i.nomenseigne}}</th>*/
/*         <th>{{i.pointfidelefixe}}</th>*/
/*         <th>{{i.reductionfixe}}</th>*/
/*         <th>  <a type="button" class="btn btn-info" class="fa fa-plus"  href="{{ path('carte_edit', { 'id':i.idcartefidelite })}}">Modifier</a> */
/*           <a   class="btn btn-danger" class="fa fa-plus" href="{{ path('carte_delete', { 'id':i.idcartefidelite })}}">Supprimer</a>*/
/* */
/*  </th>*/
/*     </tr>*/
/*     {% endfor %}*/
/*    */
/* </table> */
/*    <a type="button" class="btn btn-success" class="fa fa-plus"  href="{{ path('carte_ajout')}}">Ajouter</a> */
/*    </div>*/
/*     {% endblock %}*/
/* */
/* {% block footer %} */
/*     {{ parent() }}*/
/*    */
/* */
/* {% endblock %}*/
/* */
/* */
