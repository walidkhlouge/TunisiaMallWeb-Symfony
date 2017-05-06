<?php

/* TunisiaMallTMBundle:CCatalogue:afficherProduits.html.twig */
class __TwigTemplate_9b6d131f5ad48937e3a6fedbd681c66f982bf80c4959e23eb39df677b1e349b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::clientView/CIndex.html.twig", "TunisiaMallTMBundle:CCatalogue:afficherProduits.html.twig", 2);
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
                
                  <h2 class=\"b-title ct1 text-center\">CATALOGUE ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["nomC"]) ? $context["nomC"] : null), "html", null, true);
        echo " </h2>
                  <form method=\"POST\" action=\"\">   
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
   
                    <select name=\"chercher\" class=\"selectpicker\" data-live-search=\"true\" onChange=\"this.form.submit()\">
                                <option disabled selected value> -- Choisir  Produit ? -- </option>
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits2"]) ? $context["produits2"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 13
            echo "                       <option data-tokens = \" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 25
            echo "                                    <!-- taswira debut -->
                                <div class=\"col-md-3 col-lg-3 col-sm-4 col-xs-6\">
                                    <article class=\"item  animated wow\" data-wow-duration=\"0.7s\">
                                        <a href=\"item-detail.html\" class=\"link-item\" data-toggle=\"modal\" data-target=\"#modal_detailed\" data-remote=\"false\"><h4 class=\"hidden\">Blueberries with cream Pancake</h4></a>
                                        
                                        <div class=\"wrap\">
                                          
                                            <div class=\"desc\">
                                                <p class=\"name link-item\" >";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</p>
                                                <br><br>
                                               
                                                <div class=\"changes\">
                                                    <div class=\"media-left media-middle\">
                                                        <div class=\"input-group counter-badge\">
                                                        
                                                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_boutiqueByEns", array("nomEnseigne" => $this->getAttribute($context["produit"], "nom", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-sm  btn-icon btn-clicked btn--moema \">Consulter Produit</button> </a>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
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
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["produits"]) ? $context["produits"] : null));
        echo "
                                </div></center>
    ";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:CCatalogue:afficherProduits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 102,  148 => 85,  128 => 71,  94 => 40,  84 => 33,  74 => 25,  70 => 24,  59 => 15,  48 => 13,  44 => 12,  35 => 6,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "TunisiaMallTMBundle::clientView/CIndex.html.twig" %}*/
/* {%block body3 %}*/
/* <section id="s-enseigne" class="s-list">*/
/*                 */
/*                   <h2 class="b-title ct1 text-center">CATALOGUE {{ nomC }} </h2>*/
/*                   <form method="POST" action="">   */
/*                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; */
/*    */
/*                     <select name="chercher" class="selectpicker" data-live-search="true" onChange="this.form.submit()">*/
/*                                 <option disabled selected value> -- Choisir  Produit ? -- </option>*/
/*                         {% for produit in produits2 %}*/
/*                        <option data-tokens = " {{produit.nom}}" >{{produit.nom}}</option>*/
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
/*                     {% for produit in produits %}*/
/*                                     <!-- taswira debut -->*/
/*                                 <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">*/
/*                                     <article class="item  animated wow" data-wow-duration="0.7s">*/
/*                                         <a href="item-detail.html" class="link-item" data-toggle="modal" data-target="#modal_detailed" data-remote="false"><h4 class="hidden">Blueberries with cream Pancake</h4></a>*/
/*                                         */
/*                                         <div class="wrap">*/
/*                                           */
/*                                             <div class="desc">*/
/*                                                 <p class="name link-item" >{{ produit.nom }}</p>*/
/*                                                 <br><br>*/
/*                                                */
/*                                                 <div class="changes">*/
/*                                                     <div class="media-left media-middle">*/
/*                                                         <div class="input-group counter-badge">*/
/*                                                         */
/*                                                             <a href="{{ path('client_boutiqueByEns',{'nomEnseigne':produit.nom} ) }}"><button class="btn btn-sm  btn-icon btn-clicked btn--moema ">Consulter Produit</button> </a>*/
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
/*                                                         <div class="name">{{produit.nom}}</div>*/
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
/*                                         {{ knp_pagination_render(produits) }}*/
/*                                 </div></center>*/
/*     {% endblock %}*/
