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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t
\t ";
        // line 6
        $this->displayBlock('nfplatform_body', $context, $blocks);
        // line 8
        echo "
";
    }

    // line 6
    public function block_nfplatform_body($context, array $blocks = array())
    {
        // line 7
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
        return array (  45 => 7,  42 => 6,  37 => 8,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
