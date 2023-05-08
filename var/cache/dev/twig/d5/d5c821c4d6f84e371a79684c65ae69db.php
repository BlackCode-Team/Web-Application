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

/* park/edit.html.twig */
class __TwigTemplate_5973e71d247dba0f422fc17dd120010b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/edit.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "park/edit.html.twig", 1);
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

        echo "Edit Park";
        
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

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <h1 align=\"center\">Modifier Park</h1>

  <div class=\"col-lg-6 layout-spacing\">
        <div class=\"statbox widget box box-shadow\">
                            <div class=\"widget-header\">                                
                                <div class=\"row\">
                                                                     
                                </div>
                            </div>
                            <div class=\"widget-content widget-content-area\">
                                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true, "id" => "form"]]);
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"form-group row mb-4\">
                                        <label for=\"modele\" class=\"col-xl-2 col-sm-3 col-sm-2 col-form-label\">nom</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
            \t\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group row mb-4\">
                                        <label for=\"modele\" class=\"col-xl-2 col-sm-3 col-sm-2 col-form-label\">Ville</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
            \t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "ville", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "ville", [], "any", false, false, false, 39), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"form-group row mb-4\">
                                        <label for=\"matricue\" class=\"col-xl-2 col-sm-3 col-sm-2 col-form-label\">Satuts</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "statut", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "statut", [], "any", false, false, false, 46), 'errors');
        echo "
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t
                                    <div class=\"form-group row mb-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"puissance\" class=\"col-xl-2 col-sm-3 col-form-label\">nbSpots</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5 col-sm-9\">
            \t\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nbspot", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "nbspot", [], "any", false, false, false, 54), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
                                    ";
        // line 63
        echo "\t\t\t\t\t\t\t\t       <div class=\"inner col-12 clearfix\">
                      
                          <button type=\"submit\" class=\"btn btn-info btn-1 btn-1b mb-4 mr-3 float-right\">Modifier Park</button>
        
                      </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "


    <a  href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_park_indexad");
        echo "\"><div  class=\"btn btn-success btn-1 btn-1c mb-4 mr-3 float-right btn-full\" align=\"center\" >back to list</div></a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "park/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 75,  216 => 72,  205 => 63,  199 => 54,  195 => 53,  185 => 46,  181 => 45,  172 => 39,  168 => 38,  159 => 32,  155 => 31,  148 => 27,  136 => 17,  126 => 16,  113 => 13,  109 => 12,  104 => 10,  100 => 9,  96 => 8,  92 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Edit Park{% endblock %}

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
    <h1 align=\"center\">Modifier Park</h1>

  <div class=\"col-lg-6 layout-spacing\">
        <div class=\"statbox widget box box-shadow\">
                            <div class=\"widget-header\">                                
                                <div class=\"row\">
                                                                     
                                </div>
                            </div>
                            <div class=\"widget-content widget-content-area\">
                                    {{ form_start(form ,{'attr': {'class' : 'needs-validation','novalidate': true,'id' : 'form'}}) }}
\t\t\t\t\t\t\t\t\t<div class=\"form-group row mb-4\">
                                        <label for=\"modele\" class=\"col-xl-2 col-sm-3 col-sm-2 col-form-label\">nom</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
            \t\t\t\t\t\t\t\t{{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.nom) }}
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group row mb-4\">
                                        <label for=\"modele\" class=\"col-xl-2 col-sm-3 col-sm-2 col-form-label\">Ville</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
            \t\t\t\t\t\t\t\t{{ form_widget(form.ville, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.ville) }}
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"form-group row mb-4\">
                                        <label for=\"matricue\" class=\"col-xl-2 col-sm-3 col-sm-2 col-form-label\">Satuts</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.statut, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.statut) }}
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t
                                    <div class=\"form-group row mb-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"puissance\" class=\"col-xl-2 col-sm-3 col-form-label\">nbSpots</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5 col-sm-9\">
            \t\t\t\t\t\t\t\t{{ form_widget(form.nbspot, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.nbspot) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
                                    {# <div class=\"form-group row mb-4\">
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
                                            {{ form_widget(form.image, {'attr': {'class': 'form-control', 'value': form.image.vars.value}}) }}
                                            {{ form_errors(form.image) }}
                                        </div>
                                    </div> #}
\t\t\t\t\t\t\t\t       <div class=\"inner col-12 clearfix\">
                      
                          <button type=\"submit\" class=\"btn btn-info btn-1 btn-1b mb-4 mr-3 float-right\">Modifier Park</button>
        
                      </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ form_end(form) }}


    <a  href=\"{{ path('app_park_indexad') }}\"><div  class=\"btn btn-success btn-1 btn-1c mb-4 mr-3 float-right btn-full\" align=\"center\" >back to list</div></a>

{% endblock %}
", "park/edit.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\park\\edit.html.twig");
    }
}
