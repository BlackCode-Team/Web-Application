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

/* amende/showback.html.twig */
class __TwigTemplate_d5f5c9c00d1190fabf271826dafc3eb0 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amende/showback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amende/showback.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "amende/showback.html.twig", 1);
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

        echo "Détails de l'amende";
        
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
        echo "<div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-light\">
                    <h4 class=\"text-center mb-0\">Détails de l'amende</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th class=\"w-50\">Numéro amende :</th>
                                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 18, $this->source); })()), "idamende", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Date :</th>
                                <td>";
        // line 22
        ((twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 22, $this->source); })()), "date", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 22, $this->source); })()), "date", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "</td>
                            </tr>
                            <tr>
                                <th>Montant :</th>
                                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 26, $this->source); })()), "montant", [], "any", false, false, false, 26), "html", null, true);
        echo " DT</td>
                            </tr>
                            <tr>
                                <th>Cause :</th>
                                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 30, $this->source); })()), "cause", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Description :</th>
                                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Statut de l'amende :</th>
                                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 38, $this->source); })()), "statusamende", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class=\"text-center\">
                        <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amende_index");
        echo "\" class=\"btn btn-secondary mr-3\">Retour à la liste</a>
                        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amende_edit", ["idamende" => twig_get_attribute($this->env, $this->source, (isset($context["amende"]) || array_key_exists("amende", $context) ? $context["amende"] : (function () { throw new RuntimeError('Variable "amende" does not exist.', 44, $this->source); })()), "idamende", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\" class=\"btn btn-warning\">Modifier</a>
                        ";
        // line 45
        echo twig_include($this->env, $context, "amende/_delete_form.html.twig");
        echo "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-light\">
                    <h4 class=\"text-center mb-0\">Informations supplémentaires</h4>
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
        return "amende/showback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 45,  149 => 44,  145 => 43,  137 => 38,  130 => 34,  123 => 30,  116 => 26,  109 => 22,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Détails de l'amende{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-light\">
                    <h4 class=\"text-center mb-0\">Détails de l'amende</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th class=\"w-50\">Numéro amende :</th>
                                <td>{{ amende.idamende }}</td>
                            </tr>
                            <tr>
                                <th>Date :</th>
                                <td>{{ amende.date ? amende.date|date('d/m/Y') }}</td>
                            </tr>
                            <tr>
                                <th>Montant :</th>
                                <td>{{ amende.montant }} DT</td>
                            </tr>
                            <tr>
                                <th>Cause :</th>
                                <td>{{ amende.cause }}</td>
                            </tr>
                            <tr>
                                <th>Description :</th>
                                <td>{{ amende.description }}</td>
                            </tr>
                            <tr>
                                <th>Statut de l'amende :</th>
                                <td>{{ amende.statusamende }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class=\"text-center\">
                        <a href=\"{{ path('app_amende_index') }}\" class=\"btn btn-secondary mr-3\">Retour à la liste</a>
                        <a href=\"{{ path('app_amende_edit', {'idamende': amende.idamende}) }}\" class=\"btn btn-warning\">Modifier</a>
                        {{ include('amende/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-light\">
                    <h4 class=\"text-center mb-0\">Informations supplémentaires</h4>
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
", "amende/showback.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\amende\\showback.html.twig");
    }
}
