<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_ddfbac3fcb415acba09776b2819459a9e4ef4fcc9f8007e230141712851f79c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BloggerBlogBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "About";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<header>
\t\t<h1>About symblog</h1>\t
\t</header>
\t<article>
\t\t<p>
\t\t\tDonec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
      amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
      Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
      urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
      tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
      condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
      vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
      lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
      posuere cubilia Curae.
    </p>
  </article>
 ";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
