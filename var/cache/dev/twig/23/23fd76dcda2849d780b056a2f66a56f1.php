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

/* badge/search.html.twig */
class __TwigTemplate_0385b7cf452c5acfdcdbcedb4f14181d extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "badge/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "badge/search.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "badge/search.html.twig", 1);
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
                <th>Idbadge</th>
                <th>Typebadge</th>
                <th>Nbpoint</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody> 
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["util"]) || array_key_exists("util", $context) ? $context["util"] : (function () { throw new RuntimeError('Variable "util" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 17
                echo "               <tr>
                <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "idbadge", [], "any", false, false, false, 18), "html", null, true);
                echo "</td>
                <td>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "typebadge", [], "any", false, false, false, 19), "html", null, true);
                echo "</td>
                <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "nbpoint", [], "any", false, false, false, 20), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_badge_show", ["idbadge" => twig_get_attribute($this->env, $this->source, $context["f"], "idbadge", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">show</a>
                    <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_badge_edit", ["idbadge" => twig_get_attribute($this->env, $this->source, $context["f"], "idbadge", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\">edit</a>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
    </table>
        <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_index");
            echo "\">back to list</a>
    ";
        } else {
            // line 31
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
    ";
        }
        // line 35
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "badge/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 35,  131 => 31,  126 => 29,  122 => 27,  112 => 23,  108 => 22,  103 => 20,  99 => 19,  95 => 18,  92 => 17,  88 => 16,  76 => 6,  74 => 5,  68 => 3,  58 => 2,  35 => 1,);
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
                <th>Idbadge</th>
                <th>Typebadge</th>
                <th>Nbpoint</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody> 
            {% for f in util %}
               <tr>
                <td>{{ f.idbadge }}</td>
                <td>{{ f.typebadge }}</td>
                <td>{{ f.nbpoint }}</td>
                <td>
                    <a href=\"{{ path('app_badge_show', {'idbadge': f.idbadge}) }}\">show</a>
                    <a href=\"{{ path('app_badge_edit', {'idbadge': f.idbadge}) }}\">edit</a>
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

   ", "badge/search.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\badge\\search.html.twig");
    }
}
