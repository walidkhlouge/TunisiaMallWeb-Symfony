<?php

/* TunisiaMallTMBundle::clientView/layout.html.twig */
class __TwigTemplate_9b6a80943fea736cdeced7f0575825e12a03257bc581bbfc9f216d2e0de8fce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'body2' => array($this, 'block_body2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!doctype html>

<html lang=\"en\" class=\"\" style=\"overflow-x:hidden;\">

<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
<head>
    <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"><![endif]-->
    <meta charset=\"UTF-8\">
    <title>TunisiaMall</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/swiper/css/swiper.min.css"), "html", null, true);
        echo "\">
    <!--[if IE 8 ]>
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/swiper-2.7.6/idangerous.swiper.css"), "html", null, true);
        echo "\">
    <![endif]-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("fonts//shipping-font/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles2.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/css/theme-common.css"), "html", null, true);
        echo "\" >
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/selectivizr-min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/modernizr.custom.04294.js"), "html", null, true);
        echo "\"></script>
    <!--[if IE 8 ]>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/respond/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    <!--2gis-->
    <!-- <script type=\"text/javascript\" src=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("search.js"), "html", null, true);
        echo "></script>-->
    
<!-- ... -->

<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Jquery.js"), "html", null, true);
        echo "\">

</script>

</head>

<body>

    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        ";
        $this->displayBlock('body2', $context, $blocks);
        // line 45
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/jquery.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/jquery/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>

    <!-- Load Bootstrap and bootstrap plugins -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/bootstrap-select/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/bootstrap-filestyle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Load some plugins -->

    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/swiper/js/swiper.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/font-awesome.min.css"), "html", null, true);
        echo "\" property=\"stylesheet\">

    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/sly.min.js"), "html", null, true);
        echo "\"></script>
    <!--<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/countdown/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>-->
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/device.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/jquery.parallax-scroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/intlTelInput/intlTelInput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/jquery.magnify.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/dragula/dragula.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/videoBG/videoBG.js"), "html", null, true);
        echo "\"></script>
    <!--Load scripts-->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/calctable.min.js"), "html", null, true);
        echo "\"></script>

    <!-- You can find global settings here -->
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/globals.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/util-functions.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-checkBrowser.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-video.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-youtube.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-bigSlider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-clientSlider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-affix.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-mainMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-categories.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-phoneMasking.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-validation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-promos.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-numberAnimation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-numberInputs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-cart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/inits/init-modalDetailed.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/entry.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\">
     </script>
    <script>
        var baseUrl = '';
        // if (typeof SITE_TEMPLATE_PATH !== \"undefined\") baseUrl = SITE_TEMPLATE_PATH + \"/\" + baseUrl;
        \$(function(){
            ls.init.phoneMasking(document);
            // \$('.form-tel').intlTelInput(\"loadUtils\", baseUrl + '/lib/intlTelInput/utils.js')}}');
        })
    </script>
