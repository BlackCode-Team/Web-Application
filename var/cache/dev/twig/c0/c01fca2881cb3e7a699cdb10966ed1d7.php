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
class __TwigTemplate_5921e6886a02bda31db28fe19b678061 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/list.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "vehicule/list.html.twig", 1);
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
        echo " <div class=\"r-car-search\">
          <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf_catalogue");
        echo "\">Télécharger le catalogue des voitures</a>

          <div class=\"container\">
            <form>
              <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                  <div class=\"form-group\">
                    <label> Car Price </label>
                    <select class=\"form-control\">
                      <option>Prix croissant</option>
                      <option>Prix decroissant</option>
                    </select>
                  </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                  <div class=\"form-group\">
                    <input type=\"submit\" class=\"form-control btn-primary\" value=\"Search Car Now\" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div> <!-- /r-car-search -->

        <section class=\"r-car-showcase-wrapper\">
          <div class=\"r-best-vehicles\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-lg-3 col-md-4 col-sm-12\">
                  <h2 class=\"heading\"> Car Categories </h2>
                  <div class=\"r-best-vehicle-list-outer\">
                    <form action=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_filter");
        echo "\" method=\"get\">
                    <label for=\"type\">Type:</label>
                    <select name=\"type\" id=\"type\">
                        <option value=\"\">Tous</option>
                        <option value=\"Voiture\">Voiture</option>
                        <option value=\"Trottinette\">Trottinette</option>
                    </select>
                    <button type=\"submit\">Filtrer</button>
                </form>
                  </div>
                  
                </div>
                <div class=\"col-lg-9 col-md-8 col-sm-12\">
                  <div class=\"r-car-filter-area\">
                    <div class=\"row\">
                      <div class=\"col-lg-6 col-md-12 col-sm-12\">
                        <span class=\"r-filter-text\">20 of 50 Search Results</span>
                      </div>
                      <div class=\" col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"r-car-filter-wrapper\">
                          <span class=\"r-filter-text\"> Show Cars : </span>
                          <select class=\"r-show-cars-filter\">
                            <option value=\"6\"> 6 Cars </option>
                            <option value=\"10\"> 10 Cars </option>
                            <option value=\"20\"> 20 Cars </option>
                            <option value=\"30\"> 30 Cars </option>
                          </select>
                          <ul class=\"r-change-view\">
                            <li><a href=\"javaScript:void(0)\"> <i class=\"fa fa-th-large\"></i> </a></li>
                            <li><a href=\"javaScript:void(0)\"> <i class=\"fa fa-bars\"></i> </a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"r-car-showcase\">
                    <div class=\"row clearfix r-best-offer-list\">
                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 77
            echo "                  <div class=\"col-md-4\">
                      <div class=\"card mb-4 shadow-sm\">
                          <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["vehicule"], "image", [], "any", false, false, false, 79))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 79), "html", null, true);
            echo "\" />
                          <div class=\"card-body\">
                              <p class=\"card-text\"><a href=\"#\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 81), "html", null, true);
            echo "</a></p>
                              <div class=\"d-flex justify-content-between align-items-center\">
                                  <div class=\"btn-group\">
                                      <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index", ["id" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\" ></a>
                                  </div>
                            <div class=\"r-best-offer-content\">
                            <p>Start at <b>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prix", [], "any", false, false, false, 87), "html", null, true);
            echo " DT</b> per day</p>
                            <ul class=\"pl-0 mb-0\">
                              <li><i class=\"fa fa-cogs\"></i><span>MANUAL</span></li>
                              <li><i class=\"fa fa-beer\"></i><span>PETROL</span></li>
                              <li><i class=\"fa fa-road\"></i><span>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "puissance", [], "any", false, false, false, 91), "html", null, true);
            echo "</span></li>
                            </ul>
                            <a class=\"btn btn-sm btn-outline-primary\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_show", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\">show</a>
                            <a class=\"btn btn-sm btn-outline-primary\" href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_edit", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 94)]), "html", null, true);
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
        // line 102
        echo "                 
                </div>
                <div class=\"pagination-section\">
                  ";
        // line 105
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 105, $this->source); })()));
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
        return array (  228 => 105,  223 => 102,  209 => 94,  205 => 93,  200 => 91,  193 => 87,  187 => 84,  181 => 81,  174 => 79,  170 => 77,  166 => 76,  125 => 38,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Vehicule{% endblock %}

{% block body %}
 <div class=\"r-car-search\">
          <a href=\"{{ path('pdf_catalogue') }}\">Télécharger le catalogue des voitures</a>

          <div class=\"container\">
            <form>
              <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                  <div class=\"form-group\">
                    <label> Car Price </label>
                    <select class=\"form-control\">
                      <option>Prix croissant</option>
                      <option>Prix decroissant</option>
                    </select>
                  </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                  <div class=\"form-group\">
                    <input type=\"submit\" class=\"form-control btn-primary\" value=\"Search Car Now\" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div> <!-- /r-car-search -->

        <section class=\"r-car-showcase-wrapper\">
          <div class=\"r-best-vehicles\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-lg-3 col-md-4 col-sm-12\">
                  <h2 class=\"heading\"> Car Categories </h2>
                  <div class=\"r-best-vehicle-list-outer\">
                    <form action=\"{{ path('vehicule_filter') }}\" method=\"get\">
                    <label for=\"type\">Type:</label>
                    <select name=\"type\" id=\"type\">
                        <option value=\"\">Tous</option>
                        <option value=\"Voiture\">Voiture</option>
                        <option value=\"Trottinette\">Trottinette</option>
                    </select>
                    <button type=\"submit\">Filtrer</button>
                </form>
                  </div>
                  
                </div>
                <div class=\"col-lg-9 col-md-8 col-sm-12\">
                  <div class=\"r-car-filter-area\">
                    <div class=\"row\">
                      <div class=\"col-lg-6 col-md-12 col-sm-12\">
                        <span class=\"r-filter-text\">20 of 50 Search Results</span>
                      </div>
                      <div class=\" col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"r-car-filter-wrapper\">
                          <span class=\"r-filter-text\"> Show Cars : </span>
                          <select class=\"r-show-cars-filter\">
                            <option value=\"6\"> 6 Cars </option>
                            <option value=\"10\"> 10 Cars </option>
                            <option value=\"20\"> 20 Cars </option>
                            <option value=\"30\"> 30 Cars </option>
                          </select>
                          <ul class=\"r-change-view\">
                            <li><a href=\"javaScript:void(0)\"> <i class=\"fa fa-th-large\"></i> </a></li>
                            <li><a href=\"javaScript:void(0)\"> <i class=\"fa fa-bars\"></i> </a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"r-car-showcase\">
                    <div class=\"row clearfix r-best-offer-list\">
                    {% for vehicule in vehicules %}
                  <div class=\"col-md-4\">
                      <div class=\"card mb-4 shadow-sm\">
                          <img src=\"{{ asset('images/' ~ vehicule.image) }}\" alt=\"{{ vehicule.modele }}\" />
                          <div class=\"card-body\">
                              <p class=\"card-text\"><a href=\"#\">{{ vehicule.modele }}</a></p>
                              <div class=\"d-flex justify-content-between align-items-center\">
                                  <div class=\"btn-group\">
                                      <a href=\"{{ path('app_vehicule_index', {'id': vehicule.idvehicule}) }}\" ></a>
                                  </div>
                            <div class=\"r-best-offer-content\">
                            <p>Start at <b>{{ vehicule.prix }} DT</b> per day</p>
                            <ul class=\"pl-0 mb-0\">
                              <li><i class=\"fa fa-cogs\"></i><span>MANUAL</span></li>
                              <li><i class=\"fa fa-beer\"></i><span>PETROL</span></li>
                              <li><i class=\"fa fa-road\"></i><span>{{ vehicule.puissance }}</span></li>
                            </ul>
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
                      
{% endblock %}", "vehicule/list.html.twig", "C:\\Users\\ychaa\\OneDrive\\Documents\\GitHub\\Web-Application\\templates\\vehicule\\list.html.twig");
    }
}
