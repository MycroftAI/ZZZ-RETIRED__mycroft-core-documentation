<?php

/* docs.html.twig */
class __TwigTemplate_7d44c22155bfe7c9b186ad5287be3f3efe4058e1309e1b505289f083286aea2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "docs.html.twig", 1);
        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["tags"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array());
        // line 3
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 4
            $context["progress"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@taxonomy" => array("category" => "docs", "tag" => (isset($context["tags"]) ? $context["tags"] : null))), "order" => array("by" => "default", "dir" => "asc"))), "method");
        } else {
            // line 6
            $context["progress"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@taxonomy" => array("category" => "docs")), "order" => array("by" => "default", "dir" => "asc"))), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_navigation($context, array $blocks = array())
    {
        // line 10
        echo "\t<div id=\"navigation\">
\t";
        // line 11
        if ( !$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isFirst", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method")) {
            // line 12
            echo "\t    <a class=\"nav nav-prev\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "nextSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
            echo "\"> <i class=\"fa fa-chevron-left\"></i></a>
\t";
        }
        // line 14
        echo "
\t";
        // line 15
        if ( !$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isLast", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method")) {
            // line 16
            echo "\t    <a class=\"nav nav-next\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "prevSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
            echo "\"><i class=\"fa fa-chevron-right\"></i></a>
\t";
        }
        // line 18
        echo "        <a href=\"https://github.com/MycroftAI/mycroft\" class=\"github-corner\"><svg width=\"80\" height=\"80\" viewBox=\"0 0 250 250\" style=\"fill:#1C1F7A; color:#fff; position: absolute; top: 0; border: 0; right: 0;\"><path d=\"M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z\"></path><path d=\"M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2\" fill=\"currentColor\" style=\"transform-origin: 130px 106px;\" class=\"octo-arm\"></path><path d=\"M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z\" fill=\"currentColor\" class=\"octo-body\"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
\t</div>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->loadTemplate("partials/page.html.twig", "docs.html.twig", 23)->display($context);
    }

    public function getTemplateName()
    {
        return "docs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  71 => 22,  65 => 18,  59 => 16,  57 => 15,  54 => 14,  48 => 12,  46 => 11,  43 => 10,  40 => 9,  36 => 1,  33 => 6,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% set tags = page.taxonomy.tag %}*/
/* {% if tags %}*/
/*     {% set progress = page.collection({'items':{'@taxonomy':{'category': 'docs', 'tag': tags}},'order': {'by': 'default', 'dir': 'asc'}}) %}*/
/* {% else %}*/
/*     {% set progress = page.collection({'items':{'@taxonomy':{'category': 'docs'}},'order': {'by': 'default', 'dir': 'asc'}}) %}*/
/* {% endif %}*/
/* */
/* {% block navigation %}*/
/* 	<div id="navigation">*/
/* 	{% if not progress.isFirst(page.path) %}*/
/* 	    <a class="nav nav-prev" href="{{ progress.nextSibling(page.path).url }}"> <i class="fa fa-chevron-left"></i></a>*/
/* 	{% endif %}*/
/* */
/* 	{% if not progress.isLast(page.path) %}*/
/* 	    <a class="nav nav-next" href="{{ progress.prevSibling(page.path).url }}"><i class="fa fa-chevron-right"></i></a>*/
/* 	{% endif %}*/
/*         <a href="https://github.com/MycroftAI/mycroft" class="github-corner"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#1C1F7A; color:#fff; position: absolute; top: 0; border: 0; right: 0;"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% include 'partials/page.html.twig' %}*/
/* {% endblock %}*/
/* */
