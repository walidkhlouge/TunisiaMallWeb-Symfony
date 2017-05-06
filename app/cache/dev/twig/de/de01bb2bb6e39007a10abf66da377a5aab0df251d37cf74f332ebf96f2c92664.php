<?php

/* TunisiaMallTMBundle:resEnsView:ECompte.html.twig */
class __TwigTemplate_2d217e9a29df1b1fc0d789b6a40be6df54df045e28268ad889d9b95687114e4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::resEnsView/EIndex.html.twig", "TunisiaMallTMBundle:resEnsView:ECompte.html.twig", 2);
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
        <h1>La Liste des Responsables boutiques </h1>
        <div class = \"table-responsive\">
            <table   class=\"table table-bordered table-striped table-hover table-condensed\" id=\"tableB\" datatable=\"\" >
                <thead>
                    <tr>
                        <th>Login</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse email</th>
                        <th>Boutique</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "                    <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("validerC", array("id" => $this->getAttribute($context["i"], "login", array()))), "html", null, true);
            echo "\">
                        <tr>
                            <td class = \"active\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "login", array()), "html", null, true);
            echo "</td>
                            <td class = \"active\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</td>
                            <td class = \"active\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td class = \"active\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "adressemail", array()), "html", null, true);
            echo "</td>
                            <td>
                                <select name=\"valider\" >
                                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 30
                echo "                                        <option ";
                if (($this->getAttribute($context["c"], "loginResponsableBoutique", array()) == $this->getAttribute($context["i"], "login", array()))) {
                    echo " selected=\"selected\" ";
                }
                echo " data-tokens = \" ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "intitule", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "intitule", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                                </select>
                            </td>
                            <td>
                                <div>
                                    <button type=\"submit\" class=\"btn btn-info\" class=\"fa fa-plus\" >Valider</button>
                                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppC", array("id" => $this->getAttribute($context["i"], "login", array()))), "html", null, true);
            echo "\"  class=\"btn btn-danger\" class=\"fa fa-plus\">Supprimer</a>
                                </div>
                            </td>
                        </tr>
                    </form>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </tbody>
            </table>
        </div>
    </div>       
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:resEnsView:ECompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  102 => 37,  95 => 32,  80 => 30,  76 => 29,  70 => 26,  66 => 25,  62 => 24,  58 => 23,  52 => 21,  48 => 20,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "TunisiaMallTMBundle::resEnsView/EIndex.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <div class="side-body ">*/
/*         <h1>La Liste des Responsables boutiques </h1>*/
/*         <div class = "table-responsive">*/
/*             <table   class="table table-bordered table-striped table-hover table-condensed" id="tableB" datatable="" >*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Login</th>*/
/*                         <th>Nom</th>*/
/*                         <th>Prenom</th>*/
/*                         <th>Adresse email</th>*/
/*                         <th>Boutique</th>*/
/*                     </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/*                     {% for i in m %}*/
/*                     <form method="POST" action="{{path('validerC',{'id':i.login})}}">*/
/*                         <tr>*/
/*                             <td class = "active">{{ i.login }}</td>*/
/*                             <td class = "active">{{ i.nom}}</td>*/
/*                             <td class = "active">{{ i.prenom }}</td>*/
/*                             <td class = "active">{{ i.adressemail }}</td>*/
/*                             <td>*/
/*                                 <select name="valider" >*/
/*                                     {% for c in f %}*/
/*                                         <option {% if c.loginResponsableBoutique == i.login%} selected="selected" {% endif %} data-tokens = " {{ c.intitule }}" >{{ c.intitule }}</option>*/
/*                                     {%endfor %}*/
/*                                 </select>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div>*/
/*                                     <button type="submit" class="btn btn-info" class="fa fa-plus" >Valider</button>*/
/*                                     <a href="{{path('suppC',{'id':i.login})}}"  class="btn btn-danger" class="fa fa-plus">Supprimer</a>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </form>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>       */
/* </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
