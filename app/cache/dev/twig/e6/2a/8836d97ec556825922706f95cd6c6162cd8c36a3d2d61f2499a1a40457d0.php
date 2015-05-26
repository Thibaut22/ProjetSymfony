<?php

/* NFPlatformBundle:Activities:addUser.html.twig */
class __TwigTemplate_e62a8836d97ec556825922706f95cd6c6162cd8c36a3d2d61f2499a1a40457d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NFPlatformBundle::layout.html.twig", "NFPlatformBundle:Activities:addUser.html.twig", 1);
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
        echo "  Nouvel utilisateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t
\t<h2>Ajout d'un utilisateur</h2>
\t
\t\t";
        // line 11
        echo twig_include($this->env, $context, "NFPlatformBundle:Activities:formUser.html.twig");
        echo "

\t

";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle:Activities:addUser.html.twig";
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
