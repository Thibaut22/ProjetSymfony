<?php

/* NFPlatformBundle:Activities:deleteUser.html.twig */
class __TwigTemplate_6326f86d17b81d6771e0cb79d973c10c5d7a07ce1e0bafbfb1325b2b8985aeea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NFPlatformBundle::layout.html.twig", "NFPlatformBundle:Activities:deleteUser.html.twig", 1);
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
\t<h2>Suppression utilisateur</h2>
\t
\t<p>
 \t  Etes-vous certain de vouloir supprimer l'utilisateur ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "
 \t</p>

 \t";
        // line 16
        echo " \t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_delete_user", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
 \t  <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("nf_platform_all_user");
        echo "\" class=\"btn btn-default\">
 \t    <i class=\"glyphicon glyphicon-chevron-left\"></i>
 \t    Retour à la liste
 \t  </a>
 \t  ";
        // line 22
        echo " \t  <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
 \t  ";
        // line 24
        echo " \t  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
 \t</form>

\t

";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle:Activities:deleteUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  68 => 22,  61 => 17,  56 => 16,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
