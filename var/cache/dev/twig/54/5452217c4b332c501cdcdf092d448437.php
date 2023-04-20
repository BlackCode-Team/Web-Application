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

/* itineraire/index.html.twig */
class __TwigTemplate_5d559aa4153fc2dae78fb5b16ca7d7d9 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "itineraire/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "      <div class=\"row\">
                                                               
                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing\">
                        <div class=\"statbox widget box\">
                            <div class=\"widget-header \">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                        <h4>List des Postion</h4>
                                    </div>                 
                                </div>
                            </div>

                            <div class=\"widget-content-area \">

                                <div class=\"table-responsive new-products\">
                                   <table class=\"table\">
        <thead>
            <tr>
                <th>Iditineraire</th>
                <th>Pointdepart</th>
                <th>Pointarrivee</th>
                <th>Kilometrage</th>
                <th>Dureeestimee</th>
                <th>NbUsage</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itineraires"]) || array_key_exists("itineraires", $context) ? $context["itineraires"] : (function () { throw new RuntimeError('Variable "itineraires" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["itineraire"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itineraire"], "iditineraire", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itineraire"], "pointdepart", [], "any", false, false, false, 36)), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itineraire"], "pointarrivee", [], "any", false, false, false, 37)), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itineraire"], "kilometrage", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itineraire"], "dureeestimee", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itineraire"], "nbUsage", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                      <div class=\"toolbar\">
                              <div class=\"toolbar-toggle\">...</div>
                                  <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                           
                                    <li class=\"list-inline-item\"><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraire_edit", ["iditineraire" => twig_get_attribute($this->env, $this->source, $context["itineraire"], "iditineraire", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"bs-tooltip\" data-original-title=\"Edit\"><i class=\"flaticon-edit-5\"></i></a>
                                    </li>
                                    <li class=\"list-inline-item\"><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraire_delete", ["iditineraire" => twig_get_attribute($this->env, $this->source, $context["itineraire"], "iditineraire", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"bs-tooltip\" data-original-title=\"Remove\"><i class=\"flaticon-view-3\"></i></a>
                                    </li>
                          </ul>
                       </div>
                                       
               
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itineraire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>                                              ";
        // line 63
        echo "                                </div>
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
        return "itineraire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 63,  163 => 61,  154 => 57,  140 => 48,  135 => 46,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  103 => 34,  98 => 33,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}


    {% block body %}
      <div class=\"row\">
                                                               
                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing\">
                        <div class=\"statbox widget box\">
                            <div class=\"widget-header \">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                        <h4>List des Postion</h4>
                                    </div>                 
                                </div>
                            </div>

                            <div class=\"widget-content-area \">

                                <div class=\"table-responsive new-products\">
                                   <table class=\"table\">
        <thead>
            <tr>
                <th>Iditineraire</th>
                <th>Pointdepart</th>
                <th>Pointarrivee</th>
                <th>Kilometrage</th>
                <th>Dureeestimee</th>
                <th>NbUsage</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for itineraire in itineraires %}
            <tr>
                <td>{{ itineraire.iditineraire }}</td>
                <td>{{ itineraire.pointdepart |upper}}</td>
                <td>{{ itineraire.pointarrivee |upper}}</td>
                <td>{{ itineraire.kilometrage }}</td>
                <td>{{ itineraire.dureeestimee }}</td>
                <td>{{ itineraire.nbUsage }}</td>
                <td class=\"text-center\">
                      <div class=\"toolbar\">
                              <div class=\"toolbar-toggle\">...</div>
                                  <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                           
                                    <li class=\"list-inline-item\"><a href=\"{{ path('app_itineraire_edit', {'iditineraire': itineraire.iditineraire}) }}\" class=\"bs-tooltip\" data-original-title=\"Edit\"><i class=\"flaticon-edit-5\"></i></a>
                                    </li>
                                    <li class=\"list-inline-item\"><a href=\"{{ path('app_itineraire_delete', {'iditineraire': itineraire.iditineraire}) }}\" class=\"bs-tooltip\" data-original-title=\"Remove\"><i class=\"flaticon-view-3\"></i></a>
                                    </li>
                          </ul>
                       </div>
                                       
               
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>                                              {# table lehne #}
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

    
{% endblock %}
", "itineraire/index.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\templates\\itineraire\\index.html.twig");
    }
}