</body>
</html>";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "        ";
    }

    // line 43
    public function block_body2($context, array $blocks = array())
    {
        // line 44
        echo "        ";
    }

    public function getTemplateName()
    {
        return "TunisiaMallTMBundle::clientView/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 44,  298 => 43,  294 => 42,  291 => 41,  275 => 95,  271 => 94,  266 => 92,  262 => 91,  258 => 90,  254 => 89,  250 => 88,  246 => 87,  242 => 86,  238 => 85,  234 => 84,  230 => 83,  226 => 82,  222 => 81,  218 => 80,  214 => 79,  210 => 78,  206 => 77,  201 => 75,  197 => 74,  191 => 71,  186 => 69,  182 => 68,  178 => 67,  174 => 66,  170 => 65,  166 => 64,  162 => 63,  158 => 62,  154 => 61,  150 => 60,  146 => 59,  141 => 57,  137 => 56,  131 => 53,  127 => 52,  123 => 51,  119 => 50,  113 => 47,  109 => 46,  104 => 45,  101 => 43,  99 => 41,  88 => 33,  81 => 29,  75 => 26,  70 => 24,  65 => 22,  60 => 20,  56 => 19,  52 => 18,  48 => 17,  44 => 16,  39 => 14,  34 => 12,  21 => 1,);
    }
}
/* */
/* <!doctype html>*/
/* */
/* <html lang="en" class="" style="overflow-x:hidden;">*/
/* */
/* <meta http-equiv="content-type" content="text/html;charset=UTF-8" />*/
/* <head>*/
/*     <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->*/
/*     <meta charset="UTF-8">*/
/*     <title>TunisiaMall</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">*/
/*     <link rel="stylesheet" href="{{asset('lib/swiper/css/swiper.min.css')}}">*/
/*     <!--[if IE 8 ]>*/
/*     <link rel="stylesheet" href="{{asset('lib/swiper-2.7.6/idangerous.swiper.css')}}">*/
/*     <![endif]-->*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('fonts//shipping-font/styles.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('styles/css/styles.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('styles2.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('styles/css/theme-common.css')}}" >*/
/*  <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />*/
/*     <!--[if (gte IE 6)&(lte IE 8)]>*/
/*     <script type="text/javascript" src="{{asset('lib/selectivizr-min.js')}}"></script>*/
/*     <![endif]-->*/
/*     <script src="{{asset('lib/modernizr.custom.04294.js')}}"></script>*/
/*     <!--[if IE 8 ]>*/
/*     <script src="{{asset('lib/respond/respond.min.js')}}"></script>*/
/*     <![endif]-->*/
/*     <!--2gis-->*/
/*     <!-- <script type="text/javascript" src={{ asset('search.js') }}></script>-->*/
/*     */
/* <!-- ... -->*/
/* */
/* <script src="{{asset('Jquery.js')}}">*/
/* */
/* </script>*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     {% block body %}*/
/*         {% endblock %}*/
/*         {% block body2 %}*/
/*         {% endblock %}*/
/*     <script src="{{asset('lib/jquery.min.js')}}"></script>*/
/*      <script src="{{asset('ckeditor/ckeditor.js')}}"></script>*/
/*     <script>window.jQuery || document.write('<script src="{{asset('lib/jquery/jquery-1.11.3.min.js')}}"><\/script>')</script>*/
/* */
/*     <!-- Load Bootstrap and bootstrap plugins -->*/
/*     <script src="{{asset('lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('lib/bootstrap-select/js/bootstrap-select.min.js')}}"></script>*/
/*     <script src="{{asset('lib/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>*/
/*     <script src="{{asset('lib/bootstrap-filestyle.min.js')}}"></script>*/
/*     <!-- Load some plugins -->*/
/* */
/*     <script src="{{asset('lib/swiper/js/swiper.jquery.min.js')}}"></script>*/
/*     <link rel="stylesheet" href="{{asset('styles/font-awesome.min.css')}}" property="stylesheet">*/
/* */
/*     <script src="{{asset('lib/wow/wow.min.js')}}"></script>*/
/*     <script src="{{asset('lib/sly.min.js')}}"></script>*/
/*     <!--<script src="{{asset('lib/countdown/jquery.countdown.min.js')}}"></script>-->*/
/*     <script src="{{asset('lib/device.js')}}"></script>*/
/*     <script src="{{asset('lib/jquery.parallax-scroll.js')}}"></script>*/
/*     <script src="{{asset('lib/intlTelInput/intlTelInput.min.js')}}"></script>*/
/*     <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>*/
/*     <script src="{{asset('lib/jquery.magnify.js')}}"></script>*/
/*     <script src="{{asset('lib/jquery.easing.1.3.js')}}"></script>*/
/*     <script src="{{asset('lib/dragula/dragula.min.js')}}"></script>*/
/*     <script src="{{asset('lib/videoBG/videoBG.js')}}"></script>*/
/*     <!--Load scripts-->*/
/*     <script src="{{asset('lib/calctable.min.js')}}"></script>*/
/* */
/*     <!-- You can find global settings here -->*/
/*     <script src="{{asset('js/globals.js')}}"></script>*/
/*     <script src="{{asset('js/util-functions.js')}}"></script>*/
/* */
/*     <script src="{{asset('js/inits/init-settings.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-checkBrowser.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-video.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-youtube.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-bigSlider.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-clientSlider.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-affix.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-mainMenu.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-categories.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-phoneMasking.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-validation.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-promos.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-numberAnimation.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-numberInputs.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-cart.js')}}"></script>*/
/*     <script src="{{asset('js/inits/init-modalDetailed.js')}}"></script>*/
/* */
/*     <script src="{{asset('js/entry.js')}}"></script>*/
/*      <script src="{{asset('js/main.js')}}">*/
/*      </script>*/
/*     <script>*/
/*         var baseUrl = '';*/
/*         // if (typeof SITE_TEMPLATE_PATH !== "undefined") baseUrl = SITE_TEMPLATE_PATH + "/" + baseUrl;*/
/*         $(function(){*/
/*             ls.init.phoneMasking(document);*/
/*             // $('.form-tel').intlTelInput("loadUtils", baseUrl + '/lib/intlTelInput/utils.js')}}');*/
/*         })*/
/*     </script>*/
/* </body>*/
/* </html>*/
