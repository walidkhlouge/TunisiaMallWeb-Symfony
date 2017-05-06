<?php

/* TunisiaMallTMBundle:resEnsView:EPacks.html.twig */
class __TwigTemplate_56003ed1f077600e18999a885196be0b76c2e5e315cd373563629126d2ca971b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::resEnsView/EIndex.html.twig", "TunisiaMallTMBundle:resEnsView:EPacks.html.twig", 2);
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
        echo "    <div class=\"side-body \">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "            <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("validerP", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">
                <div class=\"col-md-12 col-md-offset-0\">
                    <div class=\"card text-xs-center\" id=\"item-";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "\">
                        <center>
                            <div class=\"card-block\">
                                <h4 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</h4>
                                <p class=\"card-text\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
            echo "</p>
                                <p class=\"card-text\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prix", array()), "html", null, true);
            echo "</p>
                                <select name=\"valider\" >
                                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 17
                echo "                                        <option  data-tokens = \" ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nomEnseigne", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nomEnseigne", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                                </select>
                                <button type=\"submit\" class=\"btn btn-info\" class=\"fa fa-plus\" >Acheter</button>
                            </div>
                        </center> 
                    </div>
                </div>
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:resEnsView:EPacks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  78 => 19,  67 => 17,  63 => 16,  58 => 14,  54 => 13,  50 => 12,  44 => 9,  38 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "TunisiaMallTMBundle::resEnsView/EIndex.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <div class="side-body ">*/
/*         {% for i in m %}*/
/*             <form method="POST" action="{{path('validerP',{'id':i.id})}}">*/
/*                 <div class="col-md-12 col-md-offset-0">*/
/*                     <div class="card text-xs-center" id="item-{{ i.nom }}">*/
/*                         <center>*/
/*                             <div class="card-block">*/
/*                                 <h4 class="card-title">{{i.nom}}</h4>*/
/*                                 <p class="card-text">{{i.description}}</p>*/
/*                                 <p class="card-text">{{i.prix}}</p>*/
/*                                 <select name="valider" >*/
/*                                     {% for d in e %}*/
/*                                         <option  data-tokens = " {{ d.nomEnseigne }}" >{{ d.nomEnseigne }}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                                 <button type="submit" class="btn btn-info" class="fa fa-plus" >Acheter</button>*/
/*                             </div>*/
/*                         </center> */
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
