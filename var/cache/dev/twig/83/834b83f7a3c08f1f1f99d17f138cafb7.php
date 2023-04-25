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

/* reservation/index.html.twig */
class __TwigTemplate_0f0417ecafaca08c3e796b86884ba324 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "reservation/index.html.twig", 1);
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

        echo "Reservation index";
        
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
                                <h4>Réservation </h4>
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

            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>       
               <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "utilisateur", [], "any", false, false, false, 37), "cin", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
               <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "datedebut", [], "any", false, false, false, 38), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
               <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "datefin", [], "any", false, false, false, 39), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
               <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
               <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "prixreservation", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
               <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicule", [], "any", false, false, false, 42), "matricule", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
             <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "itineraire", [], "any", false, false, false, 43), "pointarrivee", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>



                <td>
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["idreservation" => twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["idreservation" => twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">edit</a>
               
                </td>
            </tr>
             ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "           </tbody>
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
    <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 77,  185 => 58,  176 => 54,  166 => 49,  162 => 48,  154 => 43,  150 => 42,  146 => 41,  142 => 40,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  123 => 35,  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Reservation index{% endblock %}

    {% block body %}
        <div class=\"row\" id=\"cancel-row\">
            <div class=\"col-xl-12 col-lg-12 col-sm-12  layout-spacing\">
                <div class=\"statbox widget box box-shadow\">
                    <div class=\"widget-header\">
                        <div class=\"row\">
                            <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                <h4>Réservation </h4>
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

            </tr>
        </thead>
        <tbody>
        {% for reservation in reservations %}
            <tr>
                <td>{{ reservation.idreservation }}</td>       
               <td>{{ reservation.utilisateur.cin }}</td>
               <td>{{ reservation.datedebut|date(\"Y-m-d H:i:s\")}}</td>
               <td>{{ reservation.datefin|date(\"Y-m-d H:i:s\")}}</td>
               <td>{{ reservation.status }}</td>
               <td>{{ reservation.prixreservation }}</td>
               <td>{{ reservation.vehicule.matricule }}</td>
             <td>{{ reservation.itineraire.pointarrivee }}</td>



                <td>
                    <a href=\"{{ path('app_reservation_show', {'idreservation': reservation.idreservation}) }}\">show</a>
                    <a href=\"{{ path('app_reservation_edit', {'idreservation': reservation.idreservation}) }}\">edit</a>
               
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
    <a href=\"{{ path('app_reservation_new') }}\">Create new</a>
{% endblock %}
", "reservation/index.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\reservation\\index.html.twig");
    }
}
