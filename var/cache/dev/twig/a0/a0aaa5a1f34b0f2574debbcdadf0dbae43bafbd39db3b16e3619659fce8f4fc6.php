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

/* reponse/msg.html.twig */
class __TwigTemplate_01bfeac1ada3eb1d0eadd92f07d6b3910d46fcff1c7fefef57f35124bdd64ea9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/msg.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/msg.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reponse/msg.html.twig", 1);
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

        echo "Edit Vehicule";
        
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
        echo "<div class=\"col-md-12\">
<div class=\"col-xl-3 ml-auto col-lg-12 col-md-12 col-sm-12 mb-4\">
                                    <nav class=\"mail-pagination\" aria-label=\"Page navigation example\">
                                        <ul class=\"pagination\">
                                            <li class=\"page-item non-hover\">
                                                <a class=\"page-link\" href=\"#\">1-50 of 9</a>
                                            </li>
                                            <li class=\"page-item\">
                                                <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                                                    <span aria-hidden=\"true\">&laquo;</span>
                                                    <span class=\"sr-only\">Previous</span>
                                                </a>
                                            </li>
                                            <li class=\"page-item\">
                                                <a class=\"page-link br-0\" href=\"#\" aria-label=\"Next\">
                                                    <span aria-hidden=\"true\">&raquo;</span>
                                                    <span class=\"sr-only\">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                    <div class=\"table-responsive mb-5\">
                                        <table class=\"table mb-0\">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class=\"new-control new-checkbox checkbox-primary mr-0\">
                                                          <input type=\"checkbox\" class=\"new-control-input inbox-chkbox\">
                                                          <span class=\"new-control-indicator\"></span><span style=\"visibility:hidden\">c</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class=\"custom-control custom-checkbox mark-star\">
                                                          <input type=\"checkbox\" class=\"custom-control-input\" id=\"mark-star-1\">
                                                          <label class=\"custom-control-label\" for=\"mark-star-1\"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href=\"apps_mailbox_read.html\" class=\"mail-link\">
                                                            <img alt=\"admin-profile\" src=\"assets/img/profile-2.jpg\" class=\"\">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href=\"apps_mailbox_read.html\" class=\"mail-link\">
                                                        <span class=\"message-head message-new\">Downloaded npm : Run and Install - </span>
                                                        <span class=\"message-body\">File executed<span class=\"message-dot message-new\">...</span></span></a>
                                                    </td>
                                                    <td>
                                                        <a href=\"apps_mailbox_read.html\" class=\"mail-link\"><span>7:54 PM</span></a>
                                                    </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reponse/msg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Vehicule{% endblock %}

{% block body %}
<div class=\"col-md-12\">
<div class=\"col-xl-3 ml-auto col-lg-12 col-md-12 col-sm-12 mb-4\">
                                    <nav class=\"mail-pagination\" aria-label=\"Page navigation example\">
                                        <ul class=\"pagination\">
                                            <li class=\"page-item non-hover\">
                                                <a class=\"page-link\" href=\"#\">1-50 of 9</a>
                                            </li>
                                            <li class=\"page-item\">
                                                <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                                                    <span aria-hidden=\"true\">&laquo;</span>
                                                    <span class=\"sr-only\">Previous</span>
                                                </a>
                                            </li>
                                            <li class=\"page-item\">
                                                <a class=\"page-link br-0\" href=\"#\" aria-label=\"Next\">
                                                    <span aria-hidden=\"true\">&raquo;</span>
                                                    <span class=\"sr-only\">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                    <div class=\"table-responsive mb-5\">
                                        <table class=\"table mb-0\">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class=\"new-control new-checkbox checkbox-primary mr-0\">
                                                          <input type=\"checkbox\" class=\"new-control-input inbox-chkbox\">
                                                          <span class=\"new-control-indicator\"></span><span style=\"visibility:hidden\">c</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class=\"custom-control custom-checkbox mark-star\">
                                                          <input type=\"checkbox\" class=\"custom-control-input\" id=\"mark-star-1\">
                                                          <label class=\"custom-control-label\" for=\"mark-star-1\"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href=\"apps_mailbox_read.html\" class=\"mail-link\">
                                                            <img alt=\"admin-profile\" src=\"assets/img/profile-2.jpg\" class=\"\">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href=\"apps_mailbox_read.html\" class=\"mail-link\">
                                                        <span class=\"message-head message-new\">Downloaded npm : Run and Install - </span>
                                                        <span class=\"message-body\">File executed<span class=\"message-dot message-new\">...</span></span></a>
                                                    </td>
                                                    <td>
                                                        <a href=\"apps_mailbox_read.html\" class=\"mail-link\"><span>7:54 PM</span></a>
                                                    </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                        {% endblock %}", "reponse/msg.html.twig", "C:\\Users\\Rania2\\Documents\\Web-Application\\templates\\reponse\\msg.html.twig");
    }
}
