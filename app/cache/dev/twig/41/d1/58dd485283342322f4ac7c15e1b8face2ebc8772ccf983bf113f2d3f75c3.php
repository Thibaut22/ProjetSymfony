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
        echo "\t<h2>Tableau d'activités<small>  du lundi ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["debut"]) ? $context["debut"] : $this->getContext($context, "debut")), "d-m-Y"), "html", null, true);
        echo " au dimanche ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin")), "d-m-Y"), "html", null, true);
        echo "</small></h2>
\t\t<hr>
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <p class=\"alert alert-success\" >";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
\t<div class=\"well\">

\t<p>Importer un excel pré-rempli :</p>
\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["import"]) ? $context["import"] : $this->getContext($context, "import")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["import"]) ? $context["import"] : $this->getContext($context, "import")), 'errors');
        echo "
\t\t<div class=\"form-group col-sm-7\">
\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["import"]) ? $context["import"] : $this->getContext($context, "import")), "file", array()), 'widget');
        echo "
\t\t</div>
\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["import"]) ? $context["import"] : $this->getContext($context, "import")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary ", "value" => "Valider")));
        echo "
\t";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["import"]) ? $context["import"] : $this->getContext($context, "import")), 'form_end');
        echo "
\t</div>

\t<div class=\"col-md-offset-2\">
\t<div class=\"btn-group\" role=\"group\" >
\t\t
\t\t<a class=\"btn btn-default\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_home", array("year" => twig_date_format_filter($this->env,         // line 31
(isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "Y"), "month" => twig_date_format_filter($this->env,         // line 32
(isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "m"), "day" => twig_date_format_filter($this->env,         // line 33
(isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "d"), "param" => "last week", "id" => $this->getAttribute(        // line 34
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        // line 35
        echo "\" role=\"button\"> <span aria-hidden=\"true\">&larr;</span> Semaine précedente</a>
\t
\t\t
\t\t";
        // line 38
        if ((twig_date_format_filter($this->env, (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")), "W") > twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "W"))) {
            // line 39
            echo "\t\t\t<a  class=\"btn btn-default disabled\" role=\"button\">
\t\t\t<span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
\t\t\t  Ajouter une activité</a>

\t\t";
        } else {
            // line 43
            echo "\t
\t\t\t<a  href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_add", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\"\tclass=\"btn btn-default\" role=\"button\">
\t\t\t<span class=\"glyphicon glyphicon-plus\" \taria-hidden=\"true\"></span>
\t\t\t  Ajouter une activité</a>
\t\t";
        }
        // line 48
        echo "
\t
\t\t<a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_excel", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-export\" aria-hidden=\"true\"></span> Export au format Excel</a>
\t
\t\t<a class=\"btn btn-default\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_home", array("year" => twig_date_format_filter($this->env,         // line 53
(isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "Y"), "month" => twig_date_format_filter($this->env,         // line 54
(isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "m"), "day" => twig_date_format_filter($this->env,         // line 55
(isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "d"), "param" => "next week", "id" => $this->getAttribute(        // line 56
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        // line 57
        echo "\" role=\"button\">Semaine suivante <span aria-hidden=\"true\">&rarr;</span></a>
\t\t</div>
\t</div>

\t<table class=\"table table-bordered\">
\t\t<tr class=\"active\" >
\t\t\t<th>  </th>
\t\t\t";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 65
            echo "
\t \t\t<th >";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "d/m/Y"), "html", null, true);
            echo "</th>
\t\t\t
\t \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t \t\t<th>Totaux sous catégories</th>
\t\t</tr>
\t\t\t";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCats"]) ? $context["listCats"] : $this->getContext($context, "listCats")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 72
            echo "\t\t\t<tr class=\"active\"><th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "title", array()), "html", null, true);
            echo "</th></tr>
\t\t\t\t";
            // line 73
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSousCats"]) ? $context["listSousCats"] : $this->getContext($context, "listSousCats")));
            foreach ($context['_seq'] as $context["_key"] => $context["sousCat"]) {
                if (($context["categorie"] == $this->getAttribute($context["sousCat"], "categories", array()))) {
                    // line 74
                    echo "\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sousCat"], "title", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                    // line 78
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")));
                    foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                        // line 79
                        echo "\t\t\t\t\t\t";
                        if ((twig_date_format_filter($this->env, $context["date"], "d/m/Y") == twig_date_format_filter($this->env, (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")), "d/m/Y"))) {
                            // line 80
                            echo "\t\t\t\t\t\t<td class=\"info\">  
\t\t\t\t\t\t";
                        } else {
                            // line 82
                            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t";
                        }
                        // line 84
                        echo "\t\t\t\t\t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : $this->getContext($context, "activities")));
                        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
                            if ((twig_date_format_filter($this->env, $context["date"], "d/m/Y") == twig_date_format_filter($this->env, $this->getAttribute($context["activite"], "date", array()), "d/m/Y"))) {
                                // line 85
                                echo "\t\t\t\t\t\t\t";
                                if (($this->getAttribute($context["activite"], "sousCategories", array()) == $context["sousCat"])) {
                                    // line 86
                                    echo "\t\t\t\t\t\t\t\t<a data-toogle=\"tooltip\" data-placement=\"bottom\" title=\"Commentaire : ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "coment", array()), "html", null, true);
                                    echo "\" href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_edit", array("id" => $this->getAttribute($context["activite"], "id", array()))), "html", null, true);
                                    echo "\" >";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["activite"], "montant", array()), "html", null, true);
                                    echo "</a>
\t\t\t\t\t\t\t";
                                }
                                // line 88
                                echo "\t\t\t\t\t\t";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 89
                        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["montantsSousCat"]) ? $context["montantsSousCat"] : $this->getContext($context, "montantsSousCat")));
                    foreach ($context['_seq'] as $context["_key"] => $context["montantSousCat"]) {
                        // line 92
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["montantSousCat"], "sousCategories", array()) == $context["sousCat"])) {
                            // line 93
                            echo "\t\t\t\t\t\t\t\t<td class=\"success\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["montantSousCat"], "montant", array()), "html", null, true);
                            echo "</td>
\t\t\t\t\t\t\t";
                        }
                        // line 95
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['montantSousCat'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "\t\t\t\t</tr>

\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousCat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t\t<tr class=\"success\">
\t\t\t\t\t<td>
\t\t\t\t\t\tTotal
\t\t\t\t\t</td>
\t\t\t\t\t";
            // line 103
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")));
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                // line 104
                echo "\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["montantsJour"]) ? $context["montantsJour"] : $this->getContext($context, "montantsJour")));
                foreach ($context['_seq'] as $context["_key"] => $context["montantJour"]) {
                    if (($this->getAttribute($context["montantJour"], "date", array()) == $context["date"])) {
                        // line 105
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["montantJour"], "categories", array()) == $context["categorie"])) {
                            // line 106
                            echo "\t\t\t\t\t\t\t\t<td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["montantJour"], "montant", array()), "html", null, true);
                            echo "</td>
\t\t\t\t\t\t\t";
                        }
                        // line 108
                        echo "\t\t\t\t\t\t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['montantJour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["montantsCategorie"]) ? $context["montantsCategorie"] : $this->getContext($context, "montantsCategorie")));
            foreach ($context['_seq'] as $context["_key"] => $context["montantCat"]) {
                // line 111
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["montantCat"], "Categories", array()) == $context["categorie"])) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["montantCat"], "montant", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t";
                }
                // line 114
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['montantCat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t\t\t\t</tr>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "\t\t\t
\t\t<tr>
\t\t\t<td> Total Jours </td>
\t\t\t";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["montantsTotalJour"]) ? $context["montantsTotalJour"] : $this->getContext($context, "montantsTotalJour")));
        foreach ($context['_seq'] as $context["_key"] => $context["montantTJour"]) {
            // line 122
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")));
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                if (($this->getAttribute($context["montantTJour"], "date", array()) == $context["date"])) {
                    // line 123
                    echo "\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["montantTJour"], "montant", array()), "html", null, true);
                    echo "</td>
\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['montantTJour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t\t</tr>\t
\t\t<tr>
\t\t\t<td>Total semaine</td>
\t\t\t<td colspan=\"7\"></td>
\t\t\t<td>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["montantSemaine"]) ? $context["montantSemaine"] : $this->getContext($context, "montantSemaine")), "montant", array()), "html", null, true);
        echo "</td>

\t\t</tr>

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
        return array (  374 => 130,  368 => 126,  362 => 125,  352 => 123,  346 => 122,  342 => 121,  337 => 118,  323 => 114,  317 => 112,  314 => 111,  309 => 110,  303 => 109,  296 => 108,  290 => 106,  287 => 105,  281 => 104,  277 => 103,  271 => 99,  262 => 96,  256 => 95,  250 => 93,  247 => 92,  242 => 91,  235 => 89,  228 => 88,  218 => 86,  215 => 85,  209 => 84,  205 => 82,  201 => 80,  198 => 79,  194 => 78,  189 => 76,  185 => 74,  180 => 73,  175 => 72,  171 => 71,  167 => 69,  158 => 66,  155 => 65,  151 => 64,  142 => 57,  140 => 56,  139 => 55,  138 => 54,  137 => 53,  136 => 52,  131 => 50,  127 => 48,  120 => 44,  117 => 43,  110 => 39,  108 => 38,  103 => 35,  101 => 34,  100 => 33,  99 => 32,  98 => 31,  97 => 30,  88 => 24,  84 => 23,  79 => 21,  74 => 19,  69 => 17,  63 => 13,  54 => 11,  50 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
