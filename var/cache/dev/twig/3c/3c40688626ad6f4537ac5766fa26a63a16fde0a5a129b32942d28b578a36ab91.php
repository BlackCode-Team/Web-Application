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
class __TwigTemplate_e0e28795e0ca02486111595aade6000d3f8e97dc6bbfc4181a7eef8095834c8f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/_form.html.twig"));

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
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nbpoint", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "my-label-class"]]);
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nbpoint", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control my-input-class"]]);
        echo "
    </div>

    <div class=\"form-group\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "role", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "my-label-class"]]);
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "role", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control my-input-class"]]);
        echo "
    </div>

    <div class=\"form-group\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "idaffectation", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "my-label-class"]]);
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "idaffectation", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control my-input-class"]]);
        echo "
    </div>

    <div class=\"form-group\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "pwd", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "my-label-class"]]);
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "pwd", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control my-input-class"]]);
        echo "
    </div>

    <button class=\"btn btn-primary\">";
        // line 47
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 47, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  150 => 48,  146 => 47,  140 => 44,  136 => 43,  129 => 39,  125 => 38,  118 => 34,  114 => 33,  107 => 29,  103 => 28,  96 => 24,  92 => 23,  85 => 19,  81 => 18,  74 => 14,  70 => 13,  63 => 9,  59 => 8,  52 => 4,  48 => 3,  43 => 1,);
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
        {{ form_label(form.nbpoint, null, {'label_attr': {'class': 'my-label-class'}}) }}
        {{ form_widget(form.nbpoint, {'attr': {'class': 'form-control my-input-class'}}) }}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.role, null, {'label_attr': {'class': 'my-label-class'}}) }}
        {{ form_widget(form.role, {'attr': {'class': 'form-control my-input-class'}}) }}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.idaffectation, null, {'label_attr': {'class': 'my-label-class'}}) }}
        {{ form_widget(form.idaffectation, {'attr': {'class': 'form-control my-input-class'}}) }}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.pwd, null, {'label_attr': {'class': 'my-label-class'}}) }}
        {{ form_widget(form.pwd, {'attr': {'class': 'form-control my-input-class'}}) }}
    </div>

    <button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>
{{ form_end(form) }}
", "utilisateur/_form.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\utilisateur\\_form.html.twig");
    }
}
