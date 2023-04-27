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

/* back.html.twig */
class __TwigTemplate_91ac686dd61faa1b818237607d18e679 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'page' => [$this, 'block_page'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from designreset.com/preview-equation/demo3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 16:49:43 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\">
    <title>CARNGO </title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/logo-4.png"), "html", null, true);
        echo "\"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/loader.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL plugins/CUSTOM STYLES -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/charts/chartist/chartist.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/default-dashboard/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/s"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL plugins/CUSTOM STYLES -->
    <script src=\"https://kit.fontawesome.com/yourcode.js\" crossorigin=\"anonymous\"></script>
 
</head>
<body>
    <div id=\"eq-loader\">
      <div class=\"eq-loader-div\">
          <div class=\"eq-loading dual-loader mx-auto mb-5\"></div>
      </div>
    </div>

    <!--  BEGIN NAVBAR  -->
    <header class=\"desktop-nav header navbar fixed-top\">
        <div class=\"nav-logo mr-sm-5 ml-sm-4\">
            <a href=\"javascript:void(0);\" class=\"nav-link sidebarCollapse d-inline-block mr-sm-5\" data-placement=\"bottom\">
                <i class=\"flaticon-menu-line-3\"></i>
            </a>
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\" class=\"\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/logo2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"logo\"></a> ";
        // line 42
        echo "        </div>
        <ul class=\"navbar-nav flex-row mr-auto\">
            <li class=\"nav-item ml-4 d-lg-none d-sm-block d-none\">
                <form class=\"form-inline search-full form-inline search animated-search\" role=\"search\">
                    <i class=\"flaticon-search-1 d-lg-none d-block\"></i>
                    <input type=\"text\" class=\"form-control search-form-control  ml-lg-auto\" placeholder=\"Search...\">
                </form>
            </li>
            <li class=\"nav-item d-lg-block d-none\">
                <form class=\"form-inline form-inline search animated-search\" role=\"search\">
                    <i class=\"flaticon-search-1 d-lg-none d-block\"></i>
                    <input type=\"text\" class=\"form-control search-form-control\" placeholder=\"Search here...\">
                </form>
            </li>
        </ul>

        <ul class=\"navbar-nav flex-row ml-lg-auto\">
            <li class=\"nav-item dropdown notification-dropdown ml-3 mr-lg-4 align-self-center\">
                <a href=\"javascript:void(0);\" class=\"nav-link dropdown-toggle\" id=\"notification-dropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"icon flaticon-bell-4\"></span><span class=\"badge badge-success\"> 15</span> <!--  lehne 7ot nb notification eli 3andou wa9tha  -->
                </a>
                <div class=\"dropdown-menu position-absolute eq-animated eq-fadeInUp\" aria-labelledby=\"notification-dropdown\">
                    <div class=\"notification-scroll\">
                        <div class=\"dropdown-item\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <div class=\"user-profile\">
                                        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/profile-7.jpg"), "html", null, true);
        echo "\" alt=\"admin-profile\" class=\"img-fluid\">
                                    </div>
                                    <div class=\"media-body\">
                                        <span>Alan Green</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"dropdown-item\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <div class=\"user-profile\">
                                        <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/profile-11.jpg"), "html", null, true);
        echo "\" alt=\"admin-profile\" class=\"img-fluid\">
                                    </div>
                                    <div class=\"media-body\">
                                        <span>Irene Collins</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"dropdown-item\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <div class=\"user-profile\">
                                        <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/profile-12.jpg"), "html", null, true);
        echo "\" alt=\"admin-profile\" class=\"img-fluid\">
                                    </div>
                                    <div class=\"media-body\">
                                        <span>Sonia Shaw</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"dropdown-item\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <div class=\"user-profile\">
                                        <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/profile-13.jpg"), "html", null, true);
        echo "\" alt=\"admin-profile\" class=\"img-fluid\">
                                    </div>
                                    <div class=\"media-body\">
                                        <span>Xavier</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>

            <li class=\"nav-item dropdown user-profile-dropdown pl-4 pr-lg-0 pr-2 ml-lg-2 mr-lg-4  align-self-center\">
                <a href=\"javascript:void(0);\" class=\"nav-link dropdown-toggle user\">
                    <div class=\"user-profile d-lg-block d-none\">
                        <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/profile-7.jpg\" alt=\"admin-profile"), "html", null, true);
        echo "\" class=\"img-fluid\">
                    </div>
                    <i class=\"flaticon-user-7 d-lg-none d-block\"></i>
                </a>
            </li>
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class=\"main-container\" id=\"container\">
        <div class=\"overlay\"></div>
        <div class=\"ps-overlay\"></div>
        <div class=\"search-overlay\"></div>
        
        <!--  BEGIN MODERN  -->
        <div class=\"modernSidebar-nav header navbar\">
            <div class=\"\">
                <nav id=\"modernSidebar\">
                    <ul class=\"menu-categories pl-0 m-0\" id=\"topAccordion\">
                     
                        <li class=\"menu\">
                            <a href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\">   ";
        // line 143
        echo "                                <div class=\"\">
                                    <i class=\"flaticon-user-11\"></i>
                                    <span>Gestion Agents</span>
                                </div>
                            </a>
                          
                        </li>

                        <li class=\"menu\">
                            <a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_block");
        echo "\">   ";
        // line 153
        echo "                                <div class=\"\">
                                    <i class=\"fa-solid fa-user-shield\"></i>
                                    <span>Gestion Clients</span>
                                </div>
                            </a>
                          
                        </li>
                    
                        <li class=\"menu\">
                            <a href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_badge_index");
        echo "\">
                                <div class=\"\">
                                    <i class=\"flaticon-cup\"></i>
                                    <span>Gestion Badges</span>
                                </div>
                            </a>
                          
                        </li>
                        <li class=\"menu\">
                            <a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_park_indexad");
        echo "\">
                                <div class=\"\">
                                    <i class=\"flaticon-car-1\"></i>
                                    <span>Gestion des park</span>
                                </div>
                            </a>
                          
                        </li>
                        <li class=\"menu\">
                            <a href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraire_index");
        echo "\">
                                <div class=\"\">
                                    <i class=\"flaticon-map-1\"></i>
                                    <span>Gestion des itineraires</span>
                                </div>
                            </a>
                          
                        </li>
                        <li class=\"menu\">
                            <a href=\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        echo "\">
                                <div class=\"\">
                                    <i class=\"flaticon-car\"></i>
                                    <span>Gestion Vehicule</span>
                                </div>
                            </a>
                          
                        </li>
                        <li class=\"menu\">
                            <a href=\"";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo "\">
                                <div class=\"\">
                                    <i class=\"flaticon-notes-1\"></i>
                                    <span>Gestion Reservation</span>
                                </div>
                            </a>
                          
                        </li>
                        <li class=\"menu\">
                            <a href=\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\">
                                <div class=\"\">
                                    <i class=\"flaticon-danger-line\"></i>
                                    <span>Gestion Reclamation</span>
                                </div>
                            </a>
                          
                        </li>
                    


  

                        <li class=\"menu\">
                            <a href=\"\" class=\"dropdown-toggle collapsed\">
                                <div class=\"\">
                                    <i class=\"flaticon-mail-19\"></i>
                                    <span>ChatBox</span>
                                </div>
                            </a>
                    
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!--  END MODERN  -->
        
        <!--  BEGIN CONTENT PART  -->
        <div id=\"content\" class=\"main-content\">
            <div class=\"container\">
                <div class=\"page-header\">
                    <div class=\"page-title\">
                        <h3> ";
        // line 241
        $this->displayBlock('page', $context, $blocks);
        echo " </h3> <!--  esem el page met3ek  -->
                    </div>
                </div>


                
                ";
        // line 247
        $this->displayBlock('body', $context, $blocks);
        echo "                            ";
        // line 248
        echo " 
               

               

                ";
        // line 639
        echo "
            

               
                ";
        // line 644
        echo "
            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN FOOTER  -->
    <footer class=\"footer-section theme-footer\">

        <div class=\"footer-section-1  sidebar-theme\">
            
        </div>

    </footer>
    <!--  END FOOTER  -->

    <!--  BEGIN PROFILE SIDEBAR  -->
    <aside class=\"profile-sidebar text-center\">
        <div class=\"profile-content profile-content-scroll\">
            <div class=\"usr-profile\">
                <img src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/profile-7.jpg"), "html", null, true);
        echo "\" alt=\"admin-profile\" class=\"img-fluid\">
            </div>
            <p class=\"user-name mt-4 mb-4\">Vincent Carpenter</p> <!--  esem el user ta3ek -->
            <div class=\"\">
                <div class=\"accordion\" id=\"user-stats\">
                    <div class=\"card\">

                        <div id=\"user-status\" class=\"collapse show\" aria-labelledby=\"status\" data-parent=\"#user-stats\">
                            <div class=\"card-body text-left\">
                                <ul class=\"list-unstyled pb-4\">
                                    <li class=\"status-online\"><a href=\"javascript:void(0);\">Online</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"user-links text-left\">
                <ul class=\"list-unstyled\">
                    <li><a href=\"\"><i class=\"flaticon-user-11\"></i> My Profile</a></li>
                    <li><a href=\"\"><i class=\"flaticon-power-off\"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </aside>
    <!--  BEGIN PROFILE SIDEBAR  -->
