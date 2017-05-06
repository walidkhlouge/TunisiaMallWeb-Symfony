<?php

/* TunisiaMallTMBundle:clientView:CAccueil.html.twig */
class __TwigTemplate_3aefe7a36d4fc00145f8e100a6ac0155551c688188a18d9829d553aaf4cd5051 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::clientView/CIndex.html.twig", "TunisiaMallTMBundle:clientView:CAccueil.html.twig", 2);
        $this->blocks = array(
            'body3' => array($this, 'block_body3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TunisiaMallTMBundle::clientView/CIndex.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body3($context, array $blocks = array())
    {
        // line 5
        echo "       <section id=\"s-clients\" class=\"s-clients bg1\">
                
                <div class=\"container\">
                    <h3> un petit commentaire ca te dit ?</h3>
                    <form method=\"post\" action=\"\">
                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "commentaire", array()), 'widget');
        echo "
                  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : null), 'rest');
        echo "
                    </form>
                    <div class=\"row\">
                        <h2 class=\"b-title c-white text-center wow fadeIn\">Customers reviews</h2>
                        <div class=\"pseudo-overflow\">
                            <!-- Swiper -->
                            <div class=\"swiper-container clients-slider\">
                                ";
        // line 18
        $context["i"] = 0;
        // line 19
        echo "                                <div class=\"swiper-wrapper\">
                                    
                                    
                                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaire"]) ? $context["commentaire"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 23
            echo "                                         ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 24
            echo "                                    <div class=\"swiper-slide rollIn wow client tooltip\">
                                        <div class=\"wrap\">
                                            <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("img/client" . (isset($context["i"]) ? $context["i"] : null)) . ".jpg")), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"tooltip-content default\"><span class=\"name\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "client", array()), "nom", array()), "html", null, true);
            echo " <span class=\"city\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "client", array()), "prenom", array()), "html", null, true);
            echo "</span></span><span class=\"quote\">\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "commentaire", array()), "html", null, true);
            echo ".\"</span>
\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    </div>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                                </div>
                                <!-- Add Arrows -->
                                <div class=\"cli-next-arrow bd-arrow-next\"></div>
                                <div class=\"cli-prev-arrow bd-arrow-prev\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                                                                </br></br></br>
 <h4 class=\"b-title ct1 text-center\"> Un Probleme Une Remarque ? ayez la liberte de Tout Reclamer </h4>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f2"]) ? $context["f2"] : null), "reclamation", array()), 'widget');
        echo "
                  ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f2"]) ? $context["f2"] : null), 'rest');
        echo "
";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:clientView:CAccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 43,  101 => 42,  89 => 32,  74 => 27,  70 => 26,  66 => 24,  63 => 23,  59 => 22,  54 => 19,  52 => 18,  42 => 11,  38 => 10,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "TunisiaMallTMBundle::clientView/CIndex.html.twig" %}*/
/*  */
/* {% block body3 %}*/
/*        <section id="s-clients" class="s-clients bg1">*/
/*                 */
/*                 <div class="container">*/
/*                     <h3> un petit commentaire ca te dit ?</h3>*/
/*                     <form method="post" action="">*/
/*                     {{form_widget(f.commentaire)}}*/
/*                   {{form_rest(f)}}*/
/*                     </form>*/
/*                     <div class="row">*/
/*                         <h2 class="b-title c-white text-center wow fadeIn">Customers reviews</h2>*/
/*                         <div class="pseudo-overflow">*/
/*                             <!-- Swiper -->*/
/*                             <div class="swiper-container clients-slider">*/
/*                                 {% set i=0 %}*/
/*                                 <div class="swiper-wrapper">*/
/*                                     */
/*                                     */
/*                                     {% for com in commentaire %}*/
/*                                          {% set i=i+1 %}*/
/*                                     <div class="swiper-slide rollIn wow client tooltip">*/
/*                                         <div class="wrap">*/
/*                                             <img src="{{asset('img/client'~i~'.jpg')}}" alt="">*/
/* 								<span class="tooltip-content default"><span class="name">{{ com.client.nom }} <span class="city">{{ com.client.prenom }}</span></span><span class="quote">"{{ com.commentaire }}."</span>*/
/* 								</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                                                 {% endfor %}*/
/*                                 </div>*/
/*                                 <!-- Add Arrows -->*/
/*                                 <div class="cli-next-arrow bd-arrow-next"></div>*/
/*                                 <div class="cli-prev-arrow bd-arrow-prev"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*                                                                 </br></br></br>*/
/*  <h4 class="b-title ct1 text-center"> Un Probleme Une Remarque ? ayez la liberte de Tout Reclamer </h4>{{form_widget(f2.reclamation)}}*/
/*                   {{form_rest(f2)}}*/
/* {% endblock %}*/
/* */
