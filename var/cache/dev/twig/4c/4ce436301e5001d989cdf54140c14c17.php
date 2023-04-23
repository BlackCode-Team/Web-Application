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
class __TwigTemplate_9a1dd8b9261cf86a866c70187e6899d8 extends \Twig\Template
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
        echo " <div class=\"r-car-search\">
          <div class=\"container\">
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
                    <div class=\"r-best-leftbar\">
                      <ul class=\"pl-0 mb-0 r-best-vehicle-types r-best-vehicle-category\">
                        <li><span> <i class=\"fa fa-star\"></i> Popular Cars</span></li>
                        <li><span> <i class=\"fa fa-star\"></i> Special Offers</span></li>
                        <li><span> <i class=\"fa fa-star\"></i>Limited Editions</span></li>
                      </ul>
                      <ul class=\"pl-0 mb-0 r-best-vehicle-types\">
                        <li><span>All Manufacturer</span></li>
                        <li><span>Honda</span></li>
                        <li class=\"r-best-vehicle-acitve\"><span>Mercedes Benz</span></li>
                        <li><span>Toyota</span></li>
                        <li><span>Volkswagen</span></li>
                        <li><span>Audi</span></li>
                        <li><span>Ferrari</span></li>
                        <li><span>Chevrolet</span></li>
                      </ul>
                    </div>
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
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 104
            echo "                  <div class=\"col-md-4\">
                      <div class=\"card mb-4 shadow-sm\">
                          <img src=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["vehicule"], "image", [], "any", false, false, false, 106))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 106), "html", null, true);
            echo "\" />
                          <div class=\"card-body\">
                              <p class=\"card-text\"><a href=\"#\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 108), "html", null, true);
            echo "</a></p>
                              <div class=\"d-flex justify-content-between align-items-center\">
                                  <div class=\"btn-group\">
                                      <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index", ["id" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\" ></a>
                                  </div>
                            <div class=\"r-best-offer-content\">
                            <p>Start at <b>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prix", [], "any", false, false, false, 114), "html", null, true);
            echo " DT</b> per day</p>
                            <ul class=\"pl-0 mb-0\">
                              <li><i class=\"fa fa-cogs\"></i><span>MANUAL</span></li>
                              <li><i class=\"fa fa-beer\"></i><span>PETROL</span></li>
                              <li><i class=\"fa fa-road\"></i><span>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "puissance", [], "any", false, false, false, 118), "html", null, true);
            echo "</span></li>
                            </ul>
                            <a class=\"btn btn-sm btn-outline-primary\" href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_show", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 120)]), "html", null, true);
            echo "\">show</a>
                            <a class=\"btn btn-sm btn-outline-primary\" href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_edit", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 121)]), "html", null, true);
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
        // line 129
        echo "                        </div>
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
        return array (  244 => 129,  230 => 121,  226 => 120,  221 => 118,  214 => 114,  208 => 111,  202 => 108,  195 => 106,  191 => 104,  187 => 103,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("       {% extends 'base.html.twig' %}

{% block title %}Vehicule{% endblock %}

{% block body %}
 <div class=\"r-car-search\">
          <div class=\"container\">
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
                    <div class=\"r-best-leftbar\">
                      <ul class=\"pl-0 mb-0 r-best-vehicle-types r-best-vehicle-category\">
                        <li><span> <i class=\"fa fa-star\"></i> Popular Cars</span></li>
                        <li><span> <i class=\"fa fa-star\"></i> Special Offers</span></li>
                        <li><span> <i class=\"fa fa-star\"></i>Limited Editions</span></li>
                      </ul>
                      <ul class=\"pl-0 mb-0 r-best-vehicle-types\">
                        <li><span>All Manufacturer</span></li>
                        <li><span>Honda</span></li>
                        <li class=\"r-best-vehicle-acitve\"><span>Mercedes Benz</span></li>
                        <li><span>Toyota</span></li>
                        <li><span>Volkswagen</span></li>
                        <li><span>Audi</span></li>
                        <li><span>Ferrari</span></li>
                        <li><span>Chevrolet</span></li>
                      </ul>
                    </div>
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
                      </div>
                      {% endblock %}", "vehicule/list.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\Web-Application\\templates\\vehicule\\list.html.twig");
    }
}
