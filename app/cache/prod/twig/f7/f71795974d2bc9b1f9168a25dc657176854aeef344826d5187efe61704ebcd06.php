<?php

/* TunisiaMallTMBundle:clientView:CPanier.html.twig */
class __TwigTemplate_75af386bba4373ce72229f72eb6654994cbb4706e5d5ae56ba8e6880eaf8fd04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::clientView/CIndex.html.twig", "TunisiaMallTMBundle:clientView:CPanier.html.twig", 2);
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
        echo "  
<div  id=\"modal_cart\" aria-hidden=\"true\" data-backdrop=\"true\" data-keyboard=\"true\" tabindex=\"-1\">
        <button type=\"button\" class=\"overlay-close hidden-xs\" data-dismiss=\"modal\">&#215;</button>
        <div class=\"modal-content detail-popup\" id=\"cartView-popup\">
";
        // line 7
        $context["total"] = 0;
        echo "            
          
                <div class=\"b-title text-center c-white\">Your Cart</div>
                <div class=\"wrap-cart-window clearfix\">
                    <div class=\"cart-items\">
                        <div class=\"visible-xs ci-thead-mob ci-info\"><span class=\"ct2\">Items:</span>&nbsp;<span class=\"ci-length\">";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["paniers"]) ? $context["paniers"] : null)), "html", null, true);
        echo "</span> <span class=\"ct2 pl20\">VOS PRODUITS:</span>&nbsp;
                        </div>
                        <table class=\"table\">
                            <thead class=\"ci-head hidden-xs\">
                            <tr>
                                <th class=\"ci-info pl25\" colspan=\"2\"><span class=\"ct2\">Items:</span>&nbsp;<span class=\"ci-length\">";
        // line 17
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["paniers"]) ? $context["paniers"] : null)), "html", null, true);
        echo "</span> <span class=\"ct2 pl20\">VOS PRODUITS:</span>&nbsp;
                                </th>
                                <th class=\"text-center\">Quantite</th>
                                <th class=\"text-center\">Prix</th>
                                <th class=\"text-center\">Totale</th>
                                <th class=\"text-center\">Supprimer</th>
                            </tr>
                            </thead>
                                 <tbody >
                                    

                                     ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["paniers"]) ? $context["paniers"] : null)) > 0)) {
            // line 29
            echo "                                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) ? $context["paniers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["pan"]) {
                // line 30
                echo "                                   
                            <tr class=\"ci-item\">
                                <td class=\"col-sm-1 col-md-1 col-xs-2\">
                                    <div class=\"media\">
                                        <a class=\"link-item\" href=\"item-detail.html\" data-toggle=\"modal\" data-target=\"#modal_detailed\" data-remote=\"false\"> <img class=\"media-object\" src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("GUI/images/produit/" . $this->getAttribute($this->getAttribute($context["pan"], "idProduit", array()), "url", array()))), "html", null, true);
                echo "\" alt=\"\"></a>
                                    </div>
                                </td>
                                <td class=\"ci-text hidden-xs col-sm-4 col-md-3\">
                                    ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pan"], "idProduit", array()), "nom", array()), "html", null, true);
                echo " taille : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pan"], "taille", array()), "html", null, true);
                echo " 
                                </td>
                                <td class=\"col-sm-1 col-md-2 col-xs-7 text-center\">
                                    <a href=\"item-detail.html\" class=\"ci-text link-item visible-xs\" data-toggle=\"modal\" data-target=\"#modal_detailed\" data-remote=\"false\">Pigeons's milk</a>
                                    
                                    <form   action=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_modifPanier", array("id" => $this->getAttribute($this->getAttribute($context["pan"], "idProduit", array()), "idProduit", array()), "taille" => $this->getAttribute($context["pan"], "taille", array()))), "html", null, true);
                echo "\" method=\"post\" > 
                                         <select  name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                             ";
                // line 45
                $context["qt"] =  -20;
                // line 46
                echo "                                           ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tailles"]) ? $context["tailles"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["taille"]) {
                    if (((isset($context["qt"]) ? $context["qt"] : null) ==  -20)) {
                        echo " 
                                               
                                             ";
                        // line 48
                        if ((($this->getAttribute($this->getAttribute($context["pan"], "idProduit", array()), "idProduit", array()) == $this->getAttribute($this->getAttribute($context["taille"], "idProduit", array()), "idProduit", array())) && ($this->getAttribute($context["pan"], "taille", array()) == $this->getAttribute($context["taille"], "taille", array())))) {
                            // line 49
                            echo "                                                 ";
                            $context["qt"] = $this->getAttribute($context["taille"], "quantite", array());
                            // line 50
                            echo "                                                 ";
                        }
                        // line 51
                        echo "                                                 ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taille'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                                               
                                    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["qt"]) ? $context["qt"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 54
                    echo "                                        
                                        <option value=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" ";
                    if (($context["i"] == $this->getAttribute($context["pan"], "nombre", array()))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                                    ";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : null) + ($this->getAttribute($context["pan"], "nombre", array()) * $this->getAttribute($this->getAttribute($context["pan"], "idProduit", array()), "prixVenteUnitaire", array())));
                // line 58
                echo "                                </select>
                                </form>
                                </td>
                                <td class=\"ci-num hidden-xs col-sm-1 col-md-2 text-center\"><strong class=\"ci-sum-single\">";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pan"], "idProduit", array()), "prixVenteUnitaire", array()), "html", null, true);
                echo "</strong>
                                </td>
                                <td class=\"ci-num hidden-xs col-sm-1 col-md-2 text-center\"><strong>DT </strong><strong class=\"ci-sum-item\">";
                // line 63
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["pan"], "idProduit", array()), "prixVenteUnitaire", array()) * $this->getAttribute($context["pan"], "nombre", array())), "html", null, true);
                echo " </strong>
                                </td>
                                <td class=\"col-sm-1 col-md-2 col-xs-3 text-center\">
                                    <div class=\"ci-num visible-xs\"><strong>";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
                echo "</strong>
                                    </div>
                                     <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_supprimerPanier", array("id" => $this->getAttribute($this->getAttribute($context["pan"], "idProduit", array()), "idProduit", array()), "taille" => $this->getAttribute($context["pan"], "taille", array()))), "html", null, true);
                echo "\"  class=\"btn-remove\"></a>
                                     
                                </td>
                            </tr>
                      
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                            ";
        } else {
            // line 75
            echo "                            <h1> votre panier est vide pour le moment
                            ";
        }
        // line 77
        echo "                            
                            </tbody>

                        </table>

                        <div class=\"ci-bottom text-left clearfix\">

                            <div class=\"ci-sum-all\">
                                <div class=\"name\">Total:</div>
                                <div class=\"dtab\">
                                    <div class=\"media-left pr10\">
                                        <div class=\"line\">Quantite de tous les Produits</div>
                                        <div class=\"line\">Your discount:</div>
                                        <div class=\"line\">Total:</div>
                                    </div>
                                    <div class=\"media-left\">
                                        <div class=\"line\"><strong class=\"ci-length\">";
        // line 93
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["paniers"]) ? $context["paniers"] : null)), "html", null, true);
        echo "</strong>
                                        </div>
                                        <div class=\"line\"><strong class=\"ci-sum-promo\">DT 4.5</strong>
                                        </div>
                                        <div class=\"line\"> <strong>DT </strong><strong class=\"ci-sum-final\">";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "</strong>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=\"ci-promo form-group\">
                                <div class=\"dtab\">
                                    <div class=\"media-left media-middle\">
                                        <div class=\"name mr30\">Do you know promotion
                                            <br>discount code?</div>
                                    </div>
                                    <div class=\"media-left media-middle\">
                                        <div class=\"input-group input-with-btn\">
                                            <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Redeem code\">
                                            <button type=\"button\" class=\"btn btn-send btn-h2\"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-req mt35\">
                        <form method=\"POST\">
                        <div class=\"form-group\">
                            <label for=\"f01\">Numero Carte<span class=\"c-req\">*</span>:</label>
                            <input type=\"text\" class=\"form-control\" id=\"f01\" data-min=\"2\" required>
                        </div>                        
                        <div class=\"form-group\">
                            <label for=\"f04\">Chiffres secrets<span class=\"c-req\">*</span>:</label>
                            <input type=\"text\" class=\"form-control\" id=\"f01\" data-min=\"2\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"f04\">Adresse de livraison<span class=\"c-req\">*</span>:</label>
                            <textarea name=\"adresseLivraison\" class=\"\" id=\"f04\" required></textarea>
                        </div>
                        <div class=\"description\"><span class=\"c-req\">*</span> : Champs obligatoires</div>
                        <div class=\"text-center\">
                            <input type=\"submit\" class=\"btn btn-icon btn-clicked btn--sendord flaticon-delivery55 mt45\" value=\"Passer Commande\"/>
                        </div>
                    </form>
                    </div>
                </div>
          
        </div>
    </div>
                                        <br/>
                            ";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:clientView:CPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 97,  212 => 93,  194 => 77,  190 => 75,  187 => 74,  175 => 68,  170 => 66,  164 => 63,  159 => 61,  154 => 58,  151 => 57,  137 => 55,  134 => 54,  130 => 53,  127 => 52,  120 => 51,  117 => 50,  114 => 49,  112 => 48,  103 => 46,  101 => 45,  96 => 43,  86 => 38,  79 => 34,  73 => 30,  68 => 29,  66 => 28,  52 => 17,  44 => 12,  36 => 7,  28 => 3,  11 => 2,);
    }
}
/*                             */
/* {% extends "TunisiaMallTMBundle::clientView/CIndex.html.twig" %}*/
/* {%block body3 %}  */
/* <div  id="modal_cart" aria-hidden="true" data-backdrop="true" data-keyboard="true" tabindex="-1">*/
/*         <button type="button" class="overlay-close hidden-xs" data-dismiss="modal">&#215;</button>*/
/*         <div class="modal-content detail-popup" id="cartView-popup">*/
/* {% set total=0 %}            */
/*           */
/*                 <div class="b-title text-center c-white">Your Cart</div>*/
/*                 <div class="wrap-cart-window clearfix">*/
/*                     <div class="cart-items">*/
/*                         <div class="visible-xs ci-thead-mob ci-info"><span class="ct2">Items:</span>&nbsp;<span class="ci-length">{{paniers|length}}</span> <span class="ct2 pl20">VOS PRODUITS:</span>&nbsp;*/
/*                         </div>*/
/*                         <table class="table">*/
/*                             <thead class="ci-head hidden-xs">*/
/*                             <tr>*/
/*                                 <th class="ci-info pl25" colspan="2"><span class="ct2">Items:</span>&nbsp;<span class="ci-length">{{paniers|length}}</span> <span class="ct2 pl20">VOS PRODUITS:</span>&nbsp;*/
/*                                 </th>*/
/*                                 <th class="text-center">Quantite</th>*/
/*                                 <th class="text-center">Prix</th>*/
/*                                 <th class="text-center">Totale</th>*/
/*                                 <th class="text-center">Supprimer</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                                  <tbody >*/
/*                                     */
/* */
/*                                      {%  if paniers |length >0 %}*/
/*                                      {% for pan in paniers %}*/
/*                                    */
/*                             <tr class="ci-item">*/
/*                                 <td class="col-sm-1 col-md-1 col-xs-2">*/
/*                                     <div class="media">*/
/*                                         <a class="link-item" href="item-detail.html" data-toggle="modal" data-target="#modal_detailed" data-remote="false"> <img class="media-object" src="{{asset('GUI/images/produit/' ~ pan.idProduit.url)}}" alt=""></a>*/
/*                                     </div>*/
/*                                 </td>*/
/*                                 <td class="ci-text hidden-xs col-sm-4 col-md-3">*/
/*                                     {{pan.idProduit.nom}} taille : {{ pan.taille }} */
/*                                 </td>*/
/*                                 <td class="col-sm-1 col-md-2 col-xs-7 text-center">*/
/*                                     <a href="item-detail.html" class="ci-text link-item visible-xs" data-toggle="modal" data-target="#modal_detailed" data-remote="false">Pigeons's milk</a>*/
/*                                     */
/*                                     <form   action="{{ path('client_modifPanier', { 'id' : pan.idProduit.idProduit,'taille':pan.taille }) }}" method="post" > */
/*                                          <select  name="qte" class="span1" onChange="this.form.submit()">*/
/*                                              {%set qt=-20%}*/
/*                                            {% for taille in tailles  if qt==-20%} */
/*                                                */
/*                                              {% if pan.idProduit.idProduit== taille.idProduit.idProduit and pan.taille== taille.taille %}*/
/*                                                  {% set qt=taille.quantite %}*/
/*                                                  {% endif%}*/
/*                                                  {% endfor %}*/
/*                                                */
/*                                     {% for i in 1..qt %}*/
/*                                         */
/*                                         <option value="{{ i }}" {% if i == pan.nombre%} selected="selected" {% endif %}>{{ i }}</option>*/
/*                                     {% endfor %}*/
/*                                     {% set total=total+pan.nombre*pan.idProduit.prixVenteUnitaire %}*/
/*                                 </select>*/
/*                                 </form>*/
/*                                 </td>*/
/*                                 <td class="ci-num hidden-xs col-sm-1 col-md-2 text-center"><strong class="ci-sum-single">{{ pan.idProduit.prixVenteUnitaire }}</strong>*/
/*                                 </td>*/
/*                                 <td class="ci-num hidden-xs col-sm-1 col-md-2 text-center"><strong>DT </strong><strong class="ci-sum-item">{{ pan.idProduit.prixVenteUnitaire * pan.nombre}} </strong>*/
/*                                 </td>*/
/*                                 <td class="col-sm-1 col-md-2 col-xs-3 text-center">*/
/*                                     <div class="ci-num visible-xs"><strong>{{total}}</strong>*/
/*                                     </div>*/
/*                                      <a href="{{ path('client_supprimerPanier', { 'id' : pan.idProduit.idProduit ,'taille':pan.taille }) }}"  class="btn-remove"></a>*/
/*                                      */
/*                                 </td>*/
/*                             </tr>*/
/*                       */
/*                             {% endfor %}*/
/*                             {% else  %}*/
/*                             <h1> votre panier est vide pour le moment*/
/*                             {% endif %}*/
/*                             */
/*                             </tbody>*/
/* */
/*                         </table>*/
/* */
/*                         <div class="ci-bottom text-left clearfix">*/
/* */
/*                             <div class="ci-sum-all">*/
/*                                 <div class="name">Total:</div>*/
/*                                 <div class="dtab">*/
/*                                     <div class="media-left pr10">*/
/*                                         <div class="line">Quantite de tous les Produits</div>*/
/*                                         <div class="line">Your discount:</div>*/
/*                                         <div class="line">Total:</div>*/
/*                                     </div>*/
/*                                     <div class="media-left">*/
/*                                         <div class="line"><strong class="ci-length">{{paniers|length}}</strong>*/
/*                                         </div>*/
/*                                         <div class="line"><strong class="ci-sum-promo">DT 4.5</strong>*/
/*                                         </div>*/
/*                                         <div class="line"> <strong>DT </strong><strong class="ci-sum-final">{{total}}</strong>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="ci-promo form-group">*/
/*                                 <div class="dtab">*/
/*                                     <div class="media-left media-middle">*/
/*                                         <div class="name mr30">Do you know promotion*/
/*                                             <br>discount code?</div>*/
/*                                     </div>*/
/*                                     <div class="media-left media-middle">*/
/*                                         <div class="input-group input-with-btn">*/
/*                                             <input type="text" class="form-control input-sm" placeholder="Redeem code">*/
/*                                             <button type="button" class="btn btn-send btn-h2"></button>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-req mt35">*/
/*                         <form method="POST">*/
/*                         <div class="form-group">*/
/*                             <label for="f01">Numero Carte<span class="c-req">*</span>:</label>*/
/*                             <input type="text" class="form-control" id="f01" data-min="2" required>*/
/*                         </div>                        */
/*                         <div class="form-group">*/
/*                             <label for="f04">Chiffres secrets<span class="c-req">*</span>:</label>*/
/*                             <input type="text" class="form-control" id="f01" data-min="2" required>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="f04">Adresse de livraison<span class="c-req">*</span>:</label>*/
/*                             <textarea name="adresseLivraison" class="" id="f04" required></textarea>*/
/*                         </div>*/
/*                         <div class="description"><span class="c-req">*</span> : Champs obligatoires</div>*/
/*                         <div class="text-center">*/
/*                             <input type="submit" class="btn btn-icon btn-clicked btn--sendord flaticon-delivery55 mt45" value="Passer Commande"/>*/
/*                         </div>*/
/*                     </form>*/
/*                     </div>*/
/*                 </div>*/
/*           */
/*         </div>*/
/*     </div>*/
/*                                         <br/>*/
/*                             {%endblock %}*/
