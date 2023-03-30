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
class __TwigTemplate_d5efa7e30f026d4889f8f110cf749468ad7c86bd65dd6963476f7a66a4b74a2a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "itineraire/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
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
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itineraires"]) || array_key_exists("itineraires", $context) ? $context["itineraires"] : (function () { throw new RuntimeError('Variable "itineraires" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["itineraire"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itineraire"], "iditineraire", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itineraire"], "pointdepart", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itineraire"], "pointarrivee", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itineraire"], "kilometrage", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itineraire"], "dureeestimee", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itineraire"], "nbUsage", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraire_show", ["iditineraire" => twig_get_attribute($this->env, $this->source, $context["itineraire"], "iditineraire", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraire_edit", ["iditineraire" => twig_get_attribute($this->env, $this->source, $context["itineraire"], "iditineraire", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itineraire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>                                              ";
        // line 52
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

    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraire_new");
        echo "\">Create new</a>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  175 => 69,  156 => 52,  153 => 50,  144 => 46,  135 => 42,  131 => 41,  126 => 39,  122 => 38,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  103 => 33,  98 => 32,  68 => 4,  58 => 3,  35 => 1,);
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
                <td>{{ itineraire.pointdepart }}</td>
                <td>{{ itineraire.pointarrivee }}</td>
                <td>{{ itineraire.kilometrage }}</td>
                <td>{{ itineraire.dureeestimee }}</td>
                <td>{{ itineraire.nbUsage }}</td>
                <td>
                    <a href=\"{{ path('app_itineraire_show', {'iditineraire': itineraire.iditineraire}) }}\">show</a>
                    <a href=\"{{ path('app_itineraire_edit', {'iditineraire': itineraire.iditineraire}) }}\">edit</a>
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

    <a href=\"{{ path('app_itineraire_new') }}\">Create new</a>

    
{% endblock %}
", "itineraire/index.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\itineraire\\index.html.twig");
    }
}