<?php

/* FOSCommentBundle:Thread:comment.html.twig */
class __TwigTemplate_fa00a0e1c00aac85e7cc27f617e016b2fdad9f6326c400d9124147fb5d399730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $context["view"] = ((array_key_exists("view", $context)) ? (_twig_default_filter((isset($context["view"]) ? $context["view"] : null), "tree")) : ("tree"));
        // line 13
        $context["depth"] = ((array_key_exists("depth", $context)) ? (_twig_default_filter((isset($context["depth"]) ? $context["depth"] : null), 0)) : (0));
        // line 14
        echo "
";
        // line 15
        $this->loadTemplate("FOSCommentBundle:Thread:comment_content.html.twig", "FOSCommentBundle:Thread:comment.html.twig", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 15,  26 => 14,  24 => 13,  22 => 12,  19 => 11,);
    }
}
/* {#*/
/* */
/*  This file is part of the FOSCommentBundle package.*/
/* */
/*  (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>*/
/* */
/*  This source file is subject to the MIT license that is bundled*/
/*  with this source code in the file LICENSE.*/
/* */
/* #}*/
/* */
/* {% set view = view|default('tree') %}*/
/* {% set depth = depth|default(0) %}*/
/* */
/* {% include "FOSCommentBundle:Thread:comment_content.html.twig" %}*/
/* */
