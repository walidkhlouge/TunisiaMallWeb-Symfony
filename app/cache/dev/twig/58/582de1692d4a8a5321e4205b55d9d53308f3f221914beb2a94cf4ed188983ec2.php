<?php

/* TunisiaMallTMBundle:resEnsView:EEnseigne.html.twig */
class __TwigTemplate_5b9be2ddc991b289aaaabe55cc9bbb6c4435d73dfb4c925f02467465671da057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::resEnsView/EIndex.html.twig", "TunisiaMallTMBundle:resEnsView:EEnseigne.html.twig", 2);
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
            echo "            <div class=\"col-md-12 col-md-offset-0\">
                <div class=\"card text-xs-center\" id=\"item-";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nomenseigne", array()), "html", null, true);
            echo "\">
                    <center><img class=\"card-img-top\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("GUI/images/enseigne/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "url", array()), "html", null, true);
            echo "\" alt=\"Card image cap\">
                        <div class=\"card-block\">
                            <h4 class=\"card-title\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nomenseigne", array()), "html", null, true);
            echo "</h4>
                            <p class=\"card-text\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "info", array()), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "adresse", array()), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp", array("id" => $this->getAttribute($context["i"], "nomenseigne", array()))), "html", null, true);
            echo "\"  class=\"btn btn-primary\">Supprimer</a>
                            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modif", array("id" => $this->getAttribute($context["i"], "nomenseigne", array()))), "html", null, true);
            echo "\"  class=\"btn btn-primary\">Modifier</a>
                        </div>
                    </center> 
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        <div class=\"navigation\">
            <center> ";
        // line 23
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")));
        echo "</center>
        </div>
    </div>
    <div class=\"col-md-10 col-md-offset-10\">
        <a class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\">
            <i class=\"fa fa-plus\">Ajouter</i></a>
    </a>
</div>
";
        // line 32
        echo "
<div class =\"modal fade\" id=\"myModal\" role =\"dialog\">

    <div class =\"modal-dialog\">
        <div class =\"modal-content modalInscription\">
            <a data-dismiss=\"modal\" class=\"close modalInscriClose\"><i class=\"fa fa-times-circle \"></i></a>
            <div class =\"modal-header\">
                <h1>Ajouter nouvelle enseigne</h1>
            </div>
            <form method=\"post\" ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'enctype');
        echo ">
                <div class =\"modal-body\">
                    <div class=\"container-fluid\">
                        <section class=\"container\">
                            <div class=\"container-page\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group col-md-12\" id =\"username\">
                                        <label>Nom d'enseigne</label>                      
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomenseigne", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"help-block with-errors\"></div>
                                        <small id=\"output_checkuser\"></small>
                                    </div>

                                    <div class=\"form-group col-md-6\">
                                        <label>Adresse</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-home\"></span></span>
                                                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"help-block with-errors \"></div>
                                    </div>

                                    <div class=\"form-group col-md-6\">
                                        <label>Description</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-comment\"></span></span>
                                                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "info", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"help-block with-errors \"></div>
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        <label>Image</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-picture\"></span></span>
                                                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "file", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"help-block with-errors \"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class = \"modal-footer\">
                            <a class =\"btn btn-default\" data-dismiss =\"modal\">Annuler</a>
                            <div class =\"btn btn-default\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:resEnsView:EEnseigne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 87,  154 => 78,  143 => 70,  131 => 61,  118 => 51,  105 => 41,  94 => 32,  83 => 23,  79 => 21,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  45 => 9,  41 => 8,  38 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "TunisiaMallTMBundle::resEnsView/EIndex.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <div class="side-body ">*/
/*         {% for i in m %}*/
/*             <div class="col-md-12 col-md-offset-0">*/
/*                 <div class="card text-xs-center" id="item-{{ i.nomenseigne }}">*/
/*                     <center><img class="card-img-top" src="{{asset('GUI/images/enseigne/')}}{{i.url}}" alt="Card image cap">*/
/*                         <div class="card-block">*/
/*                             <h4 class="card-title">{{i.nomenseigne}}</h4>*/
/*                             <p class="card-text">{{i.info}}</p>*/
/*                             <p class="card-text">{{i.adresse}}</p>*/
/*                             <a href="{{path('supp',{'id':i.nomenseigne})}}"  class="btn btn-primary">Supprimer</a>*/
/*                             <a href="{{path('modif',{'id':i.nomenseigne})}}"  class="btn btn-primary">Modifier</a>*/
/*                         </div>*/
/*                     </center> */
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="navigation">*/
/*             <center> {{ knp_pagination_render(m) }}</center>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-10 col-md-offset-10">*/
/*         <a class="btn btn-success" data-toggle="modal" data-target="#myModal">*/
/*             <i class="fa fa-plus">Ajouter</i></a>*/
/*     </a>*/
/* </div>*/
/* {#"{{ socialButtons() }}"#}*/
/* */
/* <div class ="modal fade" id="myModal" role ="dialog">*/
/* */
/*     <div class ="modal-dialog">*/
/*         <div class ="modal-content modalInscription">*/
/*             <a data-dismiss="modal" class="close modalInscriClose"><i class="fa fa-times-circle "></i></a>*/
/*             <div class ="modal-header">*/
/*                 <h1>Ajouter nouvelle enseigne</h1>*/
/*             </div>*/
/*             <form method="post" {{ form_enctype(f) }}>*/
/*                 <div class ="modal-body">*/
/*                     <div class="container-fluid">*/
/*                         <section class="container">*/
/*                             <div class="container-page">*/
/*                                 <div class="col-md-6">*/
/*                                     <div class="form-group col-md-12" id ="username">*/
/*                                         <label>Nom d'enseigne</label>                      */
/*                                         <div class="input-group">*/
/*                                             <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>*/
/*                                                 {{form_widget(f.nomenseigne)}}*/
/*                                         </div>*/
/*                                         <div class="help-block with-errors"></div>*/
/*                                         <small id="output_checkuser"></small>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group col-md-6">*/
/*                                         <label>Adresse</label>*/
/*                                         <div class="input-group">*/
/*                                             <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>*/
/*                                                 {{form_widget(f.adresse)}}*/
/*                                         </div>*/
/*                                         <div class="help-block with-errors "></div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group col-md-6">*/
/*                                         <label>Description</label>*/
/*                                         <div class="input-group">*/
/*                                             <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>*/
/*                                                 {{form_widget(f.info)}}*/
/*                                         </div>*/
/*                                         <div class="help-block with-errors "></div>*/
/*                                     </div>*/
/*                                     <div class="form-group col-md-6">*/
/*                                         <label>Image</label>*/
/*                                         <div class="input-group">*/
/*                                             <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>*/
/*                                                 {{form_widget(f.file)}}*/
/*                                         </div>*/
/*                                         <div class="help-block with-errors "></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </section>*/
/*                         <div class = "modal-footer">*/
/*                             <a class ="btn btn-default" data-dismiss ="modal">Annuler</a>*/
/*                             <div class ="btn btn-default">{{form_rest(f)}}</div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
