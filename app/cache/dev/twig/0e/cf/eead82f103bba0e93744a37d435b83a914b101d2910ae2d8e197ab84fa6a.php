<?php

/* ::layout.html.twig */
class __TwigTemplate_0ecfeead82f103bba0e93744a37d435b83a914b101d2910ae2d8e197ab84fa6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"page-header\">
      <h1>Plateforme de notes de frais</h1>
      
      
      </p>
    </div>

    <div class=\"row\">
      <div id=\"content\" >
        ";
        // line 26
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 27
            echo "          <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
              <ul class=\"nav navbar-nav\">
                  
                  <li><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("nf_platform_home");
            echo "\">Tableau des notes de frais</a><li>

                  ";
            // line 33
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 34
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("nf_platform_all_user");
                echo "\">Liste utilisateurs</a><li>
                    <li><a href=\"";
                // line 35
                echo $this->env->getExtension('routing')->getPath("nf_platform_comparatif");
                echo "\">Comparatif des montants</a><li>
                    <li><a href=\"";
                // line 36
                echo $this->env->getExtension('routing')->getPath("nf_platform_add_user");
                echo "\">Ajouter un utilisateur</a><li>
                  ";
            }
            // line 38
            echo "              </ul>
              <div class=\"navbar-right\">
                <ul class=\"nav navbar-nav\">
                  <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_edit_user", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Modifier profil</a><li>
                </ul>
                <p class=\"navbar-text \"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> Compte connecté: ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </p><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"class=\"btn btn-default navbar-btn \">Se déconnecter</a></div>
                
            </div><!-- /.container-fluid -->
          </nav>
        ";
        }
        // line 48
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p> NFPlatform ";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " by Chaumont Thibaut. Fais avec Symfony2 et Bootstrap</p>
      
    </footer>
  </div>

  ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Notes de frais";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
  ";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "        ";
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        // line 63
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 63,  155 => 62,  152 => 61,  148 => 49,  145 => 48,  140 => 11,  138 => 10,  135 => 9,  129 => 7,  123 => 66,  121 => 61,  113 => 56,  105 => 50,  102 => 48,  92 => 43,  87 => 41,  82 => 38,  77 => 36,  73 => 35,  68 => 34,  66 => 33,  61 => 31,  55 => 27,  53 => 26,  38 => 13,  36 => 9,  31 => 7,  23 => 1,);
    }
}
