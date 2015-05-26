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
        echo "
<h3>Formulaire d'ajout d'une activité</h3>


<div class=\"well\">
\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

\t<div class=\"form-group\">
\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sousCategories", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Sous catégorie de l'activité"));
        echo "

\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sousCategories", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sousCategories", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de l'activité"));
        echo "

\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget');
        echo "
\t\t</div>
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "montant", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Montant (si kilométrage, mettre le nombre)"));
        echo "

\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "montant", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "montant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t<div class=\"form-group\">
\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "coment", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Commentaire"));
        echo "

\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "coment", array()), 'errors');
        echo "
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "coment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary ", "value" => "Valider")));
        echo "


 \t";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        return array (  113 => 48,  107 => 45,  100 => 41,  95 => 39,  90 => 37,  82 => 32,  77 => 30,  72 => 28,  64 => 23,  59 => 21,  54 => 19,  47 => 15,  42 => 13,  37 => 11,  31 => 8,  26 => 6,  19 => 1,);
    }
}
