<?php

/* TunisiaMallTMBundle:CCatalogue:index.html.twig */
class __TwigTemplate_c0cd742d1fd0c84199e4885f1d7f9e38b5484b106db3bec7198197fbb469aaf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::clientView/CIndex.html.twig", "TunisiaMallTMBundle:CCatalogue:index.html.twig", 2);
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
        echo "<section id=\"s-enseigne\" class=\"s-list\">
                
                  <h2 class=\"b-title ct1 text-center\">NOS CATALOGUES</h2>
                  <form method=\"POST\" action=\"\">   
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
   
                    <select name=\"chercher\" class=\"selectpicker\" data-live-search=\"true\" onChange=\"this.form.submit()\">
                                <option disabled selected value> -- Rechercher Catalogue ? -- </option>
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogues2"]) ? $context["catalogues2"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogue"]) {
            // line 13
            echo "                       <option data-tokens = \" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogue"], "intitule", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogue"], "intitule", array()), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                    </select></br></br></br>  
                 </form>
                <h4 class=\"hidden\">Items list</h4>
          
                <div class=\"container\">
                    
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade in active\" id=\"tort\">
                            <div class=\"row items-place\">
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogues"]) ? $context["catalogues"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogue"]) {
            // line 25
            echo "                                    <!-- taswira debut -->
                                <div class=\"col-md-3 col-lg-3 col-sm-4 col-xs-6\">
                                    <article class=\"item  animated wow\" data-wow-duration=\"0.7s\">
                                        <a href=\"item-detail.html\" class=\"link-item\" data-toggle=\"modal\" data-target=\"#modal_detailed\" data-remote=\"false\"><h4 class=\"hidden\">Blueberries with cream Pancake</h4></a>
                                        
                                        <div class=\"wrap\">
                                          
                                            <div class=\"desc\">
                                                <p class=\"name link-item\" >";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogue"], "intitule", array()), "html", null, true);
            echo "</p>
                                                <br><br>
                                               
                                                <div class=\"changes\">
                                                    <div class=\"media-left media-middle\">
                                                        <div class=\"input-group counter-badge\">
                                                        
                                                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_catalogue_produits", array("idCatalogue" => $this->getAttribute($context["catalogue"], "idcatalogue", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-sm  btn-icon btn-clicked btn--moema \">Consulter Catalogues</button> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                                          
                                </div>
                                               <!-- taswira fin -->
                                <div id=\"item-detail-content1\" class=\"item-detailed-content hidden\">
                                 
                                    <button type=\"button\" class=\"overlay-close inner visible-xs\" data-dismiss=\"modal\">×</button>
                                    <form action=\"http://html.yenisite.ru/best-dessert-eng/index.html\">
                                        <div class=\"b-title text-center\">Blueberries with cream pancake cake</div>
                                        <div class=\"item-detail\">
                                            <!-- Swiper -->
                                            <div class=\"swiper-container it-gallery\">
                                                <div class=\"swiper-wrapper\"> <!-- taswira el kbiiira -->
                                                   
                                                    <div class=\"it-big swiper-slide\">
                                                    </div>
                                                 
                                                </div>
                                            </div>
                                                    <!-- taswira sghira-->
                                           

                                            <div class=\"clearfix\">
                                                <div class=\"it-info\">
                                                    <div class=\"text-list\">
                                                        <div class=\"name\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalogue"], "intitule", array()), "html", null, true);
            echo "</div>
                                                    </div>
                                                   
                                                </div>
                                                
                                                    <br>
                                                    <button type=\"submit\" class=\"btn btn-buy btn-icon btn-clicked btn--moema flaticon-trolley7\">Consulter Boutique</button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                               
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                              
                                
                              
                  
                           
                               
                            
                              
                          
                            </div>
                            
                        </div>
                         </div>
                </div>
            </section>
                                <center>
                                <div class=\"navigation\">
                                        ";
        // line 102
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["catalogues"]) ? $context["catalogues"] : null));
        echo "
                                </div></center>
    ";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:CCatalogue:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 102,  145 => 85,  125 => 71,  91 => 40,  81 => 33,  71 => 25,  67 => 24,  56 => 15,  45 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "TunisiaMallTMBundle::clientView/CIndex.html.twig" %}*/
