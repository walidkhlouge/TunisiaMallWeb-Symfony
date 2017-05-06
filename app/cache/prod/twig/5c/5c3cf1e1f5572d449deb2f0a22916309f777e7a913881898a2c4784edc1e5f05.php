<?php

/* HWIOAuthBundle:Connect:connect_confirm.html.twig */
class __TwigTemplate_ac00c3e8f3a00eef9234ed1679009dab8e4f82c8e1332012c8b40f3163037dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_confirm.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.connecting", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"span6\">
            <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.confirm.text", array("%service%" => $this->env->getExtension('translator')->trans((isset($context["service"]) ? $context["service"] : null), array(), "HWIOAuthBundle"), "%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</p>
            <p>
                ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("hwi_oauth_connect_service", array("service" => (isset($context["service"]) ? $context["service"] : null), "key" => (isset($context["key"]) ? $context["key"] : null))), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                    <div>
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.confirm.submit", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</button>
                        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_connect");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("connect.confirm.cancel", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</a>
                    </div>
                ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </p>
        </div>
        <div class=\"span6\">
            ";
        // line 19
        if (($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "profilePicture", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "profilePicture", array())))) {
            // line 20
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "profilePicture", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 22
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  72 => 20,  70 => 19,  63 => 15,  56 => 13,  52 => 12,  47 => 10,  43 => 9,  38 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'HWIOAuthBundle::layout.html.twig' %}*/
/* */
/* {% block hwi_oauth_content %}*/
/*     <h3>{{ 'header.connecting' | trans({}, 'HWIOAuthBundle')}}</h3>*/
/*     <div class="row">*/
/*         <div class="span6">*/
/*             <p>{{ 'connect.confirm.text' | trans({'%service%': service | trans({}, 'HWIOAuthBundle'), '%name%': userInformation.realName}, 'HWIOAuthBundle') }}</p>*/
/*             <p>*/
/*                 {{ form_start(form, {'action': path('hwi_oauth_connect_service', {'service': service, 'key': key}), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*                     {{ form_widget(form) }}*/
/*                     <div>*/
/*                         <button type="submit" class="btn btn-primary">{{ 'connect.confirm.submit' | trans({}, 'HWIOAuthBundle') }}</button>*/
/*                         <a href="{{ path('hwi_oauth_connect') }}" class="btn">{{ 'connect.confirm.cancel' | trans({}, 'HWIOAuthBundle') }}</a>*/
/*                     </div>*/
/*                 {{ form_end(form) }}*/
/*             </p>*/
/*         </div>*/
/*         <div class="span6">*/
/*             {% if userInformation.profilePicture is defined and userInformation.profilePicture is not empty %}*/
/*                 <img src="{{ userInformation.profilePicture }}" />*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock hwi_oauth_content %}*/
/* */
