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

/* vehicule/edit.html.twig */
class __TwigTemplate_efad4727fca6dd4bcea9cb3dc47651ccdfa7c938fc8b5585c6c31c5ec448d6fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vehicule/edit.html.twig", 1);
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

        echo "Edit Vehicule";
        
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
        echo "    <div class=\"col-lg-6 layout-spacing\">
        <div class=\"statbox widget box box-shadow\">
                            <div class=\"widget-header\">                                
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                        <h4>Changer les criteres de vehicule</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class=\"widget-content widget-content-area\">
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true, "id" => "form"]]);
        echo "
\t\t\t\t\t\t\t\t\t
                                    <fieldset class=\"form-group mb-4\">
    <div class=\"row\">
        <label>Choisir type de vehicule</label>
        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
            <select class=\"form-control\" readonly>
                <option value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), "type", [], "any", false, false, false, 23), "html", null, true);
        echo "\" selected>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), "type", [], "any", false, false, false, 23), "html", null, true);
        echo "</option>
            </select>
        </div>
    </div>
</fieldset>
\t\t\t\t\t\t\t\t\t<div class=\"form-group row mb-4\">
                                        <label for=\"modele\" class=\"col-xl-2 col-sm-3 col-sm-2 col-form-label\">Modele</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
            \t\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "modele", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "modele", [], "any", false, false, false, 32), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                     <div class=\"form-group row mb-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"matricue\" class=\"col-xl-2 col-sm-3 col-form-label\">Matricule</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "matricule", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "matricule", [], "any", false, false, false, 39), 'errors');
        echo "
                                        </div>
                                        <label for=\"batterie\" class=\"col-xl-2 col-sm-3 col-form-label\">batterie/h</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5 col-sm-9\">
            \t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "batterie", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "batterie", [], "any", false, false, false, 44), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t\t\t
                                    <div class=\"form-group row mb-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"puissance\" class=\"col-xl-2 col-sm-3 col-form-label\">Puissance</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5 col-sm-9\">
            \t\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "puissance", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "puissance", [], "any", false, false, false, 52), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label for=\"prix\" class=\"col-xl-2 col-sm-3 col-form-label\">prix/h</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5 col-sm-9\">
            \t\t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "prix", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "prix", [], "any", false, false, false, 58), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group row mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-10 col-lg-9 col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "image", [], "any", false, false, false, 64), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t <div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "submit", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "btn btn-button-7 mb-4 mt-3 float-right"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
 ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "
    <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        echo "\">back to list</a>
    ";
        // line 74
        echo twig_include($this->env, $context, "vehicule/_delete_form.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vehicule/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 74,  207 => 73,  203 => 72,  197 => 69,  189 => 64,  185 => 63,  177 => 58,  173 => 57,  165 => 52,  161 => 51,  151 => 44,  147 => 43,  140 => 39,  136 => 38,  127 => 32,  123 => 31,  110 => 23,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Vehicule{% endblock %}

{% block body %}
    <div class=\"col-lg-6 layout-spacing\">
        <div class=\"statbox widget box box-shadow\">
                            <div class=\"widget-header\">                                
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                        <h4>Changer les criteres de vehicule</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class=\"widget-content widget-content-area\">
{{ form_start(form ,{'attr': {'class' : 'needs-validation','novalidate': true,'id' : 'form'}}) }}
\t\t\t\t\t\t\t\t\t
                                    <fieldset class=\"form-group mb-4\">
    <div class=\"row\">
        <label>Choisir type de vehicule</label>
        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
            <select class=\"form-control\" readonly>
                <option value=\"{{ form.vars.value.type }}\" selected>{{ form.vars.value.type }}</option>
            </select>
        </div>
    </div>
</fieldset>
\t\t\t\t\t\t\t\t\t<div class=\"form-group row mb-4\">
                                        <label for=\"modele\" class=\"col-xl-2 col-sm-3 col-sm-2 col-form-label\">Modele</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
            \t\t\t\t\t\t\t\t{{ form_widget(form.modele, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.modele) }}
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                     <div class=\"form-group row mb-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"matricue\" class=\"col-xl-2 col-sm-3 col-form-label\">Matricule</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.matricule, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.matricule) }}
                                        </div>
                                        <label for=\"batterie\" class=\"col-xl-2 col-sm-3 col-form-label\">batterie/h</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5 col-sm-9\">
            \t\t\t\t\t\t\t\t{{ form_widget(form.batterie, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.batterie) }}
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t\t\t
                                    <div class=\"form-group row mb-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"puissance\" class=\"col-xl-2 col-sm-3 col-form-label\">Puissance</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5 col-sm-9\">
            \t\t\t\t\t\t\t\t{{ form_widget(form.puissance, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.puissance) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label for=\"prix\" class=\"col-xl-2 col-sm-3 col-form-label\">prix/h</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5 col-sm-9\">
            \t\t\t\t\t\t\t\t{{ form_widget(form.prix, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.prix) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group row mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-10 col-lg-9 col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.image) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t <div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.submit, {'attr': {'class': 'btn btn-button-7 mb-4 mt-3 float-right'}}) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
 {{ form_end(form) }}
    <a href=\"{{ path('app_vehicule_index') }}\">back to list</a>
    {{ include('vehicule/_delete_form.html.twig') }}

{% endblock %}
", "vehicule/edit.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\vehicule\\edit.html.twig");
    }
}