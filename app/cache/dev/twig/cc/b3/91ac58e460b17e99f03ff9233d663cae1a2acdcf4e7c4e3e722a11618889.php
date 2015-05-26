<?php

/* NFPlatformBundle:Activities:edit.html.twig */
class __TwigTemplate_ccb391ac58e460b17e99f03ff9233d663cae1a2acdcf4e7c4e3e722a11618889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NFPlatformBundle::layout.html.twig", "NFPlatformBundle:Activities:edit.html.twig", 1);
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
        echo "  Modifié une activité - ";
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


\t <h2>Edition de l'activité</h2>
\t \t
\t
\t\t<h4>Sous-catégorie : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "sousCategories", array()), "title", array()), "html", null, true);
        echo " du ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "date", array()), "d/m/Y"), "html", null, true);
        echo " </h4>

\t \t\t";
        // line 20
        echo twig_include($this->env, $context, "NFPlatformBundle:Activities:form.html.twig");
        echo "
    
\t <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#delete\">
 \t\tSupprimer l'activité
\t</button>\t
\t<div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t  <div class=\"modal-content\">
\t\t    <div class=\"modal-header\">
\t\t      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t      <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation</h4>
\t\t    </div>
\t\t    <div class=\"modal-body\">
\t\t     ";
        // line 33
        echo twig_include($this->env, $context, "NFPlatformBundle:Activities:delete.html.twig");
        echo "
\t\t    </div>
\t\t  </div>
\t\t</div>
\t</div>\t

";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle:Activities:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 33,  64 => 20,  57 => 18,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
