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
    <div id=\"header\" class=\"jumbotron\">
      <h2>Ma plateforme de notes de frais</h2>
      <p>
        Ce projet est propulsé par Symfony2,
        et construit par Thibaut CHAUMONT.
      </p>
      
      </p>
    </div>

    <div class=\"row\">
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 29
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
            // line 30
            echo "          <p>Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo ".</p>
        ";
        }
        // line 32
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "OC Plateforme";
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

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "        ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        // line 46
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
        return array (  118 => 46,  116 => 45,  113 => 44,  109 => 33,  106 => 32,  101 => 11,  99 => 10,  96 => 9,  90 => 7,  84 => 49,  82 => 44,  75 => 40,  67 => 34,  64 => 32,  58 => 30,  56 => 29,  38 => 13,  36 => 9,  31 => 7,  23 => 1,);
    }
}
