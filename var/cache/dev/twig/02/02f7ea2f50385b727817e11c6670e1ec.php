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

/* reservation/index.html.twig */
class __TwigTemplate_cf541eb4ff5bdc3cb4e5edd8815d6f07 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "reservation/index.html.twig", 1);
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

        echo "Liste des réservations";
        
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

  <div class=\"page-header\">
    <h1>Liste des réservations</h1>
  </div>

  <div class=\"row\">
    <div class=\"col-md-6\">
      <form class=\"form-inline\" method=\"get\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">
        <div class=\"form-group\">
          <label class=\"sr-only\" for=\"input-search\">Recherche</label>
          <input type=\"text\" class=\"form-control\" id=\"input-search\" name=\"mm\" placeholder=\"Entrez le CIN ou la matricule\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary ml-2\">Rechercher</button>
      </form>
    </div>
    <div class=\"col-md-6 text-right\">
      <form class=\"form-inline\" method=\"get\" action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_filter");
        echo "\">
        <div class=\"form-group\">
          <label class=\"mr-2\" for=\"input-status\">Status:</label>
          <select class=\"form-control\" id=\"input-status\" name=\"status\">
            <option value=\"Tous\">Tous</option>
            <option value=\"En cours\">En cours</option>
            <option value=\"Terminé\">Terminé</option>
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
          <th>Numéro de réservation</th>
          <th>Utilisateur</th>
          <th>Date de début</th>
          <th>Date de fin</th>
          <th>Status</th>
          <th>Tarification</th>
          <th>Matricule</th>
          <th>Point d'arrivée</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 54
            echo "        <tr>
          <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
          <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "utilisateur", [], "any", false, false, false, 56), "cin", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
          <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "datedebut", [], "any", false, false, false, 57), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
          <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "datefin", [], "any", false, false, false, 58), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
          <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
          <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "prixreservation", [], "any", false, false, false, 60), "html", null, true);
            echo " DT</td>
          <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicule", [], "any", false, false, false, 61), "matricule", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
          <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "itineraire", [], "any", false, false, false, 62), "pointarrivee", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
          <td>
            <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_showback", ["idreservation" => twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" role=\"button\">Détails</a>
            <a class=\"btn btn-sm btn-warning\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["idreservation" => twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" role=\"button\">Modifier</a>
          </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "        <tr>
          <td colspan=\"9\">Aucun enregistrement trouvé.</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "      </tbody>
    </table>
    ";
        // line 76
        echo "            </div>
             <div class=\"pagination-section\">
                         ";
        // line 78
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 78, $this->source); })()));
        echo "
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
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 78,  210 => 76,  206 => 73,  197 => 69,  188 => 65,  184 => 64,  179 => 62,  175 => 61,  171 => 60,  167 => 59,  163 => 58,  159 => 57,  155 => 56,  151 => 55,  148 => 54,  143 => 53,  110 => 23,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Liste des réservations{% endblock %}

{% block body %}
<div class=\"container-fluid\">

  <div class=\"page-header\">
    <h1>Liste des réservations</h1>
  </div>

  <div class=\"row\">
    <div class=\"col-md-6\">
      <form class=\"form-inline\" method=\"get\" action=\"{{ path('search') }}\">
        <div class=\"form-group\">
          <label class=\"sr-only\" for=\"input-search\">Recherche</label>
          <input type=\"text\" class=\"form-control\" id=\"input-search\" name=\"mm\" placeholder=\"Entrez le CIN ou la matricule\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary ml-2\">Rechercher</button>
      </form>
    </div>
    <div class=\"col-md-6 text-right\">
      <form class=\"form-inline\" method=\"get\" action=\"{{ path('reservation_filter') }}\">
        <div class=\"form-group\">
          <label class=\"mr-2\" for=\"input-status\">Status:</label>
          <select class=\"form-control\" id=\"input-status\" name=\"status\">
            <option value=\"Tous\">Tous</option>
            <option value=\"En cours\">En cours</option>
            <option value=\"Terminé\">Terminé</option>
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
          <th>Numéro de réservation</th>
          <th>Utilisateur</th>
          <th>Date de début</th>
          <th>Date de fin</th>
          <th>Status</th>
          <th>Tarification</th>
          <th>Matricule</th>
          <th>Point d'arrivée</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for reservation in reservations %}
        <tr>
          <td>{{ reservation.idreservation }}</td>
          <td>{{ reservation.utilisateur.cin }}</td>
          <td>{{ reservation.datedebut|date(\"Y-m-d H:i:s\") }}</td>
          <td>{{ reservation.datefin|date(\"Y-m-d H:i:s\") }}</td>
          <td>{{ reservation.status }}</td>
          <td>{{ reservation.prixreservation }} DT</td>
          <td>{{ reservation.vehicule.matricule }}</td>
          <td>{{ reservation.itineraire.pointarrivee }}</td>
          <td>
            <a class=\"btn btn-sm btn-primary\" href=\"{{ path('app_reservation_showback', {'idreservation': reservation.idreservation}) }}\" role=\"button\">Détails</a>
            <a class=\"btn btn-sm btn-warning\" href=\"{{ path('app_reservation_edit', {'idreservation': reservation.idreservation}) }}\" role=\"button\">Modifier</a>
          </td>
        </tr>
        {% else %}
        <tr>
          <td colspan=\"9\">Aucun enregistrement trouvé.</td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
    {# <a class=\"btn btn-sm btn-primary\" href=\"{{ path('app_reservation_new') }}\" role=\"button\">Nouvelle réservation</a> #}
            </div>
             <div class=\"pagination-section\">
                         {{ knp_pagination_render(reservations) }}
                    </div>
        </div>
    </div>
</div>    
{% endblock %}
", "reservation/index.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\reservation\\index.html.twig");
    }
}