/* {%block body3 %}*/
/* <section id="s-enseigne" class="s-list">*/
/*                 */
/*                   <h2 class="b-title ct1 text-center">NOS CATALOGUES</h2>*/
/*                   <form method="POST" action="">   */
/*                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; */
/*    */
/*                     <select name="chercher" class="selectpicker" data-live-search="true" onChange="this.form.submit()">*/
/*                                 <option disabled selected value> -- Rechercher Catalogue ? -- </option>*/
/*                         {% for catalogue in catalogues2 %}*/
/*                        <option data-tokens = " {{catalogue.intitule}}" >{{catalogue.intitule}}</option>*/
/*   {%endfor %}*/
/*                     </select></br></br></br>  */
/*                  </form>*/
/*                 <h4 class="hidden">Items list</h4>*/
/*           */
/*                 <div class="container">*/
/*                     */
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane fade in active" id="tort">*/
/*                             <div class="row items-place">*/
/*                     {% for catalogue in catalogues %}*/
/*                                     <!-- taswira debut -->*/
/*                                 <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">*/
/*                                     <article class="item  animated wow" data-wow-duration="0.7s">*/
/*                                         <a href="item-detail.html" class="link-item" data-toggle="modal" data-target="#modal_detailed" data-remote="false"><h4 class="hidden">Blueberries with cream Pancake</h4></a>*/
/*                                         */
/*                                         <div class="wrap">*/
/*                                           */
/*                                             <div class="desc">*/
/*                                                 <p class="name link-item" >{{ catalogue.intitule }}</p>*/
/*                                                 <br><br>*/
/*                                                */
/*                                                 <div class="changes">*/
/*                                                     <div class="media-left media-middle">*/
/*                                                         <div class="input-group counter-badge">*/
/*                                                         */
/*                                                             <a href="{{ path('client_catalogue_produits',{'idCatalogue':catalogue.idcatalogue} ) }}"><button class="btn btn-sm  btn-icon btn-clicked btn--moema ">Consulter Catalogues</button> </a>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </article>*/
/*                                                           */
/*                                 </div>*/
/*                                                <!-- taswira fin -->*/
/*                                 <div id="item-detail-content1" class="item-detailed-content hidden">*/
/*                                  */
/*                                     <button type="button" class="overlay-close inner visible-xs" data-dismiss="modal">×</button>*/
/*                                     <form action="http://html.yenisite.ru/best-dessert-eng/index.html">*/
/*                                         <div class="b-title text-center">Blueberries with cream pancake cake</div>*/
/*                                         <div class="item-detail">*/
/*                                             <!-- Swiper -->*/
/*                                             <div class="swiper-container it-gallery">*/
/*                                                 <div class="swiper-wrapper"> <!-- taswira el kbiiira -->*/
/*                                                    */
/*                                                     <div class="it-big swiper-slide">*/
/*                                                     </div>*/
/*                                                  */
/*                                                 </div>*/
/*                                             </div>*/
/*                                                     <!-- taswira sghira-->*/
/*                                            */
/* */
/*                                             <div class="clearfix">*/
/*                                                 <div class="it-info">*/
/*                                                     <div class="text-list">*/
/*                                                         <div class="name">{{catalogue.intitule}}</div>*/
/*                                                     </div>*/
/*                                                    */
/*                                                 </div>*/
/*                                                 */
/*                                                     <br>*/
/*                                                     <button type="submit" class="btn btn-buy btn-icon btn-clicked btn--moema flaticon-trolley7">Consulter Boutique</button>*/
/*                                                 */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </form>*/
/*                                 </div>*/
/*                                */
/*                                 {% endfor %}*/
/*                               */
/*                                 */
/*                               */
/*                   */
/*                            */
/*                                */
/*                             */
/*                               */
/*                           */
/*                             </div>*/
/*                             */
/*                         </div>*/
/*                          </div>*/
/*                 </div>*/
/*             </section>*/
/*                                 <center>*/
/*                                 <div class="navigation">*/
/*                                         {{ knp_pagination_render(catalogues) }}*/
/*                                 </div></center>*/
/*     {% endblock %}*/
