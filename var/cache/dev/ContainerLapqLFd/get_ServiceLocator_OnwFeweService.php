<?php

namespace ContainerLapqLFd;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OnwFeweService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.onwFewe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.onwFewe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'maintenance' => ['privates', '.errored..service_locator.onwFewe.App\\Entity\\Maintenance', NULL, 'Cannot autowire service ".service_locator.onwFewe": it references class "App\\Entity\\Maintenance" but no such service exists.'],
        ], [
            'maintenance' => 'App\\Entity\\Maintenance',
        ]);
    }
}
