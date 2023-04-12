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
class __TwigTemplate_508ffd44f28c4aac59ec2fc4e7c9e1b3ba64a26a54c9d49d731323b436b81307 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/indexadmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/indexadmin.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "park/indexadmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
            echo "\" class=\"bs-tooltip\" data-original-title=\"view\"><i class=\"flaticon-view-3\"></i></a>
                                    </li>
                          </ul>
                       </div>
                                       
               
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['park'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </tbody>
    </table>                                              ";
        // line 70
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
                     <a  href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_park_new");
        echo "\"><div  class=\"btn btn-info btn-1 btn-1b mb-4 mr-3 float-right btn-full\" align=\"center\" >Ajouter Parc</div></a>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  227 => 86,  209 => 70,  206 => 68,  197 => 64,  183 => 55,  178 => 53,  169 => 47,  165 => 46,  161 => 45,  157 => 44,  153 => 43,  150 => 42,  145 => 41,  116 => 14,  106 => 13,  93 => 10,  89 => 9,  84 => 7,  80 => 6,  76 => 5,  72 => 4,  59 => 2,  36 => 1,);
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
                                    <li class=\"list-inline-item\"><a href=\"{{ path('app_park_showadm', {'idpark': park.idpark}) }}\" class=\"bs-tooltip\" data-original-title=\"view\"><i class=\"flaticon-view-3\"></i></a>
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
                     <a  href=\"{{ path('app_park_new') }}\"><div  class=\"btn btn-info btn-1 btn-1b mb-4 mr-3 float-right btn-full\" align=\"center\" >Ajouter Parc</div></a>
    
{% endblock %}
", "park/indexadmin.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\park\\indexadmin.html.twig");
    }
}
