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
class __TwigTemplate_193ec0031ab216424662a540b1a830a3 extends \Twig\Template
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
            'css' => [$this, 'block_css'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "itineraire/show.html.twig", 1);
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

        echo "Itineraire";
        
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
";
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 18
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
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-cars-count.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"172700\">
                              <!-- 1.172.700 -->
                              <span class=\"r-count\">";
        // line 36
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 36, $this->source); })()), "pointdepart", [], "any", false, false, false, 36)), "html", null, true);
        echo "</span>
                            </div>
                            <span class=\"r-count-title\"> Point Depart </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-total-km.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"2450\">
                              <!-- 2.450 -->
                              <span class=\"r-count\">";
        // line 49
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 49, $this->source); })()), "pointarrivee", [], "any", false, false, false, 49)), "html", null, true);
        echo "</span>
                            </div>
                            <span class=\"r-count-title\"> Point Arrivee </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/advantage-icon-3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"1211100\">
                              <!-- 1.211.100 -->
                              <span class=\"r-count\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 62, $this->source); })()), "kilometrage", [], "any", false, false, false, 62), "html", null, true);
        echo " KM</span>
                            </div>
                            <span class=\"r-count-title\"> Kilometrage </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/advantage-icon-2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"47250\">
                              <!-- 47.250 -->
                              <span class=\"r-count\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 75, $this->source); })()), "dureeestimee", [], "any", false, false, false, 75), "html", null, true);
        echo "H</span>
                            </div>
                            <span class=\"r-count-title\"> Dureeestimee </span>
                        </div>

        
                    </div>
                    
            
                   
                     <div class=\"inner col-12 clearfix\">
                    <br><br><br><br>
                   <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraire_edit", ["iditineraire" => twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 87, $this->source); })()), "iditineraire", [], "any", false, false, false, 87)]), "html", null, true);
        echo "\" class=\"btn btn-info btn-1 btn-1b mb-4 mr-3 float-center btn-full\">Modifier</a>
                   ";
        // line 88
        echo twig_include($this->env, $context, "itineraire/_delete_form.html.twig");
        echo "
                     </div>
                    
                  
                    
                    



    </div>
    </div>
    
        <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraire_index");
        echo "\" class=\"btn btn-success btn-1 btn-1c mb-4 mr-3 float-right btn-full\">Retour</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
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
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/creative/creative-icon-buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/creative/creative-gradients.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/creative/creative-fill.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/creative/creative-material.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Spinner Buttons -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/spinner/spinner.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/spinner/ladda.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!--  END CUSTOM STYLE FILE  -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  255 => 15,  251 => 14,  246 => 12,  242 => 11,  238 => 10,  234 => 9,  221 => 7,  208 => 100,  193 => 88,  189 => 87,  174 => 75,  167 => 71,  155 => 62,  148 => 58,  136 => 49,  129 => 45,  117 => 36,  110 => 32,  94 => 18,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Itineraire{% endblock %}

{% block body %}

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
                    <br><br><br><br>
                   <a href=\"{{ path('app_itineraire_edit', {'iditineraire': itineraire.iditineraire}) }}\" class=\"btn btn-info btn-1 btn-1b mb-4 mr-3 float-center btn-full\">Modifier</a>
                   {{ include('itineraire/_delete_form.html.twig') }}
                     </div>
                    
                  
                    
                    



    </div>
    </div>
    
        <a href=\"{{ path('app_itineraire_index') }}\" class=\"btn btn-success btn-1 btn-1c mb-4 mr-3 float-right btn-full\">Retour</a>

{% endblock %}
", "itineraire/show.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\itineraire\\show.html.twig");
    }
}
