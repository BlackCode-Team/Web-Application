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

/* park/index.html.twig */
class __TwigTemplate_a080fc7a390f2edfce5df9b046ee9bec extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page' => [$this, 'block_page'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "park/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "park/index.html.twig", 1);
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

        echo "Park index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        echo " Park  ";
        
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
        echo "   
       
            <div class=\"r-header-inner-banner\" align=\"center\">
              <div class=\"r-header-in-over\">
                <h1>Les <b>P</b>arcs </h1>
              </div>
            </div>

        <section id=\"r-gallery-part\" class=\"r-gallery-part\">
          <div class=\"container clearfix\">
          
        
            <ul>
             ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parks"]) || array_key_exists("parks", $context) ? $context["parks"] : (function () { throw new RuntimeError('Variable "parks" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["park"]) {
            // line 20
            echo "              <li>
                  <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_park_show", ["idpark" => twig_get_attribute($this->env, $this->source, $context["park"], "idpark", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" >
                      <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery-img01.jpg"), "html", null, true);
            echo "\" class=\"d-block img-fluid\" alt=\"\">
                      <div class=\"gallery-hover\">
                        <div class=\"gallery-text\">
                        <span>";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["park"], "ville", [], "any", false, false, false, 25)), "html", null, true);
            echo " </span>
                          <h5><b>";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["park"], "nom", [], "any", false, false, false, 26)), "html", null, true);
            echo "</b></h5>
                          <h5>   <b>nbSpots </b>  : ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["park"], "nbspot", [], "any", false, false, false, 27), "html", null, true);
            echo "</h5>
                          ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["park"], "statut", [], "any", false, false, false, 28) == "Ouvert")) {
                // line 29
                echo "                          <div class=\"icon-gallery\"><i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i></div>
                          ";
            } else {
                // line 31
                echo "                          <div class=\"icon-gallery\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i></div>
                          ";
            }
            // line 33
            echo "                          
                        </div>
                      </div>
                  </a>
              </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['park'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
          </div>
        </section>
        


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "park/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 39,  162 => 33,  158 => 31,  154 => 29,  152 => 28,  148 => 27,  144 => 26,  140 => 25,  134 => 22,  130 => 21,  127 => 20,  123 => 19,  108 => 6,  98 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Park index{% endblock %}
{% block page %} Park  {% endblock %} 
{% block body %}
   
       
            <div class=\"r-header-inner-banner\" align=\"center\">
              <div class=\"r-header-in-over\">
                <h1>Les <b>P</b>arcs </h1>
              </div>
            </div>

        <section id=\"r-gallery-part\" class=\"r-gallery-part\">
          <div class=\"container clearfix\">
          
        
            <ul>
             {% for park in parks %}
              <li>
                  <a href=\"{{ path('app_park_show', {'idpark': park.idpark}) }}\" >
                      <img src=\"{{asset('assets/images/gallery-img01.jpg')}}\" class=\"d-block img-fluid\" alt=\"\">
                      <div class=\"gallery-hover\">
                        <div class=\"gallery-text\">
                        <span>{{ park.ville |upper }} </span>
                          <h5><b>{{ park.nom |upper }}</b></h5>
                          <h5>   <b>nbSpots </b>  : {{ park.nbspot }}</h5>
                          {% if park.statut == \"Ouvert\" %}
                          <div class=\"icon-gallery\"><i class=\"fa fa-location-arrow\" aria-hidden=\"true\"></i></div>
                          {% else %}
                          <div class=\"icon-gallery\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i></div>
                          {% endif %}
                          
                        </div>
                      </div>
                  </a>
              </li>
              {% endfor %}

          </div>
        </section>
        


{% endblock %}
", "park/index.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\Web-Application\\templates\\park\\index.html.twig");
    }
}