";
        // line 692
        $this->displayBlock('javascript', $context, $blocks);
        // line 719
        echo "</body>

<!-- Mirrored from designreset.com/preview-equation/demo3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 16:49:47 GMT -->
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 241
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

    // line 247
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

    // line 692
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 693
        echo "    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\"";
        // line 694
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/libs/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/loader.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/blockui/jquery.blockUI.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/app.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            App.init();
        });
    </script>
    <script src=\"";
        // line 706
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/charts/chartist/chartist.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/calendar/pignose/moment.latest.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/calendar/pignose/pignose.calendar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/progressbar/progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 716
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/default-dashboard/default-custom.js"), "html", null, true);
        echo "\"></script>
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 716,  585 => 715,  581 => 714,  577 => 713,  573 => 712,  569 => 711,  565 => 710,  558 => 706,  549 => 700,  545 => 699,  541 => 698,  537 => 697,  533 => 696,  529 => 695,  525 => 694,  522 => 693,  512 => 692,  493 => 247,  474 => 241,  455 => 12,  442 => 719,  440 => 692,  411 => 666,  387 => 644,  381 => 639,  374 => 248,  371 => 247,  362 => 241,  325 => 207,  313 => 198,  301 => 189,  289 => 180,  277 => 171,  265 => 162,  254 => 153,  251 => 152,  240 => 143,  237 => 142,  212 => 120,  194 => 105,  179 => 93,  164 => 81,  149 => 69,  120 => 42,  115 => 41,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  75 => 16,  71 => 15,  65 => 13,  63 => 12,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from designreset.com/preview-equation/demo3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 16:49:43 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\">
    <title>CARNGO </title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{asset('back/assets/img/logo-4.png')}}\"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {% block css %}  {% endblock %}
    <link href=\"{{asset('back/assets/css/loader.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href=\"{{asset('back/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('back/assets/css/plugins.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL plugins/CUSTOM STYLES -->
    <link href=\"{{asset('back/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('back/plugins/charts/chartist/chartist.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('back/assets/css/default-dashboard/style.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('back/assets/css/s')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL plugins/CUSTOM STYLES -->
    <script src=\"https://kit.fontawesome.com/yourcode.js\" crossorigin=\"anonymous\"></script>
 
