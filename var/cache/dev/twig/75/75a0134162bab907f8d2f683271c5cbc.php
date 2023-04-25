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

/* vehicule/catalogue.html.twig */
class __TwigTemplate_edb334066be80afcf08c0a3f877f1229 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/catalogue.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/catalogue.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Catalogue de voitures</title>
    <style>
        /* Ajouter des styles CSS pour le PDF ici */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.5;
        }
        h1 {
            font-size: 18px;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background-color: #ddd;
            padding: 10px;
            border: 1px solid #ccc;
        }
        td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <h1>Catalogue de voitures</h1>
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Matricule</th>
                <th>Modèle</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 51
            echo "            <tr>
                <td><img src=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" style=\"width:200px;\"></td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "matricule", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prix", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "vehicule/catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 58,  113 => 55,  109 => 54,  105 => 53,  101 => 52,  98 => 51,  94 => 50,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Catalogue de voitures</title>
    <style>
        /* Ajouter des styles CSS pour le PDF ici */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.5;
        }
        h1 {
            font-size: 18px;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background-color: #ddd;
            padding: 10px;
            border: 1px solid #ccc;
        }
        td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <h1>Catalogue de voitures</h1>
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Matricule</th>
                <th>Modèle</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            {% for vehicule in vehicules %}
            <tr>
                <td><img src=\"{{imageSrc}}\" style=\"width:200px;\"></td>
                <td>{{ vehicule.matricule }}</td>
                <td>{{ vehicule.modele }}</td>
                <td>{{ vehicule.prix }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</body>
</html>
", "vehicule/catalogue.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\vehicule\\catalogue.html.twig");
    }
}
