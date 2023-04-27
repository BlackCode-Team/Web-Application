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
class __TwigTemplate_ef4519cd45bce060ab3bb34b86f40266 extends \Twig\Template
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
                                <form method =\"get\" action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">
<input type=\"text\" name=\"mm\" placeholder=\"Entrez le modele ou la matricule\">
<input type=\"submit\" value=\"search\">
</form> 

 <form action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_filter");
        echo "\" method=\"get\">
                          <div class=\"form-group\">
                            <label for=\"type\">Type de vehicule</label>
                            <select class=\"form-control\" name=\"type\" id=\"type\">
                              <option value=\"Tous\">Tous</option>
                              <option value=\"Voiture\">Voiture</option>
                              <option value=\"Trottinette\">Trottinette</option>
                            </select>
                          </div>
                          <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                        </form>
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
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 49
            echo "                                <tr>
                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "matricule", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "puissance", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "type", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prix", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "batterie", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "status", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>

                                    <td class=\"text-center\">
                                    <div class=\"toolbar\">
                                    <div class=\"toolbar-toggle\">...</div>
                                    <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                           
                                    <li class=\"list-inline-item\"><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_show", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"bs-tooltip\" data-original-title=\"Show\"><i class=\"flaticon-view-3\"></i></a>
                                    </li>
                                    <li class=\"list-inline-item\"><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_edit", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 65)]), "html", null, true);
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
            // line 74
            echo "                                <tr>
                                    <td colspan=\"10\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
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
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_new");
        echo "\">Create new</a>

            <div class=\"row\">

                    <div class=\"col-xl-8 col-lg-12 col-md-12 col-12 layout-spacing\">
                        <div class=\"widget-content-area monthly-chart  br-4\">
                            <div class=\"row\">
                                <div class=\"col-lg-4 col-md-6 col-sm-2 col-12  align-self-center\">
                                    <h3>type des vehicules</h3>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-12 mt-3\">
                                    <div class=\"tab-content\" id=\"monthly-chartContent\">                                                                            
                                        <div style=\"max-width: 600px; margin: 0 auto;\">
  <canvas id=\"availabilityChart\" width=\"1000\" height=\"900\"></canvas>

</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    var availabilityChart = new Chart(document.getElementById('availabilityChart'), {
        type: 'line',
        data: ";
        // line 119
        echo (isset($context["availabilityData"]) || array_key_exists("availabilityData", $context) ? $context["availabilityData"] : (function () { throw new RuntimeError('Variable "availabilityData" does not exist.', 119, $this->source); })());
        echo ",
        options: {
            title: {
                display: true,
                text: 'Disponibilité des véhicules'
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
                                                                              
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
                                        <h4>Nombre des Voitures et Trotinettes Disponibles </h4>
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
        // line 158
        echo (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 158, $this->source); })());
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
        return array (  296 => 158,  254 => 119,  228 => 96,  208 => 78,  199 => 74,  185 => 65,  180 => 63,  170 => 56,  166 => 55,  162 => 54,  158 => 53,  154 => 52,  150 => 51,  146 => 50,  143 => 49,  138 => 48,  112 => 25,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                                <form method =\"get\" action=\"{{path('search')}}\">
<input type=\"text\" name=\"mm\" placeholder=\"Entrez le modele ou la matricule\">
<input type=\"submit\" value=\"search\">
</form> 

 <form action=\"{{ path('vehicule_filter') }}\" method=\"get\">
                          <div class=\"form-group\">
                            <label for=\"type\">Type de vehicule</label>
                            <select class=\"form-control\" name=\"type\" id=\"type\">
                              <option value=\"Tous\">Tous</option>
                              <option value=\"Voiture\">Voiture</option>
                              <option value=\"Trottinette\">Trottinette</option>
                            </select>
                          </div>
                          <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                        </form>
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
                                    <h3>type des vehicules</h3>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12 col-12 mt-3\">
                                    <div class=\"tab-content\" id=\"monthly-chartContent\">                                                                            
                                        <div style=\"max-width: 600px; margin: 0 auto;\">
  <canvas id=\"availabilityChart\" width=\"1000\" height=\"900\"></canvas>

</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    var availabilityChart = new Chart(document.getElementById('availabilityChart'), {
        type: 'line',
        data: {{ availabilityData|raw }},
        options: {
            title: {
                display: true,
                text: 'Disponibilité des véhicules'
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
                                                                              
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
                                        <h4>Nombre des Voitures et Trotinettes Disponibles </h4>
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
", "vehicule/index.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\vehicule\\index.html.twig");
    }
}
