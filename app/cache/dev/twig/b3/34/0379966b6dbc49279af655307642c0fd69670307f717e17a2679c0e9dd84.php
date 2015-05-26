<?php

/* NFPlatformBundle:Security:login.html.twig */
class __TwigTemplate_b3340379966b6dbc49279af655307642c0fd69670307f717e17a2679c0e9dd84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NFPlatformBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        // line 5
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 8
        echo "  ";
        // line 9
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"form-horizontal\">
    <div class =\"form-group\">
       <label class =\"col-sm-2 control-label\" for=\"username\">Login :</label>
    
    <div class=\"col-sm-5\">
      <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Identifiant\" />
    </div>
    </div>
    <div class =\"form-group\">
        <label class =\"col-sm-2 control-label\" for=\"password\">Mot de passe :</label>
    
    <div class=\"col-sm-5\">
        <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" id=\"password\" name=\"_password\" />
    </div>
    </div>
    <br />
    <div class=\"form-group\">
      <div class=\"col-sm-offset-2 col-sm-10\">
          <input type=\"submit\" class=\"btn btn-default\" value=\"Connexion\" />
      </div>
    </div>
  </form>

";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  44 => 9,  42 => 8,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