</head>
<body>
    <div id=\"eq-loader\">
      <div class=\"eq-loader-div\">
          <div class=\"eq-loading dual-loader mx-auto mb-5\"></div>
      </div>
    </div>

    <!--  BEGIN NAVBAR  -->
    <header class=\"desktop-nav header navbar fixed-top\">
        <div class=\"nav-logo mr-sm-5 ml-sm-4\">
            <a href=\"javascript:void(0);\" class=\"nav-link sidebarCollapse d-inline-block mr-sm-5\" data-placement=\"bottom\">
                <i class=\"flaticon-menu-line-3\"></i>
            </a>
            <a href=\"{{asset('index.html')}}\" class=\"\"> <img src=\"{{asset('back/assets/img/logo2.png')}}\" class=\"img-fluid\" alt=\"logo\"></a> {# lehne el logo mte3na ili mel fou9 nensewech n7otou link ta3 el page d'acceuil#}
        </div>
        <ul class=\"navbar-nav flex-row mr-auto\">
            <li class=\"nav-item ml-4 d-lg-none d-sm-block d-none\">
                <form class=\"form-inline search-full form-inline search animated-search\" role=\"search\">
                    <i class=\"flaticon-search-1 d-lg-none d-block\"></i>
                    <input type=\"text\" class=\"form-control search-form-control  ml-lg-auto\" placeholder=\"Search...\">
                </form>
            </li>
            <li class=\"nav-item d-lg-block d-none\">
                <form class=\"form-inline form-inline search animated-search\" role=\"search\">
                    <i class=\"flaticon-search-1 d-lg-none d-block\"></i>
                    <input type=\"text\" class=\"form-control search-form-control\" placeholder=\"Search here...\">
                </form>
            </li>
        </ul>

        <ul class=\"navbar-nav flex-row ml-lg-auto\">
            <li class=\"nav-item dropdown notification-dropdown ml-3 mr-lg-4 align-self-center\">
                <a href=\"javascript:void(0);\" class=\"nav-link dropdown-toggle\" id=\"notification-dropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"icon flaticon-bell-4\"></span><span class=\"badge badge-success\"> 15</span> <!--  lehne 7ot nb notification eli 3andou wa9tha  -->
                </a>
                <div class=\"dropdown-menu position-absolute eq-animated eq-fadeInUp\" aria-labelledby=\"notification-dropdown\">
                    <div class=\"notification-scroll\">
                        <div class=\"dropdown-item\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <div class=\"user-profile\">
                                        <img src=\"{{asset('back/assets/img/profile-7.jpg')}}\" alt=\"admin-profile\" class=\"img-fluid\">
                                    </div>
                                    <div class=\"media-body\">
                                        <span>Alan Green</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"dropdown-item\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <div class=\"user-profile\">
                                        <img src=\"{{asset('back/assets/img/profile-11.jpg')}}\" alt=\"admin-profile\" class=\"img-fluid\">
                                    </div>
                                    <div class=\"media-body\">
                                        <span>Irene Collins</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"dropdown-item\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <div class=\"user-profile\">
                                        <img src=\"{{asset('back/assets/img/profile-12.jpg')}}\" alt=\"admin-profile\" class=\"img-fluid\">
                                    </div>
                                    <div class=\"media-body\">
                                        <span>Sonia Shaw</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"dropdown-item\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <div class=\"user-profile\">
                                        <img src=\"{{asset('back/assets/img/profile-13.jpg')}}\" alt=\"admin-profile\" class=\"img-fluid\">
                                    </div>
                                    <div class=\"media-body\">
                                        <span>Xavier</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>

            <li class=\"nav-item dropdown user-profile-dropdown pl-4 pr-lg-0 pr-2 ml-lg-2 mr-lg-4  align-self-center\">
                <a href=\"javascript:void(0);\" class=\"nav-link dropdown-toggle user\">
                    <div class=\"user-profile d-lg-block d-none\">
                        <img src=\"{{asset('back/assets/img/profile-7.jpg\" alt=\"admin-profile')}}\" class=\"img-fluid\">
                    </div>
                    <i class=\"flaticon-user-7 d-lg-none d-block\"></i>
                </a>
            </li>
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class=\"main-container\" id=\"container\">
        <div class=\"overlay\"></div>
        <div class=\"ps-overlay\"></div>
        <div class=\"search-overlay\"></div>
        
        <!--  BEGIN MODERN  -->
        <div class=\"modernSidebar-nav header navbar\">
            <div class=\"\">
                <nav id=\"modernSidebar\">
                    <ul class=\"menu-categories pl-0 m-0\" id=\"topAccordion\">
                     
                        <li class=\"menu\">
                            <a href=\"{{path('app_utilisateur_index')}}\">   {# lehne 7otou les path mte3kom ili ma3neha yebda nom ta3 fichier .twig {{path('esmou')}} #}
                                <div class=\"\">
                                    <i class=\"flaticon-user-11\"></i>
                                    <span>Gestion Agents</span>
                                </div>
                            </a>
                          
                        </li>

                        <li class=\"menu\">
                            <a href=\"{{path('app_utilisateur_block')}}\">   {# lehne 7otou les path mte3kom ili ma3neha yebda nom ta3 fichier .twig {{path('esmou')}} #}
                                <div class=\"\">
                                    <i class=\"fa-solid fa-user-shield\"></i>
                                    <span>Gestion Clients</span>
                                </div>
                            </a>
                          
                        </li>
                    
                        <li class=\"menu\">
                            <a href=\"{{path('app_badge_index')}}\">
                                <div class=\"\">
                                    <i class=\"flaticon-cup\"></i>
                                    <span>Gestion Badges</span>
                                </div>
                            </a>
                          
                        </li>
                        <li class=\"menu\">
                            <a href=\"{{path('app_park_indexad')}}\">
                                <div class=\"\">
                                    <i class=\"flaticon-car-1\"></i>
                                    <span>Gestion des park</span>
                                </div>
                            </a>
                          
                        </li>
                        <li class=\"menu\">
                            <a href=\"{{path('app_itineraire_index')}}\">
                                <div class=\"\">
                                    <i class=\"flaticon-map-1\"></i>
                                    <span>Gestion des itineraires</span>
                                </div>
                            </a>
                          
                        </li>
                        <li class=\"menu\">
                            <a href=\"{{path('app_vehicule_index')}}\">
                                <div class=\"\">
                                    <i class=\"flaticon-car\"></i>
                                    <span>Gestion Vehicule</span>
                                </div>
                            </a>
                          
                        </li>
                        <li class=\"menu\">
                            <a href=\"{{path('app_reservation_index')}}\">
                                <div class=\"\">
                                    <i class=\"flaticon-notes-1\"></i>
                                    <span>Gestion Reservation</span>
                                </div>
                            </a>
                          
                        </li>
                        <li class=\"menu\">
                            <a href=\"{{path('app_reclamation_index')}}\">
                                <div class=\"\">
                                    <i class=\"flaticon-danger-line\"></i>
                                    <span>Gestion Reclamation</span>
                                </div>
                            </a>
                          
                        </li>
                    


  

                        <li class=\"menu\">
                            <a href=\"\" class=\"dropdown-toggle collapsed\">
                                <div class=\"\">
                                    <i class=\"flaticon-mail-19\"></i>
                                    <span>ChatBox</span>
                                </div>
                            </a>
                    
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!--  END MODERN  -->
        
        <!--  BEGIN CONTENT PART  -->
        <div id=\"content\" class=\"main-content\">
            <div class=\"container\">
                <div class=\"page-header\">
                    <div class=\"page-title\">
                        <h3> {% block page %}    {% endblock %} </h3> <!--  esem el page met3ek  -->
                    </div>
                </div>


                
                {% block body%}    {% endblock %}                            {# block body lehne khalit les tableau bech tajmou ta3mlou copy paste ba3ed ou tbadlou fil donner ta3 twig   #}
 
               

               

                {# <div class=\"row\">
                                                               
                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing\">
                        <div class=\"statbox widget box\">
                            <div class=\"widget-header \">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                        
                                    </div>                 
                                </div>
                            </div>

                            <div class=\"widget-content-area \">

                                <div class=\"table-responsive new-products\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th class=\"form-check-column text-center\">
                                                    <label  for=\"checkAll\" class=\"new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" id=\"checkAll\" class=\"new-control-input\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </th>
                                                <th>Product</th>
                                                <th>Type</th>
                                                <th>SKU</th>
                                                <th class=\"text-center\">Quantity</th>
                                                <th>Image</th>
                                                <th class=\"text-center\">Price</th>
                                                <th class=\"text-center\">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class=\"form-check-column text-center\">
                                                    <label class=\"new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" class=\"new-control-input chkbox\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </td>
                                                <td>Camera</td>
                                                <td><span class=\"badge badge-info badge-pill\">Simple</span></td>
                                                <td>#0001</td>
                                                <td class=\"text-center\">1</td>
                                                <td>
                                                    <img src=\"{{asset('back/assets/img/large-img-7.jpg')}}\" class=\"img-fluid\" alt=\"img-1\" style=\"border-color: #3862f5;\">
                                                </td>
                                                <td class=\"text-center\">\$848.95</td>
                                                <td class=\"text-center\">
                                                    <div class=\"toolbar\">
                                                        <div class=\"toolbar-toggle\">...</div>
                                                        <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"View\"><i class=\"flaticon-view-3\"></i></a>
                                                            </li>
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"Edit\"><i class=\"flaticon-edit-5\"></i></a>
                                                            </li>
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"Remove\"><i class=\"flaticon-delete-6\"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class=\"form-check-column text-center\">
                                                    <label class=\"new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" class=\"new-control-input chkbox\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </td>
                                                <td>Mobile</td>
                                                <td><span class=\"badge badge-info badge-pill\">Simple</span></td>
                                                <td>#0002</td>
                                                <td class=\"text-center\">1</td>
                                                <td>
                                                    <img src=\"{{asset('back/assets/img/large-img-4.jpg')}}\" class=\"img-fluid\" alt=\"img-1\" style=\"border-color: #07e0c4;\">
                                                </td>
                                                <td class=\"text-center\">\$529.95</td>
                                                <td class=\"text-center\">
                                                    <div class=\"toolbar\">
                                                        <div class=\"toolbar-toggle\">...</div>
                                                        <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"View\"><i class=\"flaticon-view-3\"></i></a>
                                                            </li>
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"Edit\"><i class=\"flaticon-edit-5\"></i></a>
                                                            </li>
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"Remove\"><i class=\"flaticon-delete-6\"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class=\"form-check-column text-center\">
                                                    <label class=\"new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" class=\"new-control-input chkbox\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </td>
                                                <td>Windows 10</td>
                                                <td><span class=\"badge badge-success badge-pill\">Digital</span></td>
                                                <td>#0003</td>
                                                <td class=\"text-center\">3</td>
                                                <td>
                                                    <img src=\"{{asset('back/assets/img/large-img-1.png')}}\" class=\"img-fluid\" alt=\"img-1\" style=\"border-color: #00b1f4;\">
                                                </td>
                                                <td class=\"text-center\">\$1584.00</td>
                                                <td class=\"text-center\">
                                                    <div class=\"toolbar\">
                                                        <div class=\"toolbar-toggle\">...</div>
                                                        <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"View\"><i class=\"flaticon-view-3\"></i></a>
                                                            </li>
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"Edit\"><i class=\"flaticon-edit-5\"></i></a>
                                                            </li>
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"Remove\"><i class=\"flaticon-delete-6\"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class=\"form-check-column text-center\">
                                                    <label class=\"new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" class=\"new-control-input chkbox\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </td>
                                                <td>Watch</td>
                                                <td><span class=\"badge badge-info badge-pill\">Simple</span></td>
                                                <td>#0004</td>
                                                <td class=\"text-center\">5</td>
                                                <td>
                                                    <img src=\"{{asset('back/assets/img/large-img-3.jpg')}}\" class=\"img-fluid\" alt=\"img-1\" style=\"border-color: #f8538d;\">
                                                </td>
                                                <td class=\"text-center\">\$595.99</td>
                                                <td class=\"text-center\">
                                                    <div class=\"toolbar\">
                                                        <div class=\"toolbar-toggle\">...</div>
                                                        <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"View\"><i class=\"flaticon-view-3\"></i></a>
                                                            </li>
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"Edit\"><i class=\"flaticon-edit-5\"></i></a>
                                                            </li>
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"Remove\"><i class=\"flaticon-delete-6\"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class=\"form-check-column text-center\">
                                                    <label class=\"new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" class=\"new-control-input chkbox\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </td>
                                                <td>Drone</td>
                                                <td><span class=\"badge badge-info badge-pill\">Simple</span></td>
                                                <td>#0005</td>
                                                <td class=\"text-center\">1</td>                                                <td>
                                                    <img src=\"{{asset('back/assets/img/large-img-5.jpg')}}\" class=\"img-fluid\" alt=\"img-1\" style=\"border-color: #ffbb44;\">
                                                </td>
                                                <td class=\"text-center\">\$58.00</td>
                                                <td class=\"text-center\">
                                                    <div class=\"toolbar\">
                                                        <div class=\"toolbar-toggle\">...</div>
                                                        <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"View\"><i class=\"flaticon-view-3\"></i></a>
                                                            </li>
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"Edit\"><i class=\"flaticon-edit-5\"></i></a>
                                                            </li>
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"Remove\"><i class=\"flaticon-delete-6\"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class=\"form-check-column text-center\">
                                                    <label class=\"new-control new-checkbox new-checkbox-rounded checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" class=\"new-control-input chkbox\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </td>
                                                <td>Sunglasses</td>
                                                <td><span class=\"badge badge-secondary badge-pill\">Bundled</span></td>
                                                <td>#0006</td>
                                                <td class=\"text-center\">6</td>
                                                <td>
                                                    <img src=\"{{asset('back/assets/img/large-img-2.jpg')}}\" class=\"img-fluid\" alt=\"img-1\" style=\"border-color: #25d5e4;\">
                                                </td>
                                                <td class=\"text-center\">\$123.00</td>
                                                <td class=\"text-center\">
                                                    <div class=\"toolbar\">
                                                        <div class=\"toolbar-toggle\">...</div>
                                                        <ul class=\"toolbar-dropdown animated fadeInUp table-controls list-inline\">
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"View\"><i class=\"flaticon-view-3\"></i></a>
                                                            </li>
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"Edit\"><i class=\"flaticon-edit-5\"></i></a>
                                                            </li>
                                                            <li class=\"list-inline-item\"><a href=\"javascript:void(0);\" class=\"bs-tooltip\" data-original-title=\"Remove\"><i class=\"flaticon-delete-6\"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"pagination-section\">
                                    <ul class=\"pagination pagination-style-1 pagination-rounded justify-content-end mt-3 mb-3\">
                                        <li><a href=\"javascript:void(0);\">«</a></li>
                                        <li><a href=\"javascript:void(0);\">1</a></li>
                                        <li><a href=\"javascript:void(0);\">2</a></li>
                                        <li><a href=\"javascript:void(0);\">3</a></li>
                                        <li><a href=\"javascript:void(0);\">4</a></li>
                                        <li><a href=\"javascript:void(0);\">5</a></li>
                                        <li><a href=\"javascript:void(0);\">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              


                <div class=\"row\">
                    <div class=\"col-xl-8 col-lg-8 col-md-8 col-12 layout-spacing\">
                        <div class=\"statbox widget box box-shadow latest-invoice \">
                            <div class=\"widget-header \">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-md-12 col-sm-12 col-12\">
                                        <h4>Latest Invoice</h4>
                                    </div>                 
                                </div>
                            </div>
                            <div class=\"widget-content-area \">
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th class=\"form-check-column text-center\">
                                                    <label for=\"invoiceAll\" class=\"new-control new-checkbox checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" id=\"invoiceAll\" class=\"new-control-input\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </th>
                                                <th>Product</th>
                                                <th>Invoice no.</th>
                                                <th>Date</th>
                                                <th class=\"text-center\">Amount</th>
                                                <th class=\"text-center\">Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class=\"form-check-column text-center\">
                                                    <label class=\"new-control new-checkbox checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" class=\"new-control-input invoicechk\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </td>
                                                <td>Camera</td>
                                                <td>#0001</td>
                                                <td>16 Jan</td>
                                                <td class=\"align-center\">\$15,202</td>
                                                <td  class=\"text-center\">
                                                    <span class=\"badge badge-pills outline-badge-secondary\">In Progress</span>
                                                </td>
                                                <td>
                                                    <i class=\"flaticon-view-1 bs-tooltip\" data-placement=\"top\" data-original-title=\"View\"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class=\"form-check-column text-center\">
                                                    <label class=\"new-control new-checkbox checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" class=\"new-control-input invoicechk\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </td>
                                                <td>Iphone</td>
                                                <td>#0002</td>
                                                <td>16 Jan</td>
                                                <td class=\"align-center\">\$650</td>
                                                <td  class=\"text-center\">
                                                    <span class=\"badge badge-pills outline-badge-success\">Approved</span>
                                                </td>
                                                <td>
                                                    <i class=\"flaticon-view-1 bs-tooltip\" data-placement=\"top\" data-original-title=\"View\"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class=\"form-check-column text-center\">
                                                    <label class=\"new-control new-checkbox checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" class=\"new-control-input invoicechk\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </td>
                                                <td>Headphone</td>
                                                <td>#0003</td>
                                                <td>16 Jan</td>
                                                <td class=\"align-center\">\$25</td>
                                                <td  class=\"text-center\">
                                                    <span class=\"badge badge-pills outline-badge-warning\">Pending</span>
                                                </td>
                                                <td>
                                                    <i class=\"flaticon-view-1 bs-tooltip\" data-placement=\"top\" data-original-title=\"View\"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class=\"form-check-column text-center\">
                                                    <label class=\"new-control new-checkbox checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" class=\"new-control-input invoicechk\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </td>
                                                <td>Speakers</td>
                                                <td>#0004</td>
                                                <td>16 Jan</td>
                                                <td class=\"align-center\">\$100</td>
                                                <td  class=\"text-center\">
                                                    <span class=\"badge badge-pills outline-badge-secondary\">In Progress</span>
                                                </td>
                                                <td>
                                                    <i class=\"flaticon-view-1 bs-tooltip\" data-placement=\"top\" data-original-title=\"View\"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class=\"form-check-column text-center\">
                                                    <label class=\"new-control new-checkbox checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" class=\"new-control-input invoicechk\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </td>
                                                <td>Watch</td>
                                                <td>#0005</td>
                                                <td>16 Jan</td>
                                                <td class=\"align-center\">\$85</td>
                                                <td  class=\"text-center\">
                                                    <span class=\"badge badge-pills outline-badge-success\">Approved</span>
                                                </td>
                                                <td>
                                                    <i class=\"flaticon-view-1 bs-tooltip\" data-placement=\"top\" data-original-title=\"View\"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class=\"form-check-column text-center\">
                                                    <label class=\"new-control new-checkbox checkbox-primary pb-2\">
                                                      <input type=\"checkbox\" class=\"new-control-input invoicechk\">
                                                      <span class=\"new-control-indicator mt-2\"></span><span class=\"invisible\">s</span>
                                                    </label>
                                                </td>
                                                <td>Sunglasses</td>
                                                <td>#0006</td>
                                                <td>16 Jan</td>
                                                <td class=\"align-center\">\$19</td>
                                                <td  class=\"text-center\">
                                                    <span class=\"badge badge-pills outline-badge-danger\">Cancelled</span>
                                                </td>
                                                <td>
                                                    <i class=\"flaticon-view-1 bs-tooltip\" data-placement=\"top\" data-original-title=\"View\"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div> #}

            

               
                {# </div> #}

            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN FOOTER  -->
    <footer class=\"footer-section theme-footer\">

        <div class=\"footer-section-1  sidebar-theme\">
            
        </div>

    </footer>
    <!--  END FOOTER  -->

    <!--  BEGIN PROFILE SIDEBAR  -->
    <aside class=\"profile-sidebar text-center\">
        <div class=\"profile-content profile-content-scroll\">
            <div class=\"usr-profile\">
                <img src=\"{{asset('back/assets/img/profile-7.jpg')}}\" alt=\"admin-profile\" class=\"img-fluid\">
            </div>
            <p class=\"user-name mt-4 mb-4\">Vincent Carpenter</p> <!--  esem el user ta3ek -->
            <div class=\"\">
                <div class=\"accordion\" id=\"user-stats\">
                    <div class=\"card\">

                        <div id=\"user-status\" class=\"collapse show\" aria-labelledby=\"status\" data-parent=\"#user-stats\">
                            <div class=\"card-body text-left\">
                                <ul class=\"list-unstyled pb-4\">
                                    <li class=\"status-online\"><a href=\"javascript:void(0);\">Online</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"user-links text-left\">
                <ul class=\"list-unstyled\">
                    <li><a href=\"\"><i class=\"flaticon-user-11\"></i> My Profile</a></li>
                    <li><a href=\"\"><i class=\"flaticon-power-off\"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </aside>
    <!--  BEGIN PROFILE SIDEBAR  -->
{% block javascript %}
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\"{{asset('back/assets/js/libs/jquery-3.1.1.min.js')}}\"></script>
    <script src=\"{{asset('back/assets/js/loader.js')}}\"></script>
    <script src=\"{{asset('back/bootstrap/js/popper.min.js')}}\"></script>
    <script src=\"{{asset('back/bootstrap/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('back/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}\"></script>
    <script src=\"{{asset('back/plugins/blockui/jquery.blockUI.min.js')}}\"></script>
    <script src=\"{{asset('back/assets/js/app.js')}}\"></script>
    <script>
        \$(document).ready(function() {
            App.init();
        });
    </script>
    <script src=\"{{asset('back/assets/js/custom.js')}}\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src=\"{{asset('back/plugins/charts/chartist/chartist.js')}}\"></script>
    <script src=\"{{asset('back/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js')}}\"></script>
    <script src=\"{{asset('back/plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js')}}\"></script>
    <script src=\"{{asset('back/plugins/calendar/pignose/moment.latest.min.js')}}\"></script>
    <script src=\"{{asset('back/plugins/calendar/pignose/pignose.calendar.js')}}\"></script>
    <script src=\"{{asset('back/plugins/progressbar/progressbar.min.js')}}\"></script>
    <script src=\"{{asset('back/assets/js/default-dashboard/default-custom.js')}}\"></script>
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    {% endblock %}
</body>

<!-- Mirrored from designreset.com/preview-equation/demo3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 16:49:47 GMT -->
</html>", "back.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\back.html.twig");
    }
}
