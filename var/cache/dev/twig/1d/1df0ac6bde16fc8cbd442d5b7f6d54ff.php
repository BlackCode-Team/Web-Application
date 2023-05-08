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
class __TwigTemplate_a0d8a232bdac94911178b07688237cd4 extends \Twig\Template
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
        echo "    <div class=\"r-slider-serach form-search dark\">
        <form method=\"post\">
            <div class=\"form-title form-title-large\">
                <span class=\"r-form-icon\"><img src=\"assets/images/footer-form-icon.png\" alt=\"\"></span>
                <h2>Search Your <b>Best Cars</b></h2>
                <small>120+ CARS TYPE &amp; BRANDS</small>
            </div>

            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

            <div class=\"col-sm-6\">
                <div class=\"form-group has-icon has-label label\" id=\"datetimepicker2\" data-target-input=\"nearest\">
                    <label for=\"formSearchUpDate\">Picking Up Date</label>
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "datedebut", [], "any", false, false, false, 19), 'widget');
        echo "
                </div>
            </div>

            <div class=\"row row-inputs\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group has-icon has-label label\" id=\"datetimepicker2\" data-target-input=\"nearest\">
                        <label for=\"formSearchUpDate\">Dropping Off Date</label>
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "datefin", [], "any", false, false, false, 27), 'widget');
        echo "
                    </div>
                </div>

                <div style=\"display:none;\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "utilisateur", [], "any", false, false, false, 32), 'label');
        echo "
                   ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "utilisateur", [], "any", false, false, false, 33), 'widget', ["data" => (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 33, $this->source); })()), "attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 33, $this->source); })()), "cin", [], "any", false, false, false, 33)]]);
        echo "                </div>

                </div>

                <div style=\"display:none;\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "itineraire", [], "any", false, false, false, 38), 'label');
        echo "
";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "itineraire", [], "any", false, false, false, 39), 'widget', ["attr" => ["value" => 5]]);
        echo "
                </div>

                <div style=\"display:none;\">
                
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "vehicule", [], "any", false, false, false, 44), 'label');
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vehicule", [], "any", false, false, false, 45), 'widget', ["data" => (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 45, $this->source); })()), "attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 45, $this->source); })()), "modele", [], "any", false, false, false, 45)]]);
        echo "                </div>

                <div style=\"display:none;\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "prixreservation", [], "any", false, false, false, 48), 'label');
        echo "
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "prixreservation", [], "any", false, false, false, 49), 'widget');
        echo "
                </div>

                <div class=\"form-footer\">
                    <div class=\"inner clearfix\">
                        <button type=\"submit\" class=\"btn m-auto d-block btn-full\">";
        // line 54
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 54, $this->source); })()), "Continuez")) : ("Continuez")), "html", null, true);
        echo "</button>
                    </div>
                </div>

                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
            </div>
        </form>

        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["reservation"]);
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 63
            echo "            <tr>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["idreservation" => twig_get_attribute($this->env, $this->source, $context["reservation"], "idreservation", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">edit</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
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
        return array (  205 => 68,  196 => 65,  192 => 64,  189 => 63,  185 => 62,  178 => 58,  171 => 54,  163 => 49,  159 => 48,  153 => 45,  149 => 44,  141 => 39,  137 => 38,  129 => 33,  125 => 32,  117 => 27,  106 => 19,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Reservation{% endblock %}

{% block body %}
    <div class=\"r-slider-serach form-search dark\">
        <form method=\"post\">
            <div class=\"form-title form-title-large\">
                <span class=\"r-form-icon\"><img src=\"assets/images/footer-form-icon.png\" alt=\"\"></span>
                <h2>Search Your <b>Best Cars</b></h2>
                <small>120+ CARS TYPE &amp; BRANDS</small>
            </div>

            {{ form_start(form) }}

            <div class=\"col-sm-6\">
                <div class=\"form-group has-icon has-label label\" id=\"datetimepicker2\" data-target-input=\"nearest\">
                    <label for=\"formSearchUpDate\">Picking Up Date</label>
                    {{ form_widget(form.datedebut) }}
                </div>
            </div>

            <div class=\"row row-inputs\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group has-icon has-label label\" id=\"datetimepicker2\" data-target-input=\"nearest\">
                        <label for=\"formSearchUpDate\">Dropping Off Date</label>
                        {{ form_widget(form.datefin) }}
                    </div>
                </div>

                <div style=\"display:none;\">
                    {{ form_label(form.utilisateur) }}
                   {{ form_widget(form.utilisateur, {'data': utilisateur, 'attr': {'value': utilisateur.cin}}) }}                </div>

                </div>

                <div style=\"display:none;\">
                    {{ form_label(form.itineraire) }}
{{ form_widget(form.itineraire,{'attr': {'value':5}}) }}
                </div>

                <div style=\"display:none;\">
                
                    {{ form_label(form.vehicule) }}
                    {{ form_widget(form.vehicule, {'data': vehicule, 'attr': {'value': vehicule.modele}}) }}                </div>

                <div style=\"display:none;\">
                    {{ form_label(form.prixreservation) }}
                    {{ form_widget(form.prixreservation) }}
                </div>

                <div class=\"form-footer\">
                    <div class=\"inner clearfix\">
                        <button type=\"submit\" class=\"btn m-auto d-block btn-full\">{{ button_label|default('Continuez') }}</button>
                    </div>
                </div>

                {{ form_end(form) }}
            </div>
        </form>

        {% for reservation in reservation %}
            <tr>
                <td>{{ reservation.idreservation }}</td>
                <td><a href=\"{{ path('app_reservation_edit', {'idreservation': reservation.idreservation}) }}\">edit</a></td>
            </tr>
        {% endfor %}

    </div>
{% endblock %}
", "reservation/new.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\reservation\\new.html.twig");
    }
}
