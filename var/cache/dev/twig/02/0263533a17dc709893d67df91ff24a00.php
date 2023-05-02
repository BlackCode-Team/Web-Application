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
class __TwigTemplate_fb735d0bf8d0f3e611532e3707dac28e extends \Twig\Template
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
        // line 84
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "itineraire/new.html.twig", 84);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 86
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

    // line 88
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 89
        echo " <div class=\"r-slider-serach form-search dark\">
                 ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true, "id" => "form"]]);
        echo "
                  <div class=\"form-title form-title-large\">
                      <span class=\"r-form-icon\"><img src=\"assets/images/footer-form-icon.png\" alt=\"\"></span>
                      <h2>Search Your <b>Best Cars</b></h2>
                      <small> 120+ CARS TYPE &amp; BRANDS </small>
                  </div>
                  <div class=\"row row-inputs\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group has-icon has-label\">
                            <label>Picking Up Location</label>
                              ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "pointdepart", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Airport or Anywhere", "id" => "validationCustom01", "required" => true]]);
        echo "
                                 <div class=\"invalid-feedback\">
                              ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "pointdepart", [], "any", false, false, false, 102), 'errors');
        echo "
                                                </div>
                            <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class=\"row row-inputs\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group has-icon has-label\">
                            <label>Dropping Off Location</label>
                             ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "pointarrivee", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Airport or Anywhere", "id" => "validationCustom02", "required" => true]]);
        echo "
                                            <div class=\"invalid-feedback\">
                               ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "pointarrivee", [], "any", false, false, false, 114), 'errors');
        echo "
                                                </div>      
                            <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                  </div>
                     <div class=\"row row-inputs\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group has-icon has-label\">
                            <label>kilometrage de Reservation</label>
                           ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "kilometrage", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ".... KM", "type" => "number", "id" => "validationCustom03", "required" => true]]);
        echo "
                                             <div class=\"invalid-feedback\">
                                  ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "kilometrage", [], "any", false, false, false, 126), 'errors');
        echo "
                                                </div>    
                            <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                  </div>
                       <div class=\"row row-inputs\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group has-icon has-label\">
                            <label>Temps de Location</label>
                          ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "dureeestimee", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0000", "type" => "number", "id" => "validationCustom04", "required" => true]]);
        echo "
                                             <div class=\"invalid-feedback\" color=\"red\">
                                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "dureeestimee", [], "any", false, false, false, 138), 'errors');
        echo "
                                                </div>    
                            <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class=\"form-footer\">
                    <div class=\"inner clearfix\">
    <a href=\"#\" class=\"float-left\"><i class=\"fa fa-plus-circle\"></i>Advanced Search</a>
<button id=\"find-care-button\" type=\"submit\" class=\"btn m-auto d-block btn-full\" data-iditineraire=\"";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 147, $this->source); })()), "iditineraire", [], "any", false, false, false, 147), "html", null, true);
        echo "\">Find Car</button></div>

                  </div>
              ";
        // line 150
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), 'form_end');
        echo "
            </div>
          </div>
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
        return array (  181 => 150,  175 => 147,  163 => 138,  158 => 136,  145 => 126,  140 => 124,  127 => 114,  122 => 112,  109 => 102,  104 => 100,  91 => 90,  88 => 89,  78 => 88,  59 => 86,  36 => 84,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

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

   
            {% endblock %} #}


            {% extends 'base.html.twig' %}

{% block title %}New Reservation{% endblock %}

{% block body %}
 <div class=\"r-slider-serach form-search dark\">
                 {{ form_start(form ,{'attr': {'class' : 'needs-validation','novalidate': true,'id' : 'form'}}) }}
                  <div class=\"form-title form-title-large\">
                      <span class=\"r-form-icon\"><img src=\"assets/images/footer-form-icon.png\" alt=\"\"></span>
                      <h2>Search Your <b>Best Cars</b></h2>
                      <small> 120+ CARS TYPE &amp; BRANDS </small>
                  </div>
                  <div class=\"row row-inputs\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group has-icon has-label\">
                            <label>Picking Up Location</label>
                              {{ form_widget(form.pointdepart, {'attr': {'class': 'form-control', 'placeholder': 'Airport or Anywhere','id':'validationCustom01','required' : true}}) }}
                                 <div class=\"invalid-feedback\">
                              {{ form_errors(form.pointdepart) }}
                                                </div>
                            <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class=\"row row-inputs\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group has-icon has-label\">
                            <label>Dropping Off Location</label>
                             {{ form_widget(form.pointarrivee, {'attr': {'class': 'form-control', 'placeholder': 'Airport or Anywhere','id':'validationCustom02','required' : true}}) }}
                                            <div class=\"invalid-feedback\">
                               {{ form_errors(form.pointarrivee) }}
                                                </div>      
                            <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                  </div>
                     <div class=\"row row-inputs\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group has-icon has-label\">
                            <label>kilometrage de Reservation</label>
                           {{ form_widget(form.kilometrage, {'attr': {'class': 'form-control', 'placeholder': '.... KM','type' : \"number\",'id':'validationCustom03','required' : true}}) }}
                                             <div class=\"invalid-feedback\">
                                  {{ form_errors(form.kilometrage,) }}
                                                </div>    
                            <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                  </div>
                       <div class=\"row row-inputs\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group has-icon has-label\">
                            <label>Temps de Location</label>
                          {{ form_widget(form.dureeestimee, {'attr': {'class': 'form-control', 'placeholder': '0000','type' : \"number\",'id':'validationCustom04','required' : true}}) }}
                                             <div class=\"invalid-feedback\" color=\"red\">
                                        {{ form_errors(form.dureeestimee) }}
                                                </div>    
                            <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class=\"form-footer\">
                    <div class=\"inner clearfix\">
    <a href=\"#\" class=\"float-left\"><i class=\"fa fa-plus-circle\"></i>Advanced Search</a>
<button id=\"find-care-button\" type=\"submit\" class=\"btn m-auto d-block btn-full\" data-iditineraire=\"{{ itineraire.iditineraire }}\">Find Car</button></div>

                  </div>
              {{ form_end(form) }}
            </div>
          </div>
          {% endblock %}
", "itineraire/new.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\itineraire\\new.html.twig");
    }
}
