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

/* park/showadm.html.twig */
class __TwigTemplate_f5d611cfd96d509c8fd41a09777ae85b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page' => [$this, 'block_page'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/showadm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/showadm.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "park/showadm.html.twig", 1);
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

        echo "Park";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        echo " Park details ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
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
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/creative/creative-icon-buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/creative/creative-gradients.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/creative/creative-fill.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/creative/creative-material.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Spinner Buttons -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/spinner/spinner.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/ui-kit/buttons/spinner/ladda.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!--  END CUSTOM STYLE FILE  -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "

<div class=\"r-counter-section pt-5 pb-5 m-0\">
    <div class=\".r-slider-serach.r-slider-serach-down > form .form-title\" align=\"center\">
    <h1><b>Park</b> Details</h1>
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
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["park"]) || array_key_exists("park", $context) ? $context["park"] : (function () { throw new RuntimeError('Variable "park" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36)), "html", null, true);
        echo "</span>
                            </div>
                            <span class=\"r-count-title\"> Nom </span>
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
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["park"]) || array_key_exists("park", $context) ? $context["park"] : (function () { throw new RuntimeError('Variable "park" does not exist.', 49, $this->source); })()), "ville", [], "any", false, false, false, 49)), "html", null, true);
        echo "</span>
                            </div>
                            <span class=\"r-count-title\"> ville </span>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["park"]) || array_key_exists("park", $context) ? $context["park"] : (function () { throw new RuntimeError('Variable "park" does not exist.', 62, $this->source); })()), "nbspot", [], "any", false, false, false, 62), "html", null, true);
        echo " </span>
                            </div>
                            <span class=\"r-count-title\"> Nombre de Spots <b>disponible</b></span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/advantage-icon-2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>s
                            <div class=\"r-counts\" data-count=\"47250\">
                              <!-- 47.250 -->
                              <span class=\"r-count\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["park"]) || array_key_exists("park", $context) ? $context["park"] : (function () { throw new RuntimeError('Variable "park" does not exist.', 75, $this->source); })()), "statut", [], "any", false, false, false, 75), "html", null, true);
        echo "</span>
                            </div>
                            <span class=\"r-count-title\"> statut </span>
                        </div>
                    <br><br><br><br>
                   
                  <a  href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_park_indexad");
        echo "\"><div  class=\"btn btn-success btn-1 btn-1c mb-4 mr-3 float-right btn-full\" align=\"center\" >retour</div></a>   ";
        echo twig_include($this->env, $context, "park/_delete_form.html.twig");
        echo "
          

                    </div>
                    
                    
                   
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "park/showadm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 81,  236 => 75,  229 => 71,  217 => 62,  210 => 58,  198 => 49,  191 => 45,  179 => 36,  172 => 32,  156 => 18,  146 => 17,  133 => 13,  129 => 12,  124 => 10,  120 => 9,  116 => 8,  112 => 7,  99 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Park{% endblock %}
{% block page %} Park details {% endblock %} 
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


<div class=\"r-counter-section pt-5 pb-5 m-0\">
    <div class=\".r-slider-serach.r-slider-serach-down > form .form-title\" align=\"center\">
    <h1><b>Park</b> Details</h1>
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
                              <span class=\"r-count\">{{ park.nom |upper}}</span>
                            </div>
                            <span class=\"r-count-title\"> Nom </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"{{asset('assets/images/icon-total-km.png')}}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"2450\">
                              <!-- 2.450 -->
                              <span class=\"r-count\">{{ park.ville | upper }}</span>
                            </div>
                            <span class=\"r-count-title\"> ville </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"{{asset('assets/images/advantage-icon-3.png')}}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"1211100\">
                              <!-- 1.211.100 -->
                              <span class=\"r-count\">{{ park.nbspot }} </span>
                            </div>
                            <span class=\"r-count-title\"> Nombre de Spots <b>disponible</b></span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"{{asset('assets/images/advantage-icon-2.png')}}\" alt=\"\" class=\"img-fluid\">
                            </div>s
                            <div class=\"r-counts\" data-count=\"47250\">
                              <!-- 47.250 -->
                              <span class=\"r-count\">{{ park.statut }}</span>
                            </div>
                            <span class=\"r-count-title\"> statut </span>
                        </div>
                    <br><br><br><br>
                   
                  <a  href=\"{{ path('app_park_indexad') }}\"><div  class=\"btn btn-success btn-1 btn-1c mb-4 mr-3 float-right btn-full\" align=\"center\" >retour</div></a>   {{ include('park/_delete_form.html.twig') }}
          

                    </div>
                    
                    
                   
    </div>
{% endblock %}
", "park/showadm.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\park\\showadm.html.twig");
    }
}
