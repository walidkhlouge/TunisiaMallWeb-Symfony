<?php

/* TunisiaMallTMBundle::clientView/CIndex.html.twig */
class __TwigTemplate_4551b3804dff14ef806d4fb58a47a1b0ebdfe2f54e5704406be84e32d18cdde8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TunisiaMallTMBundle::clientView/layout.html.twig", "TunisiaMallTMBundle::clientView/CIndex.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'body3' => array($this, 'block_body3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TunisiaMallTMBundle::clientView/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"preloader-block\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/preloader.gif"), "html", null, true);
        echo "\" alt=\"\">
</div>
     
     
     
<div class=\"bx-panel-dummy\"></div>
<div class=\"landing-wrap\" id=\"landing-wrap\">
    <div class=\"wd-cut\">

        <header class=\"main-header\" id=\"main-header\">
            <div class=\"container\">

                <div class=\"row main-header-top\">
                    <div class=\"call-up pull-left\">
                        <div>
                            <a href=\"tel:1234567790\"><i class=\"flaticon-phone72\"></i>1-800-BEST-CAKE</a>
                        </div>
                    </div>
                    <div class=\"logo-main\">
                        
                        <a href=\"index-2.html\" class=\"brand\"><img  height=\"50px\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Tm.png"), "html", null, true);
        echo "\" alt=\"Best Dessert\"></a>
                    </div>
                        <p class=\"pan2\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("client_panier");
        echo "\" class=\"shop-cart pull-right\" id=\"shop-cart\"  data-target=\"#modal_cart\" data-remote=\"false\"><span class=\"line\"><b>Votre Panier:</b></span><span class=\"line\"> </span> <i class=\"flaticon-trolley7\"></i></a></p>
                    <button type=\"button\" class=\"mob-toggle\" data-toggle=\"modal\" data-target=\"#main-nav\"></button>
                </div>
                <nav class=\"row\" aria-labelledby=\"main-nav\" aria-hidden=\"true\" data-keyboard=\"true\" tabindex=\"-1\" data-backdrop=\"true\">
                    <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("client_panier");
        echo "\" class=\"shop-cart pull-right sticky hide\" ><i class=\"flaticon-trolley7\"><span>3</span></i></a>
                    <div class=\"listing\">
                        <ul class=\"nav navbar-nav main-nav\">
                            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#main-slider\" data-dismiss=\"modal\">Home</a>
                            </li>
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#s-list\" data-dismiss=\"modal\">Catalog</a>
                            </li>
                            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#s-discounts\" data-dismiss=\"modal\">Discounts</a>
                            </li>
                            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("client_enseigne");
        echo "\" data-dismiss=\"modal\">Nos Enseignes</a>
\t\t\t\t\t</li> 
                            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("client_boutique");
        echo "\" data-dismiss=\"modal\">Nos Boutiques</a>
\t\t\t\t\t</li> 
                            <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("client_produit");
        echo "\" data-dismiss=\"modal\">Nos Produits</a>
\t\t\t\t\t</li>             
                            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#s-why\" data-dismiss=\"modal\">Why Us?</a>
                            </li>
                            <!--<li><a href=\"#s-video\" data-dismiss=\"modal\">Video about us</a>
\t\t\t\t\t</li> -->
                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#s-how-work\" data-dismiss=\"modal\">How it works</a>
                            </li>
                            <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#s-shopnum\" data-dismiss=\"modal\">The Store in Figures</a>
                            </li>
                            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#s-deliv\" data-dismiss=\"modal\">Shipping</a>
                            </li>
                            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#s-clients\" data-dismiss=\"modal\">Reviews</a>
                            </li>
                            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#s-address\" data-dismiss=\"modal\">Contacts</a>
                            </li>
                            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#s-contacts\" data-dismiss=\"modal\">Feedback</a>
                            </li>
                        </ul>
                        <a href=\"#\" class=\"arr-nav prev disabled\">&#9679; &#9679; &#9679;</a>
                        <a href=\"#\" class=\"arr-nav next\">&#9679; &#9679; &#9679;</a>
                    </div><!-- .listing --><!-- .container -->
                </nav><!-- #main-nav --><!-- .row -->
            </div><!-- .container -->
        </header>

        <div class=\"main-section\">

";
        // line 73
        $this->displayBlock('body3', $context, $blocks);
        // line 75
        echo "           <!-- a copier -->
        </div><!-- .main-section -->

        <!-- FOOTER -->
        <footer>
            <nav class=\"socials\">
                <div class=\"container\">
                    <a href=\"#\" class=\"icon-soc flaticon-vk5\"></a>
                    <a href=\"#\" class=\"icon-soc flaticon-odnolassniki1\"></a>
                    <a href=\"#\" class=\"icon-soc flaticon-twitter\"></a>
                    <a href=\"#\" class=\"icon-soc flaticon-facebook3\"></a>
                    <a href=\"#\" class=\"icon-soc flaticon-instagram19\"></a>
                    <a href=\"#\" class=\"icon-soc flaticon-google-plus\"></a>
                </div>
            </nav>
            <div class=\"footer-container\">
                <div class=\"container\">
                    <div class=\"col-xs-12 col-md-6\">
                        <div class=\"copyright\">
                            <a href=\"#\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-cut.png"), "html", null, true);
        echo "\" alt=\"white-logo\"> Best Dessert v1.3 2016</a>
                            <!-- <a href=\"\" class=\"ib vam\"><img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-white.png"), "html", null, true);
        echo "\" height=\"30\" alt=\"\"></a> -->
                        </div>
                        <div class=\"subscription-form hidden-xs hidden-sm\">
                            <div class=\"text subscription-title\">Subscription:</div>
                            <form class=\"subscribe-form form-group\" data-validate=\"true\">
                                <div class=\"input-group\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Enter e-mail\" data-notice=\"Invalid e-mail\" required>
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">
                                    <span class=\"text\"><span class=\"hidden-xs\">Subscribe</span><span class=\"visible-xs\"><i class=\"fa fa-angle-right\"></i></span></span>
                                </button>
