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
        echo "  Ajouter une activité - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div>
\t\t<a class=\"btn btn-default\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("nf_platform_home");
        // line 10
        echo "\" role=\"button\"> <span aria-hidden=\"true\">&larr;</span> Retour semaine actuelle</a>

\t</div>


\t <h2>Ajouter une activité</h2>
\t ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "        <p class=\"alert alert-warning\" >";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
      <h4 class=\"modal-title\" id=\"myModalLabel\">Formulaire d'ajout d'une activité</h4>
\t \t";
        // line 21
        echo twig_include($this->env, $context, "NFPlatformBundle:Activities:form.html.twig");
        echo "
\t <p>
    Attention : cette activité sera ajoutée directement
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
        return array (  72 => 21,  68 => 19,  59 => 17,  55 => 16,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
