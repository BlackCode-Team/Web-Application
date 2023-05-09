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

/* reservation/show.html.twig */
class __TwigTemplate_89d966290e88743d9c246e30fd653f7d extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/show.html.twig", 1);
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

        echo "Reservation";
        
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
    <h1 class=\"mb-5\">Reservation details</h1>

        <div class=\"row\">
        <div class=\"col-md-8\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Numero de reservation:</th>
                        <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 15, $this->source); })()), "idreservation", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Utilisateur:</th>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "utilisateur", [], "any", false, false, false, 19), "prenom", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Date debut:</th>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "datedebut", [], "any", false, false, false, 23), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Date Fin:</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "datefin", [], "any", false, false, false, 27), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 31, $this->source); })()), "status", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Prix:</th>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "prixreservation", [], "any", false, false, false, 35), "html", null, true);
        echo " 96 DT</td>
                    </tr>
                    <tr>
                        <th>Matricule:</th>
                        <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 39, $this->source); })()), "vehicule", [], "any", false, false, false, 39), "matricule", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Destination:</th>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 43, $this->source); })()), "itineraire", [], "any", false, false, false, 43), "pointarrivee", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <div class=\"my-5\">
                <a class=\"btn btn-primary\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_pdf", ["idreservation" => twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 49, $this->source); })()), "idreservation", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\">
                    Download PDF
                </a>
            </div>
        </div>
        <div class=\"col-md-4\">
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 49,  148 => 43,  141 => 39,  134 => 35,  127 => 31,  120 => 27,  113 => 23,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation{% endblock %}

{% block body %}
    <div class=\"container\">
    <h1 class=\"mb-5\">Reservation details</h1>

        <div class=\"row\">
        <div class=\"col-md-8\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Numero de reservation:</th>
                        <td>{{ reservation.idreservation }}</td>
                    </tr>
                    <tr>
                        <th>Utilisateur:</th>
                        <td>{{ reservation.utilisateur.prenom }}</td>
                    </tr>
                    <tr>
                        <th>Date debut:</th>
                        <td>{{ reservation.datedebut|date(\"Y-m-d H:i:s\") }}</td>
                    </tr>
                    <tr>
                        <th>Date Fin:</th>
                        <td>{{ reservation.datefin|date(\"Y-m-d H:i:s\") }}</td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td>{{ reservation.status }}</td>
                    </tr>
                    <tr>
                        <th>Prix:</th>
                        <td>{{ reservation.prixreservation }} 96 DT</td>
                    </tr>
                    <tr>
                        <th>Matricule:</th>
                        <td>{{ reservation.vehicule.matricule }}</td>
                    </tr>
                    <tr>
                        <th>Destination:</th>
                        <td>{{ reservation.itineraire.pointarrivee }}</td>
                    </tr>
                </tbody>
            </table>

            <div class=\"my-5\">
                <a class=\"btn btn-primary\" href=\"{{ path('reservation_pdf', { 'idreservation': reservation.idreservation }) }}\">
                    Download PDF
                </a>
            </div>
        </div>
        <div class=\"col-md-4\">
        </div>
    </div>
</div>

{% endblock %}
", "reservation/show.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\reservation\\show.html.twig");
    }
}
