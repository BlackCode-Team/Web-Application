<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* offre/search.html.twig */
class __TwigTemplate_3e1ecdbd75fcce4a80106d1fe4217d3d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/search.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "offre/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Résultats de la recherche pour \"";
        echo twig_escape_filter($this->env, (isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\"</h1>

    ";
        // line 5
        if ((isset($context["util"]) || array_key_exists("util", $context) ? $context["util"] : (function () { throw new RuntimeError('Variable "util" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "       <table class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">
        <thead>
            <tr>
                <th>Idoffre</th>
                <th>Nom</th>
                <th>Tauxderemise</th>
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody> 
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["util"]) || array_key_exists("util", $context) ? $context["util"] : (function () { throw new RuntimeError('Variable "util" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 18
                echo "               <tr>
                <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "idoffre", [], "any", false, false, false, 19), "html", null, true);
                echo "</td>
                <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "nom", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
                <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "tauxderemise", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
                <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "description", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_show", ["idoffre" => twig_get_attribute($this->env, $this->source, $context["f"], "idoffre", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\">show</a>
                    <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_edit", ["idoffre" => twig_get_attribute($this->env, $this->source, $context["f"], "idoffre", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">edit</a>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </tbody>
    </table>
        <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_index");
            echo "\">back to list</a>
    ";
        } else {
            // line 33
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
    ";
        }
        // line 37
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offre/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 37,  136 => 33,  131 => 31,  127 => 29,  117 => 25,  113 => 24,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  93 => 18,  89 => 17,  76 => 6,  74 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}
{% block body %}
    <h1>Résultats de la recherche pour \"{{ searchValue }}\"</h1>

    {% if util %}
       <table class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">
        <thead>
            <tr>
                <th>Idoffre</th>
                <th>Nom</th>
                <th>Tauxderemise</th>
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody> 
            {% for f in util %}
               <tr>
                <td>{{ f.idoffre }}</td>
                <td>{{ f.nom }}</td>
                <td>{{ f.tauxderemise }}</td>
                <td>{{ f.description }}</td>
                <td>
                    <a href=\"{{ path('app_offre_show', {'idoffre': f.idoffre}) }}\">show</a>
                    <a href=\"{{ path('app_offre_edit', {'idoffre': f.idoffre}) }}\">edit</a>
                </td>
            </tr>
            {% endfor %}
            </tbody>
    </table>
        <a href=\"{{ path('app_offre_index') }}\">back to list</a>
    {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
    {% endif %}

{% endblock %}

   ", "offre/search.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\offre\\search.html.twig");
    }
}
