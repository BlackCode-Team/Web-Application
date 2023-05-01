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

/* reservation/new.html.twig */
class __TwigTemplate_967eac6419523641d3d12b5ac4539f6a extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/new.html.twig", 1);
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

        echo "New Reservation";
        
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
        echo " <div class=\"r-slider-serach form-search dark\">
              <form action=\"#\">
                  <div class=\"form-title form-title-large\">
                      <span class=\"r-form-icon\"><img src=\"assets/images/footer-form-icon.png\" alt=\"\"></span>
                      <h2>Search Your <b>Best Cars</b></h2>
                      <small> 120+ CARS TYPE &amp; BRANDS </small>
                  </div>
                  <div class=\"row row-inputs\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group has-icon has-label\">
                            <label>Picking Up Location</label>
                            <input type=\"text\" class=\"form-control\" id=\"formSearchUpLocation\" placeholder=\"Airport or Anywhere\">
                            <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class=\"row row-inputs\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group has-icon has-label\">
                            <label>Dropping Off Location</label>
                            <input type=\"text\" class=\"form-control\" id=\"formSearchOffLocation\" placeholder=\"Airport or Anywhere\">
                            <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                  </div>
                 <div class=\"row row-inputs\">

                 <div class=\"row row-inputs\">
  <div class=\"col-sm-6\">
    <div class=\"form-group has-icon has-label label\" id=\"datetimepicker2\" data-target-input=\"nearest\">
      <label for=\"formSearchUpDate\">Dropping Off Date</label>
      <input type=\"date\" class=\"form-control\" id=\"formSearchUpDate\" name=\"datefin_date\">
    </div>
  </div>
  <div class=\"col-sm-6\">
    <div class=\"form-group has-icon has-label date\" id=\"datetimepicker3\" data-target-input=\"nearest\">
      <label for=\"formSearchUpTime\">Dropping Off Time</label>
      <input type=\"time\" class=\"form-control\" id=\"formSearchUpTime\" name=\"datefin_time\">
    </div>
  </div>
</div>

                  <div class=\"form-footer\">
                    <div class=\"inner clearfix\">
                        <a href=\"#\" class=\"float-left\"><i class=\"fa fa-plus-circle\"></i>Advanced Search</a>
                        ";
        // line 52
        echo "  <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        echo "\" class=\"btn m-auto d-block btn-full\" >Find Car</a>
                    </div>
                  </div>
              </form>
            </div>
          </div>
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 52,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Reservation{% endblock %}

{% block body %}
 <div class=\"r-slider-serach form-search dark\">
              <form action=\"#\">
                  <div class=\"form-title form-title-large\">
                      <span class=\"r-form-icon\"><img src=\"assets/images/footer-form-icon.png\" alt=\"\"></span>
                      <h2>Search Your <b>Best Cars</b></h2>
                      <small> 120+ CARS TYPE &amp; BRANDS </small>
                  </div>
                  <div class=\"row row-inputs\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group has-icon has-label\">
                            <label>Picking Up Location</label>
                            <input type=\"text\" class=\"form-control\" id=\"formSearchUpLocation\" placeholder=\"Airport or Anywhere\">
                            <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class=\"row row-inputs\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group has-icon has-label\">
                            <label>Dropping Off Location</label>
                            <input type=\"text\" class=\"form-control\" id=\"formSearchOffLocation\" placeholder=\"Airport or Anywhere\">
                            <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                  </div>
                 <div class=\"row row-inputs\">

                 <div class=\"row row-inputs\">
  <div class=\"col-sm-6\">
    <div class=\"form-group has-icon has-label label\" id=\"datetimepicker2\" data-target-input=\"nearest\">
      <label for=\"formSearchUpDate\">Dropping Off Date</label>
      <input type=\"date\" class=\"form-control\" id=\"formSearchUpDate\" name=\"datefin_date\">
    </div>
  </div>
  <div class=\"col-sm-6\">
    <div class=\"form-group has-icon has-label date\" id=\"datetimepicker3\" data-target-input=\"nearest\">
      <label for=\"formSearchUpTime\">Dropping Off Time</label>
      <input type=\"time\" class=\"form-control\" id=\"formSearchUpTime\" name=\"datefin_time\">
    </div>
  </div>
</div>

                  <div class=\"form-footer\">
                    <div class=\"inner clearfix\">
                        <a href=\"#\" class=\"float-left\"><i class=\"fa fa-plus-circle\"></i>Advanced Search</a>
                        {# <button type=\"submit\" class=\"btn m-auto d-block btn-full\" >Find Car</button> #}
  <a href=\"{{ path('app_vehicule_index') }}\" class=\"btn m-auto d-block btn-full\" >Find Car</a>
                    </div>
                  </div>
              </form>
            </div>
          </div>
          {% endblock %}", "reservation/new.html.twig", "C:\\Users\\ychaa\\OneDrive\\Documents\\GitHub\\Web-Application\\templates\\reservation\\new.html.twig");
    }
}
