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

/* badges/AfficherBadge.html.twig */
class __TwigTemplate_fb93bb456407142089bb012d0ad6820e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "badges/AfficherBadge.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "badges/AfficherBadge.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "badges/AfficherBadge.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2>Nous sommes fiers de vous présenter notre programme de badges exclusifs.
Avec chaque location, vous pouvez gagner des points et des badges pour atteindre différents niveaux.
Découvrez nos badges uniques et les avantages qu'ils offrent.</h2>
</br>
<div style=\"display: flex; justify-content: space-around;\">
  <div>
    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bronze.jpg"), "html", null, true);
        echo "\" alt=\"Badge 1\" width=\"200\" height=\"200\">
    <h3>Bronze</h3>
    <p>Attribué aux noveaux utilisateurs </br>qui sont prêt à explorer nos services</p>
    <p>*Points nécessaires : aucun </p>
  </div>
  <div>
    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/silver.jpg"), "html", null, true);
        echo "\" alt=\"Badge 1\" width=\"200\" height=\"200\">
    <h3>Silver</h3>
    <p>Attribué aux utilisateurs réguliers</br> ayant déjà profité de nos services.</p>
    <p>*Points nécessaires : 100</p>
  </div>
  <div>
    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gold.jpg"), "html", null, true);
        echo "\" alt=\"Badge 1\" width=\"200\" height=\"200\">
    <h3>Gold</h3>
    <p>Attribué aux utilisateurs fidèles ayant </br>loué plusieurs véhicules avec succès.</p>
    <p>*Points nécessaires : 200</p>
  </div>
</div>
</br>
<div style=\"display: flex; justify-content: space-around;\">
  <div>
    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/platinum.png"), "html", null, true);
        echo "\" alt=\"Badge 1\" width=\"200\" height=\"200\">
    <h3>Platinium</h3>
    <p>DAttribué à nos clients experts ayant </br>une connaissances approfondie </br>de nos servies. </p>
    <p>*Points nécessaires : 400</p>
  </div>
  <div>
    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/diamond.jpg"), "html", null, true);
        echo "\" alt=\"Badge 1\" width=\"200\" height=\"200\">
    <h3>Diamond</h3>
    <p>Attribué aux plus fidèles des clients, </br>les membres VIP !</p>
    <p>*Points nécessaires : 500</p>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "badges/AfficherBadge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 37,  106 => 31,  94 => 22,  85 => 16,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<h2>Nous sommes fiers de vous présenter notre programme de badges exclusifs.
Avec chaque location, vous pouvez gagner des points et des badges pour atteindre différents niveaux.
Découvrez nos badges uniques et les avantages qu'ils offrent.</h2>
</br>
<div style=\"display: flex; justify-content: space-around;\">
  <div>
    <img src=\"{{asset('assets/images/bronze.jpg')}}\" alt=\"Badge 1\" width=\"200\" height=\"200\">
    <h3>Bronze</h3>
    <p>Attribué aux noveaux utilisateurs </br>qui sont prêt à explorer nos services</p>
    <p>*Points nécessaires : aucun </p>
  </div>
  <div>
    <img src=\"{{asset('assets/images/silver.jpg')}}\" alt=\"Badge 1\" width=\"200\" height=\"200\">
    <h3>Silver</h3>
    <p>Attribué aux utilisateurs réguliers</br> ayant déjà profité de nos services.</p>
    <p>*Points nécessaires : 100</p>
  </div>
  <div>
    <img src=\"{{asset('assets/images/gold.jpg')}}\" alt=\"Badge 1\" width=\"200\" height=\"200\">
    <h3>Gold</h3>
    <p>Attribué aux utilisateurs fidèles ayant </br>loué plusieurs véhicules avec succès.</p>
    <p>*Points nécessaires : 200</p>
  </div>
</div>
</br>
<div style=\"display: flex; justify-content: space-around;\">
  <div>
    <img src=\"{{asset('assets/images/platinum.png')}}\" alt=\"Badge 1\" width=\"200\" height=\"200\">
    <h3>Platinium</h3>
    <p>DAttribué à nos clients experts ayant </br>une connaissances approfondie </br>de nos servies. </p>
    <p>*Points nécessaires : 400</p>
  </div>
  <div>
    <img src=\"{{asset('assets/images/diamond.jpg')}}\" alt=\"Badge 1\" width=\"200\" height=\"200\">
    <h3>Diamond</h3>
    <p>Attribué aux plus fidèles des clients, </br>les membres VIP !</p>
    <p>*Points nécessaires : 500</p>
  </div>
</div>

{% endblock %}", "badges/AfficherBadge.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\Web-Application\\templates\\badges\\AfficherBadge.html.twig");
    }
}
