<?php

<<<<<<<< Updated upstream:var/cache/dev/ContainerS5qyPfw/get_ServiceLocator__4ytywService.php
namespace ContainerS5qyPfw;
========
namespace ContainerXmUnInr;
>>>>>>>> Stashed changes:var/cache/dev/ContainerXmUnInr/get_ServiceLocator_TUog7FService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__4ytywService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.._4ytyw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.._4ytyw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'park' => ['privates', '.errored..service_locator.._4ytyw.App\\Entity\\Park', NULL, 'Cannot autowire service ".service_locator.._4ytyw": it references class "App\\Entity\\Park" but no such service exists.'],
        ], [
            'park' => 'App\\Entity\\Park',
        ]);
    }
}
