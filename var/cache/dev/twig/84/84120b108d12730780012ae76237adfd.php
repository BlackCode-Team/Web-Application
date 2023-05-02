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

/* vehicule/show.html.twig */
class __TwigTemplate_142402b2c66fcc5a08f8efbf1afd7aa5 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "vehicule/show.html.twig", 1);
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

        echo "Vehicule";
        
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
        echo "<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-6\">
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-lg-4\">
                            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 13, $this->source); })()), "modele", [], "any", false, false, false, 13), "html", null, true);
        echo "\" class=\"img-fluid rounded\">
                        </div>
                        <div class=\"col-lg-8\">
                            <h2 class=\"mb-0\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 16, $this->source); })()), "modele", [], "any", false, false, false, 16), "html", null, true);
        echo "</h2>
                            <p class=\"lead mb-0\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 17, $this->source); })()), "matricule", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"row mb-4\">
                        <div class=\"col-lg-4\">
                        <h6 class=\"text-muted\">Puissance</h6>
                    </div>
                    <div class=\"col-lg-8\">
                    <p class=\"lead mb-0\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 25, $this->source); })()), "puissance", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"text-muted\">Prix/H</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        <p class=\"lead mb-0\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 33, $this->source); })()), "prix", [], "any", false, false, false, 33), "html", null, true);
        echo "DT</p>
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"text-muted\">Batterie</h6>
                    </div>
                    <div class=\"col-lg-8\">
                    <p class=\"lead mb-0\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 41, $this->source); })()), "batterie", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"text-muted\">Status</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        <p class=\"lead mb-0\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_edit", ["idvehicule" => twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 54, $this->source); })()), "idvehicule", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">Modifier</a>
                        ";
        // line 55
        echo twig_include($this->env, $context, "vehicule/_delete_form.html.twig");
        echo "
                    </div>
                    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_back");
        echo "\" class=\"btn btn-sm btn-outline-secondary\">Retour</a>
                </div>
            </div>
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
        return "vehicule/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  165 => 55,  161 => 54,  153 => 49,  142 => 41,  131 => 33,  120 => 25,  109 => 17,  105 => 16,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Vehicule{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-6\">
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-lg-4\">
                            <img src=\"{{ asset('images/' ~ vehicule.image) }}\" alt=\"{{ vehicule.modele }}\" class=\"img-fluid rounded\">
                        </div>
                        <div class=\"col-lg-8\">
                            <h2 class=\"mb-0\">{{ vehicule.modele }}</h2>
                            <p class=\"lead mb-0\">{{ vehicule.matricule }}</p>
                        </div>
                    </div>
                    <div class=\"row mb-4\">
                        <div class=\"col-lg-4\">
                        <h6 class=\"text-muted\">Puissance</h6>
                    </div>
                    <div class=\"col-lg-8\">
                    <p class=\"lead mb-0\">{{ vehicule.puissance }}</p>
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"text-muted\">Prix/H</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        <p class=\"lead mb-0\">{{ vehicule.prix }}DT</p>
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"text-muted\">Batterie</h6>
                    </div>
                    <div class=\"col-lg-8\">
                    <p class=\"lead mb-0\">{{ vehicule.batterie }}</p>
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"text-muted\">Status</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        <p class=\"lead mb-0\">{{ vehicule.status }}</p>
                    </div>
                </div>
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                        <a href=\"{{ path('app_vehicule_edit', {'idvehicule': vehicule.idvehicule}) }}\" class=\"btn btn-sm btn-outline-secondary\">Modifier</a>
                        {{ include('vehicule/_delete_form.html.twig') }}
                    </div>
                    <a href=\"{{ path('app_vehicule_back') }}\" class=\"btn btn-sm btn-outline-secondary\">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{% endblock %}", "vehicule/show.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\vehicule\\show.html.twig");
    }
}
