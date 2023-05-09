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

/* maintenance/show.html.twig */
class __TwigTemplate_9936724311cc01e747d670f9b4740b37 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "maintenance/show.html.twig", 1);
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

        echo "Maintenance";
        
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
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\"><b>Fiche de maintenance de ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 10, $this->source); })()), "vehicule", [], "any", false, false, false, 10), "matricule", [], "any", false, false, false, 10), "html", null, true);
        echo "</b></div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Type de maintenance:</th>
                                    <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 16, $this->source); })()), "objet", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Date début</th>
                                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 20, $this->source); })()), "datedebut", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Date fin</th>
                                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 24, $this->source); })()), "datefin", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Véhicule</th>
                                    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 28, $this->source); })()), "vehicule", [], "any", false, false, false, 28), "matricule", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_index");
        echo "\" class=\"btn btn-primary\">Retour à la liste</a>
                        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_edit", ["idmaintenance" => twig_get_attribute($this->env, $this->source, (isset($context["maintenance"]) || array_key_exists("maintenance", $context) ? $context["maintenance"] : (function () { throw new RuntimeError('Variable "maintenance" does not exist.', 35, $this->source); })()), "idmaintenance", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\" class=\"btn btn-secondary\">Modifier</a>
                        ";
        // line 36
        echo twig_include($this->env, $context, "maintenance/_delete_form.html.twig");
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "maintenance/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 36,  137 => 35,  133 => 34,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Maintenance{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\"><b>Fiche de maintenance de {{ maintenance.vehicule.matricule }}</b></div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>Type de maintenance:</th>
                                    <td>{{ maintenance.objet }}</td>
                                </tr>
                                <tr>
                                    <th>Date début</th>
                                    <td>{{ maintenance.datedebut|date('Y-m-d H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th>Date fin</th>
                                    <td>{{ maintenance.datefin|date('Y-m-d H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th>Véhicule</th>
                                    <td>{{ maintenance.vehicule.matricule }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"{{ path('app_maintenance_index') }}\" class=\"btn btn-primary\">Retour à la liste</a>
                        <a href=\"{{ path('app_maintenance_edit', {'idmaintenance': maintenance.idmaintenance}) }}\" class=\"btn btn-secondary\">Modifier</a>
                        {{ include('maintenance/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "maintenance/show.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\maintenance\\show.html.twig");
    }
}
