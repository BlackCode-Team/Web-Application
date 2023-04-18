<?php

namespace ContainerFOVTQxc;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DUBUwhuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dUBUwhu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dUBUwhu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['privates', '.errored.E2qZs7Z', NULL, 'Cannot determine controller argument for "App\\Controller\\ParkController::Delete()": the $doctrine argument is type-hinted with the non-existent class or interface: "App\\Controller\\ManagerRegistry". Did you forget to add a use statement?'],
            'park' => ['privates', '.errored..service_locator.dUBUwhu.App\\Entity\\Park', NULL, 'Cannot autowire service ".service_locator.dUBUwhu": it references class "App\\Entity\\Park" but no such service exists.'],
        ], [
            'doctrine' => '?',
            'park' => 'App\\Entity\\Park',
        ]);
    }
}