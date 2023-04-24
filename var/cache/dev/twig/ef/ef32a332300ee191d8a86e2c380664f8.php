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

/* profil/profile.html.twig */
class __TwigTemplate_e853a1d152798901c72812bc9c973026 extends \Twig\Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">

<!-- PAGE TITLE -->
     ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
      ";
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 11
        echo "
      
<body> 
<div class=\"container rounded bg-white mt-5 mb-5\">
    <div class=\"row\">
        <div class=\"col-md-3 border-right\">
            <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\"><img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\"><span class=\"font-weight-bold\">Edogaru</span><span class=\"text-black-50\">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class=\"col-md-5 border-right\">
            <div class=\"p-3 py-5\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <h4 class=\"text-right\">Profile Settings</h4>
                </div>
                <div class=\"row mt-2\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "id" => "form"]]);
        echo "
                    <div class=\"col-md-6\">
                   ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'label', ["label" => "Nom"]);
        echo "
                   ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'widget');
        echo "
                   ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'label', ["label" => "Prenom"]);
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'widget');
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-md-12\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'label', ["label" => "Email"]);
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'widget');
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-12\">
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "cin", [], "any", false, false, false, 44), 'label', ["label" => "CIN"]);
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "cin", [], "any", false, false, false, 45), 'widget');
        echo "
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "cin", [], "any", false, false, false, 46), 'errors');
        echo "
                    </div>
                    <div class=\"col-md-12\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "permis", [], "any", false, false, false, 49), 'label', ["label" => "Permis"]);
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "permis", [], "any", false, false, false, 50), 'widget');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "permis", [], "any", false, false, false, 51), 'errors');
        echo "
                    </div>
                    
                    <div class=\"col-md-12\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "pwd", [], "any", false, false, false, 55), 'label', ["label" => "Password"]);
        echo "
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "pwd", [], "any", false, false, false, 56), 'widget');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "pwd", [], "any", false, false, false, 57), 'errors');
        echo "
                    </div>
                    
                </div>
                ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
                <div class=\"mt-5 text-center\"><button class=\"btn btn-primary profile-button\" type=\"button\">Save Profile</button></div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>
";
        // line 70
        $this->displayBlock('js', $context, $blocks);
        // line 83
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " <title>Profil</title> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        echo " 
      <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("profil.css"), "html", null, true);
        echo "\"> 
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css\">
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 71
        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
  
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
        return "profil/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 71,  237 => 70,  224 => 8,  212 => 7,  193 => 5,  182 => 83,  180 => 70,  168 => 61,  161 => 57,  157 => 56,  153 => 55,  146 => 51,  142 => 50,  138 => 49,  132 => 46,  128 => 45,  124 => 44,  118 => 41,  114 => 40,  110 => 39,  102 => 34,  98 => 33,  94 => 32,  88 => 29,  84 => 28,  80 => 27,  75 => 25,  59 => 11,  57 => 7,  54 => 6,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">

<!-- PAGE TITLE -->
     {%block title %} <title>Profil</title> {%endblock%}

      {%block css%} 
      <link rel=\"stylesheet\" href=\"{{asset('profil.css')}}\"> 
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css\">
      {%endblock%}

      
<body> 
<div class=\"container rounded bg-white mt-5 mb-5\">
    <div class=\"row\">
        <div class=\"col-md-3 border-right\">
            <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\"><img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\"><span class=\"font-weight-bold\">Edogaru</span><span class=\"text-black-50\">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class=\"col-md-5 border-right\">
            <div class=\"p-3 py-5\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <h4 class=\"text-right\">Profile Settings</h4>
                </div>
                <div class=\"row mt-2\">
                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'id': 'form'}}) }}
                    <div class=\"col-md-6\">
                   {{form_label(form.nom,\"Nom\")}}
                   {{form_widget(form.nom)}}
                   {{form_errors(form.nom)}}
                    </div>
                    <div class=\"col-md-6\">
                    {{form_label(form.prenom,\"Prenom\")}}
                    {{form_widget(form.prenom)}}
                    {{form_errors(form.prenom)}}
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-md-12\">
                    {{form_label(form.email,\"Email\")}}
                    {{form_widget(form.email)}}
                    {{form_errors(form.email)}}
                    </div>
                    <div class=\"col-md-12\">
                    {{form_label(form.cin,\"CIN\")}}
                    {{form_widget(form.cin)}}
                    {{form_errors(form.cin)}}
                    </div>
                    <div class=\"col-md-12\">
                    {{form_label(form.permis,\"Permis\")}}
                    {{form_widget(form.permis)}}
                    {{form_errors(form.permis)}}
                    </div>
                    
                    <div class=\"col-md-12\">
                    {{form_label(form.pwd,\"Password\")}}
                    {{form_widget(form.pwd)}}
                    {{form_errors(form.pwd)}}
                    </div>
                    
                </div>
                {{ form_end(form) }}
                <div class=\"mt-5 text-center\"><button class=\"btn btn-primary profile-button\" type=\"button\">Save Profile</button></div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>
{%block js%}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
  
  <script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        var forms = document.getElementsByTagName('form');
        for (var i = 0; i < forms.length; i++) {
            forms[i].setAttribute('novalidate', true);
        }
    });
</script>
{%endblock%}
</body>
</html>", "profil/profile.html.twig", "C:\\Users\\Mega-PC\\Desktop\\Web-Application\\templates\\profil\\profile.html.twig");
    }
}
