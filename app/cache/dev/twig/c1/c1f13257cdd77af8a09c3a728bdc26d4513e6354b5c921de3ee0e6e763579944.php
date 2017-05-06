<?php

/* TunisiaMallTMBundle:resEnsView:Catalogue.html.twig */
class __TwigTemplate_da5fc33f20cec664c3bb747f3a24dd75f2f9e1b39e6e5e6dcc10b3444e25acdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::resEnsView/EIndex.html.twig", "TunisiaMallTMBundle:resEnsView:Catalogue.html.twig", 3);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    
    
    <div class=\"side-body padding-top\">
        <h1 class='text-primary' align=\"center\"> Liste des produits  disponibles   </h1>
      <a type=\"button\" class=\"btn btn-info\" class=\"fa fa-plus\"  href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("voir_cata");
        echo "\" >Voir catalogue</a> 
        <div class=\"col-md-12 col-md-offset-0\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "                <div class=\"card text-xs-center\" id=\"item-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "idproduit", array()), "html", null, true);
            echo "\">
                    <center><img class=\"card-img-top\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("GUI/images/produit/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "url", array()), "html", null, true);
            echo "\" alt=\"Card image cap\">
                        <div class=\"card-block\">
                            <h4 class=\"card-title\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</h4>
                            <p class=\"card-text\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "info", array()), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nomenseigne", array()), "html", null, true);
            echo "</p>
                            <a  class=\"btn btn-primary\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout_catalogue", array("id" => $this->getAttribute($context["i"], "idproduit", array()), "nom" => $this->getAttribute($context["i"], "nomenseigne", array()))), "html", null, true);
            echo "\" >Ajouter</a>
                        
                            
                        </div>
                    </center> 
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        
        </div>




    </div>
";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:resEnsView:Catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  51 => 13,  46 => 12,  42 => 11,  37 => 9,  31 => 5,  28 => 4,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {% extends "TunisiaMallTMBundle::resEnsView/EIndex.html.twig" %}*/
/* {% block content %}*/
/*     */
/*     */
/*     <div class="side-body padding-top">*/
/*         <h1 class='text-primary' align="center"> Liste des produits  disponibles   </h1>*/
/*       <a type="button" class="btn btn-info" class="fa fa-plus"  href="{{ path('voir_cata')}}" >Voir catalogue</a> */
/*         <div class="col-md-12 col-md-offset-0">*/
/*             {% for i in entities %}*/
/*                 <div class="card text-xs-center" id="item-{{ i.idproduit }}">*/
/*                     <center><img class="card-img-top" src="{{asset('GUI/images/produit/')}}{{i.url}}" alt="Card image cap">*/
/*                         <div class="card-block">*/
/*                             <h4 class="card-title">{{i.nom}}</h4>*/
/*                             <p class="card-text">{{i.info}}</p>*/
/*                             <p class="card-text">{{i.nomenseigne}}</p>*/
/*                             <a  class="btn btn-primary" href="{{path('ajout_catalogue',{'id': i.idproduit ,'nom':i.nomenseigne})}}" >Ajouter</a>*/
/*                         */
/*                             */
/*                         </div>*/
/*                     </center> */
/*                 </div>*/
/*             {% endfor %}        */
/*         </div>*/
/* */
/* */
/* */
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
