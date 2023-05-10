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

/* amende/show.html.twig */
class __TwigTemplate_f77eb78e9c336292c232e30696c3005a extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amende/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amende/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "amende/show.html.twig", 1);
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

        echo "Amende";
        
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
    <h1 class=\"text-center\">Détails de l'amende</h1>
    <hr>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <table class=\"table table-bordered table-hover\">
                <tbody>
                    <tr>
                        <th class=\"table-dark\">Numéro amende :</th>
                        <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 16, $this->source); })()), "idamende", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"table-dark\">Date :</th>
                        <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 20, $this->source); })()), "date", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 20, $this->source); })()), "date", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"table-dark\">Montant :</th>
                        <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 24, $this->source); })()), "montant", [], "any", false, false, false, 24), "html", null, true);
        echo " DT</td>
                    </tr>
                    <tr>
                        <th class=\"table-dark\">Cause :</th>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 28, $this->source); })()), "cause", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"table-dark\">Description :</th>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amende_index");
        echo "\" class=\"btn btn-warning\">Retour à la page precedente</a>
            
        </div>

        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-header text-center\">
                    <h4>Informations supplémentaires</h4>
                </div>
                <div class=\"card-body\">
                    <p>Les amendes doivent être payées dans les 30 jours suivant la date d'émission.</p>
                    <p>En cas de retard de paiement, des frais supplémentaires peuvent s'appliquer.</p>
                    <p>Contactez-nous si vous avez des questions ou des préoccupations concernant cette amende.</p>
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
        return "amende/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 37,  128 => 32,  121 => 28,  114 => 24,  107 => 20,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Amende{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"text-center\">Détails de l'amende</h1>
    <hr>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <table class=\"table table-bordered table-hover\">
                <tbody>
                    <tr>
                        <th class=\"table-dark\">Numéro amende :</th>
                        <td>{{ amende.idamende }}</td>
                    </tr>
                    <tr>
                        <th class=\"table-dark\">Date :</th>
                        <td>{{ amende.date ? amende.date|date('d/m/Y') }}</td>
                    </tr>
                    <tr>
                        <th class=\"table-dark\">Montant :</th>
                        <td>{{ amende.montant }} DT</td>
                    </tr>
                    <tr>
                        <th class=\"table-dark\">Cause :</th>
                        <td>{{ amende.cause }}</td>
                    </tr>
                    <tr>
                        <th class=\"table-dark\">Description :</th>
                        <td>{{ amende.description }}</td>
                    </tr>
                </tbody>
            </table>

            <a href=\"{{ path('app_amende_index') }}\" class=\"btn btn-warning\">Retour à la page precedente</a>
            
        </div>

        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-header text-center\">
                    <h4>Informations supplémentaires</h4>
                </div>
                <div class=\"card-body\">
                    <p>Les amendes doivent être payées dans les 30 jours suivant la date d'émission.</p>
                    <p>En cas de retard de paiement, des frais supplémentaires peuvent s'appliquer.</p>
                    <p>Contactez-nous si vous avez des questions ou des préoccupations concernant cette amende.</p>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "amende/show.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\Web-Application\\templates\\amende\\show.html.twig");
    }
}
