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

/* vehicule/list.html.twig */
class __TwigTemplate_c776a38888f1d5707762c3d4ba6b489a extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vehicule/list.html.twig", 1);
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

        echo "Vehicule";
        
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
        echo "<div class=\"container\">
  <div class=\"row justify-content-between align-items-center mb-4\">
    <div class=\"col-md-auto\">
      <h2 class=\"heading mb-0\">La Liste Des Vehicules</h2>
    </div>
    <div class=\"col-md-auto\">
      <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf_catalogue");
        echo "\" class=\"btn btn-primary\">Télécharger le catalogue des voitures</a>
    </div>
  </div>

  <div class=\"row mb-4\">
    <div class=\"col-md-6\">
      <div class=\"card p-4\">
        <form method=\"get\">
          <div class=\"form-group\">
            <label for=\"sort\">Trier par prix:</label>
            <select id=\"sort\" name=\"sort\" class=\"form-control\" onchange=\"this.form.submit()\">
              <option value=\"price_asc\" ";
        // line 23
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 23, $this->source); })()) == "price_asc")) {
            echo " selected ";
        }
        echo ">Croissant</option>
              <option value=\"price_desc\" ";
        // line 24
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 24, $this->source); })()) == "price_desc")) {
            echo " selected ";
        }
        echo ">Décroissant</option>
            </select>
          </div>
        </form>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"card p-4\">
        <form action=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_indexback");
        echo "\" method=\"get\">
          <div class=\"form-group\">
            <label for=\"type\">Type:</label>
            <select name=\"type\" id=\"type\" class=\"form-control\" onchange=\"this.form.submit()\">
              <option value=\"Tous\">Tous</option>
              <option value=\"Voiture\">Voiture</option>
              <option value=\"Trottinette\">Trottinette</option>
            </select>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class=\"row\">
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 48
            echo "    <div class=\"col-md-4 mb-4\">
      <div class=\"card\">
        <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["vehicule"], "image", [], "any", false, false, false, 50))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 50), "html", null, true);
            echo "\" class=\"card-img-top\">
        <div class=\"card-body\">
          <h5 class=\"card-title mb-2\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 52), "html", null, true);
            echo "</h5>
          <ul class=\"list-unstyled mb-3\">
            <li><i class=\"fa fa-cogs\"></i> Automatique</li>
            <li><i class=\"fa fa-beer\"></i>Electrique</li>
          </ul>
          <p class=\"card-text mb-2\">À partir de <b>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prix", [], "any", false, false, false, 57), "html", null, true);
            echo " DT</b> par jour</p>
          <div class=\"d-flex justify-content-between\">
            <div class=\"dropdown\">
              
                            <a class=\"btn btn-sm btn-outline-primary\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_show", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">show</a>
                            <a class=\"btn btn-sm btn-outline-primary\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_edit", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">edit</a>
                          </div>
                              </ul>
                              </div>
                          </div>
                    </div>
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                 
                </div>
                <div class=\"pagination-section\">
                  ";
        // line 73
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 73, $this->source); })()));
        echo "
                </div>

              </div>
                      
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "vehicule/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 73,  195 => 70,  181 => 62,  177 => 61,  170 => 57,  162 => 52,  155 => 50,  151 => 48,  147 => 47,  129 => 32,  116 => 24,  110 => 23,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vehicule{% endblock %}

{% block body %}
<div class=\"container\">
  <div class=\"row justify-content-between align-items-center mb-4\">
    <div class=\"col-md-auto\">
      <h2 class=\"heading mb-0\">La Liste Des Vehicules</h2>
    </div>
    <div class=\"col-md-auto\">
      <a href=\"{{ path('pdf_catalogue') }}\" class=\"btn btn-primary\">Télécharger le catalogue des voitures</a>
    </div>
  </div>

  <div class=\"row mb-4\">
    <div class=\"col-md-6\">
      <div class=\"card p-4\">
        <form method=\"get\">
          <div class=\"form-group\">
            <label for=\"sort\">Trier par prix:</label>
            <select id=\"sort\" name=\"sort\" class=\"form-control\" onchange=\"this.form.submit()\">
              <option value=\"price_asc\" {% if sort == 'price_asc' %} selected {% endif %}>Croissant</option>
              <option value=\"price_desc\" {% if sort == 'price_desc' %} selected {% endif %}>Décroissant</option>
            </select>
          </div>
        </form>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"card p-4\">
        <form action=\"{{ path('app_vehicule_indexback') }}\" method=\"get\">
          <div class=\"form-group\">
            <label for=\"type\">Type:</label>
            <select name=\"type\" id=\"type\" class=\"form-control\" onchange=\"this.form.submit()\">
              <option value=\"Tous\">Tous</option>
              <option value=\"Voiture\">Voiture</option>
              <option value=\"Trottinette\">Trottinette</option>
            </select>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class=\"row\">
    {% for vehicule in vehicules %}
    <div class=\"col-md-4 mb-4\">
      <div class=\"card\">
        <img src=\"{{ asset('images/' ~ vehicule.image) }}\" alt=\"{{ vehicule.modele }}\" class=\"card-img-top\">
        <div class=\"card-body\">
          <h5 class=\"card-title mb-2\">{{ vehicule.modele }}</h5>
          <ul class=\"list-unstyled mb-3\">
            <li><i class=\"fa fa-cogs\"></i> Automatique</li>
            <li><i class=\"fa fa-beer\"></i>Electrique</li>
          </ul>
          <p class=\"card-text mb-2\">À partir de <b>{{ vehicule.prix }} DT</b> par jour</p>
          <div class=\"d-flex justify-content-between\">
            <div class=\"dropdown\">
              
                            <a class=\"btn btn-sm btn-outline-primary\" href=\"{{ path('app_vehicule_show', {'idvehicule': vehicule.idvehicule}) }}\">show</a>
                            <a class=\"btn btn-sm btn-outline-primary\" href=\"{{ path('app_vehicule_edit', {'idvehicule': vehicule.idvehicule}) }}\">edit</a>
                          </div>
                              </ul>
                              </div>
                          </div>
                    </div>
                  </div>
                  {% endfor %}
                 
                </div>
                <div class=\"pagination-section\">
                  {{ knp_pagination_render(vehicules) }}
                </div>

              </div>
                      
{% endblock %}", "vehicule/list.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\Web-Application\\templates\\vehicule\\list.html.twig");
    }
}
