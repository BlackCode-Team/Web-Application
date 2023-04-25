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

/* vehicule/index.html.twig */
class __TwigTemplate_27d931e53fb0ff54fd6368130f02c0f1 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "vehicule/index.html.twig", 1);
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

        echo "Vehicules ";
        
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
        echo "    <div class=\"row\" id=\"cancel-row\">
        <div class=\"col-xl-12 col-lg-12 col-sm-12  layout-spacing\">
            <div class=\"statbox widget box box-shadow\">
                <div class=\"widget-header\">
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                            <h4>Liste des vehicules</h4>
                        </div>
                    </div>
                </div>
                <div class=\"widget-content widget-content-area\">
                    <div class=\"table-responsive mb-4\">
                        <table id=\"zero-config\" class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>Modele</th>
                                    <th>Matricule</th>
                                    <th>Puissance</th>
                                    <th>Type</th>
                                    <th>Prix</th>
                                    <th>Batterie</th>
                                    <th>Status</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 33
            echo "                                <tr>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "matricule", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "puissance", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "type", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prix", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "batterie", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "status", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>

                                    <td class=\"text-center\">
                                    <div class=\"toolbar\">
                                    <div class=\"toolbar-toggle\">...</div>
                                    <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                           
                                    <li class=\"list-inline-item\"><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_show", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"bs-tooltip\" data-original-title=\"Show\"><i class=\"flaticon-view-3\"></i></a>
                                    </li>
                                    <li class=\"list-inline-item\"><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_edit", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"bs-tooltip\" data-original-title=\"Edit\"><i class=\"flaticon-edit-5\"></i></a>
                                    </li>
                          </ul>
                       </div>
                                       
               
                </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                                <tr>
                                    <td colspan=\"10\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                            </tbody>
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
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_new");
        echo "\">Create new</a>

            <div class=\"row\">

                    <div class=\"col-xl-8 col-lg-12 col-md-12 col-12 layout-spacing\">
                        <div class=\"widget-content-area monthly-chart  br-4\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 col-md-6 col-sm-2 col-12  align-self-center\">
                                    <h3>nombres de spots de chaque parc</h3>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-12 mt-3\">
                                    <div class=\"tab-content\" id=\"monthly-chartContent\">                                                                            
                                        <div style=\"max-width: 1400px; margin: 0 auto;\">
  <canvas id=\"myChart2\" style=\"height: 500px;\"></canvas>
</div>

";
        // line 116
        echo "                                                                              
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class=\"col-xl-4 col-lg-12 col-sm-12 col-12 layout-spacing\">
                        <div class=\"statbox widget box\">
                            <div class=\"widget-header \">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                        <h4>nombre de spots de chaque parc par rapport au total de spots </h4>
                                    </div>                 
                                </div>
                            </div>
                            <div class=\"widget-content widget-content-area  monthly-profit-chart\">
<div style=\"max-width: 500px; margin: 0 auto;\">
  <canvas id=\"myChart\" style=\"height: 300px;\"></canvas>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var chartData = JSON.parse('";
        // line 139
        echo (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 139, $this->source); })());
        echo "');
  var myChart = new Chart(ctx, {
    type: 'pie', // Changed chart type to pie
    data: chartData,
    options: {
      // Removed x-axis scales options
    }
  });
</script>



                            </div>
                        </div>
                    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "vehicule/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 139,  227 => 116,  206 => 80,  186 => 62,  177 => 58,  163 => 49,  158 => 47,  148 => 40,  144 => 39,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  124 => 34,  121 => 33,  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Vehicules {% endblock %}

{% block body %}
    <div class=\"row\" id=\"cancel-row\">
        <div class=\"col-xl-12 col-lg-12 col-sm-12  layout-spacing\">
            <div class=\"statbox widget box box-shadow\">
                <div class=\"widget-header\">
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                            <h4>Liste des vehicules</h4>
                        </div>
                    </div>
                </div>
                <div class=\"widget-content widget-content-area\">
                    <div class=\"table-responsive mb-4\">
                        <table id=\"zero-config\" class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>Modele</th>
                                    <th>Matricule</th>
                                    <th>Puissance</th>
                                    <th>Type</th>
                                    <th>Prix</th>
                                    <th>Batterie</th>
                                    <th>Status</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for vehicule in vehicules %}
                                <tr>
                                    <td>{{ vehicule.modele }}</td>
                                    <td>{{ vehicule.matricule }}</td>
                                    <td>{{ vehicule.puissance }}</td>
                                    <td>{{ vehicule.type }}</td>
                                    <td>{{ vehicule.prix }}</td>
                                    <td>{{ vehicule.batterie }}</td>
                                    <td>{{ vehicule.status }}</td>

                                    <td class=\"text-center\">
                                    <div class=\"toolbar\">
                                    <div class=\"toolbar-toggle\">...</div>
                                    <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                           
                                    <li class=\"list-inline-item\"><a href=\"{{ path('app_vehicule_show', {'idvehicule': vehicule.idvehicule}) }}\" class=\"bs-tooltip\" data-original-title=\"Show\"><i class=\"flaticon-view-3\"></i></a>
                                    </li>
                                    <li class=\"list-inline-item\"><a href=\"{{ path('app_vehicule_edit', {'idvehicule': vehicule.idvehicule}) }}\" class=\"bs-tooltip\" data-original-title=\"Edit\"><i class=\"flaticon-edit-5\"></i></a>
                                    </li>
                          </ul>
                       </div>
                                       
               
                </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"10\">no records found</td>
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
    <a href=\"{{ path('app_vehicule_new') }}\">Create new</a>

            <div class=\"row\">

                    <div class=\"col-xl-8 col-lg-12 col-md-12 col-12 layout-spacing\">
                        <div class=\"widget-content-area monthly-chart  br-4\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 col-md-6 col-sm-2 col-12  align-self-center\">
                                    <h3>nombres de spots de chaque parc</h3>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-12 mt-3\">
                                    <div class=\"tab-content\" id=\"monthly-chartContent\">                                                                            
                                        <div style=\"max-width: 1400px; margin: 0 auto;\">
  <canvas id=\"myChart2\" style=\"height: 500px;\"></canvas>
</div>

{# <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
  var ctx = document.getElementById('myChart2').getContext('2d');
  var chartData2 = JSON.parse('{{ chartData2|raw }}');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: chartData2,
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script> #}
                                                                              
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class=\"col-xl-4 col-lg-12 col-sm-12 col-12 layout-spacing\">
                        <div class=\"statbox widget box\">
                            <div class=\"widget-header \">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                        <h4>nombre de spots de chaque parc par rapport au total de spots </h4>
                                    </div>                 
                                </div>
                            </div>
                            <div class=\"widget-content widget-content-area  monthly-profit-chart\">
<div style=\"max-width: 500px; margin: 0 auto;\">
  <canvas id=\"myChart\" style=\"height: 300px;\"></canvas>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var chartData = JSON.parse('{{ chartData|raw }}');
  var myChart = new Chart(ctx, {
    type: 'pie', // Changed chart type to pie
    data: chartData,
    options: {
      // Removed x-axis scales options
    }
  });
</script>



                            </div>
                        </div>
                    </div>
{% endblock %}
", "vehicule/index.html.twig", "C:\\Users\\Mega-PC\\Desktop\\Web-Application\\templates\\vehicule\\index.html.twig");
    }
}
