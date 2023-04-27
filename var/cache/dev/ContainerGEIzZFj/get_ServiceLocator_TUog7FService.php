<?php

namespace ContainerGEIzZFj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TUog7FService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tUog_7F' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tUog_7F'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'park' => ['privates', '.errored..service_locator.tUog_7F.App\\Entity\\Park', NULL, 'Cannot autowire service ".service_locator.tUog_7F": it references class "App\\Entity\\Park" but no such service exists.'],
        ], [
            'park' => 'App\\Entity\\Park',
        ]);
    }
}
