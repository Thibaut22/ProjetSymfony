<?php

/* NFPlatformBundle:Activities:formUser.html.twig */
class __TwigTemplate_c4e096fc85f5dd891e0a44f36fa67e5ee67f685cdcf13cfa122f5d8058f005b8 extends Twig_Template
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
        echo "<div class=\"well\">
\t";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t<div class=\"form-group\">
\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prénom"));
        echo "

\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
        echo "

\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom d'utilisateur"));
        echo "

\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Mot de passe"));
        echo "

\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "admin", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Administrateur"));
        echo "

\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "admin", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 43
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "admin", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t";
        } else {
            // line 46
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "admin", array()), 'widget', array("disabled" => true, "attr" => array("class" => "form-control")));
            echo "
\t\t\t";
        }
        // line 48
        echo "\t\t</div>
\t</div>
\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary ", "value" => "Valider")));
        echo "
     
    ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle:Activities:formUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 52,  129 => 50,  125 => 48,  119 => 46,  113 => 44,  111 => 43,  106 => 41,  101 => 39,  93 => 34,  88 => 32,  83 => 30,  76 => 26,  71 => 24,  66 => 22,  59 => 18,  54 => 16,  49 => 14,  42 => 10,  37 => 8,  32 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
