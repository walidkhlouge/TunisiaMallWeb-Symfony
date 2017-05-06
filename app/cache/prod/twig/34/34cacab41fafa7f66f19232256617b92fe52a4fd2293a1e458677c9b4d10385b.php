<?php

/* TunisiaMallTMBundle:clientView:CProduit.html.twig */
class __TwigTemplate_1543afcce917c4fe800a1fd308af1fd49e049d7745f1e97195388382a2e2e5b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::clientView/CIndex.html.twig", "TunisiaMallTMBundle:clientView:CProduit.html.twig", 2);
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
        echo " <section id=\"s-produit\" class=\"s-list\">
                 <h2 class=\"b-title ct1 text-center\">NOS PRODUITS?</h2>
                   <form method=\"POST\" action=\"\">   
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
   
                    <select name=\"chercher\" class=\"selectpicker\" data-live-search=\"true\" onChange=\"this.form.submit()\">
                        <option disabled selected value> -- Choisir  Produit ? -- </option>
                            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits2"]) ? $context["produits2"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 12
            echo "                       <option data-tokens = \" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "Nom", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "Nom", array()), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                    </select></br></br></br>  
                 </form>
              

                <div class=\"container\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade in active\" id=\"tort\">
                            <div class=\"row items-place\">
                                ";
        // line 23
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 24
            echo "                                <div class=\"col-md-3 col-lg-3 col-sm-4 col-xs-6\">
                                    <article class=\"item  animated wow\" data-wow-duration=\"0.7s\">
                                        <a href=\"item-detail.html\" class=\"link-item\" data-toggle=\"modal\" data-target=\"#modal_detailed\" data-remote=\"false\"><h4 class=\"hidden\">Blue with cream Pancake</h4></a>
                                        <div class=\"wrap\">
                                            <img class=\"stable full-w\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("GUI/images/produit/" . $this->getAttribute($context["produit"], "url", array()))), "html", null, true);
            echo "\" alt=\"\">
                                            <div class=\"desc\">
                                                <a class=\"name link-item\" href=\"item-detail.html\" data-toggle=\"modal\" data-target=\"#modal_detailed\" data-remote=\"false\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</a>
                                                  <form action=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_ajoutPanier", array("id" => $this->getAttribute($context["produit"], "idProduit", array()))), "html", null, true);
            echo "\" mathod=\"post\">
                                                <div class=\"weight\">
                                                    
                                                    ";
            // line 34
            $context["z"] = 0;
            // line 35
            echo "                                                    ";
            $context["b"] = 0;
            // line 36
            echo "                                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tailles"]) ? $context["tailles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["taille"]) {
                if ((((isset($context["b"]) ? $context["b"] : null) == 0) && ((isset($context["z"]) ? $context["z"] : null) == 0))) {
                    // line 37
                    echo "                                                      <!-- ken andou taille ou pas -->
                                                     ";
                    // line 38
                    if (($this->getAttribute($this->getAttribute($context["taille"], "idProduit", array()), "idProduit", array()) == $this->getAttribute($context["produit"], "idProduit", array()))) {
                        // line 39
                        echo "                                                     ";
                        $context["b"] = 1;
                        // line 40
                        echo "                                                     ";
                    }
                    // line 41
                    echo "                                                     ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taille'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                                                     ";
            if (((isset($context["b"]) ? $context["b"] : null) == 1)) {
                // line 43
                echo "                                                
                                                      
                                                    ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tailles"]) ? $context["tailles"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["taille2"]) {
                    echo "  
                                                        ";
                    // line 46
                    $context["c"] = 0;
                    // line 47
                    echo "                                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) ? $context["paniers"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
                        if (((isset($context["c"]) ? $context["c"] : null) == 0)) {
                            echo "<!-- kenou mawjoud panier wallé -->
                                                   
                                                            ";
                            // line 49
                            if (((($this->getAttribute($this->getAttribute($context["taille2"], "idProduit", array()), "idProduit", array()) == $this->getAttribute($this->getAttribute($context["panier"], "idProduit", array()), "idProduit", array())) && ($this->getAttribute($context["taille2"], "taille", array()) == $this->getAttribute($context["panier"], "taille", array()))) && ($this->getAttribute($context["taille2"], "quantite", array()) > 0))) {
                                // line 50
                                echo "                                                                ";
                                $context["c"] = 1;
                                // line 51
                                echo "                                                                ";
                            }
                            // line 52
                            echo "                                                             ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "                                                        
                                                          ";
                    // line 54
                    if ((($this->getAttribute($this->getAttribute($context["taille2"], "idProduit", array()), "idProduit", array()) == $this->getAttribute($context["produit"], "idProduit", array())) && ((isset($context["c"]) ? $context["c"] : null) == 0))) {
                        echo "  <!-- ken el produit andou menha taille hetheka w mahich fel panier  -->
                                                    ";
                        // line 55
                        $context["z"] = 1;
                        // line 56
                        echo "                                                    ";
                    }
                    // line 57
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taille2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                                                   
                                                    ";
            }
            // line 60
            echo "                                                    
                                                    
                                                    
                                                   ";
            // line 63
            if (((isset($context["z"]) ? $context["z"] : null) == 1)) {
                echo " 
                                                    ";
                // line 64
                $context["b"] = 0;
                // line 65
                echo "                                                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tailles"]) ? $context["tailles"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["taille"]) {
                    if (((isset($context["b"]) ? $context["b"] : null) == 0)) {
                        // line 66
                        echo "                                                      <!-- ken andou taille ou pas -->
                                                     ";
                        // line 67
                        if (($this->getAttribute($this->getAttribute($context["taille"], "idProduit", array()), "idProduit", array()) == $this->getAttribute($context["produit"], "idProduit", array()))) {
                            // line 68
                            echo "                                                     ";
                            $context["b"] = 1;
                            // line 69
                            echo "                                                     ";
                        }
                        // line 70
                        echo "                                                     ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taille'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                                                     ";
                if (((isset($context["b"]) ? $context["b"] : null) == 1)) {
                    // line 72
                    echo "                                                  taille :  <select name=\"taille\">
                                                      
                                                    ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["tailles"]) ? $context["tailles"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["taille2"]) {
                        echo "  
                                                        ";
                        // line 75
                        $context["c"] = 0;
                        // line 76
                        echo "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) ? $context["paniers"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
                            if (((isset($context["c"]) ? $context["c"] : null) == 0)) {
                                echo "<!-- kenou mawjoud panier wallé -->
                                                   
                                                            ";
                                // line 78
                                if (((($this->getAttribute($this->getAttribute($context["taille2"], "idProduit", array()), "idProduit", array()) == $this->getAttribute($this->getAttribute($context["panier"], "idProduit", array()), "idProduit", array())) && ($this->getAttribute($context["taille2"], "taille", array()) == $this->getAttribute($context["panier"], "taille", array()))) && ($this->getAttribute($context["taille2"], "quantite", array()) > 0))) {
                                    // line 79
                                    echo "                                                                ";
                                    $context["c"] = 1;
                                    // line 80
                                    echo "                                                                ";
                                }
                                // line 81
                                echo "                                                             ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 82
                        echo "                                                        
                                                          ";
                        // line 83
                        if ((($this->getAttribute($this->getAttribute($context["taille2"], "idProduit", array()), "idProduit", array()) == $this->getAttribute($context["produit"], "idProduit", array())) && ((isset($context["c"]) ? $context["c"] : null) == 0))) {
                            echo "  <!-- ken el produit andou menha taille hetheka w mahich fel panier  -->
                                                    <option value=\"";
                            // line 84
                            echo twig_escape_filter($this->env, $this->getAttribute($context["taille2"], "taille", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["taille2"], "taille", array()), "html", null, true);
                            echo "</option> 
                                                    ";
                        }
                        // line 86
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taille2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "                                                    </select>
                                                    ";
                }
                // line 89
                echo "                                                    
                                                </div>
                                                <div class=\"price\"><b>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixVenteUnitaire", array()), "html", null, true);
                echo " DT</b>
                                                </div>
                                                <div class=\"changes\">
                                                  
                                                    <div class=\"media-left media-middle ta-right\">
                                                        <button class=\"btn btn-sm btn-icon btn-clicked btn--moema flaticon-trolley7\" type=\"submit\" > AJOUTER AU PANIER</button>
                                                   
                                                    </div>
                                                </div>
                                                ";
            }
            // line 101
            echo "                                                  </form>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                                
                             
                                           
                                <div id=\"item-detail-content1\" class=\"item-detailed-content hidden\">
                                    <button type=\"button\" class=\"overlay-close inner visible-xs\" data-dismiss=\"modal\">×</button>
                                    <form action=\"http://html.yenisite.ru/best-dessert-eng/index.html\">
                                        <div class=\"b-title text-center\">Blueberries with cream pancake cake</div>
                                        <div class=\"item-detail\">
                                            <!-- Swiper -->
                                            <div class=\"swiper-container it-gallery\">
                                                <div class=\"swiper-wrapper\">
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
            echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\" alt=\"\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
            echo "\">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class=\"it-gallery-thumbs\">
                                                <div class=\"it-gallery-thumbs-wrap\">
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb1.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb2.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb3.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb4.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb4.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb4.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <div class=\"it-info\">
                                                    <div class=\"text-list\">
                                                        <div class=\"name\">Details:</div>
                                                        <div class=\"text\">Delicate pancake dough layers soaked in whipped cream and blueberry jam with the addition of blueberries. Decorated with fresh berries, sugar and mint leaves.</div>
                                                    </div>
                                                    <div class=\"text-list\">
                                                        <div class=\"name\">Weight: <span class=\"fw-n\">1800</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"text-list\">
                                                        <div class=\"name\">Ingredients:</div>
                                                        <div class=\"text\">Eggs, milk, cream, sugar, wheat flour, salt, vanilla extract, corn starch, mascarpone cheese, cofee liqueur, apple vinegear, lemon juice, fresh and frozen blueberry.</div>
                                                    </div>
                                                    <div class=\"text-list\">
                                                        <div class=\"name\">Nutrition facts (for 100g of product):</div>
                                                        <div class=\"text\">
                                                            <div class=\"line\">
                                                                <strong>Calories:</strong> 218.3 kcal
                                                            </div>
                                                            <div class=\"line\">
                                                                <strong>Protein:</strong> 6.8 g
                                                            </div>
                                                            <div class=\"line\">
                                                                <strong>Total Fat:</strong> 13.9 g
                                                            </div>
                                                            <div class=\"line\">
                                                                <strong>Carbohydrate:</strong> 16.7 g
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"composition\">
                                                    <div class=\"form-group\">
                                                        <div class=\"text-list mb20\">
                                                            <div class=\"name\">Choose berries:</div>
                                                            <select class=\"selectpicker sel-berry bs-select-hidden\">
                                                                <option class=\"icon-comp ico-cher\" value=\"1\">Blueberry</option>
                                                                <option class=\"icon-comp ico-vish\" value=\"2\">Cherry</option>
                                                                <option class=\"icon-comp ico-klub\" value=\"3\">Strawberry</option>
                                                                <option class=\"icon-comp ico-mal\" value=\"4\">Raspberry</option>
                                                                <option class=\"icon-comp ico-ej\" value=\"5\">Blackberry</option>
                                                            </select>
                                                        </div>
                                                        <div class=\"text-list\">
                                                            <div class=\"name\">Choose weight:</div>
                                                            <select class=\"selectpicker bs-select-hidden\">
                                                                <option class=\"\" value=\"1\">Standard (1,8 kg)</option>
                                                                <option class=\"\" value=\"2\">More (2,8 kg)</option>
                                                                <option class=\"\" value=\"3\">Less (0,8 kg)</option>
                                                            </select>
                                                        </div>
                                                        <div class=\"it-price\">
                                                            <div class=\"it-sum\">
                                                                <input type=\"hidden\" value=\"650\"><strong>\$22</strong>
                                                            </div>
                                                            <div class=\"ib input-group counter-badge\">
                                                                <div class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-v2 btn-v2-h2 btn-number\" data-type=\"minus\" data-field=\"quant[12]\">-</button>
                                                                </div>
                                                                <input type=\"text\" name=\"quant[12]\" class=\"form-control input-number\" value=\"1\" data-min=\"1\" data-max=\"100\">
                                                                <div class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-v2 btn-v2-h2 btn-number\" data-type=\"plus\" data-field=\"quant[12]\">+</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <button type=\"submit\" class=\"btn btn-buy btn-icon btn-clicked btn--moema flaticon-trolley7\">Buy</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                               
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "                               
                              
                              
                                <div id=\"item-detail-content5\" class=\"item-detailed-content hidden\">
                                    <button type=\"button\" class=\"overlay-close inner visible-xs\" data-dismiss=\"modal\">×</button>
                                    <form action=\"http://html.yenisite.ru/best-dessert-eng/index.html\">
                                        <div class=\"b-title text-center\">Blueberries with cream pancake cake</div>
                                        <div class=\"item-detail\">
                                            <!-- Swiper -->
                                            <div class=\"swiper-container it-gallery\">
                                                <div class=\"swiper-wrapper\">
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-big1.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"it-big swiper-slide\">
                                                        <img class=\"zoom-img\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\" alt=\"\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/discounts-bg.jpg"), "html", null, true);
        echo "\">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class=\"it-gallery-thumbs\">
                                                <div class=\"it-gallery-thumbs-wrap\">
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    <div class=\"it-thumb\">
                                                        <div class=\"wrap\">
                                                            <img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-item-thumb5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <div class=\"it-info\">
                                                    <div class=\"text-list\">
                                                        <div class=\"name\">Details:</div>
                                                        <div class=\"text\">Delicate pancake dough layers soaked in whipped cream and blueberry jam with the addition of blueberries. Decorated with fresh berries, sugar and mint leaves.</div>
                                                    </div>
                                                    <div class=\"text-list\">
                                                        <div class=\"name\">Weight: <span class=\"fw-n\">1800 g</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"text-list\">
                                                        <div class=\"name\">Ingredients:</div>
                                                        <div class=\"text\">Eggs, milk, cream, sugar, wheat flour, salt, vanilla extract, corn starch, mascarpone cheese, cofee liqueur, apple vinegear, lemon juice, fresh and frozen blueberry.</div>
                                                    </div>
                                                    <div class=\"text-list\">
                                                        <div class=\"name\">Nutrition facts (for 100g of product):</div>
                                                        <div class=\"text\">
                                                            <div class=\"line\">
                                                                <strong>Calories:</strong> 218.3 kcal
                                                            </div>
                                                            <div class=\"line\">
                                                                <strong>Protein:</strong> 6.8 g
                                                            </div>
                                                            <div class=\"line\">
                                                                <strong>Total Fat:</strong> 13.9 g
                                                            </div>
                                                            <div class=\"line\">
                                                                <strong>Carbohydrate:</strong> 16.7 g
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"composition\">
                                                    <div class=\"form-group\">
                                                        <div class=\"text-list mb20\">
                                                            <div class=\"name\">Choose berries:</div>
                                                            <select class=\"selectpicker sel-berry bs-select-hidden\">
                                                                <option class=\"icon-comp ico-cher\" value=\"1\">Blueberry</option>
                                                                <option class=\"icon-comp ico-vish\" value=\"2\">Cherry</option>
                                                                <option class=\"icon-comp ico-klub\" value=\"3\">Strawberry</option>
                                                                <option class=\"icon-comp ico-mal\" value=\"4\">Raspberry</option>
                                                                <option class=\"icon-comp ico-ej\" value=\"5\">Blackberry</option>
                                                            </select>
                                                        </div>
                                                        <div class=\"text-list\">
                                                            <div class=\"name\">Choose weight:</div>
                                                            <select class=\"selectpicker bs-select-hidden\">
                                                                <option class=\"\" value=\"1\">Standard (1,8 kg)</option>
                                                                <option class=\"\" value=\"2\">More (2,8 kg)</option>
                                                                <option class=\"\" value=\"3\">Less (0,8 kg)</option>
                                                            </select>
                                                        </div>
                                                        <div class=\"it-price\">
                                                            <div class=\"it-sum\">
                                                                <input type=\"hidden\" value=\"650\"><strong>\$22</strong>
                                                            </div>
                                                            <div class=\"ib input-group counter-badge\">
                                                                <div class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-v2 btn-v2-h2 btn-number\" data-type=\"minus\" data-field=\"quant[12]\">-</button>
                                                                </div>
                                                                <input type=\"text\" name=\"quant[12]\" class=\"form-control input-number\" value=\"1\" data-min=\"1\" data-max=\"100\">
                                                                <div class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-v2 btn-v2-h2 btn-number\" data-type=\"plus\" data-field=\"quant[12]\">+</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <button type=\"submit\" class=\"btn btn-buy btn-icon btn-clicked btn--moema flaticon-trolley7\">Buy</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                           
                               
                            
                              
                          
                            </div>
                            
                        </div>
                        
     
                                                   
                    </div>
                </div>
            </section>
                                                        
                                <center>
                                   
                                    <div class=\"navigation\">
                                        ";
        // line 538
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
                                    </div>
                                </center>
                                       ";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle:clientView:CProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  964 => 538,  863 => 440,  855 => 435,  847 => 430,  839 => 425,  831 => 420,  823 => 415,  815 => 410,  807 => 405,  799 => 400,  791 => 395,  783 => 390,  775 => 385,  767 => 380,  759 => 375,  744 => 365,  736 => 362,  728 => 359,  720 => 356,  712 => 353,  704 => 350,  696 => 347,  688 => 344,  680 => 341,  672 => 338,  664 => 335,  656 => 332,  648 => 329,  640 => 326,  626 => 314,  538 => 232,  530 => 227,  522 => 222,  514 => 217,  506 => 212,  498 => 207,  490 => 202,  482 => 197,  474 => 192,  466 => 187,  458 => 182,  450 => 177,  442 => 172,  434 => 167,  419 => 157,  411 => 154,  403 => 151,  395 => 148,  387 => 145,  379 => 142,  371 => 139,  363 => 136,  355 => 133,  347 => 130,  339 => 127,  331 => 124,  323 => 121,  315 => 118,  296 => 101,  283 => 91,  279 => 89,  275 => 87,  269 => 86,  262 => 84,  258 => 83,  255 => 82,  248 => 81,  245 => 80,  242 => 79,  240 => 78,  231 => 76,  229 => 75,  223 => 74,  219 => 72,  216 => 71,  209 => 70,  206 => 69,  203 => 68,  201 => 67,  198 => 66,  192 => 65,  190 => 64,  186 => 63,  181 => 60,  177 => 58,  171 => 57,  168 => 56,  166 => 55,  162 => 54,  159 => 53,  152 => 52,  149 => 51,  146 => 50,  144 => 49,  135 => 47,  133 => 46,  127 => 45,  123 => 43,  120 => 42,  113 => 41,  110 => 40,  107 => 39,  105 => 38,  102 => 37,  96 => 36,  93 => 35,  91 => 34,  85 => 31,  81 => 30,  76 => 28,  70 => 24,  65 => 23,  55 => 14,  44 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "TunisiaMallTMBundle::clientView/CIndex.html.twig" %}*/
