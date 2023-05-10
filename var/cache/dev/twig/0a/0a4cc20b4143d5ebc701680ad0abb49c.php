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

/* vehicule/backoffice.html.twig */
class __TwigTemplate_99a459e82a322798b82d3057de21efa2 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/backoffice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/backoffice.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "vehicule/backoffice.html.twig", 1);
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

        echo "Vehicule";
        
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
        echo "
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
        // line 26
        echo (isset($context["availabilityData"]) || array_key_exists("availabilityData", $context) ? $context["availabilityData"] : (function () { throw new RuntimeError('Variable "availabilityData" does not exist.', 26, $this->source); })());
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
        // line 63
        echo (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 63, $this->source); })());
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
     
</div>
</div>
   <div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"widget widget-table-one\">
            <div class=\"widget-heading\">
                <h5 class=\"\">Liste des véhicules</h5>
            </div>
            <div class=\"widget-content\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <form method=\"get\" action=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_back");
        echo "\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" name=\"mm\" placeholder=\"Entrez le modele ou la matricule\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" type=\"submit\">Recherche</button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <div class=\"col-lg-6\">
                        <form action=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_back");
        echo "\" method=\"get\">
                            <div class=\"form-group\">
                                <label for=\"type\">Type de véhicule</label>
                                <select class=\"form-control\" name=\"type\" id=\"type\" onchange=\"this.form.submit()\">
                                    <option value=\"Tous\">Tous</option>
                                    <option value=\"Voiture\">Voiture</option>
                                    <option value=\"Trottinette\">Trottinette</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                                    <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_indexback");
        echo "\" class=\"btn btn-danger btn-1 btn-1e mb-4 mr-3\">Voir catalogue</a>

                <div class=\"table-responsive mt-4\">
                    <table class=\"table table-striped table-bordered table-hover\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th>Image</th>
                                <th>Modèle</th>
                                <th>Matricule</th>
                                <th>Puissance</th>
                                <th>Type</th>
                                <th>Prix</th>
                                <th>Batterie</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                            <tbody>
                            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 128, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 129
            echo "                                <tr>
                                    <td><center><img src=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["vehicule"], "image", [], "any", false, false, false, 130))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 130), "html", null, true);
            echo "\" style=\"max-width: 100px;\" /></td>
                                    <td>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 131), "html", null, true);
            echo "</td>
                                    <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "matricule", [], "any", false, false, false, 132), "html", null, true);
            echo "</td>
                                    <td>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "puissance", [], "any", false, false, false, 133), "html", null, true);
            echo "</td>
                                    <td>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "type", [], "any", false, false, false, 134), "html", null, true);
            echo "</td>
                                    <td>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prix", [], "any", false, false, false, 135), "html", null, true);
            echo "</td>
                                    <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "batterie", [], "any", false, false, false, 136), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 137
            if ((twig_get_attribute($this->env, $this->source, $context["vehicule"], "getStatus", [], "method", false, false, false, 137) == "disponible")) {
                // line 138
                echo "                                                <span class=\"badge outline-badge-success badge-pill\">Disponible</span>
                                            ";
            } else {
                // line 140
                echo "                                                <span class=\"badge outline-badge-dark badge-pill\">Réservé</span>
                                            ";
            }
            // line 141
            echo "</td>

                                    <td class=\"text-center\">
                                        <div class=\"toolbar\">
                                        <div class=\"toolbar-toggle\">...</div>
                                        <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                            
                                        <li class=\"list-inline-item\"><a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_show", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 148)]), "html", null, true);
            echo "\" class=\"bs-tooltip\" data-original-title=\"Show\"><i class=\"flaticon-view-3\"></i></a>
                                        </li>
                                        <li class=\"list-inline-item\"><a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_edit", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 150)]), "html", null, true);
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
            // line 157
            echo "                                <tr>
                                    <td colspan=\"10\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"pagination-section\">
                         ";
        // line 165
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 165, $this->source); })()));
        echo "
                    </div>
                    <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_new");
        echo "\" class=\"btn btn-primary\">Nouveau Vehicule </a>

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
        return "vehicule/backoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 167,  316 => 165,  310 => 161,  301 => 157,  289 => 150,  284 => 148,  275 => 141,  271 => 140,  267 => 138,  265 => 137,  261 => 136,  257 => 135,  253 => 134,  249 => 133,  245 => 132,  241 => 131,  235 => 130,  232 => 129,  227 => 128,  206 => 110,  191 => 98,  177 => 87,  150 => 63,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Vehicule{% endblock %}

{% block body %}

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
     
</div>
</div>
   <div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"widget widget-table-one\">
            <div class=\"widget-heading\">
                <h5 class=\"\">Liste des véhicules</h5>
            </div>
            <div class=\"widget-content\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <form method=\"get\" action=\"{{ path('app_vehicule_back') }}\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" name=\"mm\" placeholder=\"Entrez le modele ou la matricule\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" type=\"submit\">Recherche</button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <div class=\"col-lg-6\">
                        <form action=\"{{ path('app_vehicule_back') }}\" method=\"get\">
                            <div class=\"form-group\">
                                <label for=\"type\">Type de véhicule</label>
                                <select class=\"form-control\" name=\"type\" id=\"type\" onchange=\"this.form.submit()\">
                                    <option value=\"Tous\">Tous</option>
                                    <option value=\"Voiture\">Voiture</option>
                                    <option value=\"Trottinette\">Trottinette</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                                    <a href=\"{{ path('app_vehicule_indexback') }}\" class=\"btn btn-danger btn-1 btn-1e mb-4 mr-3\">Voir catalogue</a>

                <div class=\"table-responsive mt-4\">
                    <table class=\"table table-striped table-bordered table-hover\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th>Image</th>
                                <th>Modèle</th>
                                <th>Matricule</th>
                                <th>Puissance</th>
                                <th>Type</th>
                                <th>Prix</th>
                                <th>Batterie</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                            <tbody>
                            {% for vehicule in vehicules %}
                                <tr>
                                    <td><center><img src=\"{{ asset('images/' ~ vehicule.image) }}\" alt=\"{{ vehicule.modele }}\" style=\"max-width: 100px;\" /></td>
                                    <td>{{ vehicule.modele }}</td>
                                    <td>{{ vehicule.matricule }}</td>
                                    <td>{{ vehicule.puissance }}</td>
                                    <td>{{ vehicule.type }}</td>
                                    <td>{{ vehicule.prix }}</td>
                                    <td>{{ vehicule.batterie }}</td>
                                    <td> {% if vehicule.getStatus() == 'disponible' %}
                                                <span class=\"badge outline-badge-success badge-pill\">Disponible</span>
                                            {% else %}
                                                <span class=\"badge outline-badge-dark badge-pill\">Réservé</span>
                                            {% endif %}</td>

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
                         {{ knp_pagination_render(vehicules) }}
                    </div>
                    <a href=\"{{ path('app_vehicule_new') }}\" class=\"btn btn-primary\">Nouveau Vehicule </a>

                </div>
            </div>
        </div>
    </div>

    </div> 
{% endblock %}", "vehicule/backoffice.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\Web-Application\\templates\\vehicule\\backoffice.html.twig");
    }
}