\t\t\t\t\t\t\t</span>
                                </div>
                                <div class=\"help-block with-errors\"></div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-md-6 footer-menu\">
                        <div class=\"col-xs-6\">
                            <ul>
                                <li><a href=\"#main-slider\">Home</a></li>
                                <li><a href=\"#s-list\">Catalog</a></li>
                                <li><a href=\"#s-discounts\">Discounts</a></li>
                                <li><a href=\"#s-why\">Why us</a></li>
                                <li><a href=\"#s-how-work\">How it works</a></li>
                            </ul>
                        </div>
                        <div class=\"col-xs-6\">
                            <ul>
                                <li><a href=\"#s-shopnum\">Store in figures</a></li>
                                <li><a href=\"#s-deliv\">Shipping</a></li>
                                <li><a href=\"#s-clients\">Reviews</a></li>
                                <li><a href=\"#s-address\">Contacts</a></li>
                                <li><a href=\"#s-contacts\">Feedback</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </footer>
    </div><!-- .wd-cut -->



    <a href=\"#\" id=\"sett-page\" class=\"glyphicon glyphicon-cog hyde\" data-toggle=\"modal\" data-target=\"#modal_settings\"></a>


    

    <input id=\"settings-toggle-input\" class=\"hidden\" type=\"checkbox\">

    <!-- <div class=\"settings-panel\" id=\"settings-panel\">
