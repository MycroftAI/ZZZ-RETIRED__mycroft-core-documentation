<?php

/* partials/page.html.twig */
class __TwigTemplate_6da66011857ad734b1b275d99309b77abd5eb8a6495540cdce9d366db474b988 extends Twig_Template
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
        echo "<div id=\"body-inner\">
<h1>";
        // line 2
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
<p>
\t";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div id="body-inner">*/
/* <h1>{{ page.title }}</h1>*/
/* <p>*/
/* 	{{ page.content }}*/
/* </p>*/
/* </div>*/
/* */
