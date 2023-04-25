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
class __TwigTemplate_79cc5b55cf4224244f4f585eb08a0ce0 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/carlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicule/carlist.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "vehicule/carlist.html.twig", 1);
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
                        <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_filter");
        echo "\" method=\"get\">
                          <div class=\"form-group\">
                            <label for=\"type\">Type de vehicule</label>
                            <select class=\"form-control\" name=\"type\" id=\"type\">
                              <option value=\"\">Tous</option>
                              <option value=\"Voiture\">Voiture</option>
                              <option value=\"Trottinette\">Trottinette</option>
                            </select>
                          </div>
                          <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                        </form>
                      </div>

                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                          <label> Car Price </label>
                          <select class=\"form-control\">
                            <option>Prix croissant</option>
                            <option>Prix décroissant</option>
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
                  <span>Trier par : </span>
                  <select class=\"r-show-cars-filter\">
                    <option value=\"6\"> Nom </option>
                    <option value=\"10\"> Prix </option>
                  </select>
                </div>
                <div class=\"pull-right\"><span class=\"r-total-result\">11 Search results</span></div>
              </div>
              <div class=\"r-car-showcase\">
                    <div class=\"row clearfix r-best-offer-list\">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 64
            echo "                  <div class=\"col-md-4\">
                      <div class=\"card mb-4 shadow-sm\">
                          <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["vehicule"], "image", [], "any", false, false, false, 66))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 66), "html", null, true);
            echo "\" />
                          <div class=\"card-body\">
                              <p class=\"card-text\"><a href=\"#\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 68), "html", null, true);
            echo "</a></p>
                              <div class=\"d-flex justify-content-between align-items-center\">
                                  <div class=\"btn-group\">
                                      <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index", ["id" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" ></a>
                                  </div>
                            <div class=\"r-best-offer-content\">
                            <p>Start at <b>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prix", [], "any", false, false, false, 74), "html", null, true);
            echo " DT</b> per day</p>
                            <ul class=\"pl-0 mb-0\">
                              <li><i class=\"fa fa-cogs\"></i><span>MANUAL</span></li>
                              <li><i class=\"fa fa-beer\"></i><span>PETROL</span></li>
                              <li><i class=\"fa fa-road\"></i><span>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "puissance", [], "any", false, false, false, 78), "html", null, true);
            echo "</span></li>
                            </ul>
                            <a class=\"btn btn-sm btn-outline-primary\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_show", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\">show</a>
                            <a class=\"btn btn-sm btn-outline-primary\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_edit", ["idvehicule" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "idvehicule", [], "any", false, false, false, 81)]), "html", null, true);
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
        // line 89
        echo "                </div>
              </div>
        </div>
            
       

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  207 => 89,  193 => 81,  189 => 80,  184 => 78,  177 => 74,  171 => 71,  165 => 68,  158 => 66,  154 => 64,  150 => 63,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

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
                        <form action=\"{{ path('vehicule_filter') }}\" method=\"get\">
                          <div class=\"form-group\">
                            <label for=\"type\">Type de vehicule</label>
                            <select class=\"form-control\" name=\"type\" id=\"type\">
                              <option value=\"\">Tous</option>
                              <option value=\"Voiture\">Voiture</option>
                              <option value=\"Trottinette\">Trottinette</option>
                            </select>
                          </div>
                          <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                        </form>
                      </div>

                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"form-group\">
                          <label> Car Price </label>
                          <select class=\"form-control\">
                            <option>Prix croissant</option>
                            <option>Prix décroissant</option>
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
                  <span>Trier par : </span>
                  <select class=\"r-show-cars-filter\">
                    <option value=\"6\"> Nom </option>
                    <option value=\"10\"> Prix </option>
                  </select>
                </div>
                <div class=\"pull-right\"><span class=\"r-total-result\">11 Search results</span></div>
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
        </div>
            
       

{% endblock %}", "vehicule/carlist.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\vehicule\\carlist.html.twig");
    }
}
