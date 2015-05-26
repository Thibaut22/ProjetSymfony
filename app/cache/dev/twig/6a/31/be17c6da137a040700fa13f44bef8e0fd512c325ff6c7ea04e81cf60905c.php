<?php

/* NFPlatformBundle:Activities:form.html.twig */
class __TwigTemplate_6a31be17c6da137a040700fa13f44bef8e0fd512c325ff6c7ea04e81cf60905c extends Twig_Template
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
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t";
        // line 6
        if ((isset($context["add"]) ? $context["add"] : $this->getContext($context, "add"))) {
            // line 7
            echo "\t<div class=\"form-group\">
\t\t";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sousCategories", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Sous catégorie de l'activité"));
            echo "

\t\t";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sousCategories", array()), 'errors');
            echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sousCategories", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t</div>
\t</div>

\t<div class=\"form-group\">
\t\t";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de l'activité"));
            echo "

\t\t";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            echo "
\t\t</div>
\t</div>
\t";
        }
        // line 25
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Montant (si kilométrage, mettre le nombre)"));
        echo "

\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coment", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Commentaire"));
        echo "

\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coment", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary ", "value" => "Valider")));
        echo "
    ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle:Activities:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 44,  110 => 43,  104 => 40,  99 => 38,  94 => 36,  86 => 31,  81 => 29,  76 => 27,  72 => 25,  65 => 21,  60 => 19,  55 => 17,  47 => 12,  42 => 10,  37 => 8,  34 => 7,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
