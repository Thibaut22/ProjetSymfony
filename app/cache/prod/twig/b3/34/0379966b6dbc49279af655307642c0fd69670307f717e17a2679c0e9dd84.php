<?php

/* NFPlatformBundle:Security:login.html.twig */
class __TwigTemplate_b3340379966b6dbc49279af655307642c0fd69670307f717e17a2679c0e9dd84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "NFPlatformBundle:Security:login.html.twig", 2);
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
  ";
        // line 9
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 10
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 12
        echo "
  ";
        // line 14
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"form-horizontal\">
    <div class =\"form-group\">
       <label class =\"col-sm-2 control-label\" for=\"username\">Login :</label>
    
    <div class=\"col-sm-5\">
      <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        return array (  55 => 19,  46 => 14,  43 => 12,  37 => 10,  34 => 9,  31 => 7,  28 => 6,  11 => 2,);
    }
}
