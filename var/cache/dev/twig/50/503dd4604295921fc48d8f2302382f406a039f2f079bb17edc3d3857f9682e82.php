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
class __TwigTemplate_89ecbdd146049301ced82c9c0c578d51c8133dc8672b4f66eb0bd1ed03fca845 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "itineraire/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Itineraire";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "
   <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/forms/form-validation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
   
     

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "       <div class=\"r-form-strip\">
              <div class=\"r-slider-serach r-slider-serach-down form-search dark\">
                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true, "id" => "form"]]);
        echo "
                    <div class=\"form-title\">
                        <h2>Ajouter Vos<b> Itineraires</b></h2>
                    </div>
                    <div class=\"row row-inputs\">
                      <div class=\"col-sm-6\">
                          <div class=\"form-group has-icon has-label\">
                              <label for=\"validationCustom01\">Picking Up Location</label>
                              ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "pointdepart", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Airport or Anywhere", "id" => "validationCustom01", "required" => true]]);
        echo "
                                 <div class=\"invalid-feedback\">
                              ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "pointdepart", [], "any", false, false, false, 27), 'errors');
        echo "
                                                </div>
                              <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                          </div>
                      </div> 
                      <div class=\"col-sm-6\">
                          <div class=\"form-group has-icon has-label\">
                              <label for=\"validationCustom02\">Dropping Off Location</label>
                               ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "pointarrivee", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Airport or Anywhere", "id" => "validationCustom02", "required" => true]]);
        echo "
                                            <div class=\"invalid-feedback\">
                               ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "pointarrivee", [], "any", false, false, false, 37), 'errors');
        echo "
                                                </div>                    
                              <span class=\"form-control-icon\"><i class=\"fa fa-map-marker\"></i></span>
                          </div>
                      </div> 
                      <div class=\"col-sm-3\">
                          <div class=\"form-group has-icon has-label label\" id=\"datetimepicker2\" data-target-input=\"nearest\">
                              <label for=\"validationCustom03\">Kilometrage de location</label>
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "kilometrage", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ".... KM", "type" => "number", "id" => "validationCustom03", "required" => true]]);
        echo "
                                             <div class=\"invalid-feedback\">
                                  ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "kilometrage", [], "any", false, false, false, 47), 'errors');
        echo "
                                                </div>                    
                              <span class=\"form-control-icon\"><i class=\"fa fa-calendar\"></i></span>
                          </div>
                      </div>
                      <div class=\"col-sm-3\">
                          <div class=\"form-group has-icon has-label date\" id=\"datetimepicker3\" data-target-input=\"nearest\">
                              <label for=\"validationCustom04\">Nombre d'heures de Location</label>
                                 ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "dureeestimee", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0000", "type" => "number", "id" => "validationCustom04", "required" => true]]);
        echo "
                                             <div class=\"invalid-feedback\" color=\"red\">
                                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "dureeestimee", [], "any", false, false, false, 57), 'errors');
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
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
              </div>
            </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 77
        echo "
   
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  227 => 77,  217 => 76,  203 => 71,  186 => 57,  181 => 55,  170 => 47,  165 => 45,  154 => 37,  149 => 35,  138 => 27,  133 => 25,  122 => 17,  118 => 15,  108 => 14,  93 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Itineraire{% endblock %}

{% block stylesheet %}

   <link href=\"{{asset('back/assets/css/forms/form-validation.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
   
     

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
