<?php

/* NFPlatformBundle:Activities:viewAllUser.html.twig */
class __TwigTemplate_254462a20750678a9b1db10b15c5c96ca954b27e12d5d0942157622759ced7f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NFPlatformBundle::layout.html.twig", "NFPlatformBundle:Activities:viewAllUser.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nfplatform_body' => array($this, 'block_nfplatform_body'),
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
        echo "  Liste Utilisateurs - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_nfplatform_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "        <p class=\"alert alert-success\" >";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
\t<h2>Liste des utilisateurs</h2>

\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<th>Nom d'utilisateur</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 27
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userName", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><a title=\"Tableau de ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_home", array("param" => "this week", "id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<span  class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>
\t\t\t\t\t</a><a title=\"Edition de ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_edit_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<span  class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<a title=\"Supprimer ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_delete_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<span  class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t
\t\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle:Activities:viewAllUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  112 => 37,  104 => 34,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  78 => 27,  74 => 26,  58 => 12,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