\t<label class=\"theme\">
\t\t<input class=\"theme-input\" name=\"theme\" value=\"romza\" type=\"radio\">
\t\t<span class=\"theme-demo\"></span>
\t</label>
\t<label class=\"theme\">
\t\t<input class=\"theme-input\" name=\"theme\" value=\"blue\" type=\"radio\">
\t\t<span class=\"theme-demo\"></span>
\t</label>
\t<label class=\"theme\">
\t\t<input class=\"theme-input\" name=\"theme\" value=\"green\" type=\"radio\">
\t\t<span class=\"theme-demo\"></span>
\t</label>
\t<label class=\"theme\">
\t\t<input class=\"theme-input\" name=\"theme\" value=\"orange\" type=\"radio\">
\t\t<span class=\"theme-demo\"></span>
\t</label>
\t<label class=\"theme\">
\t\t<input class=\"theme-input\" name=\"theme\" value=\"pink\" type=\"radio\">
\t\t<span class=\"theme-demo\"></span>
\t</label>
\t<label class=\"theme\">
\t\t<input class=\"theme-input\" name=\"theme\" value=\"violet\" type=\"radio\">
\t\t<span class=\"theme-demo\"></span>
\t</label>
</div> -->
    <div class=\"settings-panel\" id=\"settings-panel\">
        <div class=\"name\">Choose color scheme:</div>
        <div class=\"nav-mini nav-themes\">
            <a class=\"active\" href=\"";
        // line 177
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#common\" style=\"background-color: #E74C3C;\"></a>
            <a href=\"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#bgray_teal\" style=\"background-color: #1BA39C;\"></a>
            <a href=\"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#blue_orange\" style=\"background-color: #EB9532;\"></a>
            <a href=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#dark_blue_yellow\" style=\"background-color: #9A12B3;\"></a>
            <a href=\"";
        // line 181
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "#red_green\" style=\"background-color: #F4D03F;\"></a>
        </div>
    </div>


  <!--  <label for=\"settings-toggle-input\" class=\"settings-toggle\"></label>

    <div class=\"overlay overlay-simplegenie\" id=\"modal_detailed\" aria-hidden=\"true\" data-backdrop=\"true\" data-keyboard=\"true\" tabindex=\"-1\">
        <button type=\"button\" class=\"overlay-close hidden-xs\" data-dismiss=\"modal\">&#215;</button>
        <div class=\"modal-content detail-popup\">
            <!-- content added dynamically -->
      <!--  </div>
    </div>-->
  
    <div class=\"overlay overlay-simplegenie\" id=\"modal_settings\" aria-hidden=\"true\" data-backdrop=\"true\" data-keyboard=\"true\" tabindex=\"-1\">
        <button type=\"button\" class=\"overlay-close hidden-xs\" data-dismiss=\"modal\">&#215;</button>
        <div class=\"modal-content detail-popup\">
            <form action=\"#\">
                <div class=\"b-title text-center\">Settings</div>
                <div class=\"form-settings\">
                    <div class=\"form-block\">
                        <div class=\"row mb45\">
                            <div class=\"title\">Main settings</div>
                            <div class=\"dtab\">
                                <!-- <div class=\"media-left pr40\" style=\"width: 300px;\">
                        <div class=\"form-group\">
                            <div class=\"form-title mb10\"><strong>Customize background:</strong>
                            </div>
                            <div class=\"name\">Choose color:</div>
                            <input type=\"text\" class=\"form-control inp-colorpicker input-sm\" value=\"#ffffff\">
                        </div>
                        <div class=\"form-group\">
                            <div class=\"name\">Choose file:</div>
                            <div class=\"nav-bg mb10\">
                                <a href=\"\"><img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-st-bg1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                                <a href=\"\"><img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-st-bg2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                                <a href=\"\"><img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-st-bg3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <input type=\"file\" class=\"filestyle\" data-icon=\"false\" data-buttonText=\"Browse\" data-size=\"sm\" data-buttonBefore=\"true\">
                        </div>
                    </div> -->
                                <div class=\"media-left\">
                                    <div class=\"form-group \">
                                        <div class=\"form-title mb10\"><strong>Color scheme:</strong>
                                        </div>
                                        <div class=\"ib vat mr20\">
                                            <div class=\"name\">Choose scheme:</div>
                                            <div class=\"nav-mini nav-themes\">
                                                <a href=\"#common\" style=\"background-color: #E74C3C;\"></a>
                                                <a href=\"#bgray_teal\" style=\"background-color: #1BA39C;\"></a>
                                                <a href=\"#blue_orange\" style=\"background-color: #EB9532;\"></a>
                                                <a href=\"#dark_blue_yellow\" style=\"background-color: #9A12B3;\"></a>
                                                <a href=\"#red_green\" style=\"background-color: #F4D03F;\"></a>
                                            </div>
                                        </div>
                                        <!-- <div class=\"ib vat\">
                                <div class=\"name\">or choose custom color:</div>
                                <input type=\"text\" class=\"form-control inp-colorpicker input-sm\" value=\"#ffffff\">
                            </div> -->
                                    </div>
                                    <!-- <div class=\"form-group\">
                            <div class=\"name\">or apply texture:</div>
                            <div class=\"nav-mini mb40\">
                                <a href=\"\"><img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-texture1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                                <a href=\"\"><img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-texture2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                                <a href=\"\"><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-texture3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                                <a href=\"\"><img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blank-texture4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <input type=\"file\" class=\"filestyle\" data-icon=\"false\" data-buttonText=\"Browse\" data-size=\"sm\" data-buttonBefore=\"true\">
                        </div> -->
                                </div>
                            </div>

                        </div>
                        <div class=\"row\">
                            <div class=\"two-column\">
                                <div class=\"col ib pr100\">
                                    <div class=\"title\">Customize blocks</div>
                                    <div class=\"form-group sett-width\">
                                        <div class=\"form-title\">Blocks width:</div>
                                        <div class=\"radio ib mr45\">
                                            <input type=\"radio\" name=\"rad1\" id=\"rb1\" value=\"default\" checked>
                                            <label for=\"rb1\">Full-page width</label>
                                        </div>
                                        <div class=\"radio ib\">
                                            <input type=\"radio\" name=\"rad1\" id=\"rb2\" value=\"cut\">
                                            <label for=\"rb2\">Fixed</label>
                                        </div>
                                        <p class=\"mt15\"><i>You can remove unnecessary blocks or rearrange them. To do this, pull the block and drag the mouse to the desired location</i>
                                        </p>
                                    </div>
                                    <div class=\"drag-sections mb50\">
                                        <div class=\"d-section d-dis\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch1\" disabled checked>
                                            <label for=\"s-ch1\"></label>
                                            <div class=\"d-name\">Menu</div>
                                        </div>
                                        <div class=\"d-section\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch2\" checked>
                                            <label for=\"s-ch2\"></label>
                                            <div class=\"d-name bg1\">Banner</div>
                                        </div>
                                        <div class=\"d-section\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch3\" checked>
                                            <label for=\"s-ch3\"></label>
                                            <div class=\"d-name\">Goods</div>
                                        </div>
                                        <div class=\"d-section\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch4\" checked>
                                            <label for=\"s-ch4\"></label>
                                            <div class=\"d-name bg-back\">Promotions</div>
                                        </div>
                                        <div class=\"d-section\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch5\" checked>
                                            <label for=\"s-ch5\"></label>
                                            <div class=\"d-name\">Why us?</div>
                                        </div>
                                        <div class=\"d-section\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch6\" checked>
                                            <label for=\"s-ch6\"></label>
                                            <div class=\"d-name bg2\">Video</div>
                                        </div>
                                        <div class=\"d-section\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch7\" checked>
                                            <label for=\"s-ch7\"></label>
                                            <div class=\"d-name\">How it works?</div>
                                        </div>
                                        <div class=\"d-section\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch8\" checked>
                                            <label for=\"s-ch8\"></label>
                                            <div class=\"d-name bg1\">Company in figures</div>
                                        </div>
                                        <div class=\"d-section\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch9\" checked>
                                            <label for=\"s-ch9\"></label>
                                            <div class=\"d-name bg-back\">Shipping and payment</div>
                                        </div>
                                        <div class=\"d-section\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch10\" checked>
                                            <label for=\"s-ch10\"></label>
                                            <div class=\"d-name bg2\">Reviews</div>
                                        </div>
                                        <div class=\"d-section\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch11\" checked>
                                            <label for=\"s-ch11\"></label>
                                            <div class=\"d-name\">Contacts</div>
                                        </div>
                                        <div class=\"d-section\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch12\" checked>
                                            <label for=\"s-ch12\"></label>
                                            <div class=\"d-name bg-map\">Map</div>
                                        </div>
                                        <div class=\"d-section\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch13\" checked>
                                            <label for=\"s-ch13\"></label>
                                            <div class=\"d-name\">Feedback</div>
                                        </div>
                                        <div class=\"d-section d-dis\">
                                            <div class=\"d-handle\"></div>
                                            <input type=\"checkbox\" id=\"s-ch14\" disabled checked>
                                            <label for=\"s-ch14\"></label>
                                            <div class=\"d-name bg-back\">Footer</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col ib pl50\">
                                    <div class=\"title\">Customize animation</div>
                                    <div class=\"form-group\">
                                        <div class=\"form-title\">Cart view:</div>
                                        <div class=\"radio ib mr45\">
                                            <input type=\"radio\" name=\"cart-view\" id=\"rb3\" value=\"page\">
                                            <label for=\"rb3\">On the page (slide up)</label>
                                        </div>
                                        <div class=\"radio ib\">
                                            <input type=\"radio\" name=\"cart-view\" id=\"rb4\" value=\"popup\" checked>
                                            <label for=\"rb4\">Popup (modal) window</label>
                                        </div>
                                    </div>
                                    <div class=\"form-group gpt-sett hidden\">
                                        <div class=\"form-title\">Goods pop-up window:</div>
                                        <div class=\"radio ib mr45\">
                                            <input type=\"radio\" name=\"rad3\" id=\"rb5\" value=\"ON\" checked>
                                            <label for=\"rb5\">ON</label>
                                        </div>
                                        <div class=\"radio ib\">
                                            <input type=\"radio\" name=\"rad3\" id=\"rb6\" value=\"OFF\">
                                            <label for=\"rb6\">OFF</label>
                                        </div>
                                    </div>
                                    <div class=\"form-group hidden\">
                                        <div class=\"form-title\">Items view:</div>
                                        <div class=\"radio ib mr45\">
                                            <input type=\"radio\" name=\"rad4\" id=\"rb7\">
                                            <label for=\"rb7\">Slider</label>
                                        </div>
                                        <div class=\"radio ib\">
                                            <input type=\"radio\" name=\"rad4\" id=\"rb8\" checked>
                                            <label for=\"rb8\">Ajax-loading</label>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"form-title\">Slider animation effect:</div>
                                        <select class=\"selectpicker fx-sl\">
                                            <option value=\"fxSoftScale\">Soft scale</option>
                                            <option value=\"fxPressAway\">Press away</option>
                                            <option value=\"fxSideSwing\">Side Swing</option>
                                            <option value=\"fxFortuneWheel\">Fortune wheel</option>
                                            <option value=\"fxSwipe\">Swipe</option>
                                            <option value=\"fxPushReveal\">Push reveal</option>
                                            <option value=\"fxSnapIn\">Snap in</option>
                                            <option value=\"fxLetMeIn\">Let me in</option>
                                            <option value=\"fxStickIt\">Stick it</option>
                                            <option value=\"fxArchiveMe\">Archive me</option>
                                            <option value=\"fxVGrowth\">Vertical growth</option>
                                            <option value=\"fxSlideBehind\">Slide Behind</option>
                                            <option value=\"fxSoftPulse\">Soft Pulse</option>
                                            <option value=\"fxEarthquake\">Earthquake</option>
                                            <option value=\"fxCliffDiving\">Cliff diving</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"form-title\">Reviews animation:</div>
                                        <select class=\"selectpicker fx-cl\">
                                            <option value=\"default\">default</option>
                                            <option value=\"tooltip-sharp\">sharp</option>
                                            <option value=\"tooltip-round-1\">round-1</option>
                                            <option value=\"tooltip-round-2\">round-2</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"form-title\">Promotions block effects:</div>
                                        <select class=\"selectpicker fx-disc\">
                                            <option value=\"fadeInDown\">fadeInDown</option>
                                            <option value=\"flipInX\">flipInX</option>
                                            <option value=\"bounceInDown\">bounceInDown</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"form-title\">Pop-up windows animation:</div>
                                        <select class=\"selectpicker fx-modal\">
                                            <option value=\"overlay-corner\">corner</option>
                                            <option value=\"overlay-door\">door</option>
                                            <option value=\"overlay-hugeinc\">hugeinc</option>
                                            <option value=\"overlay-slidedown\">slidedown</option>
                                            <option value=\"overlay-scale\">scale</option>
                                            <option value=\"overlay-contentpush\" selected>contentpush</option>
                                            <option value=\"overlay-simplegenie\">simplegenie</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"form-title\">Goods appearance animation:</div>
                                        <select class=\"selectpicker fx-item\">
                                            <option value=\"fadeInDown\">fadeInDown</option>
                                            <option value=\"zoomIn\">zoomIn</option>
                                            <option value=\"zoomInRight\">zoomInRight</option>
                                            <option value=\"slideInLeft\">slideInRight</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group text-center mb25\">
                                <div class=\"checkbox ib\">
                                    <input type=\"checkbox\" name=\"check\" id=\"chck1\">
                                    <label for=\"chck1\">Save as default</label>
                                </div>
                            </div>
                            <div class=\"text-center\">
                                <div class=\"ib\">
                                    <a href=\"#\" class=\"reset-btn mr25\"><span>Reset settings</span></a>
                                    <button type=\"submit\" class=\"btn btn-clicked btn--moema\">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- .landing-wrap -->


