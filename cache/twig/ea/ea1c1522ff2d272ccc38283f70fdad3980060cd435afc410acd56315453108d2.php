<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_a1f1cac1e67d9a1477d5a25f13cce64b1fee94de46aa3b902ffdffc02301b259 extends Twig_Template
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
        // line 23
        echo "
";
        // line 36
        echo "
<div class=\"scrollbar-inner\">
    <div class=\"highlightable\">
        ";
        // line 39
        if ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "top_level_version", array())) {
            // line 40
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
            foreach ($context['_seq'] as $context["slug"] => $context["ver"]) {
                // line 41
                echo "                ";
                echo $this->getAttribute($this, "version", array(0 => $context["ver"]), "method");
                echo "
                <ul id=\"";
                // line 42
                echo $context["slug"];
                echo "\" class=\"topics\">
                ";
                // line 43
                echo $this->getAttribute($this, "loop", array(0 => $context["ver"], 1 => ""), "method");
                echo "
                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['ver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        ";
        } else {
            // line 47
            echo "            <ul class=\"topics\">
                ";
            // line 48
            if ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "root_page", array())) {
                // line 49
                echo "                    ";
                echo $this->getAttribute($this, "loop", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "root_page", array())), "method"), 1 => ""), "method");
                echo "
                ";
            } else {
                // line 51
                echo "            ";
                echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null), 1 => ""), "method");
                echo "
                ";
            }
            // line 53
            echo "            </ul>
        ";
        }
        // line 55
        echo "        <hr />

        <a class=\"padding\" href=\"#\" data-clear-history-toggle><i
                    class=\"fa fa-fw fa-history\"></i> ";
        // line 58
        echo $this->env->getExtension('GravTwigExtension')->translate("THEME_LEARN2_CLEAR_HISTORY");
        echo "</a><br/>

        <section id=\"footer\">
            <p>";
        // line 61
        echo $this->env->getExtension('GravTwigExtension')->translate("THEME_LEARN2_BUILT_WITH_GRAV");
        echo "</p>
        </section>
    </div>
