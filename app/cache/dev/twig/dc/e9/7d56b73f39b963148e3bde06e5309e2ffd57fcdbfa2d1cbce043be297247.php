<?php

/* default/hello.xml.twig */
class __TwigTemplate_dce97d56b73f39b963148e3bde06e5309e2ffd57fcdbfa2d1cbce043be297247 extends Twig_Template
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
        echo "<hello>
\t<name>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</name>
</hello>";
    }

    public function getTemplateName()
    {
        return "default/hello.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