";
    }

    // line 73
    public function block_body3($context, array $blocks = array())
    {
        // line 74
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle::clientView/CIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 74,  608 => 73,  374 => 253,  369 => 251,  364 => 249,  359 => 247,  328 => 219,  323 => 217,  318 => 215,  281 => 181,  277 => 180,  273 => 179,  269 => 178,  265 => 177,  180 => 95,  176 => 94,  155 => 75,  153 => 73,  138 => 61,  133 => 59,  128 => 57,  123 => 55,  118 => 53,  113 => 51,  106 => 47,  101 => 45,  96 => 43,  91 => 41,  86 => 39,  81 => 37,  76 => 35,  70 => 32,  63 => 28,  58 => 26,  35 => 6,  32 => 5,  29 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "TunisiaMallTMBundle::clientView/layout.html.twig" %}*/
/*  */
/* {% block body %}*/
/*     <div class="preloader-block">*/
/*         <img src="{{asset('img/preloader.gif')}}" alt="">*/
/* </div>*/
/*      */
/*      */
/*      */
/* <div class="bx-panel-dummy"></div>*/
/* <div class="landing-wrap" id="landing-wrap">*/
/*     <div class="wd-cut">*/
/* */
/*         <header class="main-header" id="main-header">*/
/*             <div class="container">*/
/* */
/*                 <div class="row main-header-top">*/
/*                     <div class="call-up pull-left">*/
/*                         <div>*/
/*                             <a href="tel:1234567790"><i class="flaticon-phone72"></i>1-800-BEST-CAKE</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="logo-main">*/
/*                         */
/*                         <a href="index-2.html" class="brand"><img  height="50px" src="{{asset('img/Tm.png')}}" alt="Best Dessert"></a>*/
/*                     </div>*/
/*                         <p class="pan2"><a href="{{ path('client_panier') }}" class="shop-cart pull-right" id="shop-cart"  data-target="#modal_cart" data-remote="false"><span class="line"><b>Votre Panier:</b></span><span class="line"> </span> <i class="flaticon-trolley7"></i></a></p>*/
/*                     <button type="button" class="mob-toggle" data-toggle="modal" data-target="#main-nav"></button>*/
/*                 </div>*/
/*                 <nav class="row" aria-labelledby="main-nav" aria-hidden="true" data-keyboard="true" tabindex="-1" data-backdrop="true">*/
/*                     <a href="{{ path('client_panier') }}" class="shop-cart pull-right sticky hide" ><i class="flaticon-trolley7"><span>3</span></i></a>*/
/*                     <div class="listing">*/
/*                         <ul class="nav navbar-nav main-nav">*/
/*                             <li><a href="{{ path('client_index') }}#main-slider" data-dismiss="modal">Home</a>*/
/*                             </li>*/
/*                             <li><a href="{{ path('client_index') }}#s-list" data-dismiss="modal">Catalog</a>*/
/*                             </li>*/
/*                             <li><a href="{{ path('client_index') }}#s-discounts" data-dismiss="modal">Discounts</a>*/
/*                             </li>*/
/*                             <li><a href="{{ path('client_enseigne') }}" data-dismiss="modal">Nos Enseignes</a>*/
/* 					</li> */
/*                             <li><a href="{{ path('client_boutique') }}" data-dismiss="modal">Nos Boutiques</a>*/
/* 					</li> */
/*                             <li><a href="{{ path('client_produit') }}" data-dismiss="modal">Nos Produits</a>*/
/* 					</li>             */
/*                             <li><a href="{{ path('client_index') }}#s-why" data-dismiss="modal">Why Us?</a>*/
/*                             </li>*/
/*                             <!--<li><a href="#s-video" data-dismiss="modal">Video about us</a>*/
/* 					</li> -->*/
/*                             <li><a href="{{ path('client_index') }}#s-how-work" data-dismiss="modal">How it works</a>*/
/*                             </li>*/
/*                             <li><a href="{{ path('client_index') }}#s-shopnum" data-dismiss="modal">The Store in Figures</a>*/
/*                             </li>*/
/*                             <li><a href="{{ path('client_index') }}#s-deliv" data-dismiss="modal">Shipping</a>*/
/*                             </li>*/
/*                             <li><a href="{{ path('client_index') }}#s-clients" data-dismiss="modal">Reviews</a>*/
/*                             </li>*/
/*                             <li><a href="{{ path('client_index') }}#s-address" data-dismiss="modal">Contacts</a>*/
/*                             </li>*/
/*                             <li><a href="{{ path('client_index') }}#s-contacts" data-dismiss="modal">Feedback</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <a href="#" class="arr-nav prev disabled">&#9679; &#9679; &#9679;</a>*/
/*                         <a href="#" class="arr-nav next">&#9679; &#9679; &#9679;</a>*/
/*                     </div><!-- .listing --><!-- .container -->*/
/*                 </nav><!-- #main-nav --><!-- .row -->*/
/*             </div><!-- .container -->*/
/*         </header>*/
/* */
/*         <div class="main-section">*/
/* */
/* {%block body3 %}*/
/*     {%endblock %}*/
/*            <!-- a copier -->*/
/*         </div><!-- .main-section -->*/
/* */
/*         <!-- FOOTER -->*/
/*         <footer>*/
/*             <nav class="socials">*/
/*                 <div class="container">*/
/*                     <a href="#" class="icon-soc flaticon-vk5"></a>*/
/*                     <a href="#" class="icon-soc flaticon-odnolassniki1"></a>*/
/*                     <a href="#" class="icon-soc flaticon-twitter"></a>*/
/*                     <a href="#" class="icon-soc flaticon-facebook3"></a>*/
/*                     <a href="#" class="icon-soc flaticon-instagram19"></a>*/
/*                     <a href="#" class="icon-soc flaticon-google-plus"></a>*/
/*                 </div>*/
/*             </nav>*/
/*             <div class="footer-container">*/
/*                 <div class="container">*/
/*                     <div class="col-xs-12 col-md-6">*/
/*                         <div class="copyright">*/
/*                             <a href="#"><img src="{{asset('img/logo-cut.png')}}" alt="white-logo"> Best Dessert v1.3 2016</a>*/
/*                             <!-- <a href="" class="ib vam"><img src="{{asset('img/logo-white.png')}}" height="30" alt=""></a> -->*/
/*                         </div>*/
/*                         <div class="subscription-form hidden-xs hidden-sm">*/
/*                             <div class="text subscription-title">Subscription:</div>*/
/*                             <form class="subscribe-form form-group" data-validate="true">*/
/*                                 <div class="input-group">*/
/*                                     <input type="email" class="form-control" placeholder="Enter e-mail" data-notice="Invalid e-mail" required>*/
/* 							<span class="input-group-btn">*/
/* 								<button class="btn btn-primary">*/
/*                                     <span class="text"><span class="hidden-xs">Subscribe</span><span class="visible-xs"><i class="fa fa-angle-right"></i></span></span>*/
/*                                 </button>*/
/* 							</span>*/
/*                                 </div>*/
/*                                 <div class="help-block with-errors"></div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-md-6 footer-menu">*/
/*                         <div class="col-xs-6">*/
/*                             <ul>*/
/*                                 <li><a href="#main-slider">Home</a></li>*/
/*                                 <li><a href="#s-list">Catalog</a></li>*/
/*                                 <li><a href="#s-discounts">Discounts</a></li>*/
/*                                 <li><a href="#s-why">Why us</a></li>*/
/*                                 <li><a href="#s-how-work">How it works</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-xs-6">*/
/*                             <ul>*/
/*                                 <li><a href="#s-shopnum">Store in figures</a></li>*/
/*                                 <li><a href="#s-deliv">Shipping</a></li>*/
/*                                 <li><a href="#s-clients">Reviews</a></li>*/
/*                                 <li><a href="#s-address">Contacts</a></li>*/
/*                                 <li><a href="#s-contacts">Feedback</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </footer>*/
/*     </div><!-- .wd-cut -->*/
/* */
/* */
/* */
/*     <a href="#" id="sett-page" class="glyphicon glyphicon-cog hyde" data-toggle="modal" data-target="#modal_settings"></a>*/
/* */
/* */
/*     */
/* */
/*     <input id="settings-toggle-input" class="hidden" type="checkbox">*/
/* */
/*     <!-- <div class="settings-panel" id="settings-panel">*/
/* 	<label class="theme">*/
/* 		<input class="theme-input" name="theme" value="romza" type="radio">*/
/* 		<span class="theme-demo"></span>*/
/* 	</label>*/
/* 	<label class="theme">*/
/* 		<input class="theme-input" name="theme" value="blue" type="radio">*/
/* 		<span class="theme-demo"></span>*/
/* 	</label>*/
/* 	<label class="theme">*/
/* 		<input class="theme-input" name="theme" value="green" type="radio">*/
/* 		<span class="theme-demo"></span>*/
/* 	</label>*/
/* 	<label class="theme">*/
/* 		<input class="theme-input" name="theme" value="orange" type="radio">*/
/* 		<span class="theme-demo"></span>*/
/* 	</label>*/
/* 	<label class="theme">*/
/* 		<input class="theme-input" name="theme" value="pink" type="radio">*/
/* 		<span class="theme-demo"></span>*/
/* 	</label>*/
/* 	<label class="theme">*/
/* 		<input class="theme-input" name="theme" value="violet" type="radio">*/
/* 		<span class="theme-demo"></span>*/
/* 	</label>*/
/* </div> -->*/
/*     <div class="settings-panel" id="settings-panel">*/
/*         <div class="name">Choose color scheme:</div>*/
/*         <div class="nav-mini nav-themes">*/
/*             <a class="active" href="{{ path('client_index') }}#common" style="background-color: #E74C3C;"></a>*/
/*             <a href="{{ path('client_index') }}#bgray_teal" style="background-color: #1BA39C;"></a>*/
/*             <a href="{{ path('client_index') }}#blue_orange" style="background-color: #EB9532;"></a>*/
/*             <a href="{{ path('client_index') }}#dark_blue_yellow" style="background-color: #9A12B3;"></a>*/
/*             <a href="{{ path('client_index') }}#red_green" style="background-color: #F4D03F;"></a>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*   <!--  <label for="settings-toggle-input" class="settings-toggle"></label>*/
/* */
/*     <div class="overlay overlay-simplegenie" id="modal_detailed" aria-hidden="true" data-backdrop="true" data-keyboard="true" tabindex="-1">*/
/*         <button type="button" class="overlay-close hidden-xs" data-dismiss="modal">&#215;</button>*/
/*         <div class="modal-content detail-popup">*/
/*             <!-- content added dynamically -->*/
/*       <!--  </div>*/
/*     </div>-->*/
/*   */
/*     <div class="overlay overlay-simplegenie" id="modal_settings" aria-hidden="true" data-backdrop="true" data-keyboard="true" tabindex="-1">*/
/*         <button type="button" class="overlay-close hidden-xs" data-dismiss="modal">&#215;</button>*/
/*         <div class="modal-content detail-popup">*/
/*             <form action="#">*/
/*                 <div class="b-title text-center">Settings</div>*/
/*                 <div class="form-settings">*/
/*                     <div class="form-block">*/
/*                         <div class="row mb45">*/
/*                             <div class="title">Main settings</div>*/
/*                             <div class="dtab">*/
/*                                 <!-- <div class="media-left pr40" style="width: 300px;">*/
/*                         <div class="form-group">*/
/*                             <div class="form-title mb10"><strong>Customize background:</strong>*/
/*                             </div>*/
/*                             <div class="name">Choose color:</div>*/
/*                             <input type="text" class="form-control inp-colorpicker input-sm" value="#ffffff">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="name">Choose file:</div>*/
/*                             <div class="nav-bg mb10">*/
/*                                 <a href=""><img src="{{asset('img/blank-st-bg1.jpg')}}" alt="">*/
/*                                 </a>*/
/*                                 <a href=""><img src="{{asset('img/blank-st-bg2.jpg')}}" alt="">*/
/*                                 </a>*/
/*                                 <a href=""><img src="{{asset('img/blank-st-bg3.jpg')}}" alt="">*/
/*                                 </a>*/
/*                             </div>*/
/*                             <input type="file" class="filestyle" data-icon="false" data-buttonText="Browse" data-size="sm" data-buttonBefore="true">*/
/*                         </div>*/
/*                     </div> -->*/
/*                                 <div class="media-left">*/
/*                                     <div class="form-group ">*/
/*                                         <div class="form-title mb10"><strong>Color scheme:</strong>*/
/*                                         </div>*/
/*                                         <div class="ib vat mr20">*/
/*                                             <div class="name">Choose scheme:</div>*/
/*                                             <div class="nav-mini nav-themes">*/
/*                                                 <a href="#common" style="background-color: #E74C3C;"></a>*/
/*                                                 <a href="#bgray_teal" style="background-color: #1BA39C;"></a>*/
/*                                                 <a href="#blue_orange" style="background-color: #EB9532;"></a>*/
/*                                                 <a href="#dark_blue_yellow" style="background-color: #9A12B3;"></a>*/
/*                                                 <a href="#red_green" style="background-color: #F4D03F;"></a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <!-- <div class="ib vat">*/
/*                                 <div class="name">or choose custom color:</div>*/
/*                                 <input type="text" class="form-control inp-colorpicker input-sm" value="#ffffff">*/
/*                             </div> -->*/
/*                                     </div>*/
/*                                     <!-- <div class="form-group">*/
/*                             <div class="name">or apply texture:</div>*/
/*                             <div class="nav-mini mb40">*/
/*                                 <a href=""><img src="{{asset('img/blank-texture1.jpg')}}" alt="">*/
/*                                 </a>*/
/*                                 <a href=""><img src="{{asset('img/blank-texture2.jpg')}}" alt="">*/
/*                                 </a>*/
/*                                 <a href=""><img src="{{asset('img/blank-texture3.jpg')}}" alt="">*/
/*                                 </a>*/
/*                                 <a href=""><img src="{{asset('img/blank-texture4.jpg')}}" alt="">*/
/*                                 </a>*/
/*                             </div>*/
/*                             <input type="file" class="filestyle" data-icon="false" data-buttonText="Browse" data-size="sm" data-buttonBefore="true">*/
/*                         </div> -->*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="two-column">*/
/*                                 <div class="col ib pr100">*/
/*                                     <div class="title">Customize blocks</div>*/
/*                                     <div class="form-group sett-width">*/
/*                                         <div class="form-title">Blocks width:</div>*/
/*                                         <div class="radio ib mr45">*/
/*                                             <input type="radio" name="rad1" id="rb1" value="default" checked>*/
/*                                             <label for="rb1">Full-page width</label>*/
/*                                         </div>*/
/*                                         <div class="radio ib">*/
/*                                             <input type="radio" name="rad1" id="rb2" value="cut">*/
/*                                             <label for="rb2">Fixed</label>*/
/*                                         </div>*/
/*                                         <p class="mt15"><i>You can remove unnecessary blocks or rearrange them. To do this, pull the block and drag the mouse to the desired location</i>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                     <div class="drag-sections mb50">*/
/*                                         <div class="d-section d-dis">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch1" disabled checked>*/
/*                                             <label for="s-ch1"></label>*/
/*                                             <div class="d-name">Menu</div>*/
/*                                         </div>*/
/*                                         <div class="d-section">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch2" checked>*/
/*                                             <label for="s-ch2"></label>*/
/*                                             <div class="d-name bg1">Banner</div>*/
/*                                         </div>*/
/*                                         <div class="d-section">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch3" checked>*/
/*                                             <label for="s-ch3"></label>*/
/*                                             <div class="d-name">Goods</div>*/
/*                                         </div>*/
/*                                         <div class="d-section">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch4" checked>*/
/*                                             <label for="s-ch4"></label>*/
/*                                             <div class="d-name bg-back">Promotions</div>*/
/*                                         </div>*/
/*                                         <div class="d-section">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch5" checked>*/
/*                                             <label for="s-ch5"></label>*/
/*                                             <div class="d-name">Why us?</div>*/
/*                                         </div>*/
/*                                         <div class="d-section">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch6" checked>*/
/*                                             <label for="s-ch6"></label>*/
/*                                             <div class="d-name bg2">Video</div>*/
/*                                         </div>*/
/*                                         <div class="d-section">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch7" checked>*/
/*                                             <label for="s-ch7"></label>*/
/*                                             <div class="d-name">How it works?</div>*/
/*                                         </div>*/
/*                                         <div class="d-section">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch8" checked>*/
/*                                             <label for="s-ch8"></label>*/
/*                                             <div class="d-name bg1">Company in figures</div>*/
/*                                         </div>*/
/*                                         <div class="d-section">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch9" checked>*/
/*                                             <label for="s-ch9"></label>*/
/*                                             <div class="d-name bg-back">Shipping and payment</div>*/
/*                                         </div>*/
/*                                         <div class="d-section">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch10" checked>*/
/*                                             <label for="s-ch10"></label>*/
/*                                             <div class="d-name bg2">Reviews</div>*/
/*                                         </div>*/
/*                                         <div class="d-section">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch11" checked>*/
/*                                             <label for="s-ch11"></label>*/
/*                                             <div class="d-name">Contacts</div>*/
/*                                         </div>*/
/*                                         <div class="d-section">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch12" checked>*/
/*                                             <label for="s-ch12"></label>*/
/*                                             <div class="d-name bg-map">Map</div>*/
/*                                         </div>*/
/*                                         <div class="d-section">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch13" checked>*/
/*                                             <label for="s-ch13"></label>*/
/*                                             <div class="d-name">Feedback</div>*/
/*                                         </div>*/
/*                                         <div class="d-section d-dis">*/
/*                                             <div class="d-handle"></div>*/
/*                                             <input type="checkbox" id="s-ch14" disabled checked>*/
/*                                             <label for="s-ch14"></label>*/
/*                                             <div class="d-name bg-back">Footer</div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col ib pl50">*/
/*                                     <div class="title">Customize animation</div>*/
/*                                     <div class="form-group">*/
/*                                         <div class="form-title">Cart view:</div>*/
/*                                         <div class="radio ib mr45">*/
/*                                             <input type="radio" name="cart-view" id="rb3" value="page">*/
/*                                             <label for="rb3">On the page (slide up)</label>*/
/*                                         </div>*/
/*                                         <div class="radio ib">*/
/*                                             <input type="radio" name="cart-view" id="rb4" value="popup" checked>*/
/*                                             <label for="rb4">Popup (modal) window</label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group gpt-sett hidden">*/
/*                                         <div class="form-title">Goods pop-up window:</div>*/
/*                                         <div class="radio ib mr45">*/
/*                                             <input type="radio" name="rad3" id="rb5" value="ON" checked>*/
/*                                             <label for="rb5">ON</label>*/
/*                                         </div>*/
/*                                         <div class="radio ib">*/
/*                                             <input type="radio" name="rad3" id="rb6" value="OFF">*/
/*                                             <label for="rb6">OFF</label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group hidden">*/
/*                                         <div class="form-title">Items view:</div>*/
/*                                         <div class="radio ib mr45">*/
/*                                             <input type="radio" name="rad4" id="rb7">*/
/*                                             <label for="rb7">Slider</label>*/
/*                                         </div>*/
/*                                         <div class="radio ib">*/
/*                                             <input type="radio" name="rad4" id="rb8" checked>*/
/*                                             <label for="rb8">Ajax-loading</label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <div class="form-title">Slider animation effect:</div>*/
/*                                         <select class="selectpicker fx-sl">*/
/*                                             <option value="fxSoftScale">Soft scale</option>*/
/*                                             <option value="fxPressAway">Press away</option>*/
/*                                             <option value="fxSideSwing">Side Swing</option>*/
/*                                             <option value="fxFortuneWheel">Fortune wheel</option>*/
/*                                             <option value="fxSwipe">Swipe</option>*/
/*                                             <option value="fxPushReveal">Push reveal</option>*/
/*                                             <option value="fxSnapIn">Snap in</option>*/
/*                                             <option value="fxLetMeIn">Let me in</option>*/
/*                                             <option value="fxStickIt">Stick it</option>*/
/*                                             <option value="fxArchiveMe">Archive me</option>*/
/*                                             <option value="fxVGrowth">Vertical growth</option>*/
/*                                             <option value="fxSlideBehind">Slide Behind</option>*/
/*                                             <option value="fxSoftPulse">Soft Pulse</option>*/
/*                                             <option value="fxEarthquake">Earthquake</option>*/
/*                                             <option value="fxCliffDiving">Cliff diving</option>*/
/*                                         </select>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <div class="form-title">Reviews animation:</div>*/
/*                                         <select class="selectpicker fx-cl">*/
/*                                             <option value="default">default</option>*/
/*                                             <option value="tooltip-sharp">sharp</option>*/
/*                                             <option value="tooltip-round-1">round-1</option>*/
/*                                             <option value="tooltip-round-2">round-2</option>*/
/*                                         </select>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <div class="form-title">Promotions block effects:</div>*/
/*                                         <select class="selectpicker fx-disc">*/
/*                                             <option value="fadeInDown">fadeInDown</option>*/
/*                                             <option value="flipInX">flipInX</option>*/
/*                                             <option value="bounceInDown">bounceInDown</option>*/
/*                                         </select>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <div class="form-title">Pop-up windows animation:</div>*/
/*                                         <select class="selectpicker fx-modal">*/
/*                                             <option value="overlay-corner">corner</option>*/
/*                                             <option value="overlay-door">door</option>*/
/*                                             <option value="overlay-hugeinc">hugeinc</option>*/
/*                                             <option value="overlay-slidedown">slidedown</option>*/
/*                                             <option value="overlay-scale">scale</option>*/
/*                                             <option value="overlay-contentpush" selected>contentpush</option>*/
/*                                             <option value="overlay-simplegenie">simplegenie</option>*/
/*                                         </select>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <div class="form-title">Goods appearance animation:</div>*/
/*                                         <select class="selectpicker fx-item">*/
/*                                             <option value="fadeInDown">fadeInDown</option>*/
/*                                             <option value="zoomIn">zoomIn</option>*/
/*                                             <option value="zoomInRight">zoomInRight</option>*/
/*                                             <option value="slideInLeft">slideInRight</option>*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group text-center mb25">*/
/*                                 <div class="checkbox ib">*/
/*                                     <input type="checkbox" name="check" id="chck1">*/
/*                                     <label for="chck1">Save as default</label>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="text-center">*/
/*                                 <div class="ib">*/
/*                                     <a href="#" class="reset-btn mr25"><span>Reset settings</span></a>*/
/*                                     <button type="submit" class="btn btn-clicked btn--moema">Apply</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div><!-- .landing-wrap -->*/
/* */
/* */
/* {% endblock %}*/
/* */
