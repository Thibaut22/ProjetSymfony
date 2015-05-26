<?php

/* NFPlatformBundle:Activities:editUser.html.twig */
class __TwigTemplate_e54c3472a1e5a0e558222c8f47bc4c36f8d922e85e63ecbd7386f8c682f567a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NFPlatformBundle::layout.html.twig", "NFPlatformBundle:Activities:editUser.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NFPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Edition utilisateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t
\t<h2>Edition d'un utilisateur</h2>
\t
\t\t";
        // line 11
        echo twig_include($this->env, $context, "NFPlatformBundle:Activities:formUser.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle:Activities:editUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
