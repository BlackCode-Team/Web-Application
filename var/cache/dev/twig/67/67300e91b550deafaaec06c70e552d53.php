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

/* register/register.html.twig */
class __TwigTemplate_d11bb2803abe34981151505874960e21 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
  \t<title> ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t
\t";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "
\t</head>
\t
\t<!--
<body class=\"img js-fullheight\" style=\"background-image: url(";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Login/images/bg.jpg"), "html", null, true);
        echo ");\"> -->
<body class=\"img js-fullheight\" style=\"background-image: url('https://images.pexels.com/photos/4824424/pexels-photo-4824424.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');\">
\t";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "\t</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Register ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Login/css/style.css"), "html", null, true);
        echo "\"> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "\t<section class=\"ftco-section\" style=\"height: 100vh; overflow: auto;\">

\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\" style=\"margin-top: -100px!important;\">
\t\t\t\t<div class=\"col-md-6 text-center mb-5\">
\t\t\t\t\t<h1 class=\"heading-section\"><b> Register </b></h1>
\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row justify-content-center\" style=\"margin-top: -50px!important;\">
\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t<div class=\"login-wrap p-0\">
\t\t      \t
\t\t      \t<form action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" method=\"post\"  class=\"signin-form\">
\t\t\t\t\t";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "id" => "form"]]);
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom", "required" => "required"]]);
        echo "
\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prenom", "required" => "required"]]);
        echo "
\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "prenom", [], "any", false, false, false, 41), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email", "required" => "required"]]);
        echo "
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "cin", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "CIN", "required" => "required"]]);
        echo "
\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "cin", [], "any", false, false, false, 49), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "permis", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Permis", "required" => "required"]]);
        echo "
\t\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "permis", [], "any", false, false, false, 53), 'errors');
        echo "
\t\t\t\t\t</div>
\t            <div class=\"form-group\">
\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "pwd", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password", "required" => "required"]]);
        echo "
\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "pwd", [], "any", false, false, false, 57), 'errors');
        echo "
\t\t\t\t\t<span toggle=\"#password-field\" class=\"fa fa-fw fa-eye field-icon toggle-password\"></span>
\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t            \t <input type=\"hidden\" name=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "csrf_token", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "full_name", [], "any", false, false, false, 63), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "csrf_token", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63), "html", null, true);
        echo "\" />
\t            </div>

\t            <div class=\"form-group\">
\t            \t<button  type=\"submit\" class=\"form-control btn btn-primary submit px-3\">";
        // line 67
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 67, $this->source); })()), "Register")) : ("Register")), "html", null, true);
        echo "</button>
\t            </div>
\t            
\t          </form>
\t          <p class=\"w-100 text-center\">Already have an account ? </p>
\t          <div class=\"social d-flex text-center\">
\t          \t<a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"px-2 py-2 mr-md-1 rounded\"><span class=\"ion-logo-facebook mr-2\"></span> Login</a>
\t          \t
\t          </div>
\t\t      </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        // line 81
        $this->displayBlock('js', $context, $blocks);
        // line 95
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 82
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Login/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Login/js/popper.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Login/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Login/js/main.js"), "html", null, true);
        echo "\"></script>
  <script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        var forms = document.getElementsByTagName('form');
        for (var i = 0; i < forms.length; i++) {
            forms[i].setAttribute('novalidate', true);
        }
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "register/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 85,  288 => 84,  284 => 83,  279 => 82,  269 => 81,  259 => 95,  257 => 81,  246 => 73,  237 => 67,  228 => 63,  219 => 57,  215 => 56,  209 => 53,  205 => 52,  199 => 49,  195 => 48,  189 => 45,  185 => 44,  179 => 41,  175 => 40,  169 => 37,  165 => 36,  160 => 34,  156 => 33,  141 => 20,  131 => 19,  110 => 12,  91 => 4,  78 => 96,  76 => 19,  71 => 17,  65 => 13,  63 => 12,  52 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
  \t<title> {% block title %} Register {% endblock %} </title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t<link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t
