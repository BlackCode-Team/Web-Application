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
class __TwigTemplate_0f0417ecafaca08c3e796b86884ba324 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'test' => [$this, 'block_test'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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

        echo "Reservation index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_test($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "test"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "test"));

        // line 6
        echo "    <div class=\"r-slider-serach form-search dark\">
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
                    <div class=\"col-sm-6\">
                        <div class=\"form-group has-icon has-label label\" id=\"datetimepicker2\" data-target-input=\"nearest\">
                            <label>Picking Up Date</label>
                            <input type=\"text\" class=\"form-control datepicker\" data-toggle=\"datetimepicker\" data-target=\"#datetimepicker2\" placeholder=\"dd/mm/yyyy\">
                            <span class=\"form-control-icon\"><i class=\"fa fa-calendar\"></i></span>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group has-icon has-label date\" id=\"datetimepicker3\" data-target-input=\"nearest\">
                            <label>Picking Up Hour</label>
                            <input type=\"text\" class=\"form-control\" data-toggle=\"datetimepicker\"  data-target=\"#datetimepicker3\" placeholder=\"20:00 AM\">
                            <span class=\"form-control-icon\"><i class=\"fa fa-clock-o\"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class=\"row row-inputs\">
                    <div class=\"col-sm-6\">
                        <div class=\"form-group has-icon has-label label\" id=\"datetimepicker4\" data-target-input=\"nearest\">
                            <label>Dropping Off Date</label>
                            <input type=\"text\" class=\"form-control datepicker\" data-toggle=\"datetimepicker\" data-target=\"#datetimepicker4\" placeholder=\"dd/mm/yyyy\">
                            <span class=\"form-control-icon\"><i class=\"fa fa-calendar\"></i></span>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group has-icon has-label date\" id=\"datetimepicker5\" data-target-input=\"nearest\">
                            <label>Dropping Off Hour</label>
                            <input type=\"text\" class=\"form-control\" data-toggle=\"datetimepicker\"  data-target=\"#datetimepicker5\" placeholder=\"20:00 AM\">
                            <span class=\"form-control-icon\"><i class=\"fa fa-clock-o\"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class=\"form-footer\">
                    <div class=\"inner clearfix\">
                        <a href=\"#\" class=\"float-left\"><i class=\"fa fa-plus-circle\"></i>Advanced Search</a>
                        <button type=\"submit\" class=\"btn m-auto d-block btn-full\">Find Car</button>
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
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation index{% endblock %}

    {% block test %}
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
                    <div class=\"col-sm-6\">
                        <div class=\"form-group has-icon has-label label\" id=\"datetimepicker2\" data-target-input=\"nearest\">
                            <label>Picking Up Date</label>
                            <input type=\"text\" class=\"form-control datepicker\" data-toggle=\"datetimepicker\" data-target=\"#datetimepicker2\" placeholder=\"dd/mm/yyyy\">
                            <span class=\"form-control-icon\"><i class=\"fa fa-calendar\"></i></span>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group has-icon has-label date\" id=\"datetimepicker3\" data-target-input=\"nearest\">
                            <label>Picking Up Hour</label>
                            <input type=\"text\" class=\"form-control\" data-toggle=\"datetimepicker\"  data-target=\"#datetimepicker3\" placeholder=\"20:00 AM\">
                            <span class=\"form-control-icon\"><i class=\"fa fa-clock-o\"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class=\"row row-inputs\">
                    <div class=\"col-sm-6\">
                        <div class=\"form-group has-icon has-label label\" id=\"datetimepicker4\" data-target-input=\"nearest\">
                            <label>Dropping Off Date</label>
                            <input type=\"text\" class=\"form-control datepicker\" data-toggle=\"datetimepicker\" data-target=\"#datetimepicker4\" placeholder=\"dd/mm/yyyy\">
                            <span class=\"form-control-icon\"><i class=\"fa fa-calendar\"></i></span>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group has-icon has-label date\" id=\"datetimepicker5\" data-target-input=\"nearest\">
                            <label>Dropping Off Hour</label>
                            <input type=\"text\" class=\"form-control\" data-toggle=\"datetimepicker\"  data-target=\"#datetimepicker5\" placeholder=\"20:00 AM\">
                            <span class=\"form-control-icon\"><i class=\"fa fa-clock-o\"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class=\"form-footer\">
                    <div class=\"inner clearfix\">
                        <a href=\"#\" class=\"float-left\"><i class=\"fa fa-plus-circle\"></i>Advanced Search</a>
                        <button type=\"submit\" class=\"btn m-auto d-block btn-full\">Find Car</button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
{% endblock %}
", "reservation/index.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\reservation\\index.html.twig");
    }
}
