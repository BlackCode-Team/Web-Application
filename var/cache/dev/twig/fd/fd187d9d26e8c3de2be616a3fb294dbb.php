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

/* amende/indexfront.html.twig */
class __TwigTemplate_efb6b104beb0204131d428b64d170bd2 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amende/indexfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amende/indexfront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "amende/indexfront.html.twig", 1);
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

        echo "Amende index";
        
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
        echo "  <div class=\"container-fluid\">

    <div class=\"page-header\">
      <h1>Mon historique d'amendes</h1>
    </div>

    <div class=\"row\">
      <div class=\"col-md-6\">
        <form class=\"form-inline\" method=\"get\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amende_filterfront");
        echo "\">
          <div class=\"form-group\">
            <label class=\"sr-only\" for=\"input-search\">Recherche</label>
            <input type=\"text\" class=\"form-control\" id=\"input-search\" name=\"search\" placeholder=\"Entrez le numéro de l'amende\">
          </div>
          <button type=\"submit\" class=\"btn btn-primary ml-2\">Rechercher</button>
        </form>
      </div>
      <div class=\"col-md-6 text-right\">
        <form class=\"form-inline\" method=\"get\" action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amende_filterfront");
        echo "\">
          <div class=\"form-group\">
            <label class=\"mr-2\" for=\"input-status\">Status:</label>
            <select class=\"form-control\" id=\"input-status\" name=\"statusamende\">
              <option value=\"Tous\">Tous</option>
              <option value=\"Paye\">Paye</option>
              <option value=\"Non Paye\">Non Paye</option>
            </select>
          </div>
          <button type=\"submit\" class=\"btn btn-primary ml-2\">Filtrer</button>
        </form>
      </div>
    </div>

    <div class=\"table-responsive mt-4\">
      <table class=\"table table-striped table-bordered table-hover\">
        <thead class=\"thead-dark\">
          <tr>
            <th>Numero amende</th>
            <th>Date de creation</th>
            <th>Montant</th>
            <th>Cause</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["amendes"]) || array_key_exists("amendes", $context) ? $context["amendes"] : (function () { throw new RuntimeError('Variable "amendes" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["amende"]) {
            // line 51
            echo "          <tr>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amende"], "idamende", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
            <td>";
            // line 53
            ((twig_get_attribute($this->env, $this->source, $context["amende"], "date", [], "any", false, false, false, 53)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amende"], "date", [], "any", false, false, false, 53), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amende"], "montant", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amende"], "cause", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amende"], "description", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
            <td>
              <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amende_show", ["idamende" => twig_get_attribute($this->env, $this->source, $context["amende"], "idamende", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">Voir</a>
            </td>
          </tr>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "          <tr>
            <td colspan=\"7\">Aucune amende trouvée</td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amende'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "amende/indexfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 66,  178 => 62,  169 => 58,  164 => 56,  160 => 55,  156 => 54,  152 => 53,  148 => 52,  145 => 51,  140 => 50,  110 => 23,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Amende index{% endblock %}

{% block body %}
  <div class=\"container-fluid\">

    <div class=\"page-header\">
      <h1>Mon historique d'amendes</h1>
    </div>

    <div class=\"row\">
      <div class=\"col-md-6\">
        <form class=\"form-inline\" method=\"get\" action=\"{{ path('amende_filterfront') }}\">
          <div class=\"form-group\">
            <label class=\"sr-only\" for=\"input-search\">Recherche</label>
            <input type=\"text\" class=\"form-control\" id=\"input-search\" name=\"search\" placeholder=\"Entrez le numéro de l'amende\">
          </div>
          <button type=\"submit\" class=\"btn btn-primary ml-2\">Rechercher</button>
        </form>
      </div>
      <div class=\"col-md-6 text-right\">
        <form class=\"form-inline\" method=\"get\" action=\"{{ path('amende_filterfront') }}\">
          <div class=\"form-group\">
            <label class=\"mr-2\" for=\"input-status\">Status:</label>
            <select class=\"form-control\" id=\"input-status\" name=\"statusamende\">
              <option value=\"Tous\">Tous</option>
              <option value=\"Paye\">Paye</option>
              <option value=\"Non Paye\">Non Paye</option>
            </select>
          </div>
          <button type=\"submit\" class=\"btn btn-primary ml-2\">Filtrer</button>
        </form>
      </div>
    </div>

    <div class=\"table-responsive mt-4\">
      <table class=\"table table-striped table-bordered table-hover\">
        <thead class=\"thead-dark\">
          <tr>
            <th>Numero amende</th>
            <th>Date de creation</th>
            <th>Montant</th>
            <th>Cause</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for amende in amendes %}
          <tr>
            <td>{{ amende.idamende }}</td>
            <td>{{ amende.date ? amende.date|date('Y-m-d H:i:s') : '' }}</td>
            <td>{{ amende.montant }}</td>
            <td>{{ amende.cause }}</td>
            <td>{{ amende.description }}</td>
            <td>
              <a class=\"btn btn-sm btn-primary\" href=\"{{ path('app_amende_show', {'idamende': amende.idamende}) }}\">Voir</a>
            </td>
          </tr>
          {% else %}
          <tr>
            <td colspan=\"7\">Aucune amende trouvée</td>
          </tr>
          {% endfor %}

        </tbody>
    </table>

{% endblock %}
", "amende/indexfront.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\Web-Application\\templates\\amende\\indexfront.html.twig");
    }
}
