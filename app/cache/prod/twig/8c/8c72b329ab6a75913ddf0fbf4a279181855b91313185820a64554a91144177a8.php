<?php

/* KnpPaginatorBundle:Pagination:foundation_v5_pagination.html.twig */
class __TwigTemplate_a3a39b9889f01be9f2270b674fa1db3a71c69a2366804e712157ae495f27fe2f extends Twig_Template
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
        // line 20
        echo "
";
        // line 21
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 22
            echo "    <ul class=\"pagination\">
        ";
            // line 23
            if (array_key_exists("previous", $context)) {
                // line 24
                echo "                 <li class=\"arrow\">
                     <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
                echo "\">&laquo; ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
                 </li>
        ";
            } else {
                // line 28
                echo "            <li class=\"arrow unavailable\">
                <a>
                    &laquo; ";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            // line 34
            echo "
        ";
            // line 35
            if (((isset($context["startPage"]) ? $context["startPage"] : null) > 1)) {
                // line 36
                echo "            <li>
                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => 1))), "html", null, true);
                echo "\">1</a>
            </li>
            ";
                // line 39
                if (((isset($context["startPage"]) ? $context["startPage"] : null) == 3)) {
                    // line 40
                    echo "                <li>
                    <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => 2))), "html", null, true);
                    echo "\">2</a>
                </li>
            ";
                } elseif ((                // line 43
(isset($context["startPage"]) ? $context["startPage"] : null) != 2)) {
                    // line 44
                    echo "                <li class=\"unavailable\">
                    <a>&hellip;</a>
                </li>
            ";
                }
                // line 48
                echo "        ";
            }
            // line 49
            echo "
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 51
                echo "            ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : null))) {
                    // line 52
                    echo "                <li>
                    <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => $context["page"]))), "html", null, true);
                    echo "\">
                        ";
                    // line 54
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                    </a>
                </li>
            ";
                } else {
                    // line 58
                    echo "                <li class=\"current\">
                    <a>";
                    // line 59
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 62
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
        ";
            // line 65
            if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > (isset($context["endPage"]) ? $context["endPage"] : null))) {
                // line 66
                echo "            ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > ((isset($context["endPage"]) ? $context["endPage"] : null) + 1))) {
                    // line 67
                    echo "                ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > ((isset($context["endPage"]) ? $context["endPage"] : null) + 2))) {
                        // line 68
                        echo "                    <li class=\"unavailable\">
                        <a>&hellip;</a>
                    </li>
                ";
                    } else {
                        // line 72
                        echo "                    <li>
                        <a href=\"";
                        // line 73
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => ((isset($context["pageCount"]) ? $context["pageCount"] : null) - 1)))), "html", null, true);
                        echo "\">
                            ";
                        // line 74
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : null) - 1), "html", null, true);
                        echo "
                        </a>
                    </li>
                ";
                    }
                    // line 78
                    echo "            ";
                }
                // line 79
                echo "            <li>
                <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["pageCount"]) ? $context["pageCount"] : null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : null), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 83
            echo "
        ";
            // line 84
            if (array_key_exists("next", $context)) {
                // line 85
                echo "            <li class=\"arrow\">
                <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
                echo "\">
                    ";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo " &nbsp;&raquo;
                </a>
            </li>
        ";
            } else {
                // line 91
                echo "            <li class=\"arrow unavailable\">
                <a>
                    ";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo " &nbsp;&raquo;
                </a>
            </li>
        ";
            }
            // line 97
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:foundation_v5_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 97,  193 => 93,  189 => 91,  182 => 87,  178 => 86,  175 => 85,  173 => 84,  170 => 83,  162 => 80,  159 => 79,  156 => 78,  149 => 74,  145 => 73,  142 => 72,  136 => 68,  133 => 67,  130 => 66,  128 => 65,  125 => 64,  118 => 62,  112 => 59,  109 => 58,  102 => 54,  98 => 53,  95 => 52,  92 => 51,  88 => 50,  85 => 49,  82 => 48,  76 => 44,  74 => 43,  69 => 41,  66 => 40,  64 => 39,  59 => 37,  56 => 36,  54 => 35,  51 => 34,  44 => 30,  40 => 28,  32 => 25,  29 => 24,  27 => 23,  24 => 22,  22 => 21,  19 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Foundation 5 Sliding pagination control implementation.*/
/*  **/
/*  * View that can be used with the pagination module */
/*  * from the Foundation 5 CSS Toolkit*/
/*  * http://foundation.zurb.com/docs/components/pagination.html*/
/*  **/
/*  * @author Vincent Loy <vincent.loy1@gmail.com>*/
/*  **/
/*  * This view have been ported from twitter bootstrap v3 pagination control implementation*/
/*  * from :*/
/*  * @author Pablo Díez <pablodip@gmail.com>*/
/*  * @author Jan Sorgalla <jsorgalla@gmail.com>*/
/*  * @author Artem Ponomarenko <imenem@inbox.ru>*/
/*  * @author Artem Zabelin <artjomzabelin@gmail.com>*/
/*  *//* */
/* #}*/
/* */
/* {% if pageCount > 1 %}*/
/*     <ul class="pagination">*/
/*         {% if previous is defined %}*/
/*                  <li class="arrow">*/
/*                      <a href="{{ path(route, query|merge({(pageParameterName): previous})) }}">&laquo; {{ 'Previous'|trans }}</a>*/
/*                  </li>*/
/*         {% else %}*/
/*             <li class="arrow unavailable">*/
/*                 <a>*/
/*                     &laquo; {{ 'Previous'|trans }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% if startPage > 1 %}*/
/*             <li>*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): 1})) }}">1</a>*/
/*             </li>*/
/*             {% if startPage == 3 %}*/
/*                 <li>*/
/*                     <a href="{{ path(route, query|merge({(pageParameterName): 2})) }}">2</a>*/
/*                 </li>*/
/*             {% elseif startPage != 2 %}*/
/*                 <li class="unavailable">*/
/*                     <a>&hellip;</a>*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% for page in pagesInRange %}*/
/*             {% if page != current %}*/
/*                 <li>*/
/*                     <a href="{{ path(route, query|merge({(pageParameterName): page})) }}">*/
/*                         {{ page }}*/
/*                     </a>*/
/*                 </li>*/
/*             {% else %}*/
/*                 <li class="current">*/
/*                     <a>{{ page }}</a>*/
/*                 </li>*/
/*             {% endif %}*/
/* */
/*         {% endfor %}*/
/* */
/*         {% if pageCount > endPage %}*/
/*             {% if pageCount > (endPage + 1) %}*/
/*                 {% if pageCount > (endPage + 2) %}*/
/*                     <li class="unavailable">*/
/*                         <a>&hellip;</a>*/
/*                     </li>*/
/*                 {% else %}*/
/*                     <li>*/
/*                         <a href="{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}">*/
/*                             {{ pageCount -1 }}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             <li>*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): pageCount})) }}">{{ pageCount }}</a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% if next is defined %}*/
/*             <li class="arrow">*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): next})) }}">*/
/*                     {{ 'Next'|trans }} &nbsp;&raquo;*/
/*                 </a>*/
/*             </li>*/
/*         {% else %}*/
/*             <li class="arrow unavailable">*/
/*                 <a>*/
/*                     {{ 'Next'|trans }} &nbsp;&raquo;*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
/* */
