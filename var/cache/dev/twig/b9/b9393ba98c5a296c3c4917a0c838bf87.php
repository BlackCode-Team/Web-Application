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
class __TwigTemplate_a624c4d2b6633f9988e45a7d693de75b extends \Twig\Template
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
          
    <form method =\"get\" action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">
<input type=\"text\" name=\"mm\" placeholder=\"Entrez le cin ou la matricule\">
<input type=\"submit\" value=\"search\">
</form> 
<form action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_filter");
        echo "\" method=\"get\">
        <label for=\"status\">Status:</label>
        <select name=\"status\" id=\"status\">
            <option value=\"Tous\">Tous</option>
            <option value=\"En cours\">En cours</option>
            <option value=\"Termine\">Termine</option>
        </select>
        <button type=\"submit\">Filtrer</button>
    </form>
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
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 49
            echo "            <tr>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>       
               <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "utilisateur", [], "any", false, false, false, 51), "cin", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
               <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "datedebut", [], "any", false, false, false, 52), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
               <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "datefin", [], "any", false, false, false, 53), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
               <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
               <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "prixreservation", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
               <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicule", [], "any", false, false, false, 56), "matricule", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
             <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "itineraire", [], "any", false, false, false, 57), "pointarrivee", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>



                <td>
                    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["idreservation" => twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["idreservation" => twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">edit</a>
               
                </td>
            </tr>
             ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
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
        // line 91
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
        return array (  226 => 91,  205 => 72,  196 => 68,  186 => 63,  182 => 62,  174 => 57,  170 => 56,  166 => 55,  162 => 54,  158 => 53,  154 => 52,  150 => 51,  146 => 50,  143 => 49,  138 => 48,  113 => 26,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
          
    <form method =\"get\" action=\"{{path('search')}}\">
<input type=\"text\" name=\"mm\" placeholder=\"Entrez le cin ou la matricule\">
<input type=\"submit\" value=\"search\">
</form> 
<form action=\"{{ path('reservation_filter') }}\" method=\"get\">
        <label for=\"status\">Status:</label>
        <select name=\"status\" id=\"status\">
            <option value=\"Tous\">Tous</option>
            <option value=\"En cours\">En cours</option>
            <option value=\"Termine\">Termine</option>
        </select>
        <button type=\"submit\">Filtrer</button>
    </form>
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
