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

/* offres/AfficherOffre.html.twig */
class __TwigTemplate_8273a7bb2bc5dc07bdf5949e20194cd1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offres/AfficherOffre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offres/AfficherOffre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offres/AfficherOffre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div style=\"display: flex; justify-content: space-around;\">
<div >
<h2> Nous sommes ravis de vous présenter nos offres exclusives !
Nos offres sont régulièrement mises à jour, alors assurez-vous de 
les vérifier régulièrement pour ne rien manquer.
 Profitez de nos offres exceptionnelles dès maintenant et économisez sur vos locations en ligne !\"</h2>
 </div>
 <div>
    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/offre.png"), "html", null, true);
        echo "\" alt=\"offre\" width=\"200\" height=\"200\">
 </div>
</div>
<table class=\"table table-striped table-bordered\">
  <thead>
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Taux de remise % </th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cc"]) || array_key_exists("cc", $context) ? $context["cc"] : (function () { throw new RuntimeError('Variable "cc" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 24
            echo "      <tr>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "tauxderemise", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  </tbody>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offres/AfficherOffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  108 => 27,  104 => 26,  100 => 25,  97 => 24,  93 => 23,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<div style=\"display: flex; justify-content: space-around;\">
<div >
<h2> Nous sommes ravis de vous présenter nos offres exclusives !
Nos offres sont régulièrement mises à jour, alors assurez-vous de 
les vérifier régulièrement pour ne rien manquer.
 Profitez de nos offres exceptionnelles dès maintenant et économisez sur vos locations en ligne !\"</h2>
 </div>
 <div>
    <img src=\"{{asset('assets/images/offre.png')}}\" alt=\"offre\" width=\"200\" height=\"200\">
 </div>
</div>
<table class=\"table table-striped table-bordered\">
  <thead>
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Taux de remise % </th>
    </tr>
  </thead>
  <tbody>
    {% for offre in cc %}
      <tr>
        <td>{{ offre.nom }}</td>
        <td>{{ offre.description }}</td>
        <td>{{ offre.tauxderemise }}</td>
      </tr>
    {% endfor %}
  </tbody>
</table>
{% endblock %}", "offres/AfficherOffre.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\offres\\AfficherOffre.html.twig");
    }
}
