<?php

namespace ContainerWnrVPK8;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GXqe6NRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GXqe6NR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GXqe6NR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'vehiculeRepository' => ['privates', 'App\\Repository\\VehiculeRepository', 'getVehiculeRepositoryService', true],
        ], [
            'paginator' => '?',
            'vehiculeRepository' => 'App\\Repository\\VehiculeRepository',
        ]);
    }
}
