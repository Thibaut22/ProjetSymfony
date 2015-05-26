<?php

/* NFPlatformBundle::layout.html.twig */
class __TwigTemplate_123f9f2252833741d1b2c8f77fc2b7511e72af670b551a18fcf6201abdb3ac90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NFPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'nfplatform_body' => array($this, 'block_nfplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t\t<h1>Activities</h1>
\t\t<hr>
\t ";
        // line 10
        $this->displayBlock('nfplatform_body', $context, $blocks);
        // line 12
        echo "
";
    }

    // line 10
    public function block_nfplatform_body($context, array $blocks = array())
    {
        // line 11
        echo "  ";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  54 => 10,  49 => 12,  47 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