/* {%block body3 %}*/
/*  <section id="s-produit" class="s-list">*/
/*                  <h2 class="b-title ct1 text-center">NOS PRODUITS?</h2>*/
/*                    <form method="POST" action="">   */
/*                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; */
/*    */
/*                     <select name="chercher" class="selectpicker" data-live-search="true" onChange="this.form.submit()">*/
/*                         <option disabled selected value> -- Choisir  Produit ? -- </option>*/
/*                             {% for produit in produits2 %}*/
/*                        <option data-tokens = " {{produit.Nom}}" >{{produit.Nom}}</option>*/
/*   {%endfor %}*/
/*                     </select></br></br></br>  */
/*                  </form>*/
/*               */
/* */
/*                 <div class="container">*/
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane fade in active" id="tort">*/
/*                             <div class="row items-place">*/
/*                                 {#{% for produit in produits %}#}*/
/*                                 {% for produit in pagination %}*/
/*                                 <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">*/
/*                                     <article class="item  animated wow" data-wow-duration="0.7s">*/
/*                                         <a href="item-detail.html" class="link-item" data-toggle="modal" data-target="#modal_detailed" data-remote="false"><h4 class="hidden">Blue with cream Pancake</h4></a>*/
/*                                         <div class="wrap">*/
/*                                             <img class="stable full-w" src="{{asset('GUI/images/produit/' ~ produit.url)}}" alt="">*/
/*                                             <div class="desc">*/
/*                                                 <a class="name link-item" href="item-detail.html" data-toggle="modal" data-target="#modal_detailed" data-remote="false">{{produit.nom }}</a>*/
/*                                                   <form action="{{ path('client_ajoutPanier', { 'id' : produit.idProduit }) }}" mathod="post">*/
/*                                                 <div class="weight">*/
/*                                                     */
/*                                                     {% set z=0 %}*/
/*                                                     {% set b=0 %}*/
/*                                                   {% for taille in tailles  if b==0 and z==0%}*/
/*                                                       <!-- ken andou taille ou pas -->*/
/*                                                      {% if taille.idProduit.idProduit==produit.idProduit %}*/
/*                                                      {% set b=1 %}*/
/*                                                      {%endif %}*/
/*                                                      {% endfor %}*/
/*                                                      {% if b==1 %}*/
/*                                                 */
/*                                                       */
/*                                                     {% for taille2 in tailles %}  */
/*                                                         {%set  c=0 %}*/
/*                                                         {%for panier in paniers if c==0 %}<!-- kenou mawjoud panier wallé -->*/
/*                                                    */
/*                                                             {% if taille2.idProduit.idProduit == panier.idProduit.idProduit and taille2.taille==panier.taille and taille2.quantite>0 %}*/
/*                                                                 {%set c=1%}*/
/*                                                                 {% endif %}*/
/*                                                              {% endfor %}*/
/*                                                         */
/*                                                           {% if taille2.idProduit.idProduit==produit.idProduit and c==0 %}  <!-- ken el produit andou menha taille hetheka w mahich fel panier  -->*/
/*                                                     {%set z=1 %}*/
/*                                                     {%endif %}*/
/*                                                     {%endfor%}*/
/*                                                    */
/*                                                     {% endif %}*/
/*                                                     */
/*                                                     */
/*                                                     */
/*                                                    {% if z== 1%} */
/*                                                     {% set b=0 %}*/
/*                                                   {% for taille in tailles  if b==0%}*/
/*                                                       <!-- ken andou taille ou pas -->*/
/*                                                      {% if taille.idProduit.idProduit==produit.idProduit %}*/
/*                                                      {% set b=1 %}*/
/*                                                      {%endif %}*/
/*                                                      {% endfor %}*/
/*                                                      {% if b==1 %}*/
/*                                                   taille :  <select name="taille">*/
/*                                                       */
/*                                                     {% for taille2 in tailles %}  */
/*                                                         {%set  c=0 %}*/
/*                                                         {%for panier in paniers if c==0 %}<!-- kenou mawjoud panier wallé -->*/
/*                                                    */
/*                                                             {% if taille2.idProduit.idProduit == panier.idProduit.idProduit and taille2.taille==panier.taille and taille2.quantite>0 %}*/
/*                                                                 {%set c=1%}*/
/*                                                                 {% endif %}*/
/*                                                              {% endfor %}*/
/*                                                         */
/*                                                           {% if taille2.idProduit.idProduit==produit.idProduit and c==0 %}  <!-- ken el produit andou menha taille hetheka w mahich fel panier  -->*/
/*                                                     <option value="{{ taille2.taille }}">{{taille2.taille}}</option> */
/*                                                     {%endif %}*/
/*                                                     {%endfor%}*/
/*                                                     </select>*/
/*                                                     {% endif %}*/
/*                                                     */
/*                                                 </div>*/
/*                                                 <div class="price"><b>{{ produit.prixVenteUnitaire }} DT</b>*/
/*                                                 </div>*/
/*                                                 <div class="changes">*/
/*                                                   */
/*                                                     <div class="media-left media-middle ta-right">*/
/*                                                         <button class="btn btn-sm btn-icon btn-clicked btn--moema flaticon-trolley7" type="submit" > AJOUTER AU PANIER</button>*/
/*                                                    */
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 {% endif %}*/
/*                                                   </form>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </article>*/
/*                                 </div>*/
/*                                                 */
/*                              */
/*                                            */
/*                                 <div id="item-detail-content1" class="item-detailed-content hidden">*/
/*                                     <button type="button" class="overlay-close inner visible-xs" data-dismiss="modal">×</button>*/
/*                                     <form action="http://html.yenisite.ru/best-dessert-eng/index.html">*/
/*                                         <div class="b-title text-center">Blueberries with cream pancake cake</div>*/
/*                                         <div class="item-detail">*/
/*                                             <!-- Swiper -->*/
/*                                             <div class="swiper-container it-gallery">*/
/*                                                 <div class="swiper-wrapper">*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/blank-item-big1.jpg')}}" alt="" data-zoom-image="{{asset('img/blank-item-big1.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/blank-item-big1.jpg')}}" alt="" data-zoom-image="{{asset('img/blank-item-big1.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/blank-item-big1.jpg')}}" alt="" data-zoom-image="{{asset('img/blank-item-big1.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/blank-item-big1.jpg')}}" alt="" data-zoom-image="{{asset('img/blank-item-big1.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/blank-item-big1.jpg')}}" alt="" data-zoom-image="{{asset('img/blank-item-big1.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/blank-item-big1.jpg')}}" alt="" data-zoom-image="{{asset('img/blank-item-big1.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/* */
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="it-gallery-thumbs">*/
/*                                                 <div class="it-gallery-thumbs-wrap">*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb1.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb2.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb3.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb4.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb4.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb4.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="clearfix">*/
/*                                                 <div class="it-info">*/
/*                                                     <div class="text-list">*/
/*                                                         <div class="name">Details:</div>*/
/*                                                         <div class="text">Delicate pancake dough layers soaked in whipped cream and blueberry jam with the addition of blueberries. Decorated with fresh berries, sugar and mint leaves.</div>*/
/*                                                     </div>*/
/*                                                     <div class="text-list">*/
/*                                                         <div class="name">Weight: <span class="fw-n">1800</span>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="text-list">*/
/*                                                         <div class="name">Ingredients:</div>*/
/*                                                         <div class="text">Eggs, milk, cream, sugar, wheat flour, salt, vanilla extract, corn starch, mascarpone cheese, cofee liqueur, apple vinegear, lemon juice, fresh and frozen blueberry.</div>*/
/*                                                     </div>*/
/*                                                     <div class="text-list">*/
/*                                                         <div class="name">Nutrition facts (for 100g of product):</div>*/
/*                                                         <div class="text">*/
/*                                                             <div class="line">*/
/*                                                                 <strong>Calories:</strong> 218.3 kcal*/
/*                                                             </div>*/
/*                                                             <div class="line">*/
/*                                                                 <strong>Protein:</strong> 6.8 g*/
/*                                                             </div>*/
/*                                                             <div class="line">*/
/*                                                                 <strong>Total Fat:</strong> 13.9 g*/
/*                                                             </div>*/
/*                                                             <div class="line">*/
/*                                                                 <strong>Carbohydrate:</strong> 16.7 g*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="composition">*/
/*                                                     <div class="form-group">*/
/*                                                         <div class="text-list mb20">*/
/*                                                             <div class="name">Choose berries:</div>*/
/*                                                             <select class="selectpicker sel-berry bs-select-hidden">*/
/*                                                                 <option class="icon-comp ico-cher" value="1">Blueberry</option>*/
/*                                                                 <option class="icon-comp ico-vish" value="2">Cherry</option>*/
/*                                                                 <option class="icon-comp ico-klub" value="3">Strawberry</option>*/
/*                                                                 <option class="icon-comp ico-mal" value="4">Raspberry</option>*/
/*                                                                 <option class="icon-comp ico-ej" value="5">Blackberry</option>*/
/*                                                             </select>*/
/*                                                         </div>*/
/*                                                         <div class="text-list">*/
/*                                                             <div class="name">Choose weight:</div>*/
/*                                                             <select class="selectpicker bs-select-hidden">*/
/*                                                                 <option class="" value="1">Standard (1,8 kg)</option>*/
/*                                                                 <option class="" value="2">More (2,8 kg)</option>*/
/*                                                                 <option class="" value="3">Less (0,8 kg)</option>*/
/*                                                             </select>*/
/*                                                         </div>*/
/*                                                         <div class="it-price">*/
/*                                                             <div class="it-sum">*/
/*                                                                 <input type="hidden" value="650"><strong>$22</strong>*/
/*                                                             </div>*/
/*                                                             <div class="ib input-group counter-badge">*/
/*                                                                 <div class="input-group-btn">*/
/*                                                                     <button type="button" class="btn btn-v2 btn-v2-h2 btn-number" data-type="minus" data-field="quant[12]">-</button>*/
/*                                                                 </div>*/
/*                                                                 <input type="text" name="quant[12]" class="form-control input-number" value="1" data-min="1" data-max="100">*/
/*                                                                 <div class="input-group-btn">*/
/*                                                                     <button type="button" class="btn btn-v2 btn-v2-h2 btn-number" data-type="plus" data-field="quant[12]">+</button>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                     </div>*/
/*                                                     <button type="submit" class="btn btn-buy btn-icon btn-clicked btn--moema flaticon-trolley7">Buy</button>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </form>*/
/*                                 </div>*/
/*                                */
/*                                 {% endfor %}*/
/*                                */
/*                               */
/*                               */
/*                                 <div id="item-detail-content5" class="item-detailed-content hidden">*/
/*                                     <button type="button" class="overlay-close inner visible-xs" data-dismiss="modal">×</button>*/
/*                                     <form action="http://html.yenisite.ru/best-dessert-eng/index.html">*/
/*                                         <div class="b-title text-center">Blueberries with cream pancake cake</div>*/
/*                                         <div class="item-detail">*/
/*                                             <!-- Swiper -->*/
/*                                             <div class="swiper-container it-gallery">*/
/*                                                 <div class="swiper-wrapper">*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/blank-item-big1.jpg')}}" alt="" data-zoom-image="{{asset('img/blank-item-big1.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/blank-item-big1.jpg')}}" alt="" data-zoom-image="{{asset('img/blank-item-big1.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/blank-item-big1.jpg')}}" alt="" data-zoom-image="{{asset('img/blank-item-big1.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/blank-item-big1.jpg')}}" alt="" data-zoom-image="{{asset('img/blank-item-big1.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/blank-item-big1.jpg')}}" alt="" data-zoom-image="{{asset('img/blank-item-big1.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/blank-item-big1.jpg')}}" alt="" data-zoom-image="{{asset('img/blank-item-big1.jpg')}}">*/
/*                                                     </div>*/
/*                                                     <div class="it-big swiper-slide">*/
/*                                                         <img class="zoom-img" src="{{asset('img/discounts-bg.jpg')}}" alt="" data-zoom-image="{{asset('img/discounts-bg.jpg')}}">*/
/*                                                     </div>*/
/* */
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="it-gallery-thumbs">*/
/*                                                 <div class="it-gallery-thumbs-wrap">*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb1.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb2.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb3.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb4.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb4.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb4.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="it-thumb">*/
/*                                                         <div class="wrap">*/
/*                                                             <img src="{{asset('img/blank-item-thumb5.jpg')}}" alt="">*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="clearfix">*/
/*                                                 <div class="it-info">*/
/*                                                     <div class="text-list">*/
/*                                                         <div class="name">Details:</div>*/
/*                                                         <div class="text">Delicate pancake dough layers soaked in whipped cream and blueberry jam with the addition of blueberries. Decorated with fresh berries, sugar and mint leaves.</div>*/
/*                                                     </div>*/
/*                                                     <div class="text-list">*/
/*                                                         <div class="name">Weight: <span class="fw-n">1800 g</span>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="text-list">*/
/*                                                         <div class="name">Ingredients:</div>*/
/*                                                         <div class="text">Eggs, milk, cream, sugar, wheat flour, salt, vanilla extract, corn starch, mascarpone cheese, cofee liqueur, apple vinegear, lemon juice, fresh and frozen blueberry.</div>*/
/*                                                     </div>*/
/*                                                     <div class="text-list">*/
/*                                                         <div class="name">Nutrition facts (for 100g of product):</div>*/
/*                                                         <div class="text">*/
/*                                                             <div class="line">*/
/*                                                                 <strong>Calories:</strong> 218.3 kcal*/
/*                                                             </div>*/
/*                                                             <div class="line">*/
/*                                                                 <strong>Protein:</strong> 6.8 g*/
/*                                                             </div>*/
/*                                                             <div class="line">*/
/*                                                                 <strong>Total Fat:</strong> 13.9 g*/
/*                                                             </div>*/
/*                                                             <div class="line">*/
/*                                                                 <strong>Carbohydrate:</strong> 16.7 g*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="composition">*/
/*                                                     <div class="form-group">*/
/*                                                         <div class="text-list mb20">*/
/*                                                             <div class="name">Choose berries:</div>*/
/*                                                             <select class="selectpicker sel-berry bs-select-hidden">*/
/*                                                                 <option class="icon-comp ico-cher" value="1">Blueberry</option>*/
/*                                                                 <option class="icon-comp ico-vish" value="2">Cherry</option>*/
/*                                                                 <option class="icon-comp ico-klub" value="3">Strawberry</option>*/
/*                                                                 <option class="icon-comp ico-mal" value="4">Raspberry</option>*/
/*                                                                 <option class="icon-comp ico-ej" value="5">Blackberry</option>*/
/*                                                             </select>*/
/*                                                         </div>*/
/*                                                         <div class="text-list">*/
/*                                                             <div class="name">Choose weight:</div>*/
/*                                                             <select class="selectpicker bs-select-hidden">*/
/*                                                                 <option class="" value="1">Standard (1,8 kg)</option>*/
/*                                                                 <option class="" value="2">More (2,8 kg)</option>*/
/*                                                                 <option class="" value="3">Less (0,8 kg)</option>*/
/*                                                             </select>*/
/*                                                         </div>*/
/*                                                         <div class="it-price">*/
/*                                                             <div class="it-sum">*/
/*                                                                 <input type="hidden" value="650"><strong>$22</strong>*/
/*                                                             </div>*/
/*                                                             <div class="ib input-group counter-badge">*/
/*                                                                 <div class="input-group-btn">*/
/*                                                                     <button type="button" class="btn btn-v2 btn-v2-h2 btn-number" data-type="minus" data-field="quant[12]">-</button>*/
/*                                                                 </div>*/
/*                                                                 <input type="text" name="quant[12]" class="form-control input-number" value="1" data-min="1" data-max="100">*/
/*                                                                 <div class="input-group-btn">*/
/*                                                                     <button type="button" class="btn btn-v2 btn-v2-h2 btn-number" data-type="plus" data-field="quant[12]">+</button>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                     </div>*/
/*                                                     <button type="submit" class="btn btn-buy btn-icon btn-clicked btn--moema flaticon-trolley7">Buy</button>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </form>*/
/*                                 </div>*/
/*                            */
/*                                */
/*                             */
/*                               */
/*                           */
/*                             </div>*/
/*                             */
/*                         </div>*/
/*                         */
/*      */
/*                                                    */
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*                                                         */
/*                                 <center>*/
/*                                    */
/*                                     <div class="navigation">*/
/*                                         {{ knp_pagination_render(pagination) }}*/
/*                                     </div>*/
/*                                 </center>*/
/*                                        {%endblock %}*/