\t{%block css%} <link rel=\"stylesheet\" href=\"{{asset('Login/css/style.css')}}\"> {%endblock%}

\t</head>
\t
\t<!--
<body class=\"img js-fullheight\" style=\"background-image: url({{asset('Login/images/bg.jpg')}});\"> -->
<body class=\"img js-fullheight\" style=\"background-image: url('https://images.pexels.com/photos/4824424/pexels-photo-4824424.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');\">
\t{%block body%}
\t<section class=\"ftco-section\" style=\"height: 100vh; overflow: auto;\">

\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\" style=\"margin-top: -100px!important;\">
\t\t\t\t<div class=\"col-md-6 text-center mb-5\">
\t\t\t\t\t<h1 class=\"heading-section\"><b> Register </b></h1>
\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row justify-content-center\" style=\"margin-top: -50px!important;\">
\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t<div class=\"login-wrap p-0\">
\t\t      \t
\t\t      \t<form action=\"{{ path('app_register') }}\" method=\"post\"  class=\"signin-form\">
\t\t\t\t\t{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'id': 'form'}}) }}
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.nom, { 'attr': {'class': 'form-control', 'placeholder': 'Nom', 'required': 'required'} }) }}
\t\t\t\t\t\t{{ form_errors(form.nom) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.prenom, { 'attr': {'class': 'form-control', 'placeholder': 'Prenom', 'required': 'required'} }) }}
\t\t\t\t\t\t{{ form_errors(form.prenom) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.email, { 'attr': {'class': 'form-control', 'placeholder': 'Email', 'required': 'required'} }) }}
\t\t\t\t\t\t{{ form_errors(form.email) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.cin, { 'attr': {'class': 'form-control', 'placeholder': 'CIN', 'required': 'required'} }) }}
\t\t\t\t\t\t{{ form_errors(form.cin) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.permis, { 'attr': {'class': 'form-control', 'placeholder': 'Permis', 'required': 'required'} }) }}
\t\t\t\t\t\t{{ form_errors(form.permis) }}
\t\t\t\t\t</div>
\t            <div class=\"form-group\">
\t\t\t\t\t{{ form_widget(form.pwd, { 'attr': {'class': 'form-control', 'placeholder': 'Password', 'required': 'required'} }) }}
\t\t\t\t\t{{ form_errors(form.pwd) }}
\t\t\t\t\t<span toggle=\"#password-field\" class=\"fa fa-fw fa-eye field-icon toggle-password\"></span>
\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t            \t <input type=\"hidden\" name=\"{{ form.csrf_token.vars.full_name }}\" value=\"{{ form.csrf_token.vars.value }}\" />
\t            </div>

\t            <div class=\"form-group\">
\t            \t<button  type=\"submit\" class=\"form-control btn btn-primary submit px-3\">{{ button_label|default('Register') }}</button>
\t            </div>
\t            
\t          </form>
\t          <p class=\"w-100 text-center\">Already have an account ? </p>
\t          <div class=\"social d-flex text-center\">
\t          \t<a href=\"{{ path('app_login') }}\" class=\"px-2 py-2 mr-md-1 rounded\"><span class=\"ion-logo-facebook mr-2\"></span> Login</a>
\t          \t
\t          </div>
\t\t      </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{%block js%}
<script src=\"{{asset('Login/js/jquery.min.js')}}\"></script>
  <script src=\"{{asset('Login/js/popper.js')}}\"></script>
  <script src=\"{{asset('Login/js/bootstrap.min.js')}}\"></script>
  <script src=\"{{asset('Login/js/main.js')}}\"></script>
  <script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        var forms = document.getElementsByTagName('form');
        for (var i = 0; i < forms.length; i++) {
            forms[i].setAttribute('novalidate', true);
        }
    });
</script>
{%endblock%}
  {%endblock%}
\t</body>
</html>

", "register/register.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\templates\\register\\register.html.twig");
    }
}
