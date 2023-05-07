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

/* badge/index.html.twig */
class __TwigTemplate_81404d5bb868a25b1afa0b62d14aa67a extends \Twig\Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "badge/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "badge/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "badge/index.html.twig", 1);
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

        echo "Badge index";
        
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
        echo "    <h1>Gestion des Badges (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["badges"]) || array_key_exists("badges", $context) ? $context["badges"] : (function () { throw new RuntimeError('Variable "badges" does not exist.', 6, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 6), "html", null, true);
        echo ")</h1>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "    <div class=\"alert alert-success text-center mb-3\">
    ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
<div class=\"table-responsive mb-4\">
        <div>
        <form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"GET\">
                <label for=\"searchValue\">Rechercher :</label>
                <input type=\"text\" name=\"searchValue\" id=\"searchValue\">
                <button type=\"submit\">Rechercher</button>
            </form>
        </div>

        <div class=\"text-right mb-3\">
            <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("TrieByNbpointASC");
        echo "\">Tri croissant --- </a> 
            <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("TrieByNbpointDESC");
        echo "\">Tri décroissant</a>
        </div>

 

    <table class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">
        <thead>
            <tr>
                <th>Idbadge</th>
                <th>Typebadge</th>
                <th>Nbpoint</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["badges"]) || array_key_exists("badges", $context) ? $context["badges"] : (function () { throw new RuntimeError('Variable "badges" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "idbadge", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "typebadge", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "nbpoint", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_badge_show", ["idbadge" => twig_get_attribute($this->env, $this->source, $context["badge"], "idbadge", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_badge_edit", ["idbadge" => twig_get_attribute($this->env, $this->source, $context["badge"], "idbadge", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>
</div>
<div class=\"pagination-section\">
                        <ul class=\"pagination pagination-style-1 pagination-rounded justify-content-end mt-3 mb-3\">
                            <li><a href=\"javascript:void(0);\">";
        // line 60
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["badges"]) || array_key_exists("badges", $context) ? $context["badges"] : (function () { throw new RuntimeError('Variable "badges" does not exist.', 60, $this->source); })()));
        echo "</a></li>                          
                        </ul>
                    </div>
    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_badge_new");
        echo "\">Create new</a>
   
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "badge/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 63,  198 => 60,  191 => 55,  182 => 51,  173 => 47,  169 => 46,  164 => 44,  160 => 43,  156 => 42,  153 => 41,  148 => 40,  130 => 25,  126 => 24,  115 => 16,  110 => 13,  101 => 10,  98 => 9,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Badge index{% endblock %}

{% block body %}
    <h1>Gestion des Badges ({{badges.getTotalItemCount}})</h1>

    {% for message in app.flashes('info') %}
    <div class=\"alert alert-success text-center mb-3\">
    {{message}}
    </div>
    {% endfor %}

<div class=\"table-responsive mb-4\">
        <div>
        <form action=\"{{ path('search') }}\" method=\"GET\">
                <label for=\"searchValue\">Rechercher :</label>
                <input type=\"text\" name=\"searchValue\" id=\"searchValue\">
                <button type=\"submit\">Rechercher</button>
            </form>
        </div>

        <div class=\"text-right mb-3\">
            <a href=\"{{ path('TrieByNbpointASC') }}\">Tri croissant --- </a> 
            <a href=\"{{ path('TrieByNbpointDESC') }}\">Tri décroissant</a>
        </div>

 

    <table class=\"table table-striped table-hover table-bordered\" style=\"width:100%\">
        <thead>
            <tr>
                <th>Idbadge</th>
                <th>Typebadge</th>
                <th>Nbpoint</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for badge in badges %}
            <tr>
                <td>{{ badge.idbadge }}</td>
                <td>{{ badge.typebadge }}</td>
                <td>{{ badge.nbpoint }}</td>
                <td>
                    <a href=\"{{ path('app_badge_show', {'idbadge': badge.idbadge}) }}\">show</a>
                    <a href=\"{{ path('app_badge_edit', {'idbadge': badge.idbadge}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
<div class=\"pagination-section\">
                        <ul class=\"pagination pagination-style-1 pagination-rounded justify-content-end mt-3 mb-3\">
                            <li><a href=\"javascript:void(0);\">{{ knp_pagination_render(badges)}}</a></li>                          
                        </ul>
                    </div>
    <a href=\"{{ path('app_badge_new') }}\">Create new</a>
   
    
{% endblock %}
", "badge/index.html.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\badge\\index.html.twig");
    }
}
