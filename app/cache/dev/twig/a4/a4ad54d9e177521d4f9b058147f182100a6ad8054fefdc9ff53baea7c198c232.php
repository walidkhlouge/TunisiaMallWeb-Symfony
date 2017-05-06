<?php

/* TunisiaMallTMBundle::resEnsView/EIndex.html.twig */
class __TwigTemplate_629668f7e01d2f8956177d4a2b64322ac618fdbf40c7e2b0c656676b6319e19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'topnav' => array($this, 'block_topnav'),
            'sidenav' => array($this, 'block_sidenav'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "    <body class=\"flat-blue\">
        <div class=\"app-container\">
            <div class=\"row content-container\">
                ";
        // line 36
        $this->displayBlock('topnav', $context, $blocks);
        // line 77
        echo "                ";
        $this->displayBlock('sidenav', $context, $blocks);
        // line 147
        echo "                <!-- Main Content -->
                <div class=\"container-fluid\">
                    ";
        // line 149
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "                </div>
            </div>
    </body>
    ";
        // line 154
        $this->displayBlock('footer', $context, $blocks);
        // line 177
        echo "</html>
";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "        <head>

            <title>TunisiaMall - Espace Responsable Enseigne</title>
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <!-- Fonts -->
            ";
        // line 15
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Lato:300,400,700,900"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
            <!-- CSS Libs -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/css/animate.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/css/bootstrap3/bootstrap-switch.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/css/checkbox3.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.dataTables.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/select2.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>
            <!-- CSS App -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/themes/flat-blue.css"), "html", null, true);
        echo "\">
        </head>
    ";
    }

    // line 36
    public function block_topnav($context, array $blocks = array())
    {
        // line 37
        echo "                    <nav class=\"navbar navbar-default navbar-fixed-top navbar-top\">
                        <div class=\"container-fluid\">
                            <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-expand-toggle\">
                                    <i class=\"fa fa-bars icon\"></i>
                                </button>
                                <ol class=\"breadcrumb navbar-breadcrumb\">
                                    <li class=\"active\">Tableau de bord</li>
                                </ol>
                                <button type=\"button\" class=\"navbar-right-expand-toggle pull-right visible-xs\">
                                    <i class=\"fa fa-th icon\"></i>
                                </button>
                            </div>
                            <ul class=\"nav navbar-nav navbar-right\">
                                <button type=\"button\" class=\"navbar-right-expand-toggle pull-right visible-xs\">
                                    <i class=\"fa fa-times icon\"></i>
                                </button>

                                <li class=\"dropdown profile\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Emily Hart <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu animated fadeInDown\">
                                        <li class=\"profile-img\">
                                            <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profile/picjumbo.com_HNCK4153_resize.jpg"), "html", null, true);
        echo "\" class=\"profile-img\">
                                        </li>
                                        <li>
                                            <div class=\"profile-info\">
                                                <h4 class=\"username\">Emily Hart</h4>
                                                <p>emily_hart@email.com</p>
                                                <div class=\"btn-group margin-bottom-2x\" role=\"group\">
                                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-user\"></i> Profil</button>
                                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-sign-out\"></i> Déconnexion</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                ";
    }

    // line 77
    public function block_sidenav($context, array $blocks = array())
    {
        // line 78
        echo "                    <div class=\"side-menu sidebar-inverse\">
                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                            <div class=\"side-menu-container\">
                                <div class=\"navbar-header\">
                                    <a class=\"navbar-brand\" href=\"#\">
                                        <div class=\"icon fa fa-paper-plane\"></div>
                                        <div class=\"title\">Responsable enseigne</div>
                                    </a>
                                    <button type=\"button\" class=\"navbar-expand-toggle pull-right visible-xs\">
                                        <i class=\"fa fa-times icon\"></i>
                                    </button>
                                </div>
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"active\">
                                        <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("enseigne_index");
        echo "\">
                                            <span class=\"icon fa fa-tachometer\"></span><span class=\"title\">Tableau de bord</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("affichage_page");
        echo "\">
                                            <span class=\"icon glyphicon glyphicon-home\"></span><span class=\"title\">Enseignes</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("enseigne_boutique");
        echo "\">
                                            <span class=\"icon fa fa-shopping-bag\"></span><span class=\"title\">Boutiques</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a  href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("produit_produit");
        echo "\">
                                            <span class=\"icon glyphicon glyphicon-shopping-cart\"></span><span class=\"title\">Produits</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("affichage_pageC");
        echo "\">
                                            <span class=\"icon fa fa-users\"></span><span class=\"title\">Résponsables boutiques</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("enseigne_fid");
        echo "\">
                                            <span class=\"icon fa fa-credit-card-alt\"></span><span class=\"title\">Fidélisation</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("stats");
        echo "\">
                                            <span class=\"icon fa fa-pie-chart\"></span><span class=\"title\">Statistiques</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("enseigne_catalogue");
        echo "\">
                                            <span class=\"icon fa fa-map-o\"></span><span class=\"title\">Catalogues</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("affichage_pageP");
        echo "\">
                                            <span class=\"icon fa fa-archive\"></span><span class=\"title\">Pack publicitaires</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a  href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("redirection_mail");
        echo "\">
                                            <span class=\"icon fa fa-envelope\"></span><span class=\"title\">Reclamations</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                ";
    }

    // line 149
    public function block_content($context, array $blocks = array())
    {
        // line 150
        echo "                    ";
    }

    // line 154
    public function block_footer($context, array $blocks = array())
    {
        // line 155
        echo "        <div>
            <!-- Javascript Libs -->
            <script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/js/jquery.matchHeight-min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/js/ace/mode-html.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/lib/js/ace/theme-github.js"), "html", null, true);
        echo "\"></script>
            <!-- Javascript -->
            <script type=\"text/javascript\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
            <footer class=\"app-footer\">
                <div class=\"wrapper\">
                    <span class=\"pull-right\">2.1 <a href=\"#\"><i class=\"fa fa-long-arrow-up\"></i></a></span> © 2015 Copyright.
                </div>
            </footer>
        ";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle::resEnsView/EIndex.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 170,  343 => 169,  338 => 167,  334 => 166,  330 => 165,  326 => 164,  322 => 163,  318 => 162,  314 => 161,  310 => 160,  306 => 159,  302 => 158,  298 => 157,  294 => 155,  291 => 154,  287 => 150,  284 => 149,  270 => 137,  262 => 132,  254 => 127,  246 => 122,  238 => 117,  230 => 112,  222 => 107,  214 => 102,  206 => 97,  198 => 92,  182 => 78,  179 => 77,  157 => 59,  133 => 37,  130 => 36,  123 => 30,  119 => 29,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  73 => 16,  68 => 15,  61 => 4,  58 => 3,  53 => 177,  51 => 154,  46 => 151,  44 => 149,  40 => 147,  37 => 77,  35 => 36,  30 => 33,  28 => 3,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     {% block head %}*/
/*         <head>*/
/* */
/*             <title>TunisiaMall - Espace Responsable Enseigne</title>*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*             <!-- Fonts -->*/
/*             {#{% stylesheets 'NurikabeStarRatingBundle/Resources/rating.css' %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*             {% javascripts '%kernel.root_dir%/../vendor/fyneworks/star-rating/jquery.rating.js' %}*/
/*             <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}#}*/
/*             <link href="{{asset('http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400')}}" rel='stylesheet' type='text/css'>*/
/*             <link href="{{asset('http://fonts.googleapis.com/css?family=Lato:300,400,700,900')}}" rel='stylesheet' type='text/css'>*/
/*             <!-- CSS Libs -->*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('dist/lib/css/bootstrap.min.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('dist/lib/css/font-awesome.min.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('dist/lib/css/animate.min.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('dist/lib/css/bootstrap3/bootstrap-switch.min.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('dist/lib/css/checkbox3.min.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.min.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('dist/css/select2.min.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('bundles/starrating/css/rating.css')}}" />*/
/*             <script src="{{ asset('bundles/starrating/js/rating.js') }}"></script>*/
/*             <!-- CSS App -->*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('css/themes/flat-blue.css')}}">*/
/*         </head>*/
/*     {% endblock %}*/
/*     <body class="flat-blue">*/
/*         <div class="app-container">*/
/*             <div class="row content-container">*/
/*                 {% block topnav %}*/
/*                     <nav class="navbar navbar-default navbar-fixed-top navbar-top">*/
/*                         <div class="container-fluid">*/
/*                             <div class="navbar-header">*/
/*                                 <button type="button" class="navbar-expand-toggle">*/
/*                                     <i class="fa fa-bars icon"></i>*/
/*                                 </button>*/
/*                                 <ol class="breadcrumb navbar-breadcrumb">*/
/*                                     <li class="active">Tableau de bord</li>*/
/*                                 </ol>*/
/*                                 <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">*/
/*                                     <i class="fa fa-th icon"></i>*/
/*                                 </button>*/
/*                             </div>*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/*                                 <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">*/
/*                                     <i class="fa fa-times icon"></i>*/
/*                                 </button>*/
/* */
/*                                 <li class="dropdown profile">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Emily Hart <span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu animated fadeInDown">*/
/*                                         <li class="profile-img">*/
/*                                             <img src="{{asset('img/profile/picjumbo.com_HNCK4153_resize.jpg')}}" class="profile-img">*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <div class="profile-info">*/
/*                                                 <h4 class="username">Emily Hart</h4>*/
/*                                                 <p>emily_hart@email.com</p>*/
/*                                                 <div class="btn-group margin-bottom-2x" role="group">*/
/*                                                     <button type="button" class="btn btn-default"><i class="fa fa-user"></i> Profil</button>*/
/*                                                     <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> Déconnexion</button>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </nav>*/
/*                 {% endblock %}*/
/*                 {% block sidenav %}*/
/*                     <div class="side-menu sidebar-inverse">*/
/*                         <nav class="navbar navbar-default" role="navigation">*/
/*                             <div class="side-menu-container">*/
/*                                 <div class="navbar-header">*/
/*                                     <a class="navbar-brand" href="#">*/
/*                                         <div class="icon fa fa-paper-plane"></div>*/
/*                                         <div class="title">Responsable enseigne</div>*/
/*                                     </a>*/
/*                                     <button type="button" class="navbar-expand-toggle pull-right visible-xs">*/
/*                                         <i class="fa fa-times icon"></i>*/
/*                                     </button>*/
/*                                 </div>*/
/*                                 <ul class="nav navbar-nav">*/
/*                                     <li class="active">*/
/*                                         <a href="{{path('enseigne_index')}}">*/
/*                                             <span class="icon fa fa-tachometer"></span><span class="title">Tableau de bord</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{path ('affichage_page')}}">*/
/*                                             <span class="icon glyphicon glyphicon-home"></span><span class="title">Enseignes</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{path ('enseigne_boutique')}}">*/
/*                                             <span class="icon fa fa-shopping-bag"></span><span class="title">Boutiques</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a  href="{{path ('produit_produit')}}">*/
/*                                             <span class="icon glyphicon glyphicon-shopping-cart"></span><span class="title">Produits</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{path('affichage_pageC')}}">*/
/*                                             <span class="icon fa fa-users"></span><span class="title">Résponsables boutiques</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{path ('enseigne_fid')}}">*/
/*                                             <span class="icon fa fa-credit-card-alt"></span><span class="title">Fidélisation</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{path('stats')}}">*/
/*                                             <span class="icon fa fa-pie-chart"></span><span class="title">Statistiques</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{path ('enseigne_catalogue')}}">*/
/*                                             <span class="icon fa fa-map-o"></span><span class="title">Catalogues</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{path('affichage_pageP')}}">*/
/*                                             <span class="icon fa fa-archive"></span><span class="title">Pack publicitaires</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a  href="{{path ('redirection_mail')}}">*/
/*                                             <span class="icon fa fa-envelope"></span><span class="title">Reclamations</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <!-- /.navbar-collapse -->*/
/*                         </nav>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*                 <!-- Main Content -->*/
/*                 <div class="container-fluid">*/
/*                     {% block content %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*     </body>*/
/*     {% block footer %}*/
/*         <div>*/
/*             <!-- Javascript Libs -->*/
/*             <script type="text/javascript" src="{{asset('dist/lib/js/jquery.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{asset('dist/lib/js/bootstrap.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{asset('dist/lib/js/Chart.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{asset('dist/lib/js/bootstrap-switch.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{asset('dist/lib/js/jquery.matchHeight-min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{asset('dist/lib/js/jquery.dataTables.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{asset('dist/lib/js/dataTables.bootstrap.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{asset('dist/lib/js/select2.full.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{asset('dist/lib/js/ace/ace.js')}}"></script>*/
/*             <script type="text/javascript" src="{{asset('dist/lib/js/ace/mode-html.js')}}"></script>*/
/*             <script type="text/javascript" src="{{asset('dist/lib/js/ace/theme-github.js')}}"></script>*/
/*             <!-- Javascript -->*/
/*             <script type="text/javascript" src="{{asset('js/app.js')}}"></script>*/
/*             <script type="text/javascript" src="{{asset('js/index.js')}}"></script>*/
/*             <footer class="app-footer">*/
/*                 <div class="wrapper">*/
/*                     <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/* </html>*/
/* */
