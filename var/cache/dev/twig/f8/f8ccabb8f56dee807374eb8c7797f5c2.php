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

/* rating/new.html.twig */
class __TwigTemplate_f2376158efecc64e7a28e3850d5a1c51 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rating/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rating/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rating/new.html.twig", 1);
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

        echo "New Rating";
        
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
        echo "    <h1>Create new Rating</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "rating/_form.html.twig");
        echo "
    <i class=\"star\" data-note=\"1\">&#9733;</i>
    <i class=\"star\" data-note=\"2\">&#9733;</i>
    <i class=\"star\" data-note=\"3\">&#9733;</i>
    <i class=\"star\" data-note=\"4\">&#9733;</i>
    <i class=\"star\" data-note=\"5\">&#9733;</i>
    <style>
    .star {
    font-size: 50px;
    color: gray;
    cursor: pointer;
}

.star.hover, .star.active {
    color: yellow;
}
    </style>
    <script>
        const stars = document.querySelectorAll('.star');
        let check = false;
        stars.forEach(star => {
            star.addEventListener('mouseover', selectStars);
            star.addEventListener('mouseleave', unselectStars);
            star.addEventListener('click', activeSelect);
        })

        function selectStars(e) {
            const data = e.target;
            const etoiles = priviousSiblings(data);
            if (!check) {
                etoiles.forEach(etoile => {
                    etoile.classList.add('hover');
                })
            }

        }

        function unselectStars(e) {
            const data = e.target;
            const etoiles = priviousSiblings(data);
            if (!check) {
                etoiles.forEach(etoile => {
                    etoile.classList.remove('hover');
                })
            }
        }

        function activeSelect(e) {
       if (!check) {
        check = true;
        const ratingField = document.getElementById('nbpoints');
        const selectedNote = e.target.dataset.note;
        ratingField.value = selectedNote;
        document.querySelector('.note').innerHTML = 'Note ' + selectedNote;
        const etoiles = priviousSiblings(e.target);
        etoiles.forEach(etoile => {
            etoile.classList.add('active');
        })
       }
      }

        function priviousSiblings(data) {
            let values = [data];
            while (data = data.previousSibling) {
                if (data.nodeName === 'I') {
                    values.push(data);
                }
            }
            return values;
        }
    </script>

    <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rating_index");
        echo "\">back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "rating/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 80,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Rating{% endblock %}

{% block body %}
    <h1>Create new Rating</h1>

    {{ include('rating/_form.html.twig') }}
    <i class=\"star\" data-note=\"1\">&#9733;</i>
    <i class=\"star\" data-note=\"2\">&#9733;</i>
    <i class=\"star\" data-note=\"3\">&#9733;</i>
    <i class=\"star\" data-note=\"4\">&#9733;</i>
    <i class=\"star\" data-note=\"5\">&#9733;</i>
    <style>
    .star {
    font-size: 50px;
    color: gray;
    cursor: pointer;
}

.star.hover, .star.active {
    color: yellow;
}
    </style>
    <script>
        const stars = document.querySelectorAll('.star');
        let check = false;
        stars.forEach(star => {
            star.addEventListener('mouseover', selectStars);
            star.addEventListener('mouseleave', unselectStars);
            star.addEventListener('click', activeSelect);
        })

        function selectStars(e) {
            const data = e.target;
            const etoiles = priviousSiblings(data);
            if (!check) {
                etoiles.forEach(etoile => {
                    etoile.classList.add('hover');
                })
            }

        }

        function unselectStars(e) {
            const data = e.target;
            const etoiles = priviousSiblings(data);
            if (!check) {
                etoiles.forEach(etoile => {
                    etoile.classList.remove('hover');
                })
            }
        }

        function activeSelect(e) {
       if (!check) {
        check = true;
        const ratingField = document.getElementById('nbpoints');
        const selectedNote = e.target.dataset.note;
        ratingField.value = selectedNote;
        document.querySelector('.note').innerHTML = 'Note ' + selectedNote;
        const etoiles = priviousSiblings(e.target);
        etoiles.forEach(etoile => {
            etoile.classList.add('active');
        })
       }
      }

        function priviousSiblings(data) {
            let values = [data];
            while (data = data.previousSibling) {
                if (data.nodeName === 'I') {
                    values.push(data);
                }
            }
            return values;
        }
    </script>

    <a href=\"{{ path('app_rating_index') }}\">back to list</a>
{% endblock %}
", "rating/new.html.twig", "C:\\Users\\ychaa\\OneDrive\\Documents\\GitHub\\Web-Application\\templates\\rating\\new.html.twig");
    }
}
