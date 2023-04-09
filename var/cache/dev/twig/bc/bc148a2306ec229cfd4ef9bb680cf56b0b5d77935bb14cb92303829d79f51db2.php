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

/* vehicule/carlist.html.twig */
class __TwigTemplate_ed488d9a3d5c040a40f8acc0bac1facf759b1b458b39ee8e63cf33ddda7786dd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/carlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/carlist.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vehicule/carlist.html.twig", 1);
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

        echo "Vehicule";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-xl-7 col-lg-6 col-md-6 col-sm-12 col-xs-12 r-list-area\">
              <div class=\"r-car-search r-carlist-search\">
                <div class=\"container\">
                  <form>
                    <div class=\"row\">
                      <div class=\"r-search-full col-md-12\">
                       <div class=\"form-group\">
                         <input type=\"text\" class=\"form-control\" placeholder=\"Search car by name or location\">
                         <button class=\"fa fa-search\"></button>
                        </div>
                      </div>
                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
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
                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
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
                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                          <label> Car Price </label>
                          <select class=\"form-control\">
                            <option>Price Low to High</option>
                            <option>Price High to Low</option>
                          </select>
                        </div>
                      </div>
                      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"form-group mb-0\">
                          <input type=\"submit\" class=\"form-control btn-primary\" value=\"Search Car Now\">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class=\"clearfix r-sort-val\">
                <div class=\"pull-left\">
                  <span>Sort by : </span>
                  <select class=\"r-show-cars-filter\">
                    <option value=\"6\"> Name </option>
                    <option value=\"10\"> Price </option>
                    <option value=\"20\"> Age </option>
                  </select>
                </div>
                <div class=\"pull-right\"><span class=\"r-total-result\">6 Search results</span></div>
              </div>
              <div class=\"r-best-offer-list r-car-list-map mCustomScrollbar\">
                <div class=\"row\">
                  ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 73
            echo "                  <div class=\"col-md-4\">
                      <div class=\"card mb-4 shadow-sm\">
                          <img src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["vehicule"], "image", [], "any", false, false, false, 75))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 75), "html", null, true);
            echo "\" />
                          <div class=\"card-body\">
                              <p class=\"card-text\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 77), "html", null, true);
            echo "</p>
                              <p class=\"card-text\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prix", [], "any", false, false, false, 78), "html", null, true);
            echo "</p>
                              <div class=\"d-flex justify-content-between align-items-center\">
                                  <div class=\"btn-group\">
                                      <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index", ["id" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-secondary\">View</a>
                                  </div>
                              </div>
                          </div>
                    </div>
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                </div>
              </div>
        </div>
            <div class=\"col-xl-5 col-lg-5 col-md-5 col-sm-4 col-xs-12 p-0 r-map-area\">
              <div class=\"r-hide-car-list r-flip-map\">
                <span>HIDE CAR LIST</span>
                <i class=\"fa fa-angle-up\"></i>
              </div>
              <div class=\"google-map r-google-map-list\">
                <div id=\"map-canvas\"></div>
              </div>
            </div>
          </div>
       

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vehicule/carlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 88,  181 => 81,  175 => 78,  171 => 77,  164 => 75,  160 => 73,  156 => 72,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vehicule{% endblock %}

{% block body %}
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-xl-7 col-lg-6 col-md-6 col-sm-12 col-xs-12 r-list-area\">
              <div class=\"r-car-search r-carlist-search\">
                <div class=\"container\">
                  <form>
                    <div class=\"row\">
                      <div class=\"r-search-full col-md-12\">
                       <div class=\"form-group\">
                         <input type=\"text\" class=\"form-control\" placeholder=\"Search car by name or location\">
                         <button class=\"fa fa-search\"></button>
                        </div>
                      </div>
                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
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
                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
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
                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                          <label> Car Price </label>
                          <select class=\"form-control\">
                            <option>Price Low to High</option>
                            <option>Price High to Low</option>
                          </select>
                        </div>
                      </div>
                      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"form-group mb-0\">
                          <input type=\"submit\" class=\"form-control btn-primary\" value=\"Search Car Now\">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class=\"clearfix r-sort-val\">
                <div class=\"pull-left\">
                  <span>Sort by : </span>
                  <select class=\"r-show-cars-filter\">
                    <option value=\"6\"> Name </option>
                    <option value=\"10\"> Price </option>
                    <option value=\"20\"> Age </option>
                  </select>
                </div>
                <div class=\"pull-right\"><span class=\"r-total-result\">6 Search results</span></div>
              </div>
              <div class=\"r-best-offer-list r-car-list-map mCustomScrollbar\">
                <div class=\"row\">
                  {% for vehicule in vehicules %}
                  <div class=\"col-md-4\">
                      <div class=\"card mb-4 shadow-sm\">
                          <img src=\"{{ asset('images/' ~ vehicule.image) }}\" alt=\"{{ vehicule.modele }}\" />
                          <div class=\"card-body\">
                              <p class=\"card-text\">{{ vehicule.modele }}</p>
                              <p class=\"card-text\">{{ vehicule.prix }}</p>
                              <div class=\"d-flex justify-content-between align-items-center\">
                                  <div class=\"btn-group\">
                                      <a href=\"{{ path('app_vehicule_index', {'id': vehicule.idvehicule}) }}\" class=\"btn btn-sm btn-outline-secondary\">View</a>
                                  </div>
                              </div>
                          </div>
                    </div>
                  </div>
                  {% endfor %}
                </div>
              </div>
        </div>
            <div class=\"col-xl-5 col-lg-5 col-md-5 col-sm-4 col-xs-12 p-0 r-map-area\">
              <div class=\"r-hide-car-list r-flip-map\">
                <span>HIDE CAR LIST</span>
                <i class=\"fa fa-angle-up\"></i>
              </div>
              <div class=\"google-map r-google-map-list\">
                <div id=\"map-canvas\"></div>
              </div>
            </div>
          </div>
       

{% endblock %}", "vehicule/carlist.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\vehicule\\carlist.html.twig");
    }
}