</div>
";
    }

    // line 1
    public function getloop($__page__ = null, $__parent_loop__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "parent_loop" => $__parent_loop__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["parent_loop"]) ? $context["parent_loop"] : null)) > 0)) {
                // line 3
                echo "        ";
                $context["data_level"] = (isset($context["parent_loop"]) ? $context["parent_loop"] : null);
                // line 4
                echo "    ";
            } else {
                // line 5
                echo "        ";
                $context["data_level"] = 0;
                // line 6
                echo "    ";
            }
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 8
                echo "        ";
                $context["parent_page"] = (($this->getAttribute($context["p"], "activeChild", array())) ? (" parent") : (""));
                // line 9
                echo "        ";
                $context["current_page"] = (($this->getAttribute($context["p"], "active", array())) ? (" active") : (""));
                // line 10
                echo "        <li class=\"dd-item";
                echo (isset($context["parent_page"]) ? $context["parent_page"] : null);
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\" data-nav-id=\"";
                echo $this->getAttribute($context["p"], "route", array());
                echo "\">
            <a href=\"";
                // line 11
                echo $this->getAttribute($context["p"], "url", array());
                echo "\" ";
                if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "class", array())) {
                    echo "class=\"";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "class", array());
                    echo "\"";
                }
                echo ">
                <i class=\"fa fa-check read-icon\"></i>
                <span><b>";
                // line 13
                if (((isset($context["data_level"]) ? $context["data_level"] : null) == 0)) {
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo ". ";
                }
                echo "</b>";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "</span>
            </a>
            ";
                // line 15
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0)) {
                    // line 16
                    echo "            <ul>
                ";
                    // line 17
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => ((isset($context["parent_loop"]) ? $context["parent_loop"] : null) + $this->getAttribute($context["loop"], "index", array()))), "method");
                    echo "
            </ul>
            ";
                }
                // line 20
                echo "        </li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getversion($__p__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "p" => $__p__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "    ";
            $context["parent_page"] = (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "activeChild", array())) ? (" parent") : (""));
            // line 26
            echo "    ";
            $context["current_page"] = (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "active", array())) ? (" active") : (""));
            // line 27
            echo "    <h5 class=\"";
            echo (isset($context["parent_page"]) ? $context["parent_page"] : null);
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
        ";
            // line 28
            if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "activeChild", array()) || $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "active", array()))) {
                // line 29
                echo "        <i class=\"fa fa-chevron-down fa-fw\"></i>
        ";
            } else {
                // line 31
                echo "        <i class=\"fa fa-plus fa-fw\"></i>
        ";
            }
            // line 33
            echo "        <a href=\"";
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "menu", array());
            echo "</a>
    </h5>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 33,  242 => 31,  238 => 29,  236 => 28,  230 => 27,  227 => 26,  224 => 25,  212 => 24,  188 => 20,  182 => 17,  179 => 16,  177 => 15,  167 => 13,  156 => 11,  148 => 10,  145 => 9,  142 => 8,  124 => 7,  121 => 6,  118 => 5,  115 => 4,  112 => 3,  109 => 2,  96 => 1,  87 => 61,  81 => 58,  76 => 55,  72 => 53,  66 => 51,  60 => 49,  58 => 48,  55 => 47,  52 => 46,  43 => 43,  39 => 42,  34 => 41,  29 => 40,  27 => 39,  22 => 36,  19 => 23,);
    }
}
/* {% macro loop(page, parent_loop) %}*/
/*     {% if parent_loop|length > 0 %}*/
/*         {% set data_level = parent_loop %}*/
/*     {% else %}*/
/*         {% set data_level = 0 %}*/
/*     {% endif %}*/
/*     {% for p in page.children.visible %}*/
/*         {% set parent_page = p.activeChild ? ' parent' : '' %}*/
/*         {% set current_page = p.active ? ' active' : '' %}*/
/*         <li class="dd-item{{ parent_page }}{{ current_page }}" data-nav-id="{{ p.route }}">*/
/*             <a href="{{ p.url }}" {% if p.header.class %}class="{{ p.header.class }}"{% endif %}>*/
/*                 <i class="fa fa-check read-icon"></i>*/
/*                 <span><b>{% if data_level == 0 %}{{ loop.index }}. {% endif %}</b>{{ p.menu }}</span>*/
/*             </a>*/
/*             {% if p.children.count > 0 %}*/
/*             <ul>*/
/*                 {{ _self.loop(p, parent_loop+loop.index) }}*/
/*             </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {% macro version(p) %}*/
/*     {% set parent_page = p.activeChild ? ' parent' : '' %}*/
/*     {% set current_page = p.active ? ' active' : '' %}*/
/*     <h5 class="{{ parent_page }}{{ current_page }}">*/
/*         {% if p.activeChild or p.active %}*/
/*         <i class="fa fa-chevron-down fa-fw"></i>*/
/*         {% else %}*/
/*         <i class="fa fa-plus fa-fw"></i>*/
/*         {% endif %}*/
/*         <a href="{{ p.url }}">{{ p.menu }}</a>*/
/*     </h5>*/
/* {% endmacro %}*/
/* */
/* <div class="scrollbar-inner">*/
/*     <div class="highlightable">*/
/*         {% if theme_config.top_level_version %}*/
/*             {% for slug, ver in pages.children %}*/
/*                 {{ _self.version(ver) }}*/
/*                 <ul id="{{ slug }}" class="topics">*/
/*                 {{ _self.loop(ver, '') }}*/
/*                 </ul>*/
/*             {% endfor %}*/
/*         {% else %}*/
/*             <ul class="topics">*/
/*                 {% if theme_config.root_page %}*/
/*                     {{ _self.loop(page.find(theme_config.root_page), '') }}*/
/*                 {% else %}*/
/*             {{ _self.loop(pages, '') }}*/
/*                 {% endif %}*/
/*             </ul>*/
/*         {% endif %}*/
/*         <hr />*/
/* */
/*         <a class="padding" href="#" data-clear-history-toggle><i*/
/*                     class="fa fa-fw fa-history"></i> {{ 'THEME_LEARN2_CLEAR_HISTORY'|t }}</a><br/>*/
/* */
/*         <section id="footer">*/
/*             <p>{{ 'THEME_LEARN2_BUILT_WITH_GRAV'|t }}</p>*/
/*         </section>*/
/*     </div>*/
/* </div>*/
/* */
