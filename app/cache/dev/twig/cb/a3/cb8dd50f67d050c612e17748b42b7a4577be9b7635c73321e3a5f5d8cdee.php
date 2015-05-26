<?php

/* NFPlatformBundle:Activities:comparaison.html.twig */
class __TwigTemplate_cba3cb8dd50f67d050c612e17748b42b7a4577be9b7635c73321e3a5f5d8cdee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NFPlatformBundle::layout.html.twig", "NFPlatformBundle:Activities:comparaison.html.twig", 1);
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
        echo "  Comparaison - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t

\t <h2>Comparaison des montants</h2>
\t \t<a class=\"btn btn-default\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_comparatif", array("week" => ((isset($context["week"]) ? $context["week"] : $this->getContext($context, "week")) - 1))), "html", null, true);
        echo "\"><span aria-hidden=\"true\">&larr;</span> Semaine précedente</a>

\t \tSemaine ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["week"]) ? $context["week"] : $this->getContext($context, "week")), "html", null, true);
        echo "

\t\t<a class=\"btn btn-default\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nf_platform_comparatif", array("week" => ((isset($context["week"]) ? $context["week"] : $this->getContext($context, "week")) + 1))), "html", null, true);
        echo "\">Semaine suivante <span aria-hidden=\"true\">&rarr;</span></a>
\t\t<!--Boucle principale-->
\t\t<p></p>
\t\t<div>
\t\t\t<h3>Montants de la semaine</h3>
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["montantsSemaine"]) ? $context["montantsSemaine"] : $this->getContext($context, "montantsSemaine")));
        foreach ($context['_seq'] as $context["_key"] => $context["montantSemaine"]) {
            // line 30
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                if (($context["user"] == $this->getAttribute($context["montantSemaine"], "user", array()))) {
                    // line 32
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["montantSemaine"], "montant", array())) {
                        // line 33
                        echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                        // line 34
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t<td>";
                        // line 35
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t<td class=\"success\">";
                        // line 36
                        echo twig_escape_filter($this->env, $this->getAttribute($context["montantSemaine"], "montant", array()), "html", null, true);
                        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['montantSemaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t</tbody>


\t\t\t</table>
\t\t</div>

\t\t<div role=\"tabpanel\">
\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCats"]) ? $context["listCats"] : $this->getContext($context, "listCats")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 50
            echo "\t\t\t\t<li role=\"presentation\" ><a href=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "\" aria-controls=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "title", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCats"]) ? $context["listCats"] : $this->getContext($context, "listCats")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 55
            echo "\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "\" >
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h3>Catégorie : ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "title", array()), "html", null, true);
            echo "</h3>
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["montantsCategorie"]) ? $context["montantsCategorie"] : $this->getContext($context, "montantsCategorie")));
            foreach ($context['_seq'] as $context["_key"] => $context["montantCat"]) {
                if (($this->getAttribute($context["montantCat"], "categories", array()) == $context["categorie"])) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 69
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        if (($context["user"] == $this->getAttribute($context["montantCat"], "user", array()))) {
                            // line 70
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["montantCat"], "montant", array())) {
                                // line 71
                                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                                // line 72
                                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
                                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                                // line 73
                                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
                                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"success\">";
                                // line 74
                                echo twig_escape_filter($this->env, $this->getAttribute($context["montantCat"], "montant", array()), "html", null, true);
                                echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                            }
                            // line 77
                            echo "\t\t\t\t\t\t\t\t";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "\t\t\t\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['montantCat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<div role=\"tabpanel\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist2\">
\t\t\t\t\t";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSousCats"]) ? $context["listSousCats"] : $this->getContext($context, "listSousCats")));
            foreach ($context['_seq'] as $context["_key"] => $context["sousCat"]) {
                if (($this->getAttribute($context["sousCat"], "categories", array()) == $context["categorie"])) {
                    // line 86
                    echo "\t\t\t\t\t\t<li role=\"presentation\" ><a href=\"#";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sousCat"], "id", array()), "html", null, true);
                    echo "\" aria-controls=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sousCat"], "id", array()), "html", null, true);
                    echo "\" role=\"tab\" data-toggle=\"tab\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sousCat"], "title", array()), "html", null, true);
                    echo "</a></li>

\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousCat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "
\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
            // line 93
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSousCats"]) ? $context["listSousCats"] : $this->getContext($context, "listSousCats")));
            foreach ($context['_seq'] as $context["_key"] => $context["sousCat"]) {
                if (($this->getAttribute($context["sousCat"], "categories", array()) == $context["categorie"])) {
                    // line 94
                    echo "\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sousCat"], "id", array()), "html", null, true);
                    echo "\" >
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<h4>";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sousCat"], "title", array()), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
                    // line 106
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["montantsSousCat"]) ? $context["montantsSousCat"] : $this->getContext($context, "montantsSousCat")));
                    foreach ($context['_seq'] as $context["_key"] => $context["montantSousCat"]) {
                        if (($this->getAttribute($context["montantSousCat"], "sousCategories", array()) == $context["sousCat"])) {
                            // line 107
                            echo "
\t\t\t\t\t\t\t\t";
                            // line 108
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                                if (($context["user"] == $this->getAttribute($context["montantSousCat"], "user", array()))) {
                                    // line 109
                                    echo "\t\t\t\t\t\t\t\t";
                                    if ($this->getAttribute($context["montantSousCat"], "montant", array())) {
                                        // line 110
                                        echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                                        // line 111
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
                                        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                                        // line 112
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
                                        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"success\">";
                                        // line 113
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["montantSousCat"], "montant", array()), "html", null, true);
                                        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                                    }
                                    // line 116
                                    echo "\t\t\t\t\t\t\t\t";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 117
                            echo "\t\t\t\t\t\t\t\t";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['montantSousCat'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousCat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "\t\t
    \t</div>
    \t</div>
\t <p>
  \t</p>

";
    }

    public function getTemplateName()
    {
        return "NFPlatformBundle:Activities:comparaison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 128,  336 => 123,  325 => 118,  318 => 117,  311 => 116,  305 => 113,  301 => 112,  297 => 111,  294 => 110,  291 => 109,  286 => 108,  283 => 107,  278 => 106,  265 => 96,  259 => 94,  254 => 93,  248 => 89,  233 => 86,  228 => 85,  220 => 79,  213 => 78,  206 => 77,  200 => 74,  196 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 69,  178 => 68,  173 => 67,  160 => 57,  154 => 55,  150 => 54,  146 => 52,  133 => 50,  129 => 49,  119 => 41,  113 => 40,  106 => 39,  100 => 36,  96 => 35,  92 => 34,  89 => 33,  86 => 32,  81 => 31,  78 => 30,  74 => 29,  57 => 15,  52 => 13,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
