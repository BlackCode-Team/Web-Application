<?php

<<<<<<<< Updated upstream:var/cache/dev/ContainerQnMZChq/getItineraireControllerService.php
namespace ContainerQnMZChq;
========
namespace ContainerEW8Jxv5;
>>>>>>>> Stashed changes:var/cache/dev/ContainerEW8Jxv5/getItineraireControllerService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getItineraireControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ItineraireController' shared autowired service.
     *
     * @return \App\Controller\ItineraireController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ItineraireController.php';

        $container->services['App\\Controller\\ItineraireController'] = $instance = new \App\Controller\ItineraireController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\ItineraireController', $container));

        return $instance;
    }
}
