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

/* itineraire/new.html.twig */
class __TwigTemplate_85f7aae8e53724ae8c7f3d85d613b06c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'page' => [$this, 'block_page'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "itineraire/new.html.twig", 1);
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

        echo "New Itineraire";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "
   <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/forms/form-validation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
   
     

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        // line 13
        echo "Reservation 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "       <div class=\"r-form-strip\">
              <div class=\"r-slider-serach r-slider-serach-down form-search dark\">
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true, "id" => "form"]]);
        echo "
                    <div class=\"form-title\">
                        <h2>Ajouter Vos<b> Itineraires</b></h2>
                    </div>
                    <div class=\"row row-inputs\">
                      <div class=\"col-sm-6\">
                          <div class=\"form-group has-icon has-label\">
                              <label for=\"validationCustom01\">Picking Up Location</label>
                              ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "pointdepart", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Airport or Anywhere", "id" => "validationCustom01", "required" => true]]);
        echo "
                                 <div class=\"invalid-feedback\">
                              ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "pointdepart", [], "any", false, false, false, 29), 'errors');
        echo "
                                                </div>
                              <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                          </div>
                      </div> 
                      <div class=\"col-sm-6\">
                          <div class=\"form-group has-icon has-label\">
                              <label for=\"validationCustom02\">Dropping Off Location</label>
                               ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "pointarrivee", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Airport or Anywhere", "id" => "validationCustom02", "required" => true]]);
        echo "
                                            <div class=\"invalid-feedback\">
                               ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "pointarrivee", [], "any", false, false, false, 39), 'errors');
        echo "
                                                </div>                    
                              <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                          </div>
                      </div> 
                      <div class=\"col-sm-3\">
                          <div class=\"form-group has-icon has-label label\" id=\"datetimepicker2\" data-target-input=\"nearest\">
                              <label for=\"validationCustom03\">Kilometrage de location</label>
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "kilometrage", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ".... KM", "type" => "number", "id" => "validationCustom03", "required" => true]]);
        echo "
                                             <div class=\"invalid-feedback\">
                                  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "kilometrage", [], "any", false, false, false, 49), 'errors');
        echo "
                                                </div>                    
                              <span class=\"form-control-icon\"><i class=\"fa fa-calendar\"></i></span>
                          </div>
                      </div>
                      <div class=\"col-sm-3\">
                          <div class=\"form-group has-icon has-label date\" id=\"datetimepicker3\" data-target-input=\"nearest\">
                              <label for=\"validationCustom04\">Nombre d'heures de Location</label>
                                 ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "dureeestimee", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0000", "type" => "number", "id" => "validationCustom04", "required" => true]]);
        echo "
                                             <div class=\"invalid-feedback\" color=\"red\">
                                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dureeestimee", [], "any", false, false, false, 59), 'errors');
        echo "
                                                </div>   
                              <span class=\"form-control-icon\"><i class=\"fa fa-clock-o\"></i></span>
                          </div>
                      </div> 
                      <div class=\"col-12 mb-3\">
                        <hr>
                      </div>
                      <div class=\"inner col-12 clearfix\">
                      
                          <button type=\"submit\" class=\"btn m-auto d-block float-right btn-full\">Ajouter itineraire</button>
        
                      </div>
                    </div>
                ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        echo "
              </div>
            </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 79
        echo "
   
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "itineraire/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 79,  239 => 78,  225 => 73,  208 => 59,  203 => 57,  192 => 49,  187 => 47,  176 => 39,  171 => 37,  160 => 29,  155 => 27,  144 => 19,  140 => 17,  130 => 16,  119 => 13,  109 => 12,  94 => 7,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Itineraire{% endblock %}

{% block stylesheet %}

   <link href=\"{{asset('back/assets/css/forms/form-validation.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
   
     

{% endblock %}
{% block page %}
Reservation 
{% endblock %}

{% block body %}
       <div class=\"r-form-strip\">
              <div class=\"r-slider-serach r-slider-serach-down form-search dark\">
                {{ form_start(form ,{'attr': {'class' : 'needs-validation','novalidate': true,'id' : 'form'}}) }}
                    <div class=\"form-title\">
                        <h2>Ajouter Vos<b> Itineraires</b></h2>
                    </div>
                    <div class=\"row row-inputs\">
                      <div class=\"col-sm-6\">
                          <div class=\"form-group has-icon has-label\">
                              <label for=\"validationCustom01\">Picking Up Location</label>
                              {{ form_widget(form.pointdepart, {'attr': {'class': 'form-control', 'placeholder': 'Airport or Anywhere','id':'validationCustom01','required' : true}}) }}
                                 <div class=\"invalid-feedback\">
                              {{ form_errors(form.pointdepart) }}
                                                </div>
                              <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                          </div>
                      </div> 
                      <div class=\"col-sm-6\">
                          <div class=\"form-group has-icon has-label\">
                              <label for=\"validationCustom02\">Dropping Off Location</label>
                               {{ form_widget(form.pointarrivee, {'attr': {'class': 'form-control', 'placeholder': 'Airport or Anywhere','id':'validationCustom02','required' : true}}) }}
                                            <div class=\"invalid-feedback\">
                               {{ form_errors(form.pointarrivee) }}
                                                </div>                    
                              <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                          </div>
                      </div> 
                      <div class=\"col-sm-3\">
                          <div class=\"form-group has-icon has-label label\" id=\"datetimepicker2\" data-target-input=\"nearest\">
                              <label for=\"validationCustom03\">Kilometrage de location</label>
                                {{ form_widget(form.kilometrage, {'attr': {'class': 'form-control', 'placeholder': '.... KM','type' : \"number\",'id':'validationCustom03','required' : true}}) }}
                                             <div class=\"invalid-feedback\">
                                  {{ form_errors(form.kilometrage,) }}
                                                </div>                    
                              <span class=\"form-control-icon\"><i class=\"fa fa-calendar\"></i></span>
                          </div>
                      </div>
                      <div class=\"col-sm-3\">
                          <div class=\"form-group has-icon has-label date\" id=\"datetimepicker3\" data-target-input=\"nearest\">
                              <label for=\"validationCustom04\">Nombre d'heures de Location</label>
                                 {{ form_widget(form.dureeestimee, {'attr': {'class': 'form-control', 'placeholder': '0000','type' : \"number\",'id':'validationCustom04','required' : true}}) }}
                                             <div class=\"invalid-feedback\" color=\"red\">
                                        {{ form_errors(form.dureeestimee) }}
                                                </div>   
                              <span class=\"form-control-icon\"><i class=\"fa fa-clock-o\"></i></span>
                          </div>
                      </div> 
                      <div class=\"col-12 mb-3\">
                        <hr>
                      </div>
                      <div class=\"inner col-12 clearfix\">
                      
                          <button type=\"submit\" class=\"btn m-auto d-block float-right btn-full\">Ajouter itineraire</button>
        
                      </div>
                    </div>
                {{ form_end(form) }}
              </div>
            </div>
            {% endblock %}

            {% block javascript %}

   
            {% endblock %}", "itineraire/new.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\itineraire\\new.html.twig");
    }
}
