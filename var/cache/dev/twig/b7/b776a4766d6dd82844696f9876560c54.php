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
class __TwigTemplate_42457d7737ec5edfdb9f9ac0f0d6db69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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
                                <h4>Reservation index</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"widget-content widget-content-area\">
                        <div class=\"table-responsive mb-4\">
                            <table id=\"zero-config\" class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">

        <thead>
            <tr>
                <th>Idreservation</th> 
                <th>datedebut</th>
                <th>datefin</th>
                <th>status</th>
                <th>prixreservation</th>

            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>       
               <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "datedebut", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true);
            echo "</td>
               <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "datefin", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
            echo "</td>
               <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
               <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "prixreservation", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
               


                <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_show", ["idreservation" => twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["idreservation" => twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">edit</a>
               
                </td>
            </tr>
             ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        // line 71
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
        return array (  191 => 71,  170 => 52,  161 => 48,  151 => 43,  147 => 42,  139 => 37,  135 => 36,  131 => 35,  127 => 34,  123 => 33,  120 => 32,  115 => 31,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation index{% endblock %}

    {% block body %}
        <div class=\"row\" id=\"cancel-row\">
            <div class=\"col-xl-12 col-lg-12 col-sm-12  layout-spacing\">
                <div class=\"statbox widget box box-shadow\">
                    <div class=\"widget-header\">
                        <div class=\"row\">
                            <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                <h4>Reservation index</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"widget-content widget-content-area\">
                        <div class=\"table-responsive mb-4\">
                            <table id=\"zero-config\" class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">

        <thead>
            <tr>
                <th>Idreservation</th> 
                <th>datedebut</th>
                <th>datefin</th>
                <th>status</th>
                <th>prixreservation</th>

            </tr>
        </thead>
        <tbody>
        {% for reservation in reservations %}
            <tr>
                <td>{{ reservation.idreservation }}</td>       
               <td>{{ reservation.datedebut|date('Y-m-d') }}</td>
               <td>{{ reservation.datefin|date('Y-m-d') }}</td>
               <td>{{ reservation.status }}</td>
               <td>{{ reservation.prixreservation }}</td>
               


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
", "reservation/index.html.twig", "C:\\Users\\ychaa\\OneDrive\\Documents\\GitHub\\Web-Application\\templates\\reservation\\index.html.twig");
    }
}
