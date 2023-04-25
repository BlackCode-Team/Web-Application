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

/* itineraire/route.html.twig */
class __TwigTemplate_93ffeb4d7de679cd64f6c60f30ba3ea6 extends \Twig\Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/route.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraire/route.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "itineraire/route.html.twig", 1);
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
        echo "    <h2><b>Geolocalisation du Reservation entre <b>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 4, $this->source); })()), "pointdepart", [], "any", false, false, false, 4)), "html", null, true);
        echo "</b> et <b>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itineraire"]) || array_key_exists("itineraire", $context) ? $context["itineraire"] : (function () { throw new RuntimeError('Variable "itineraire" does not exist.', 4, $this->source); })()), "pointarrivee", [], "any", false, false, false, 4)), "html", null, true);
        echo " </b></h2>
    <div id=\"map\" style=\"height: 500px\"></div>

    <script>
        function initMap() {
            var startLat = ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["startLat"]) || array_key_exists("startLat", $context) ? $context["startLat"] : (function () { throw new RuntimeError('Variable "startLat" does not exist.', 9, $this->source); })()), "html", null, true);
        echo ";
            var startLng = ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["startLng"]) || array_key_exists("startLng", $context) ? $context["startLng"] : (function () { throw new RuntimeError('Variable "startLng" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ";
            var endLat = ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["endLat"]) || array_key_exists("endLat", $context) ? $context["endLat"] : (function () { throw new RuntimeError('Variable "endLat" does not exist.', 11, $this->source); })()), "html", null, true);
        echo ";
            var endLng = ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["endLng"]) || array_key_exists("endLng", $context) ? $context["endLng"] : (function () { throw new RuntimeError('Variable "endLng" does not exist.', 12, $this->source); })()), "html", null, true);
        echo ";

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: {lat: startLat, lng: startLng},
            });

            var startMarker = new google.maps.Marker({
                position: {lat: startLat, lng: startLng},
                map: map,
                title: 'Start'
            });

            var endMarker = new google.maps.Marker({
                position: {lat: endLat, lng: endLng},
                map: map,
                title: 'End'
            });

            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer({
                polylineOptions: {
                    strokeColor: \"#FF0000\",
                    strokeWeight: 4
                }
            });

            directionsRenderer.setMap(map);

            var request = {
                origin: new google.maps.LatLng(startLat, startLng),
                destination: new google.maps.LatLng(endLat, endLng),
                travelMode: google.maps.TravelMode.DRIVING
            };

            directionsService.route(request, function(result, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsRenderer.setDirections(result);
                }
            });
        }
    </script>

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD3RpFvEYkmeZF7Wj7CM5j05TtDizkGpe0&callback=initMap\" async defer></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "itineraire/route.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 12,  87 => 11,  83 => 10,  79 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block body %}
    <h2><b>Geolocalisation du Reservation entre <b>{{ itineraire.pointdepart | upper}}</b> et <b>{{ itineraire.pointarrivee | upper}} </b></h2>
    <div id=\"map\" style=\"height: 500px\"></div>

    <script>
        function initMap() {
            var startLat = {{ startLat }};
            var startLng = {{ startLng }};
            var endLat = {{ endLat }};
            var endLng = {{ endLng }};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: {lat: startLat, lng: startLng},
            });

            var startMarker = new google.maps.Marker({
                position: {lat: startLat, lng: startLng},
                map: map,
                title: 'Start'
            });

            var endMarker = new google.maps.Marker({
                position: {lat: endLat, lng: endLng},
                map: map,
                title: 'End'
            });

            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer({
                polylineOptions: {
                    strokeColor: \"#FF0000\",
                    strokeWeight: 4
                }
            });

            directionsRenderer.setMap(map);

            var request = {
                origin: new google.maps.LatLng(startLat, startLng),
                destination: new google.maps.LatLng(endLat, endLng),
                travelMode: google.maps.TravelMode.DRIVING
            };

            directionsService.route(request, function(result, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsRenderer.setDirections(result);
                }
            });
        }
    </script>

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD3RpFvEYkmeZF7Wj7CM5j05TtDizkGpe0&callback=initMap\" async defer></script>
{% endblock %}
", "itineraire/route.html.twig", "C:\\Users\\Jokser\\Documents\\GitHub\\Web-Application\\Web-Application\\templates\\itineraire\\route.html.twig");
    }
}
