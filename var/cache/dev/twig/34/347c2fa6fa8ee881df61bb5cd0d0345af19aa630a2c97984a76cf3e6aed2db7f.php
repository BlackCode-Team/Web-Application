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

/* itineraire/show.html.twig */
class __TwigTemplate_8421da17a3a9441b3b47e60820a7f1aa5430fd7e7b7138a75c00778d7ff576c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "itineraire/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Itineraire";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "



<div class=\"r-counter-section pt-5 pb-5 m-0\">
    <div class=\".r-slider-serach.r-slider-serach-down > form .form-title\" align=\"center\">
    <h1><b>Itineraire</b> Details</h1>
    <br><br><br>
   
    </div>
            <div class=\"container\">
    
       <div class=\"row\">
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-cars-count.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"172700\">
                              <!-- 1.172.700 -->
                              <span class=\"r-count\">";
        // line 26
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 26, $this->source); })()), "pointdepart", [], "any", false, false, false, 26)), "html", null, true);
        echo "</span>
                            </div>
                            <span class=\"r-count-title\"> Point Depart </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-total-km.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"2450\">
                              <!-- 2.450 -->
                              <span class=\"r-count\">";
        // line 39
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 39, $this->source); })()), "pointarrivee", [], "any", false, false, false, 39)), "html", null, true);
        echo "</span>
                            </div>
                            <span class=\"r-count-title\"> Point Arrivee </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/advantage-icon-3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"1211100\">
                              <!-- 1.211.100 -->
                              <span class=\"r-count\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 52, $this->source); })()), "kilometrage", [], "any", false, false, false, 52), "html", null, true);
        echo " KM</span>
                            </div>
                            <span class=\"r-count-title\"> Kilometrage </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/advantage-icon-2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"47250\">
                              <!-- 47.250 -->
                              <span class=\"r-count\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 65, $this->source); })()), "dureeestimee", [], "any", false, false, false, 65), "html", null, true);
        echo "H</span>
                            </div>
                            <span class=\"r-count-title\"> Dureeestimee </span>
                        </div>

        
                    </div>
                    
                    <div class=\"inner col-12 clearfix\">
                    
                    <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraire_index");
        echo "\" class=\"btn m-auto d-block float-right btn-full\">back to list</a>
                    </div>
                    
                   
                     <div class=\"inner col-12 clearfix\">
                       
                   <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraire_edit", ["iditineraire" => twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 81, $this->source); })()), "iditineraire", [], "any", false, false, false, 81)]), "html", null, true);
        echo "\" class=\"btn m-auto d-block float-right btn-full\">edit</a>
                     </div>
                    
                    <div class=\"inner col-12 clearfix\">
                    
                         ";
        // line 86
        echo twig_include($this->env, $context, "itineraire/_delete_form.html.twig");
        echo "
                    </div>
                    



    </div>
    </div>
        

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "itineraire/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 86,  192 => 81,  183 => 75,  170 => 65,  163 => 61,  151 => 52,  144 => 48,  132 => 39,  125 => 35,  113 => 26,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Itineraire{% endblock %}

{% block body %}




<div class=\"r-counter-section pt-5 pb-5 m-0\">
    <div class=\".r-slider-serach.r-slider-serach-down > form .form-title\" align=\"center\">
    <h1><b>Itineraire</b> Details</h1>
    <br><br><br>
   
    </div>
            <div class=\"container\">
    
       <div class=\"row\">
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"{{asset('assets/images/icon-cars-count.png')}}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"172700\">
                              <!-- 1.172.700 -->
                              <span class=\"r-count\">{{ itineraire.pointdepart | upper }}</span>
                            </div>
                            <span class=\"r-count-title\"> Point Depart </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"{{asset('assets/images/icon-total-km.png')}}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"2450\">
                              <!-- 2.450 -->
                              <span class=\"r-count\">{{ itineraire.pointarrivee | upper }}</span>
                            </div>
                            <span class=\"r-count-title\"> Point Arrivee </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"{{asset('assets/images/advantage-icon-3.png')}}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"1211100\">
                              <!-- 1.211.100 -->
                              <span class=\"r-count\">{{ itineraire.kilometrage }} KM</span>
                            </div>
                            <span class=\"r-count-title\"> Kilometrage </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"{{asset('assets/images/advantage-icon-2.png')}}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"47250\">
                              <!-- 47.250 -->
                              <span class=\"r-count\">{{ itineraire.dureeestimee }}H</span>
                            </div>
                            <span class=\"r-count-title\"> Dureeestimee </span>
                        </div>

        
                    </div>
                    
                    <div class=\"inner col-12 clearfix\">
                    
                    <a href=\"{{ path('app_itineraire_index') }}\" class=\"btn m-auto d-block float-right btn-full\">back to list</a>
                    </div>
                    
                   
                     <div class=\"inner col-12 clearfix\">
                       
                   <a href=\"{{ path('app_itineraire_edit', {'iditineraire': itineraire.iditineraire}) }}\" class=\"btn m-auto d-block float-right btn-full\">edit</a>
                     </div>
                    
                    <div class=\"inner col-12 clearfix\">
                    
                         {{ include('itineraire/_delete_form.html.twig') }}
                    </div>
                    



    </div>
    </div>
        

{% endblock %}
", "itineraire/show.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\itineraire\\show.html.twig");
    }
}
