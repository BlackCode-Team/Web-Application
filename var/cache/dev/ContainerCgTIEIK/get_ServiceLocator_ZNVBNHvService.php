<?php

namespace ContainerCgTIEIK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZNVBNHvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZNVBNHv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZNVBNHv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'park' => ['privates', '.errored..service_locator.ZNVBNHv.App\\Entity\\Park', NULL, 'Cannot autowire service ".service_locator.ZNVBNHv": it references class "App\\Entity\\Park" but no such service exists.'],
            'parkRepository' => ['privates', 'App\\Repository\\ParkRepository', 'getParkRepositoryService', true],
        ], [
            'park' => 'App\\Entity\\Park',
            'parkRepository' => 'App\\Repository\\ParkRepository',
        ]);
    }
}
