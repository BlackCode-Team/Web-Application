<?php

namespace ContainerWobdjq2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6nMtbqkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6nMtbqk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6nMtbqk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'maintenance' => ['privates', '.errored..service_locator.6nMtbqk.App\\Entity\\Maintenance', NULL, 'Cannot autowire service ".service_locator.6nMtbqk": it references class "App\\Entity\\Maintenance" but no such service exists.'],
            'maintenanceRepository' => ['privates', 'App\\Repository\\MaintenanceRepository', 'getMaintenanceRepositoryService', true],
        ], [
            'maintenance' => 'App\\Entity\\Maintenance',
            'maintenanceRepository' => 'App\\Repository\\MaintenanceRepository',
        ]);
    }
}
