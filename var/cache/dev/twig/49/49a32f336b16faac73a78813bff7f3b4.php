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

/* search_qr/user_data.pdf.twig */
class __TwigTemplate_56c29a5d6e0bce4a956fbd634647af7b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search_qr/user_data.pdf.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search_qr/user_data.pdf.twig"));

        // line 1
        echo "<h1>User Data</h1>
<p>CIN: ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "getCin", [], "method", false, false, false, 2), "html", null, true);
        echo "</p>
<p>Name: ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "getNom", [], "method", false, false, false, 3), "html", null, true);
        echo "</p>
<p>Email: ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "getPrenom", [], "method", false, false, false, 4), "html", null, true);
        echo "</p>
<p>Email: ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "getEmail", [], "method", false, false, false, 5), "html", null, true);
        echo "</p>
<p>Email: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "getNbpoint", [], "method", false, false, false, 6), "html", null, true);
        echo "</p>
<p>Email: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "getPermis", [], "method", false, false, false, 7), "html", null, true);
        echo "</p>
<p>QR Code:</p>
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" alt=\"QR Code\" width=\"150\" height=\"150\" />
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "search_qr/user_data.pdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>User Data</h1>
<p>CIN: {{ user.getCin() }}</p>
<p>Name: {{ user.getNom() }}</p>
<p>Email: {{ user.getPrenom() }}</p>
<p>Email: {{ user.getEmail() }}</p>
<p>Email: {{ user.getNbpoint() }}</p>
<p>Email: {{ user.getPermis() }}</p>
<p>QR Code:</p>
<img src=\"{{ qrCode }}\" alt=\"QR Code\" width=\"150\" height=\"150\" />
", "search_qr/user_data.pdf.twig", "C:\\Users\\mhcab\\OneDrive\\Bureau\\Web-Application\\templates\\search_qr\\user_data.pdf.twig");
    }
}
