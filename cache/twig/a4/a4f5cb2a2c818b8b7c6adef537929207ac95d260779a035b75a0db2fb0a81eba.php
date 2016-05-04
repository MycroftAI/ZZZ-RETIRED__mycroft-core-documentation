<?php

/* partials/ui-tabs.html.twig */
class __TwigTemplate_544fdeb67289800d5f57e07145dddf60b6b841d6ffe028675650526836dd880e extends Twig_Template
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
        // line 1
        echo "<div class=\"tabs-wrapper ui-theme-";
        echo (isset($context["theme"]) ? $context["theme"] : null);
        echo " ";
        echo (isset($context["position"]) ? $context["position"] : null);
        echo "\">
    <ul class=\"tabs-nav\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["child_tabs"]) ? $context["child_tabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 4
            echo "        ";
            $context["class"] = ((($context["key"] == (isset($context["active"]) ? $context["active"] : null))) ? ("class=\"current\"") : (""));
            // line 5
            echo "        <li ";
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "><a href=\"#";
            echo ((isset($context["hash"]) ? $context["hash"] : null) . $context["key"]);
            echo "\" rel=\"tab\">";
            echo $this->getAttribute($context["tab"], "getParameter", array(0 => "title", 1 => ("Tab " . $context["key"])), "method");
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
    <div class=\"tabs\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["child_tabs"]) ? $context["child_tabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 10
            echo "        <div class=\"tab\" id=\"";
            echo ((isset($context["hash"]) ? $context["hash"] : null) . $context["key"]);
            echo "\">";
            echo $this->getAttribute($context["tab"], "getContent", array(), "method");
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/ui-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  55 => 10,  51 => 9,  47 => 7,  34 => 5,  31 => 4,  27 => 3,  19 => 1,);
    }
}
/* <div class="tabs-wrapper ui-theme-{{ theme  }} {{ position }}">*/
/*     <ul class="tabs-nav">*/
/*     {% for key,tab in child_tabs %}*/
/*         {% set class = key == active ? 'class="current"' %}*/
/*         <li {{ class }}><a href="#{{ hash ~ key }}" rel="tab">{{ tab.getParameter('title', 'Tab '~key) }}</a></li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*     <div class="tabs">*/
/*     {% for key,tab in child_tabs %}*/
/*         <div class="tab" id="{{ hash ~ key }}">{{ tab.getContent() }}</div>*/
/*     {% endfor %}*/
/*     </div>*/
/* </div>*/
