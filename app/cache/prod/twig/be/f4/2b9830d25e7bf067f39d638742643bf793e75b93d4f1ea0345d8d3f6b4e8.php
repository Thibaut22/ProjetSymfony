<?php

/* NFPlatformBundle:Activities:add.html.twig */
class __TwigTemplate_bef42b9830d25e7bf067f39d638742643bf793e75b93d4f1ea0345d8d3f6b4e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NFPlatformBundle::layout.html.twig", "NFPlatformBundle:Activities:add.html.twig", 1);
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
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t <h2>Ajouter une activité</h2>
\t \t";
        // line 9
        echo twig_include($this->env, $context, "NFPlatformBundle:Activities:form.html.twig");
        echo "
\t <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  \t</p>

";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle:Activities:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
