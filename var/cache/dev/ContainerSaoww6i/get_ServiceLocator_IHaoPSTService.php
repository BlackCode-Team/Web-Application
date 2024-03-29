<?php

namespace ContainerSaoww6i;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IHaoPSTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IHaoPST' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IHaoPST'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'maintenanceRepository' => ['privates', 'App\\Repository\\MaintenanceRepository', 'getMaintenanceRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'maintenanceRepository' => 'App\\Repository\\MaintenanceRepository',
            'paginator' => '?',
        ]);
    }
}
