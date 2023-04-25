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

/* historique/index.html.twig */
class __TwigTemplate_19d418a9b1d82088827b16511fe328b0 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historique/index.html.twig", 1);
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

        echo "Historique index";
        
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
        echo "        <div class=\"row\" id=\"cancel-row\">
            <div class=\"col-xl-12 col-lg-12 col-sm-12  layout-spacing\">
                <div class=\"statbox widget box box-shadow\">
                    <div class=\"widget-header\">
                        <div class=\"row\">
                            <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                <h4>Mon historique de Réservation </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"widget-content widget-content-area\">
                        <div class=\"table-responsive mb-4\">
                            <table id=\"zero-config\" class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">


        <thead>
            <tr>
                 <th>Numero réservation</th> 
                <th>Utilisateur</th>
                <th>Date Debut</th>
                <th>Date Fin</th>
                <th>status Reservation</th>
                <th>Tarification</th>
                <th>Matricule Voiture</th>
                <th>Point d'arrivée</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historiques"]) || array_key_exists("historiques", $context) ? $context["historiques"] : (function () { throw new RuntimeError('Variable "historiques" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["historique"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "reservation", [], "any", false, false, false, 37), "idreservation", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>       
               <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "reservation", [], "any", false, false, false, 38), "utilisateur", [], "any", false, false, false, 38), "cin", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
               <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "reservation", [], "any", false, false, false, 39), "datedebut", [], "any", false, false, false, 39), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
               <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "reservation", [], "any", false, false, false, 40), "datefin", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
               <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "reservation", [], "any", false, false, false, 41), "status", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
               <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "reservation", [], "any", false, false, false, 42), "prixreservation", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
               <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "reservation", [], "any", false, false, false, 43), "vehicule", [], "any", false, false, false, 43), "matricule", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
             <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "reservation", [], "any", false, false, false, 44), "itineraire", [], "any", false, false, false, 44), "pointarrivee", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_show", ["idhistorique" => twig_get_attribute($this->env, $this->source, $context["historique"], "idhistorique", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">show</a>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>
           </div>
                                  <div class=\"pagination-section\">
                                        <ul class=\"pagination pagination-style-1 pagination-rounded justify-content-end mt-3 mb-3\">
                                            <li><a href=\"javascript:void(0);\">«</a></li>
                                            <li><a href=\"javascript:void(0);\">1</a></li>
                                            <li><a href=\"javascript:void(0);\">2</a></li>
                                            <li><a href=\"javascript:void(0);\">3</a></li>
                                            <li><a href=\"javascript:void(0);\">4</a></li>
                                            <li><a href=\"javascript:void(0);\">5</a></li>
                                            <li><a href=\"javascript:void(0);\">»</a></li>
                                        </ul>
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
        return "historique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 55,  170 => 51,  160 => 46,  155 => 44,  151 => 43,  147 => 42,  143 => 41,  139 => 40,  135 => 39,  131 => 38,  127 => 37,  124 => 36,  119 => 35,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Historique index{% endblock %}

{% block body %}
        <div class=\"row\" id=\"cancel-row\">
            <div class=\"col-xl-12 col-lg-12 col-sm-12  layout-spacing\">
                <div class=\"statbox widget box box-shadow\">
                    <div class=\"widget-header\">
                        <div class=\"row\">
                            <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                <h4>Mon historique de Réservation </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"widget-content widget-content-area\">
                        <div class=\"table-responsive mb-4\">
                            <table id=\"zero-config\" class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">


        <thead>
            <tr>
                 <th>Numero réservation</th> 
                <th>Utilisateur</th>
                <th>Date Debut</th>
                <th>Date Fin</th>
                <th>status Reservation</th>
                <th>Tarification</th>
                <th>Matricule Voiture</th>
                <th>Point d'arrivée</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for historique in historiques %}
            <tr>
                <td>{{ historique.reservation.idreservation }}</td>       
               <td>{{ historique.reservation.utilisateur.cin }}</td>
               <td>{{ historique.reservation.datedebut|date(\"Y-m-d H:i:s\")}}</td>
               <td>{{ historique.reservation.datefin|date(\"Y-m-d H:i:s\")}}</td>
               <td>{{ historique.reservation.status }}</td>
               <td>{{ historique.reservation.prixreservation }}</td>
               <td>{{ historique.reservation.vehicule.matricule }}</td>
             <td>{{ historique.reservation.itineraire.pointarrivee }}</td>
                <td>
                    <a href=\"{{ path('app_historique_show', {'idhistorique': historique.idhistorique}) }}\">show</a>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
           </div>
                                  <div class=\"pagination-section\">
                                        <ul class=\"pagination pagination-style-1 pagination-rounded justify-content-end mt-3 mb-3\">
                                            <li><a href=\"javascript:void(0);\">«</a></li>
                                            <li><a href=\"javascript:void(0);\">1</a></li>
                                            <li><a href=\"javascript:void(0);\">2</a></li>
                                            <li><a href=\"javascript:void(0);\">3</a></li>
                                            <li><a href=\"javascript:void(0);\">4</a></li>
                                            <li><a href=\"javascript:void(0);\">5</a></li>
                                            <li><a href=\"javascript:void(0);\">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    {# <a href=\"{{ path('app_historique_new') }}\">Create new</a> #}
{% endblock %}
", "historique/index.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\historique\\index.html.twig");
    }
}
