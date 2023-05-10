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

/* reservation/edit.html.twig */
class __TwigTemplate_515f49cf160d549f2c466197a6998b0d extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/edit.html.twig", 1);
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

        echo "Edit Reservation";
        
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
        echo "<div class=\"container\">
    <h1 class=\"my-4\">Edit Reservation</h1>
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-group row\">
                    <label class=\"col-sm-4 col-form-label\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "datedebut", [], "any", false, false, false, 12), 'label');
        echo "</label>
                    <div class=\"col-sm-8\">
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "datedebut", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "readonly" => true]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-4 col-form-label\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "datefin", [], "any", false, false, false, 18), 'label');
        echo "</label>
                    <div class=\"col-sm-8\">
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "datefin", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-4 col-form-label\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prixreservation", [], "any", false, false, false, 24), 'label');
        echo "</label>
                    <div class=\"col-sm-8\">
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prixreservation", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "readonly" => true]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-4 col-form-label\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "utilisateur", [], "any", false, false, false, 30), 'label');
        echo "</label>
                    <div class=\"col-sm-8\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "utilisateur", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-4 col-form-label\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "itineraire", [], "any", false, false, false, 36), 'label');
        echo "</label>
                    <div class=\"col-sm-8\">
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "itineraire", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-4 col-form-label\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vehicule", [], "any", false, false, false, 42), 'label');
        echo "</label>
                    <div class=\"col-sm-8\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "vehicule", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-4\"></div>
                    <div class=\"col-sm-8\">
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 50, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                    </div>
                </div>
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo "\" class=\"btn btn-secondary\">Back to list</a>
            ";
        // line 55
        echo twig_include($this->env, $context, "reservation/_delete_form.html.twig");
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 55,  183 => 54,  179 => 53,  173 => 50,  164 => 44,  159 => 42,  152 => 38,  147 => 36,  140 => 32,  135 => 30,  128 => 26,  123 => 24,  116 => 20,  111 => 18,  104 => 14,  99 => 12,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Reservation{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"my-4\">Edit Reservation</h1>
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            {{ form_start(form) }}
                <div class=\"form-group row\">
                    <label class=\"col-sm-4 col-form-label\">{{ form_label(form.datedebut) }}</label>
                    <div class=\"col-sm-8\">
                        {{ form_widget(form.datedebut, { 'attr': {'class': 'form-control', 'readonly': true} }) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-4 col-form-label\">{{ form_label(form.datefin) }}</label>
                    <div class=\"col-sm-8\">
                        {{ form_widget(form.datefin, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-4 col-form-label\">{{ form_label(form.prixreservation) }}</label>
                    <div class=\"col-sm-8\">
                        {{ form_widget(form.prixreservation, { 'attr': {'class': 'form-control', 'readonly': true} }) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-4 col-form-label\">{{ form_label(form.utilisateur) }}</label>
                    <div class=\"col-sm-8\">
                        {{ form_widget(form.utilisateur, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-4 col-form-label\">{{ form_label(form.itineraire) }}</label>
                    <div class=\"col-sm-8\">
                        {{ form_widget(form.itineraire, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-sm-4 col-form-label\">{{ form_label(form.vehicule) }}</label>
                    <div class=\"col-sm-8\">
                        {{ form_widget(form.vehicule, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-4\"></div>
                    <div class=\"col-sm-8\">
                        <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Modifier') }}</button>
                    </div>
                </div>
            {{ form_end(form) }}
            <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-secondary\">Back to list</a>
            {{ include('reservation/_delete_form.html.twig') }}
        </div>
    </div>
</div>
{% endblock %}
", "reservation/edit.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\reservation\\edit.html.twig");
    }
}
