<?php

/* NFPlatformBundle:Activities:delete.html.twig */
class __TwigTemplate_965afc2a61191406fc8b1e9ae6d9ae179dc7c22c03d08f17c4e48fcdaa4bc00c extends Twig_Template
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
        echo "

\t
\t<h3>Suppression activité</h3>
\t
\t<p>
 \t  Etes-vous certain de vouloir supprimer cette activité

 \t";
        // line 10
        echo " \t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_delete", array("id" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
 \t  <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
 \t  ";
        // line 13
        echo " \t  <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
 \t  ";
        // line 15
        echo " \t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
 \t</form>

\t";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle:Activities:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  35 => 13,  29 => 10,  19 => 1,);
    }
}
