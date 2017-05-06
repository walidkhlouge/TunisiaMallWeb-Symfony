<?php

/* TunisiaMallTMBundle:Produit:indexP.html.twig */
class __TwigTemplate_f5c631045cffe7d04dd3ad5808e7a07d8939f877da71e74f9dd7ff84969ed006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::resEnsView/EIndex.html.twig", "TunisiaMallTMBundle:Produit:indexP.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"side-body padding-top\">

        <div class = \"table-responsive\">
            <table   class=\"table table-bordered table-striped table-hover table-condensed\" id=\"tableB\" datatable=\"\" >
                <thead>
                    <tr>
                        <th>Id Produit</th>
                        <th>Nom Enseigne</th>
                        <th>Id Boutique</th>
                        <th>Nom Produit</th>
                        <th> Produit</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "                        <tr>
                            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_show", array("id" => $this->getAttribute($context["entity"], "idproduit", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idproduit", array()), "html", null, true);
            echo "</a></td>
                            <td class = \"active\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomenseigne", array()), "html", null, true);
            echo "</td>
                            <td class = \"active\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idboutique", array()), "html", null, true);
            echo "</td>
                            <td class = \"active\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>

                            <td class = \"active\"> <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("GUI/images/produit/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "url", array()), "html", null, true);
            echo "\"
                                                       style=\"width: 50px\"> </td>


                            <td>
                                <div>
                                    <a type=\"button\" class=\"btn btn-info\" class=\"fa fa-plus\"  href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_edit", array("id" => $this->getAttribute($context["entity"], "idproduit", array()))), "html", null, true);
            echo "\">Modifier</a>

                                    <a   class=\"btn btn-danger\" class=\"fa fa-plus\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_delete", array("id" => $this->getAttribute($context["entity"], "idproduit", array()))), "html", null, true);
            echo "\">Supprimer</a>


                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </tbody>
            </table>
            <div class=\"navigation\">
                <center> ";
        // line 44
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "</center>
            </div>
        </div>
        <a  class=\"btn btn-success\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("produit_new");
        echo "\">

            <i class=\"fa fa-plus\">Ajouter</i></a></h3>



</div>            
";
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        echo " 
    ";
        // line 57
        $this->displayParentBlock("footer", $context, $blocks);
        echo "


";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:Produit:indexP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 57,  128 => 56,  116 => 47,  110 => 44,  105 => 41,  92 => 34,  87 => 32,  75 => 26,  70 => 24,  66 => 23,  62 => 22,  56 => 21,  53 => 20,  49 => 19,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "TunisiaMallTMBundle::resEnsView/EIndex.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <div class="side-body padding-top">*/
/* */
/*         <div class = "table-responsive">*/
/*             <table   class="table table-bordered table-striped table-hover table-condensed" id="tableB" datatable="" >*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id Produit</th>*/
/*                         <th>Nom Enseigne</th>*/
/*                         <th>Id Boutique</th>*/
/*                         <th>Nom Produit</th>*/
/*                         <th> Produit</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('produit_show', { 'id': entity.idproduit }) }}">{{ entity.idproduit }}</a></td>*/
/*                             <td class = "active">{{ entity.nomenseigne}}</td>*/
/*                             <td class = "active">{{ entity.idboutique}}</td>*/
/*                             <td class = "active">{{ entity.nom }}</td>*/
/* */
/*                             <td class = "active"> <img src="{{asset('GUI/images/produit/')}}{{ entity.url }}" alt="{{ entity.url }}"*/
/*                                                        style="width: 50px"> </td>*/
/* */
/* */
/*                             <td>*/
/*                                 <div>*/
/*                                     <a type="button" class="btn btn-info" class="fa fa-plus"  href="{{ path('produit_edit', { 'id':entity.idproduit })}}">Modifier</a>*/
/* */
/*                                     <a   class="btn btn-danger" class="fa fa-plus" href="{{ path('produit_delete', { 'id':entity.idproduit })}}">Supprimer</a>*/
/* */
/* */
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <div class="navigation">*/
/*                 <center> {{ knp_pagination_render(entities) }}</center>*/
/*             </div>*/
/*         </div>*/
/*         <a  class="btn btn-success" href="{{ path('produit_new')}}">*/
/* */
/*             <i class="fa fa-plus">Ajouter</i></a></h3>*/
/* */
/* */
/* */
/* </div>            */
/* {% endblock %}*/
/* */
/* {% block footer %} */
/*     {{ parent() }}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
