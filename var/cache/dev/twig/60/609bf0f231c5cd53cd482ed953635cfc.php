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

/* park/indexadmin.html.twig */
class __TwigTemplate_5d4f03b20eb18b26bf8343ae2535fcf0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/indexadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/indexadmin.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "park/indexadmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        echo " 
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/creative/creative-icon-buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/creative/creative-gradients.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/creative/creative-fill.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/creative/creative-material.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Spinner Buttons -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/spinner/spinner.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/spinner/ladda.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!--  END CUSTOM STYLE FILE  -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
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
                <th>idpark</th>
                <th>ville</th>
                <th>nom</th>
                <th>statut</th>
                <th>nbspot</th>

            </tr>
        </thead>
        <tbody>
       ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parks"]) || array_key_exists("parks", $context) ? $context["parks"] : (function () { throw new RuntimeError('Variable "parks" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["park"]) {
            // line 42
            echo "            <tr>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["park"], "idpark", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["park"], "ville", [], "any", false, false, false, 44)), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["park"], "nom", [], "any", false, false, false, 45)), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["park"], "statut", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["park"], "nbspot", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                      <div class=\"toolbar\">
                              <div class=\"toolbar-toggle\">...</div>
                                  <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                           
                                    <li class=\"list-inline-item\"><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_park_edit", ["idpark" => twig_get_attribute($this->env, $this->source, $context["park"], "idpark", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"bs-tooltip\" data-original-title=\"Edit\"><i class=\"flaticon-edit-5\"></i></a>
                                    </li>
                                    <li class=\"list-inline-item\"><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_park_showadm", ["idpark" => twig_get_attribute($this->env, $this->source, $context["park"], "idpark", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"bs-tooltip\" data-original-title=\"view Details\"><i class=\"flaticon-view-3\"></i></a>
                                    </li>
                                     <li class=\"list-inline-item\"><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chart_park", ["idpark" => twig_get_attribute($this->env, $this->source, $context["park"], "idpark", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"bs-tooltip\" data-original-title=\"View in map\"><i class=\"flaticon-view-3\"></i></a>
                                    </li>
                          </ul>
                       </div>
                                       
               
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['park'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>                                              ";
        // line 72
        echo "                                </div>
                                <div class=\"pagination-section\">
                                    <ul class=\"pagination pagination-style-1 pagination-rounded justify-content-end mt-3 mb-3\">
                                         <a  href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_park_new");
        echo "\"><div  class=\"btn btn-info btn-1 btn-1b mb-4 mr-3 float-right btn-full\" align=\"center\" >Ajouter Parc</div></a>   
                                    </ul>
                                </div>
                                    <div class=\"pagination-section\">
                                    <ul class=\"pagination pagination-style-1 pagination-rounded justify-content-end \">

                                           ";
        // line 81
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["parks"]) || array_key_exists("parks", $context) ? $context["parks"] : (function () { throw new RuntimeError('Variable "parks" does not exist.', 81, $this->source); })()));
        echo "
                                    </ul>
                                </div>
                          
                            </div>
                        </div>
                    </div>
                    
                </div>
             

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

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
  var ctx = document.getElementById('myChart2').getContext('2d');
  var chartData2 = JSON.parse('";
        // line 111
        echo (isset($context["chartData2"]) || array_key_exists("chartData2", $context) ? $context["chartData2"] : (function () { throw new RuntimeError('Variable "chartData2" does not exist.', 111, $this->source); })());
        echo "');
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
        // line 149
        echo (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 149, $this->source); })());
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
        return "park/indexadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 149,  261 => 111,  228 => 81,  219 => 75,  214 => 72,  211 => 70,  202 => 66,  188 => 57,  183 => 55,  178 => 53,  169 => 47,  165 => 46,  161 => 45,  157 => 44,  153 => 43,  150 => 42,  145 => 41,  116 => 14,  106 => 13,  93 => 10,  89 => 9,  84 => 7,  80 => 6,  76 => 5,  72 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}
{% block css %} 
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href=\"{{asset('back/assets/css/ui-kit/buttons/creative/creative-icon-buttons.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('back/assets/css/ui-kit/buttons/creative/creative-gradients.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('back/assets/css/ui-kit/buttons/creative/creative-fill.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('back/assets/css/ui-kit/buttons/creative/creative-material.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Spinner Buttons -->
    <link href=\"{{asset('back/assets/css/ui-kit/buttons/spinner/spinner.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('back/assets/css/ui-kit/buttons/spinner/ladda.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!--  END CUSTOM STYLE FILE  -->
{% endblock %}
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
                <th>idpark</th>
                <th>ville</th>
                <th>nom</th>
                <th>statut</th>
                <th>nbspot</th>

            </tr>
        </thead>
        <tbody>
       {% for park in parks %}
            <tr>
                <td>{{ park.idpark }}</td>
                <td>{{ park.ville |upper}}</td>
                <td>{{ park.nom |upper}}</td>
                <td>{{ park.statut }}</td>
                <td>{{ park.nbspot }}</td>
                <td class=\"text-center\">
                      <div class=\"toolbar\">
                              <div class=\"toolbar-toggle\">...</div>
                                  <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                           
                                    <li class=\"list-inline-item\"><a href=\"{{ path('app_park_edit', {'idpark': park.idpark}) }}\" class=\"bs-tooltip\" data-original-title=\"Edit\"><i class=\"flaticon-edit-5\"></i></a>
                                    </li>
                                    <li class=\"list-inline-item\"><a href=\"{{ path('app_park_showadm', {'idpark': park.idpark}) }}\" class=\"bs-tooltip\" data-original-title=\"view Details\"><i class=\"flaticon-view-3\"></i></a>
                                    </li>
                                     <li class=\"list-inline-item\"><a href=\"{{ path('app_chart_park', {'idpark': park.idpark}) }}\" class=\"bs-tooltip\" data-original-title=\"View in map\"><i class=\"flaticon-view-3\"></i></a>
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
                                         <a  href=\"{{ path('app_park_new') }}\"><div  class=\"btn btn-info btn-1 btn-1b mb-4 mr-3 float-right btn-full\" align=\"center\" >Ajouter Parc</div></a>   
                                    </ul>
                                </div>
                                    <div class=\"pagination-section\">
                                    <ul class=\"pagination pagination-style-1 pagination-rounded justify-content-end \">

                                           {{ knp_pagination_render(parks) }}
                                    </ul>
                                </div>
                          
                            </div>
                        </div>
                    </div>
                    
                </div>
             

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

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
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
", "park/indexadmin.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\park\\indexadmin.html.twig");
    }
}
