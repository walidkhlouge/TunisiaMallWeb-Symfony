<?php

/* TunisiaMallUserBundle:Connect:registration.html.twig */
class __TwigTemplate_01eb6502ec662e5770612fc283e8f1b5413495f6353e80a83a421c20a54a5b1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "TunisiaMallUserBundle:Connect:registration.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.register", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"span6\">
            ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("hwi_oauth_connect_registration", array("key" => (isset($context["key"]) ? $context["key"] : null))), "attr" => array("class" => "hwi_oauth_registration_register")));
        echo "
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.registration.submit", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_connect");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.registration.cancel", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</a>
                </div>
            ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        </div>
        <div class=\"span6\">
            ";
        // line 16
        if ( !twig_test_empty($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "profilePicture", array()))) {
            // line 17
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "profilePicture", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 19
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TunisiaMallUserBundle:Connect:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  66 => 17,  64 => 16,  58 => 13,  51 => 11,  47 => 10,  42 => 8,  38 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     <h3>{{ 'header.register' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>*/
/*     <div class="row">*/
/*         <div class="span6">*/
/*             {{ form_start(form, {'action': path('hwi_oauth_connect_registration', {'key': key}), 'attr': {'class': 'hwi_oauth_registration_register'}}) }}*/
/*                 {{ form_widget(form) }}*/
/*                 <div>*/
/*                     <button type="submit" class="btn btn-primary">{{ 'connect.registration.submit'|trans({}, 'HWIOAuthBundle') }}</button>*/
/*                     <a href="{{ path('hwi_oauth_connect') }}" class="btn">{{ 'connect.registration.cancel' | trans({}, 'HWIOAuthBundle') }}</a>*/
/*                 </div>*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/*         <div class="span6">*/
/*             {% if userInformation.profilePicture is not empty %}*/
/*                 <img src="{{ userInformation.profilePicture }}" />*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock hwi_oauth_content %}*/
/* */
