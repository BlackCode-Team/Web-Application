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

/* utilisateur/_form.html.twig */
class __TwigTemplate_cf5cf3991acd090470a3665659a83df3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "my-form-class"]]);
        echo "
    <div class=\"form-group\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), 'label', ["label_attr" => ["class" => "my-label-class"]]);
        echo "
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "form-control my-input-class"]]);
        echo "
    </div>

    <div class=\"form-group\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "prenom", [], "any", false, false, false, 8), 'label', ["label_attr" => ["class" => "my-label-class"]]);
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "prenom", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control my-input-class"]]);
        echo "
    </div>

    <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "my-label-class"]]);
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control my-input-class"]]);
        echo "
    </div>

    <div class=\"form-group\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "cin", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "my-label-class"]]);
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "cin", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control my-input-class"]]);
        echo "
    </div>

    <div class=\"form-group\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "permis", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "my-label-class"]]);
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "permis", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control my-input-class"]]);
        echo "
    </div>

    

    <div class=\"form-group\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "role", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "my-label-class"]]);
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "role", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control my-input-class"]]);
        echo "
    </div>

    

    <div class=\"form-group\">
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "pwd", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "my-label-class"]]);
        echo "
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "pwd", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control my-input-class"]]);
        echo "
    </div>

    <button class=\"btn btn-primary\">";
        // line 41
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 41, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 42,  128 => 41,  122 => 38,  118 => 37,  109 => 31,  105 => 30,  96 => 24,  92 => 23,  85 => 19,  81 => 18,  74 => 14,  70 => 13,  63 => 9,  59 => 8,  52 => 4,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'my-form-class'}}) }}
    <div class=\"form-group\">
        {{ form_label(form.nom, null, {'label_attr': {'class': 'my-label-class'}}) }}
        {{ form_widget(form.nom, {'attr': {'class': 'form-control my-input-class'}}) }}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.prenom, null, {'label_attr': {'class': 'my-label-class'}}) }}
        {{ form_widget(form.prenom, {'attr': {'class': 'form-control my-input-class'}}) }}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.email, null, {'label_attr': {'class': 'my-label-class'}}) }}
        {{ form_widget(form.email, {'attr': {'class': 'form-control my-input-class'}}) }}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.cin, null, {'label_attr': {'class': 'my-label-class'}}) }}
        {{ form_widget(form.cin, {'attr': {'class': 'form-control my-input-class'}}) }}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.permis, null, {'label_attr': {'class': 'my-label-class'}}) }}
        {{ form_widget(form.permis, {'attr': {'class': 'form-control my-input-class'}}) }}
    </div>

    

    <div class=\"form-group\">
        {{ form_label(form.role, null, {'label_attr': {'class': 'my-label-class'}}) }}
        {{ form_widget(form.role, {'attr': {'class': 'form-control my-input-class'}}) }}
    </div>

    

    <div class=\"form-group\">
        {{ form_label(form.pwd, null, {'label_attr': {'class': 'my-label-class'}}) }}
        {{ form_widget(form.pwd, {'attr': {'class': 'form-control my-input-class'}}) }}
    </div>

    <button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>
{{ form_end(form) }}
", "utilisateur/_form.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\utilisateur\\_form.html.twig");
    }
}
