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

/* utilisateur/block.html.twig */
class __TwigTemplate_a8b3b477d60501b0556f667a6823d3b3 extends \Twig\Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/block.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "utilisateur/block.html.twig", 1);
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

        echo "Utilisateur index";
        
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
        echo "    <h1>Gestion des Clients</h1>

    <div class=\"row\">
                                                               
                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing\">
                        <div class=\"statbox widget box\">
                            <div class=\"widget-header \">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                      
                                    </div>                 
                                </div>
                            </div>

                            <div class=\"widget-content-area \">

                                <div class=\"table-responsive new-products\">
                 <table class=\"table\">
  <thead>
    <tr>
      <th class=\"text-center\">Iduser</th>
      <th class=\"text-center\">Role</th>
      <th class=\"text-center\">Nom</th>
      <th class=\"text-center\">Prenom</th>
      <th class=\"text-center\">Pwd</th>
      <th class=\"text-center\">Email</th>
      <th class=\"text-center\">Cin</th>
      <th class=\"text-center\">Permis</th>
      <th class=\"text-center\">Nbpoint</th>
      <th class=\"text-center\">Actions</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 40
            echo "    <tr>
      <td class=\"text-center\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "iduser", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
      <td class=\"text-center\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "role", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
      <td class=\"text-center\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
      <td class=\"text-center\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
      <td class=\"text-center\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "pwd", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
      <td class=\"text-center\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
      <td class=\"text-center\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "cin", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
      <td class=\"text-center\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "permis", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
      <td class=\"text-center\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nbpoint", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
      <td class=\"text-center\">
        <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["iduser" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "iduser", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">Afficher</a>
        <a class=\"btn btn-danger btn-sm\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_block", ["iduser" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "iduser", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Block</a>
      </td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "    <tr>
      <td colspan=\"10\">Aucun enregistrement trouvé</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "  </tbody>
</table>



   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 68
        echo "    .table {
  width: 100%;
  margin-bottom: 1rem;
  background-color: #fff;
  color: #212529;
  border-collapse: collapse;
}
.table td, .table th {
  padding: .75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}
.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}
.table tbody+tbody {
  border-top: 2px solid #dee2e6;
}
.table .table {
  background-color: #fff;
}

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 68,  207 => 67,  191 => 60,  182 => 56,  173 => 52,  169 => 51,  164 => 49,  160 => 48,  156 => 47,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  136 => 42,  132 => 41,  129 => 40,  124 => 39,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Utilisateur index{% endblock %}

{% block body %}
    <h1>Gestion des Clients</h1>

    <div class=\"row\">
                                                               
                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing\">
                        <div class=\"statbox widget box\">
                            <div class=\"widget-header \">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                      
                                    </div>                 
                                </div>
                            </div>

                            <div class=\"widget-content-area \">

                                <div class=\"table-responsive new-products\">
                 <table class=\"table\">
  <thead>
    <tr>
      <th class=\"text-center\">Iduser</th>
      <th class=\"text-center\">Role</th>
      <th class=\"text-center\">Nom</th>
      <th class=\"text-center\">Prenom</th>
      <th class=\"text-center\">Pwd</th>
      <th class=\"text-center\">Email</th>
      <th class=\"text-center\">Cin</th>
      <th class=\"text-center\">Permis</th>
      <th class=\"text-center\">Nbpoint</th>
      <th class=\"text-center\">Actions</th>
    </tr>
  </thead>
  <tbody>
    {% for utilisateur in utilisateurs %}
    <tr>
      <td class=\"text-center\">{{ utilisateur.iduser }}</td>
      <td class=\"text-center\">{{ utilisateur.role }}</td>
      <td class=\"text-center\">{{ utilisateur.nom }}</td>
      <td class=\"text-center\">{{ utilisateur.prenom }}</td>
      <td class=\"text-center\">{{ utilisateur.pwd }}</td>
      <td class=\"text-center\">{{ utilisateur.email }}</td>
      <td class=\"text-center\">{{ utilisateur.cin }}</td>
      <td class=\"text-center\">{{ utilisateur.permis }}</td>
      <td class=\"text-center\">{{ utilisateur.nbpoint }}</td>
      <td class=\"text-center\">
        <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_utilisateur_show', {'iduser': utilisateur.iduser}) }}\">Afficher</a>
        <a class=\"btn btn-danger btn-sm\" href=\"{{ path('app_utilisateur_block', {'iduser': utilisateur.iduser}) }}\">Block</a>
      </td>
    </tr>
    {% else %}
    <tr>
      <td colspan=\"10\">Aucun enregistrement trouvé</td>
    </tr>
    {% endfor %}
  </tbody>
</table>



   
{% endblock %}
{% block stylesheets %}
    .table {
  width: 100%;
  margin-bottom: 1rem;
  background-color: #fff;
  color: #212529;
  border-collapse: collapse;
}
.table td, .table th {
  padding: .75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}
.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}
.table tbody+tbody {
  border-top: 2px solid #dee2e6;
}
.table .table {
  background-color: #fff;
}

{% endblock %}", "utilisateur/block.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\Web-Application\\templates\\utilisateur\\block.html.twig");
    }
}
