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

/* historique/show.html.twig */
class __TwigTemplate_c29a811def22a013a20cbaf4f49383e4 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historique/show.html.twig", 1);
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

        echo "Historique";
        
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
        echo "    <h1>Historique</h1>

    <table class=\"table\">
        <tbody>  
                   <tr>

                <th>Numero réservation</th> 
                <th>Utilisateur</th>
                <th>Date Debut</th>
                <th>Date Fin</th>
                <th>status Reservation</th>
                <th>Tarification</th>
                <th>Matricule Voiture</th>
                <th>Point d'arrivée</th>

            </tr>
        </thead>           
                      <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 23, $this->source); })()), "reservation", [], "any", false, false, false, 23), "idreservation", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>       
               <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 24, $this->source); })()), "reservation", [], "any", false, false, false, 24), "utilisateur", [], "any", false, false, false, 24), "prenom", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
               <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 25, $this->source); })()), "reservation", [], "any", false, false, false, 25), "datedebut", [], "any", false, false, false, 25), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
               <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 26, $this->source); })()), "reservation", [], "any", false, false, false, 26), "datefin", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
               <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 27, $this->source); })()), "reservation", [], "any", false, false, false, 27), "status", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
               <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 28, $this->source); })()), "reservation", [], "any", false, false, false, 28), "prixreservation", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
               <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 29, $this->source); })()), "reservation", [], "any", false, false, false, 29), "vehicule", [], "any", false, false, false, 29), "matricule", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
             <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historique"]) || array_key_exists("historique", $context) ? $context["historique"] : (function () { throw new RuntimeError('Variable "historique" does not exist.', 30, $this->source); })()), "reservation", [], "any", false, false, false, 30), "itineraire", [], "any", false, false, false, 30), "pointarrivee", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>

            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_index");
        echo "\">back to list</a>

    ";
        // line 39
        echo "
    ";
        // line 40
        echo twig_include($this->env, $context, "historique/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "historique/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 40,  149 => 39,  144 => 36,  135 => 30,  131 => 29,  127 => 28,  123 => 27,  119 => 26,  115 => 25,  111 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Historique{% endblock %}

{% block body %}
    <h1>Historique</h1>

    <table class=\"table\">
        <tbody>  
                   <tr>

                <th>Numero réservation</th> 
                <th>Utilisateur</th>
                <th>Date Debut</th>
                <th>Date Fin</th>
                <th>status Reservation</th>
                <th>Tarification</th>
                <th>Matricule Voiture</th>
                <th>Point d'arrivée</th>

            </tr>
        </thead>           
                      <td>{{historique.reservation.idreservation }}</td>       
               <td>{{ historique.reservation.utilisateur.prenom }}</td>
               <td>{{ historique.reservation.datedebut|date(\"Y-m-d H:i:s\") }}</td>
               <td>{{ historique.reservation.datefin|date(\"Y-m-d H:i:s\") }}</td>
               <td>{{ historique.reservation.status }}</td>
               <td>{{ historique.reservation.prixreservation }}</td>
               <td>{{ historique.reservation.vehicule.matricule }}</td>
             <td>{{ historique.reservation.itineraire.pointarrivee }}</td>

            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_historique_index') }}\">back to list</a>

    {# <a href=\"{{ path('app_historique_edit', {'idhistorique': historique.idhistorique}) }}\">edit</a> #}

    {{ include('historique/_delete_form.html.twig') }}
{% endblock %}
", "historique/show.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\historique\\show.html.twig");
    }
}
