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

/* itineraire/add.html.twig */
class __TwigTemplate_200438af7548a7cbd05e6056bf8e959f extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "itineraire/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<form>
                  <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                      <div class=\"form-group\">
                        <label> Car Brand </label>
                        <select class=\"form-control\">
                          <option>Any Brands</option>
                          <option>Any Brands</option>
                          <option>Any Brands</option>
                          <option>Any Brands</option>
                        </select>
                      </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                      <div class=\"form-group\">
                        <label> Car Type </label>
                        <select class=\"form-control\">
                          <option>Any Type</option>
                          <option>Any Type</option>
                          <option>Any Type</option>
                          <option>Any Type</option>
                        </select>
                      </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                      <div class=\"form-group\">
                        <label> Car Price </label>
                        <select class=\"form-control\">
                          <option>Price Low to High</option>
                          <option>Price High to Low</option>
                        </select>
                      </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                      <div class=\"form-group\">
                        <input type=\"submit\" class=\"form-control btn-primary\" value=\"Search Car Now\">
                      </div>
                    </div>
                  </div>
                </form>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "itineraire/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  58 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}




{% block body %}
<form>
                  <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                      <div class=\"form-group\">
                        <label> Car Brand </label>
                        <select class=\"form-control\">
                          <option>Any Brands</option>
                          <option>Any Brands</option>
                          <option>Any Brands</option>
                          <option>Any Brands</option>
                        </select>
                      </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                      <div class=\"form-group\">
                        <label> Car Type </label>
                        <select class=\"form-control\">
                          <option>Any Type</option>
                          <option>Any Type</option>
                          <option>Any Type</option>
                          <option>Any Type</option>
                        </select>
                      </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                      <div class=\"form-group\">
                        <label> Car Price </label>
                        <select class=\"form-control\">
                          <option>Price Low to High</option>
                          <option>Price High to Low</option>
                        </select>
                      </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                      <div class=\"form-group\">
                        <input type=\"submit\" class=\"form-control btn-primary\" value=\"Search Car Now\">
                      </div>
                    </div>
                  </div>
                </form>
                {% endblock %}", "itineraire/add.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\itineraire\\add.html.twig");
    }
}
