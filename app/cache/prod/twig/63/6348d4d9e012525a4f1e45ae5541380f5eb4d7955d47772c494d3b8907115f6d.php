<?php

/* FOSCommentBundle:Thread:comment_new.html.twig */
class __TwigTemplate_1be5f795a7eade040a8fdaee5c6b2e42e512bd8df175e6ffc3c9f91b7af836dc extends Twig_Template
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
        $this->loadTemplate("FOSCommentBundle:Thread:comment_new_content.html.twig", "FOSCommentBundle:Thread:comment_new.html.twig", 12)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,);
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
/* {% include "FOSCommentBundle:Thread:comment_new_content.html.twig" %}*/
/* */
