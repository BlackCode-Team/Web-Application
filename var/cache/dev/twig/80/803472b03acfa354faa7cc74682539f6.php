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

/* amende/index.html.twig */
class __TwigTemplate_dbff05134f2d9d9253a1f369711668d0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amende/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amende/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "amende/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Amende index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"row\" id=\"cancel-row\">
            <div class=\"col-xl-12 col-lg-12 col-sm-12  layout-spacing\">
                <div class=\"statbox widget box box-shadow\">
                    <div class=\"widget-header\">
                        <div class=\"row\">
                            <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                <h4>Mon historique d'amendes </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"widget-content widget-content-area\">
                        <div class=\"table-responsive mb-4\">
                            <table id=\"zero-config\" class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">
<form action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amende_filter");
        echo "\" method=\"get\">
        <label for=\"statusamende\">Status:</label>
        <select name=\"statusamende\" id=\"statusamende\">
            <option value=\"Tous\">Tous</option>
            <option value=\"Paye\">Paye</option>
            <option value=\"Non Paye\">Non Paye</option>
        </select>
        <button type=\"submit\">Filtrer</button>
    </form>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Numero amende</th>
                <th>Date</th>
                <th>Montant</th>
                <th>Cause</th>
                <th>Description</th>
                <th>Status Amende</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["amendes"]) || array_key_exists("amendes", $context) ? $context["amendes"] : (function () { throw new RuntimeError('Variable "amendes" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["amende"]) {
            // line 42
            echo "            <tr>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amende"], "idamende", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            ((twig_get_attribute($this->env, $this->source, $context["amende"], "date", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amende"], "date", [], "any", false, false, false, 44), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amende"], "montant", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amende"], "cause", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amende"], "description", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amende"], "statusamende", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amende_show", ["idamende" => twig_get_attribute($this->env, $this->source, $context["amende"], "idamende", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amende_edit", ["idamende" => twig_get_attribute($this->env, $this->source, $context["amende"], "idamende", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amende'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amende_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "amende/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 62,  183 => 59,  174 => 55,  165 => 51,  161 => 50,  156 => 48,  152 => 47,  148 => 46,  144 => 45,  140 => 44,  136 => 43,  133 => 42,  128 => 41,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Amende index{% endblock %}

{% block body %}
  <div class=\"row\" id=\"cancel-row\">
            <div class=\"col-xl-12 col-lg-12 col-sm-12  layout-spacing\">
                <div class=\"statbox widget box box-shadow\">
                    <div class=\"widget-header\">
                        <div class=\"row\">
                            <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                <h4>Mon historique d'amendes </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"widget-content widget-content-area\">
                        <div class=\"table-responsive mb-4\">
                            <table id=\"zero-config\" class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">
<form action=\"{{ path('amende_filter') }}\" method=\"get\">
        <label for=\"statusamende\">Status:</label>
        <select name=\"statusamende\" id=\"statusamende\">
            <option value=\"Tous\">Tous</option>
            <option value=\"Paye\">Paye</option>
            <option value=\"Non Paye\">Non Paye</option>
        </select>
        <button type=\"submit\">Filtrer</button>
    </form>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Numero amende</th>
                <th>Date</th>
                <th>Montant</th>
                <th>Cause</th>
                <th>Description</th>
                <th>Status Amende</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for amende in amendes %}
            <tr>
                <td>{{ amende.idamende }}</td>
                <td>{{ amende.date ? amende.date|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ amende.montant }}</td>
                <td>{{ amende.cause }}</td>
                <td>{{ amende.description }}</td>
                <td>{{ amende.statusamende }}</td>
                <td>
                    <a href=\"{{ path('app_amende_show', {'idamende': amende.idamende}) }}\">show</a>
                    <a href=\"{{ path('app_amende_edit', {'idamende': amende.idamende}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_amende_new') }}\">Create new</a>
{% endblock %}
", "amende/index.html.twig", "C:\\Users\\ychaa\\OneDrive\\Documents\\GitHub\\Web-Application\\templates\\amende\\index.html.twig");
    }
}
