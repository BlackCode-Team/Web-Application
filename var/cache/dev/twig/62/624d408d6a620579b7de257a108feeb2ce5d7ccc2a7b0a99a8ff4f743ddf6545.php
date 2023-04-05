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
class __TwigTemplate_47c8071f29afe53f54183bbcbbeb596265a9c71c69b71a747e1a095d482548ca extends Template
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
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">
  

<head>
      <!-- PAGE TITLE -->
      <title>Home - Royal Cars :: Car, Bike Any Vehicle Rental HTML Template</title>

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login-register.html"), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-lock.png"), "html", null, true);
        echo "\" alt='' /> <span>Login</span></a>";
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
                          <li class=\"r-has-child\">
                            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">HOME</a>  ";
        echo "    
                          </li>
                          <li class=\"r-has-child\">
                            <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about.html"), "html", null, true);
        echo "\">ABOUT US</a>";
        // line 65
        echo "                            <ul class=\"pl-0 ml-0\">
                              <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("faq.html"), "html", null, true);
        echo "\">Faq</a></li>";
        // line 67
        echo "                            </ul>
                          </li>
                          <li class=\"r-has-child\">
                            <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("car-listing.html"), "html", null, true);
        echo "\">VEHICLES</a>
                            <ul class=\"pl-0 ml-0\">
                              <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("car-list-map.html"), "html", null, true);
        echo "\">Car List Map</a></li>
                              <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("-booking.html"), "html", null, true);
        echo "\">Car Booking</a></li>
                            </ul>                      ";
        // line 74
        echo " 
                          </li>
                          <li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("gallery.html"), "html", null, true);
        echo "\">PARK</a></li>
                          <li><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo "\">CONTACT US</a></li>
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
                  ";
        // line 93
        echo "                </div>
              </div>
            </div>
          </div>
        </header> 
        <section id=\"r-drivers-part\" class=\"r-drivers-part\">
        ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        // line 100
        echo "        </section>
        ";
        // line 126
        echo "        <footer>
          <div class=\"r-footer\">
            <div class=\"container\">
              <div class=\"row clearfix\">
                <div class=\"col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                  <div class=\"r-footer-block\">
                    <img src=\"";
        // line 132
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
        // line 182
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
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

      <!-- JQUERY:: BOOTSTRAP.JS -->
      <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tether.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

      <!-- JQUERY:: PLUGINS -->
      <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/owl/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

      <!-- JQUERY:: CUSTOM -->
      <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
      ";
        // line 229
        $this->displayBlock('javascript', $context, $blocks);
        // line 230
        echo "
  </body>


</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 229
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  389 => 229,  370 => 99,  351 => 17,  337 => 230,  335 => 229,  331 => 228,  325 => 225,  319 => 222,  315 => 221,  309 => 218,  270 => 182,  217 => 132,  209 => 126,  206 => 100,  203 => 99,  195 => 93,  180 => 77,  176 => 76,  172 => 74,  168 => 73,  164 => 72,  159 => 70,  154 => 67,  151 => 66,  148 => 65,  145 => 64,  138 => 61,  120 => 45,  116 => 44,  111 => 43,  104 => 39,  101 => 38,  96 => 37,  79 => 23,  75 => 22,  69 => 18,  67 => 17,  63 => 16,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">
  

<head>
      <!-- PAGE TITLE -->
      <title>Home - Royal Cars :: Car, Bike Any Vehicle Rental HTML Template</title>

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
                      <a href=\"{{asset('login-register.html')}}\"> <img src=\"{{asset('assets/images/icon-lock.png')}}\" alt='' /> <span>Login</span></a>{# hetha fil index bech yetbadel iwali nom ta3 route login #}
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
                          <li class=\"r-has-child\">
                            <a href=\"{{asset('index.html')}}\">HOME</a>  {# hetha fil index bech yetbadel iwali nom ta3 route l'acceuil lzemha bel path ama ena 7atit asset just 5ater mezelet #}    
                          </li>
                          <li class=\"r-has-child\">
                            <a href=\"{{asset('about.html')}}\">ABOUT US</a>{# hetha fil index bech yetbadel iwali nom ta3 route lzemha bel path ama ena 7atit asset just 5ater mezelet #}
                            <ul class=\"pl-0 ml-0\">
                              <li><a href=\"{{asset('faq.html')}}\">Faq</a></li>{# hetha fil index bech yetbadel iwali nom ta3 route lzemha bel path ama ena 7atit asset just 5ater mezelet #}
                            </ul>
                          </li>
                          <li class=\"r-has-child\">
                            <a href=\"{{asset('car-listing.html')}}\">VEHICLES</a>
                            <ul class=\"pl-0 ml-0\">
                              <li><a href=\"{{asset('car-list-map.html')}}\">Car List Map</a></li>
                              <li><a href=\"{{asset('-booking.html')}}\">Car Booking</a></li>
                            </ul>                      {#lehne ena 7atet links ta3 lpaget html 3adinn ama relement hethom bich yetbadlou bel twig ta3 kol we7ed#} 
                          </li>
                          <li><a href=\"{{asset('gallery.html')}}\">PARK</a></li>
                          <li><a href=\"{{asset('contact.html')}}\">CONTACT US</a></li>
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
                  {# <ul>
                    <li><a href=\"\">HOME</a></li>          tensewech lehne tjik fasa men fou9 bech t7ot ili inti fi enehi page juste design
                    <li><span>DIVERS</span></li>
                  </ul> #}
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
