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

/* park/new.html.twig */
class __TwigTemplate_55745cf26bbeea78252055db40767ad4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page' => [$this, 'block_page'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/new.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "park/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        echo " Gestion des Parks   ";
        
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
        echo "<div class=\"col-lg-6 layout-spacing\">
        <div class=\"statbox widget box box-shadow\">
                            <div class=\"widget-header\">                                
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                        <h4>Nouveau Park</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class=\"widget-content widget-content-area\">
                                    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true, "id" => "form"]]);
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"form-group row mb-4\">
                                        <label for=\"modele\" class=\"col-xl-2 col-sm-3 col-sm-2 col-form-label\">nom</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
            \t\t\t\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group row mb-4\">
                                        <label for=\"modele\" class=\"col-xl-2 col-sm-3 col-sm-2 col-form-label\">Ville</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
            \t\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "ville", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "ville", [], "any", false, false, false, 29), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                    <div class=\"form-group row mb-4\">
                                        <label for=\"matricue\" class=\"col-xl-2 col-sm-3 col-sm-2 col-form-label\">Satuts</label>
                                        <div class=\"col-xl-10 col-lg-9 col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "statut", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "statut", [], "any", false, false, false, 36), 'errors');
        echo "
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t
                                    <div class=\"form-group row mb-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"puissance\" class=\"col-xl-2 col-sm-3 col-form-label\">nbSpots</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5 col-sm-9\">
            \t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "nbspot", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nbspot", [], "any", false, false, false, 44), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
                                    ";
        // line 53
        echo "\t\t\t\t\t\t\t\t       <div class=\"inner col-12 clearfix\">
                      
                          <button type=\"submit\" class=\"btn m-auto d-block float-right btn-full\">Ajouter Park</button>
        
                      </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "park/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 62,  157 => 53,  151 => 44,  147 => 43,  137 => 36,  133 => 35,  124 => 29,  120 => 28,  111 => 22,  107 => 21,  100 => 17,  88 => 7,  78 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}



 {% block page %} Gestion des Parks   {% endblock %} 
{% block body %}
<div class=\"col-lg-6 layout-spacing\">
        <div class=\"statbox widget box box-shadow\">
                            <div class=\"widget-header\">                                
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                        <h4>Nouveau Park</h4>
                                    </div>                                                                        
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
                      
                          <button type=\"submit\" class=\"btn m-auto d-block float-right btn-full\">Ajouter Park</button>
        
                      </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ form_end(form) }}

{% endblock %}
", "park/new.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\templates\\park\\new.html.twig");
    }
}
