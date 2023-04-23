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

/* park/show.html.twig */
class __TwigTemplate_388b887a257cdfa2c4182c930bc2f3e6 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "park/show.html.twig", 1);
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

<div class=\"r-counter-section pt-5 pb-5 m-0\">
    <div class=\".r-slider-serach.r-slider-serach-down > form .form-title\" align=\"center\">
    <h1><b>Park</b> Detailss</h1>
    <br><br><br>
   
    </div>
            <div class=\"container\">
    
       <div class=\"row\">
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-cars-count.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"172700\">
                              <!-- 1.172.700 -->
                              <span class=\"r-count\">";
        // line 25
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["park"]) || array_key_exists("park", $context) ? $context["park"] : (function () { throw new RuntimeError('Variable "park" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25)), "html", null, true);
        echo "</span>
                            </div>
                            <span class=\"r-count-title\"> Nom </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-total-km.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"2450\">
                              <!-- 2.450 -->
                              <span class=\"r-count\">";
        // line 38
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["park"]) || array_key_exists("park", $context) ? $context["park"] : (function () { throw new RuntimeError('Variable "park" does not exist.', 38, $this->source); })()), "ville", [], "any", false, false, false, 38)), "html", null, true);
        echo "</span>
                            </div>
                            <span class=\"r-count-title\"> ville </span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/advantage-icon-3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"1211100\">
                              <!-- 1.211.100 -->
                              <span class=\"r-count\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["park"]) || array_key_exists("park", $context) ? $context["park"] : (function () { throw new RuntimeError('Variable "park" does not exist.', 51, $this->source); })()), "nbspot", [], "any", false, false, false, 51), "html", null, true);
        echo " </span>
                            </div>
                            <span class=\"r-count-title\"> Nombre de Spots <b>disponible</b></span>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"r-counter-box\">
                            <div class=\"r-counter-icon\">
                                <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/advantage-icon-2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"r-counts\" data-count=\"47250\">
                              <!-- 47.250 -->
                              <span class=\"r-count\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["park"]) || array_key_exists("park", $context) ? $context["park"] : (function () { throw new RuntimeError('Variable "park" does not exist.', 64, $this->source); })()), "statut", [], "any", false, false, false, 64), "html", null, true);
        echo "</span>
                            </div>
                            <span class=\"r-count-title\"> status </span>
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
        return "park/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 64,  181 => 60,  169 => 51,  162 => 47,  150 => 38,  143 => 34,  131 => 25,  124 => 21,  108 => 7,  98 => 6,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Park{% endblock %}
{% block page %} Park details {% endblock %} 

{% block body %}


<div class=\"r-counter-section pt-5 pb-5 m-0\">
    <div class=\".r-slider-serach.r-slider-serach-down > form .form-title\" align=\"center\">
    <h1><b>Park</b> Detailss</h1>
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
                            </div>
                            <div class=\"r-counts\" data-count=\"47250\">
                              <!-- 47.250 -->
                              <span class=\"r-count\">{{ park.statut }}</span>
                            </div>
                            <span class=\"r-count-title\"> status </span>
                        </div>

        
                    </div>
                    
                  
                    



    </div>
    </div>
{% endblock %}
", "park/show.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\Web-Application\\templates\\park\\show.html.twig");
    }
}
