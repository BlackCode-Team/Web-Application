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

/* base.html.twig */
class __TwigTemplate_80b1c087d0c85bca6973fc7256662f96 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'page' => [$this, 'block_page'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">
  

<head>
      <!-- PAGE TITLE -->
      <title>CARNGO</title>

      <!-- META-DATA -->
      <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" >
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
      <meta name=\"description\" content=\"\" >
      <meta name=\"keywords\" content=\"\" >

      <!-- FAVICON -->
     <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/logo-4.png"), "html", null, true);
        echo "\"/>
    ";
        // line 17
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 18
        echo "      <!-- CSS:: FONTS -->
      <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">

      <!-- CSS:: MAIN -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" id=\"r-color-roller\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/color-files/color-08.css"), "html", null, true);
        echo "\">
     

  </head>
  <body>
   
      <div class=\"r-wrapper\">
        <header>
          <div class=\"r-header r-header-inner\">
            <div class=\"r-header-strip\">
              <div class=\"container\">
                <div class=\"row clearfix\">
                  <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                    <div class=\"r-logo\">
                      <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\" class=\"d-inline-block\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carngo.png"), "html", null, true);
        echo "\" class=\"img-fluid d-block\" alt=\"\"></a>    ";
        // line 38
        echo "                    </div>
                    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javaScript:void(0)"), "html", null, true);
        echo "\" class=\"menu-icon\"> <i class=\"fa fa-bars\"></i> </a>
                  </div>
                  <div class=\"col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"r-header-action float-right\">
                      <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-unlock.png"), "html", null, true);
        echo "\" alt='' /> <span>Logout</span></a>";
        // line 44
        echo "                      <a href=\"\" class=\"r-search\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-search.png"), "html", null, true);
        echo "\" alt='' /> <span>Search</span></a>";
        // line 45
        echo "
                      <div class=\"r-search-wrapper\">
                        <div class=\"r-search-inner\">
                          <form>
                              <input type=\"text\" class=\"r-search-field\" placeholder=\"Search\"/>
                              <button type=\"submit\" class=\"r-search-btn\">
                                <i class=\"fa fa-search\"></i>
                              </button>
                          </form>
                        </div>
                      </div> <!-- /r-search-wrapper -->
                    </div>
                    <div class=\"r-nav-section float-right\">
                      <nav>
                        <ul>
                          <li >
                            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">HOME</a>  ";
        echo "    
                          </li>
                          <li >
                            <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraire_new");
        echo "\">RESERVATION</a>";
        // line 65
        echo "                        
                          </li>
                          <li >
                            <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        echo "\">VEHICLES</a>
                                           ";
        // line 69
        echo " 
                          </li>
                          <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_park_index");
        echo "\">PARCS</a></li>
                          <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\">RECLAMATION</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"r-header-inner-banner\">
              <div class=\"r-header-in-over\">
                <h1>Car<b>Ngo</b> </h1>
                <div class=\"r-breadcrum\">
                  <ul>
                    <li><a href=\"\">HOME</a></li>         ";
        // line 86
        echo "                    <li><span>";
        $this->displayBlock('page', $context, $blocks);
        echo "</span></li>
                  </ul> 
                </div>
              </div>
            </div>
          </div>
        </header> 
        <section id=\"r-drivers-part\" class=\"r-drivers-part\">
        ";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        // line 95
        echo "        </section>
        ";
        // line 121
        echo "        <footer>
          <div class=\"r-footer\">
            <div class=\"container\">
              <div class=\"row clearfix\">
                <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                  <div class=\"r-footer-block\">
                    <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/carngo.png"), "html", null, true);
        echo "\" class=\"d-block img-fluid\" alt=\"\">
                    <p>
                      We know the difference is in the details and that’s why our car rental services, in the tourism and business industry, stand out for their quality.
                    </p>
                    
                  </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                  <div class=\"r-footer-block\">
                    <div class=\"r-footer-widget r-footer-phone\">
                      <span><i class=\"fa fa-phone\"></i> CALL US ON LINE 1</span>
                      <h5>100.1212.2000</h5>
                    </div>
                    <div class=\"r-footer-widget r-footer-nav\">
                      <h6>USEFUL LINK</h6>
                      <nav>
                        <ul>
                          <li><a href=\"\">Private Policy</a></li>
                          <li><a href=\"\">Term & Conditions</a></li>
                          <li><a href=\"\">Copyright Notification</a></li>
                          <li><a href=\"\">Register for New Member</a></li>
                          <li><a href=\"\">Press Release</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                  <div class=\"r-footer-block\">
                    <div class=\"r-footer-widget r-footer-phone\">
                      <span><i class=\"fa fa-phone\"></i> CALL US ON LINE 2</span>
                      <h5>100.2424.2000</h5>
                    </div>
                    <div class=\"r-footer-widget r-footer-nav\">
                      <h6>OUR INFO</h6>
                      <nav>
                        <ul>
                          <li><a href=\"\">About Royal Cars</a></li>
                          <li><a href=\"\">Our Mission & Strategy</a></li>
                          <li><a href=\"\">Our Vision</a></li>
                          <li><a href=\"\">Royal Cars Advantages</a></li>
                          <li><a href=\"\">Contact Us</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                  <div class=\"r-footer-block\">
                    <div class=\"r-footer-widget r-footer-map\">
                      <a href=\"#\"> <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-footer-map.png"), "html", null, true);
        echo "\" class=\"icon\" alt=''/> RoyalCars on Map</a>
                    </div>
                    <div class=\"r-footer-widget r-footer-nav\">
                      <h6>ACCOUNT INFORMATION</h6>
                      <nav>
                        <ul>
                          <li><a href=\"\">Login to My Account</a></li>
                          <li><a href=\"\">Press Releases</a></li>
                          <li><a href=\"\">User Dashboard</a></li>
                          <li><a href=\"\">Email Address</a></li>
                          <li><a href=\"\">Lorem Ipsum dolorsit</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row clearfix r-footer-strip\">
                <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                 © 2023 Created by <a href=\"\" target=\"_blank\" title=\"Best Corporate WordPress, HTML Templates\">BLACKCODE</a>
                </div>
                <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                 <ul>
                   <li><a href=\"\"><i class=\"fa fa-facebook\"></i>. <span>Facebook</span></a></li>
                   <li><a href=\"\"><i class=\"fa fa-twitter\"></i>.<span>Twitter</span></a></li>
                   <li><a href=\"\"><i class=\"fa fa-instagram\"></i>.<span>Instagram</span></a></li>
                 </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
     
      <div id=\"r-to-top\" class=\"r-to-top\"><i class=\"fa fa-angle-up\"></i></div>
      <!-- JQUERY:: JQUERY.JS -->
      <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

      <!-- JQUERY:: BOOTSTRAP.JS -->
      <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tether.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

      <!-- JQUERY:: PLUGINS -->
      <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/owl/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

      <!-- JQUERY:: CUSTOM -->
      <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
      ";
        // line 224
        $this->displayBlock('javascript', $context, $blocks);
        // line 225
        echo "
  </body>


