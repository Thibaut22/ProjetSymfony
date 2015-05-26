<?php

/* NFPlatformBundle:Activities:index.html.twig */
class __TwigTemplate_41d158dd485283342322f4ac7c15e1b8face2ebc8772ccf983bf113f2d3f75c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NFPlatformBundle::layout.html.twig", "NFPlatformBundle:Activities:index.html.twig", 1);
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
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_nfplatform_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<a class=\"btn btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_home", array("year" => twig_date_format_filter($this->env,         // line 9
(isset($context["current"]) ? $context["current"] : null), "Y"), "month" => twig_date_format_filter($this->env,         // line 10
(isset($context["current"]) ? $context["current"] : null), "m"), "day" => twig_date_format_filter($this->env,         // line 11
(isset($context["current"]) ? $context["current"] : null), "d"), "param" => "last week")), "html", null, true);
        // line 13
        echo "\" role=\"button\">Semaine précedente</a>

\t<a class=\"btn btn-default\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("nf_platform_add");
        // line 16
        echo "\" role=\"button\">Ajouter une activité</a>

\t<a class=\"btn btn-default\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_home", array("year" => twig_date_format_filter($this->env,         // line 19
(isset($context["current"]) ? $context["current"] : null), "Y"), "month" => twig_date_format_filter($this->env,         // line 20
(isset($context["current"]) ? $context["current"] : null), "m"), "day" => twig_date_format_filter($this->env,         // line 21
(isset($context["current"]) ? $context["current"] : null), "d"), "param" => "next week")), "html", null, true);
        // line 23
        echo "\" role=\"button\">Semaine suivante</a>
\t<table class=\"table table-bordered\">
\t\t<tr >
\t\t\t<th>  </th>
\t\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["period"]) ? $context["period"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 28
            echo "
\t \t\t<th >";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "D-d/m/Y"), "html", null, true);
            echo "</th>
\t\t\t
\t \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t</tr>
\t\t
\t\t\t";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCats"]) ? $context["listCats"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 35
            echo "\t\t\t<tr class=\"active\"><th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "title", array()), "html", null, true);
            echo "</th></tr>
\t\t\t
\t\t\t\t";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSousCats"]) ? $context["listSousCats"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["sousCat"]) {
                if (($context["categorie"] == $this->getAttribute($context["sousCat"], "categories", array()))) {
                    // line 38
                    echo "\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sousCat"], "title", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                    // line 44
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["period"]) ? $context["period"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                        // line 45
                        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<td>  
\t\t\t\t\t\t";
                        // line 47
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                            // line 48
                            echo "\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["activite"], "sousCategories", array()) == $context["sousCat"])) {
                                // line 49
                                echo "\t\t\t\t\t\t\t";
                                if ((twig_date_format_filter($this->env, $context["date"], "d/m/Y") == twig_date_format_filter($this->env, $this->getAttribute($context["activite"], "date", array()), "d/m/Y"))) {
                                    // line 50
                                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t ";
                                    // line 51
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "montant", array()), "html", null, true);
                                    echo "
\t\t\t\t\t\t\t";
                                } else {
                                    // line 53
                                    echo "\t\t\t\t\t\t\t";
                                }
                                // line 54
                                echo "\t\t\t\t\t\t\t";
                            }
                            // line 55
                            echo "\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 56
                        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t
\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousCat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t


\t </table>

";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle:Activities:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 65,  172 => 64,  161 => 59,  153 => 56,  147 => 55,  144 => 54,  141 => 53,  136 => 51,  133 => 50,  130 => 49,  127 => 48,  123 => 47,  119 => 45,  115 => 44,  110 => 42,  104 => 38,  99 => 37,  93 => 35,  89 => 34,  85 => 32,  76 => 29,  73 => 28,  69 => 27,  63 => 23,  61 => 21,  60 => 20,  59 => 19,  58 => 18,  54 => 16,  52 => 15,  48 => 13,  46 => 11,  45 => 10,  44 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
