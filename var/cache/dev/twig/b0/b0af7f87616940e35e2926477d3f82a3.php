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
class __TwigTemplate_70a0044a1018c1d8558e66e23f74d0e4 extends \Twig\Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "reservation/edit.html.twig", 1);
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
                <div class=\"form-group row\" style=\"display:none;\">
>
                    <label class=\"col-sm-4 col-form-label\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "utilisateur", [], "any", false, false, false, 31), 'label');
        echo "</label>
                    <div class=\"col-sm-8\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "utilisateur", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group row\" style=\"display:none;\">
                    <label class=\"col-sm-4 col-form-label\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "itineraire", [], "any", false, false, false, 37), 'label');
        echo "</label>
                    <div class=\"col-sm-8\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "itineraire", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group row\" style=\"display:none;\">
                    <label class=\"col-sm-4 col-form-label\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "vehicule", [], "any", false, false, false, 43), 'label');
        echo "</label>
                    <div class=\"col-sm-8\">
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vehicule", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-4\"></div>
                    <div class=\"col-sm-8\">
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 51
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 51, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                    </div>
                </div>
            ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
            <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo "\" class=\"btn btn-secondary\">Back to list</a>
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
        return array (  184 => 55,  180 => 54,  174 => 51,  165 => 45,  160 => 43,  153 => 39,  148 => 37,  141 => 33,  136 => 31,  128 => 26,  123 => 24,  116 => 20,  111 => 18,  104 => 14,  99 => 12,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

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
                <div class=\"form-group row\" style=\"display:none;\">
>
                    <label class=\"col-sm-4 col-form-label\">{{ form_label(form.utilisateur) }}</label>
                    <div class=\"col-sm-8\">
                        {{ form_widget(form.utilisateur, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                </div>
                <div class=\"form-group row\" style=\"display:none;\">
                    <label class=\"col-sm-4 col-form-label\">{{ form_label(form.itineraire) }}</label>
                    <div class=\"col-sm-8\">
                        {{ form_widget(form.itineraire, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                </div>
                <div class=\"form-group row\" style=\"display:none;\">
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
        </div>
    </div>
</div>
{% endblock %}
", "reservation/edit.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\Web-Application\\templates\\reservation\\edit.html.twig");
    }
}
