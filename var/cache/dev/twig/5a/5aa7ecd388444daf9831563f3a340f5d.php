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

/* maintenance/index.html.twig */
class __TwigTemplate_4e43f9d49f4bbce8aeae689e743e157a extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "maintenance/index.html.twig", 1);
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
        echo "<div class=\"container-fluid\">
<h1 class=\"my-4\">Liste des maintenances</h1>
<div class=\"row mb-3\">
<div class=\"col-md-12\">
<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_new");
        echo "\" class=\"btn btn-primary\">Nouvelle maintenance</a>
</div>
</div>
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"card\">
<div class=\"card-body\">
<div class=\"table-responsive mt-4\">
<table class=\"table table-striped table-bordered table-hover\">
<thead class=\"thead-dark\">
<tr>
<th>Id</th>
<th>Objet</th>
<th>Date début</th>
<th>Date fin</th>
<th>Véhicule</th>
<th>Action</th>
</tr>
</thead>
<tbody>
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["maintenance"]) {
            // line 31
            echo "<tr>
<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maintenance"], "idmaintenance", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maintenance"], "objet", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maintenance"], "datedebut", [], "any", false, false, false, 34), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maintenance"], "datefin", [], "any", false, false, false, 35), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["maintenance"], "vehicule", [], "any", false, false, false, 36), "matricule", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
<td>
<div class=\"btn-group\" role=\"group\">
<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_show", ["idmaintenance" => twig_get_attribute($this->env, $this->source, $context["maintenance"], "idmaintenance", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Voir</a>
<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maintenance_edit", ["idmaintenance" => twig_get_attribute($this->env, $this->source, $context["maintenance"], "idmaintenance", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
";
            // line 41
            echo twig_include($this->env, $context, "maintenance/_delete_form.html.twig");
            echo "
</div>
</td>
</tr>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 46
            echo "<tr>
<td colspan=\"6\">Aucune maintenance trouvée.</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maintenance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</tbody>
</table>
</div>
<div class=\"pagination mt-3\">
";
        // line 54
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 54, $this->source); })()));
        echo "
</div>
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
        return "maintenance/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 54,  195 => 50,  186 => 46,  168 => 41,  164 => 40,  160 => 39,  154 => 36,  150 => 35,  146 => 34,  142 => 33,  138 => 32,  135 => 31,  117 => 30,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Maintenance{% endblock %}

{% block body %}
<div class=\"container-fluid\">
<h1 class=\"my-4\">Liste des maintenances</h1>
<div class=\"row mb-3\">
<div class=\"col-md-12\">
<a href=\"{{ path('app_maintenance_new') }}\" class=\"btn btn-primary\">Nouvelle maintenance</a>
</div>
</div>
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"card\">
<div class=\"card-body\">
<div class=\"table-responsive mt-4\">
<table class=\"table table-striped table-bordered table-hover\">
<thead class=\"thead-dark\">
<tr>
<th>Id</th>
<th>Objet</th>
<th>Date début</th>
<th>Date fin</th>
<th>Véhicule</th>
<th>Action</th>
</tr>
</thead>
<tbody>
{% for maintenance in maintenances %}
<tr>
<td>{{ maintenance.idmaintenance }}</td>
<td>{{ maintenance.objet }}</td>
<td>{{ maintenance.datedebut|date('Y-m-d H:i:s') }}</td>
<td>{{ maintenance.datefin|date('Y-m-d H:i:s') }}</td>
<td>{{ maintenance.vehicule.matricule }}</td>
<td>
<div class=\"btn-group\" role=\"group\">
<a href=\"{{ path('app_maintenance_show', {'idmaintenance': maintenance.idmaintenance}) }}\" class=\"btn btn-info\">Voir</a>
<a href=\"{{ path('app_maintenance_edit', {'idmaintenance': maintenance.idmaintenance}) }}\" class=\"btn btn-warning\">Modifier</a>
{{ include('maintenance/_delete_form.html.twig') }}
</div>
</td>
</tr>
{% else %}
<tr>
<td colspan=\"6\">Aucune maintenance trouvée.</td>
</tr>
{% endfor %}
</tbody>
</table>
</div>
<div class=\"pagination mt-3\">
{{ knp_pagination_render(maintenances) }}
</div>
</div>
</div>
</div>
</div>
</div>
{% endblock %}", "maintenance/index.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\Web-Application\\templates\\maintenance\\index.html.twig");
    }
}
