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

/* reservation/detail.html.twig */
class __TwigTemplate_d7e0ab87fdd93e429e2d07eccf1d1a2d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/detail.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" style=\"width:200px;\">


    <h1 style=\"font-size: 20px; text-align: center;\">Reservation Details</h1>
    <div class=\"alert\" style=\"background-color: #c3e6cb; padding: 10px;\">
        Reservation Number: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 7, $this->source); })()), "idreservation", [], "any", false, false, false, 7), "html", null, true);
        echo " 
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 13
        echo "
    <h2 style=\"font-size: 16px;\">Reservation Information:</h2>
    <table style=\"width: 100%; border-collapse: collapse;\">
        <tr>
            <td style=\"width: 50%; font-weight: bold;\">Price:</td>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 18, $this->source); })()), "prixreservation", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 50%; font-weight: bold;\">Vehicule:</td>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 22, $this->source); })()), "vehicule", [], "any", false, false, false, 22), "modele", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 50%; font-weight: bold;\">Start Date:</td>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "datedebut", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 50%; font-weight: bold;\">End Date:</td>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 30, $this->source); })()), "datefin", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td style=\"width: 50%; font-weight: bold;\">User:</td>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "utilisateur", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "utilisateur", [], "any", false, false, false, 34), "prenom", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
        </tr>
       <tr>
            <td style=\"width: 50%; font-weight: bold;\">Départ:</td>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 38, $this->source); })()), "itineraire", [], "any", false, false, false, 38), "pointdepart", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
        </tr> 
        <tr>
            <td style=\"width: 50%; font-weight: bold;\">Destination:</td>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 42, $this->source); })()), "itineraire", [], "any", false, false, false, 42), "pointarrivee", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
        </tr>
        
    </table>

    <div style=\"text-align: center; margin-top: 20px;\">
   <h2> Your QR Code is here :</h2>
     <h3> Install some QR reader app,
          and scan this image.</h3>
        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["stringqrCodes"]) || array_key_exists("stringqrCodes", $context) ? $context["stringqrCodes"] : (function () { throw new RuntimeError('Variable "stringqrCodes" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\" style=\"width:200px;\">
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/detail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 51,  154 => 42,  147 => 38,  138 => 34,  131 => 30,  124 => 26,  117 => 22,  110 => 18,  103 => 13,  93 => 12,  79 => 7,  70 => 2,  60 => 1,  50 => 12,  47 => 11,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
        <img src=\"{{ imageSrc }}\" style=\"width:200px;\">


    <h1 style=\"font-size: 20px; text-align: center;\">Reservation Details</h1>
    <div class=\"alert\" style=\"background-color: #c3e6cb; padding: 10px;\">
        Reservation Number: {{ reservation.idreservation }} 
    </div>

{% endblock %}

{% block title %}

    <h2 style=\"font-size: 16px;\">Reservation Information:</h2>
    <table style=\"width: 100%; border-collapse: collapse;\">
        <tr>
            <td style=\"width: 50%; font-weight: bold;\">Price:</td>
            <td>{{ reservation.prixreservation }}</td>
        </tr>
        <tr>
            <td style=\"width: 50%; font-weight: bold;\">Vehicule:</td>
            <td>{{ reservation.vehicule.modele }}</td>
        </tr>
        <tr>
            <td style=\"width: 50%; font-weight: bold;\">Start Date:</td>
            <td>{{ reservation.datedebut|date(\"Y-m-d H:i:s\") }}</td>
        </tr>
        <tr>
            <td style=\"width: 50%; font-weight: bold;\">End Date:</td>
            <td>{{ reservation.datefin|date(\"Y-m-d H:i:s\") }}</td>
        </tr>
        <tr>
            <td style=\"width: 50%; font-weight: bold;\">User:</td>
            <td>{{ reservation.utilisateur.nom }} {{ reservation.utilisateur.prenom }}</td>
        </tr>
       <tr>
            <td style=\"width: 50%; font-weight: bold;\">Départ:</td>
            <td>{{ reservation.itineraire.pointdepart }}</td>
        </tr> 
        <tr>
            <td style=\"width: 50%; font-weight: bold;\">Destination:</td>
            <td>{{ reservation.itineraire.pointarrivee }}</td>
        </tr>
        
    </table>

    <div style=\"text-align: center; margin-top: 20px;\">
   <h2> Your QR Code is here :</h2>
     <h3> Install some QR reader app,
          and scan this image.</h3>
        <img src=\"{{ stringqrCodes }}\" style=\"width:200px;\">
    </div>

{% endblock %}
", "reservation/detail.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\reservation\\detail.html.twig");
    }
}