</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 86
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 94
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 224
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 224,  380 => 94,  361 => 86,  342 => 17,  328 => 225,  326 => 224,  322 => 223,  316 => 220,  310 => 217,  306 => 216,  300 => 213,  261 => 177,  208 => 127,  200 => 121,  197 => 95,  194 => 94,  182 => 86,  166 => 72,  162 => 71,  158 => 69,  154 => 68,  149 => 65,  146 => 64,  139 => 61,  121 => 45,  117 => 44,  112 => 43,  105 => 39,  102 => 38,  97 => 37,  80 => 23,  76 => 22,  70 => 18,  68 => 17,  64 => 16,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">
  

<head>
      <!-- PAGE TITLE -->
      <title>CARNGO</title>

      <!-- META-DATA -->
      <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" >
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\">
      <meta name=\"description\" content=\"\" >
      <meta name=\"keywords\" content=\"\" >

      <!-- FAVICON -->
     <link rel=\"icon\" type=\"image/x-icon\" href=\"{{asset('back/assets/img/logo-4.png')}}\"/>
    {% block stylesheet %}  {% endblock %}
      <!-- CSS:: FONTS -->
      <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">

      <!-- CSS:: MAIN -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/main.css')}}\">
      <link rel=\"stylesheet\" type=\"text/css\" id=\"r-color-roller\" href=\"{{asset('assets/color-files/color-08.css')}}\">
     

  </head>
  <body>
   
      <div class=\"r-wrapper\">
        <header>
          <div class=\"r-header r-header-inner\">
            <div class=\"r-header-strip\">
              <div class=\"container\">
                <div class=\"row clearfix\">
                  <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                    <div class=\"r-logo\">
                      <a href=\"{{asset('index.html')}}\" class=\"d-inline-block\"><img src=\"{{asset('assets/images/carngo.png')}}\" class=\"img-fluid d-block\" alt=\"\"></a>    {# hetha fil index bech yetbadel iwali nom ta3 route d'accueil #}
                    </div>
                    <a href=\"{{asset('javaScript:void(0)')}}\" class=\"menu-icon\"> <i class=\"fa fa-bars\"></i> </a>
                  </div>
                  <div class=\"col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"r-header-action float-right\">
                      <a href=\"{{path('app_logout')}}\"> <img src=\"{{asset('assets/images/icon-unlock.png')}}\" alt='' /> <span>Logout</span></a>{# hetha fil index bech yetbadel iwali nom ta3 route login #}
                      <a href=\"\" class=\"r-search\"> <img src=\"{{asset('assets/images/icon-search.png')}}\" alt='' /> <span>Search</span></a>{# hetha fil index bech yetbadel iwali nom ta3 route rech #}

                      <div class=\"r-search-wrapper\">
                        <div class=\"r-search-inner\">
                          <form>
                              <input type=\"text\" class=\"r-search-field\" placeholder=\"Search\"/>
                              <button type=\"submit\" class=\"r-search-btn\">
                                <i class=\"fa fa-search\"></i>
                              </button>
                          </form>
                        </div>
                      </div> <!-- /r-search-wrapper -->
                    </div>
                    <div class=\"r-nav-section float-right\">
                      <nav>
                        <ul>
                          <li >
                            <a href=\"{{asset('index.html')}}\">HOME</a>  {# hetha fil index bech yetbadel iwali nom ta3 route l'acceuil lzemha bel path ama ena 7atit asset just 5ater mezelet #}    
                          </li>
                          <li >
                            <a href=\"{{path('app_itineraire_new')}}\">RESERVATION</a>{# hetha fil index bech yetbadel iwali nom ta3 route lzemha bel path ama ena 7atit asset just 5ater mezelet #}
                        
                          </li>
                          <li >
                            <a href=\"{{path('app_vehicule_index')}}\">VEHICLES</a>
                                           {#lehne ena 7atet links ta3 lpaget html 3adinn ama relement hethom bich yetbadlou bel twig ta3 kol we7ed#} 
                          </li>
                          <li><a href=\"{{path('app_park_index')}}\">PARCS</a></li>
                          <li><a href=\"{{path('app_reclamation_new')}}\">RECLAMATION</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"r-header-inner-banner\">
              <div class=\"r-header-in-over\">
                <h1>Car<b>Ngo</b> </h1>
                <div class=\"r-breadcrum\">
                  <ul>
                    <li><a href=\"\">HOME</a></li>         {# tensewech lehne tjik fasa men fou9 bech t7ot ili inti fi enehi page juste design #}
                    <li><span>{% block page %}    {% endblock %}</span></li>
                  </ul> 
                </div>
              </div>
            </div>
          </div>
        </header> 
        <section id=\"r-drivers-part\" class=\"r-drivers-part\">
        {% block body %}    {% endblock %} {# lehne bech tsir ay 5edma que ce soit ajout wala 7keya #}
        </section>
        {# <section id=\"r-get-in-touch\">
          <div class=\"r-get-in-touch\">
            <div class=\"container\">
              <div class=\"r-get-header\">
                <span>CONTACT US NOW</span>
                <h2>Keep <b>In Touch.</b></h2>
              </div>
              <div class=\"r-get-form\">
                <form action=\"#\">
                  <div class=\"clearfix\">
                    <div class=\"form-group\"><input type=\"text\" placeholder=\"User name\"></div>
                    <div class=\"form-group\"><input type=\"email\" placeholder=\"Email Address\"></div>
                  </div>
                  <div class=\"form-group\"><input type=\"email\" placeholder=\"Title Message\"></div>
                  <div class=\"form-group\">
                    <textarea placeholder=\"Message\"></textarea>
                  </div>
                  <div class=\"text-center\">
                    <button class=\"btn btn-full\">SEND MESSAGE NOW</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section> #}
        <footer>
          <div class=\"r-footer\">
            <div class=\"container\">
              <div class=\"row clearfix\">
                <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                  <div class=\"r-footer-block\">
                    <img src=\"{{asset('assets/images/carngo.png')}}\" class=\"d-block img-fluid\" alt=\"\">
                    <p>
                      We know the difference is in the details and that’s why our car rental services, in the tourism and business industry, stand out for their quality.
                    </p>
                    
                  </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                  <div class=\"r-footer-block\">
                    <div class=\"r-footer-widget r-footer-phone\">
                      <span><i class=\"fa fa-phone\"></i> CALL US ON LINE 1</span>
                      <h5>100.1212.2000</h5>
                    </div>
                    <div class=\"r-footer-widget r-footer-nav\">
                      <h6>USEFUL LINK</h6>
                      <nav>
                        <ul>
                          <li><a href=\"\">Private Policy</a></li>
                          <li><a href=\"\">Term & Conditions</a></li>
                          <li><a href=\"\">Copyright Notification</a></li>
                          <li><a href=\"\">Register for New Member</a></li>
                          <li><a href=\"\">Press Release</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                  <div class=\"r-footer-block\">
                    <div class=\"r-footer-widget r-footer-phone\">
                      <span><i class=\"fa fa-phone\"></i> CALL US ON LINE 2</span>
                      <h5>100.2424.2000</h5>
                    </div>
                    <div class=\"r-footer-widget r-footer-nav\">
                      <h6>OUR INFO</h6>
                      <nav>
                        <ul>
                          <li><a href=\"\">About Royal Cars</a></li>
                          <li><a href=\"\">Our Mission & Strategy</a></li>
                          <li><a href=\"\">Our Vision</a></li>
                          <li><a href=\"\">Royal Cars Advantages</a></li>
                          <li><a href=\"\">Contact Us</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                  <div class=\"r-footer-block\">
                    <div class=\"r-footer-widget r-footer-map\">
                      <a href=\"#\"> <img src=\"{{asset('assets/images/icon-footer-map.png')}}\" class=\"icon\" alt=''/> RoyalCars on Map</a>
                    </div>
                    <div class=\"r-footer-widget r-footer-nav\">
                      <h6>ACCOUNT INFORMATION</h6>
                      <nav>
                        <ul>
                          <li><a href=\"\">Login to My Account</a></li>
                          <li><a href=\"\">Press Releases</a></li>
                          <li><a href=\"\">User Dashboard</a></li>
                          <li><a href=\"\">Email Address</a></li>
                          <li><a href=\"\">Lorem Ipsum dolorsit</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row clearfix r-footer-strip\">
                <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                 © 2023 Created by <a href=\"\" target=\"_blank\" title=\"Best Corporate WordPress, HTML Templates\">BLACKCODE</a>
                </div>
                <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                 <ul>
                   <li><a href=\"\"><i class=\"fa fa-facebook\"></i>. <span>Facebook</span></a></li>
                   <li><a href=\"\"><i class=\"fa fa-twitter\"></i>.<span>Twitter</span></a></li>
                   <li><a href=\"\"><i class=\"fa fa-instagram\"></i>.<span>Instagram</span></a></li>
                 </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
     
      <div id=\"r-to-top\" class=\"r-to-top\"><i class=\"fa fa-angle-up\"></i></div>
      <!-- JQUERY:: JQUERY.JS -->
      <script src=\"{{asset('assets/js/jquery.min.js')}}\"></script>

      <!-- JQUERY:: BOOTSTRAP.JS -->
      <script src=\"{{asset('assets/js/tether.min.js')}}\"></script>
      <script src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script>

      <!-- JQUERY:: PLUGINS -->
      <script src=\"{{asset('assets/js/plugins/owl/owl.carousel.min.js')}}\"></script>

      <!-- JQUERY:: CUSTOM -->
      <script src=\"{{asset('assets/js/custom.js')}}\"></script>
      {% block javascript %} {% endblock %}

  </body>


</html>", "base.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\base.html.twig");
    }
}
