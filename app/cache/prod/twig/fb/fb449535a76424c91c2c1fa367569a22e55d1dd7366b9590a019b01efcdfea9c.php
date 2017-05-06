<?php

/* TunisiaMallTMBundle:clientView:CBoutique.html.twig */
class __TwigTemplate_4f6c5700c99758f1b8cacde408db1920341924be5731541bea3c65280ebb919e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::clientView/CIndex.html.twig", "TunisiaMallTMBundle:clientView:CBoutique.html.twig", 2);
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

    // line 3
    public function block_body3($context, array $blocks = array())
    {
        // line 4
        echo "
<section id=\"s-boutique\" class=\"s-list\" >
 


                 <h2 class=\"b-title ct1 text-center\">NOS BOUTIQUES</h2>
               <form method=\"POST\" action=\"\">   
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
   
                    <select name=\"chercher\" class=\"selectpicker\" data-live-search=\"true\" onChange=\"this.form.submit()\">
                        <option disabled selected value> -- Choisir  boutique ? -- </option>
                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boutiques2"]) ? $context["boutiques2"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["boutique"]) {
            // line 16
            echo "                       <option data-tokens = \" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "Intitulé", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "Intitulé", array()), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </select></br></br></br>  
                 </form>
                <div class=\"container\">
                    
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade in active\" id=\"tort\">
                            <div class=\"row items-place\">
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boutiques"]) ? $context["boutiques"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["boutique"]) {
            // line 26
            echo "                                <div class=\"col-md-3 col-lg-3 col-sm-4 col-xs-6\">
                                    <article class=\"item  animated wow\" data-wow-duration=\"0.7s\">
                                        <a href=\"item-detail.html\" class=\"link-item\" data-toggle=\"modal\" data-target=\"#modal_detailed\" data-remote=\"false\"><h4 class=\"hidden\">Blueberries with cream Pancake</h4></a>
                                        <div class=\"wrap\">
                                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_produit", array("idBoutique" => $this->getAttribute($context["boutique"], "IdBoutique", array()))), "html", null, true);
            echo "\"><img class=\"stable full-w\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("GUI/images/boutique/" . $this->getAttribute($context["boutique"], "url", array()))), "html", null, true);
            echo "\" alt=\"\"></a>
                                            <div class=\"desc\">
                                                <p class=\"name link-item\" >";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "Intitulé", array()), "html", null, true);
            echo "</p>
                                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_produitByBout", array("idBoutique" => $this->getAttribute($context["boutique"], "IdBoutique", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-sm  btn-icon btn-clicked btn--moema \">Consulter Produits</button></a>
                                            </div>
                                        </div>
                                    </article> 
                                </div>
                                           
                          
                               
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                              
                        </div>
                            
                        </div>
                        
     
                                                   
                    </div>
                </div>
            </section>
                                <center>
                                  <div class=\"navigation\">
                                        ";
        // line 54
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["boutiques"]) ? $context["boutiques"] : null));
        echo "
                                </div></center>
                                
                                ";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:clientView:CBoutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 54,  104 => 42,  89 => 33,  85 => 32,  78 => 30,  72 => 26,  68 => 25,  59 => 18,  48 => 16,  44 => 15,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "TunisiaMallTMBundle::clientView/CIndex.html.twig" %}*/
/* {%block body3 %}*/
/* */
/* <section id="s-boutique" class="s-list" >*/
/*  */
/* */
/* */
/*                  <h2 class="b-title ct1 text-center">NOS BOUTIQUES</h2>*/
/*                <form method="POST" action="">   */
/*                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; */
/*    */
/*                     <select name="chercher" class="selectpicker" data-live-search="true" onChange="this.form.submit()">*/
/*                         <option disabled selected value> -- Choisir  boutique ? -- </option>*/
/*                             {% for boutique in boutiques2 %}*/
/*                        <option data-tokens = " {{boutique.Intitulé}}" >{{boutique.Intitulé}}</option>*/
/*   {%endfor %}*/
/*                     </select></br></br></br>  */
/*                  </form>*/
/*                 <div class="container">*/
/*                     */
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane fade in active" id="tort">*/
/*                             <div class="row items-place">*/
/*                                 {% for boutique in boutiques %}*/
/*                                 <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">*/
/*                                     <article class="item  animated wow" data-wow-duration="0.7s">*/
/*                                         <a href="item-detail.html" class="link-item" data-toggle="modal" data-target="#modal_detailed" data-remote="false"><h4 class="hidden">Blueberries with cream Pancake</h4></a>*/
/*                                         <div class="wrap">*/
/*                                             <a href="{{ path('client_produit',{'idBoutique':boutique.IdBoutique} ) }}"><img class="stable full-w" src="{{asset('GUI/images/boutique/' ~ boutique.url)}}" alt=""></a>*/
/*                                             <div class="desc">*/
/*                                                 <p class="name link-item" >{{ boutique.Intitulé }}</p>*/
/*                                                 <a href="{{ path('client_produitByBout',{'idBoutique':boutique.IdBoutique} ) }}"><button class="btn btn-sm  btn-icon btn-clicked btn--moema ">Consulter Produits</button></a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </article> */
/*                                 </div>*/
/*                                            */
/*                           */
/*                                */
/*                                 {% endfor %}*/
/*                               */
/*                         </div>*/
/*                             */
/*                         </div>*/
/*                         */
/*      */
/*                                                    */
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*                                 <center>*/
/*                                   <div class="navigation">*/
/*                                         {{ knp_pagination_render(boutiques) }}*/
/*                                 </div></center>*/
/*                                 */
/*                                 {% endblock %}*/
