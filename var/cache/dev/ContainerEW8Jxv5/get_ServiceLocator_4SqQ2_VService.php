<?php

<<<<<<<< Updated upstream:var/cache/dev/ContainerEW8Jxv5/get_ServiceLocator_4SqQ2_VService.php
<<<<<<<< Updated upstream:var/cache/dev/ContainerQnMZChq/get_ServiceLocator_Y1420RlService.php
namespace ContainerQnMZChq;
========
namespace ContainerEW8Jxv5;
>>>>>>>> Stashed changes:var/cache/dev/ContainerEW8Jxv5/get_ServiceLocator_4SqQ2_VService.php
========
namespace ContainerGrzg32x;
>>>>>>>> Stashed changes:var/cache/dev/ContainerGrzg32x/get_ServiceLocator_Y1420RlService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y1420RlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.y1420Rl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.y1420Rl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'vehiculeRepository' => ['privates', 'App\\Repository\\VehiculeRepository', 'getVehiculeRepositoryService', true],
        ], [
            'vehiculeRepository' => 'App\\Repository\\VehiculeRepository',
        ]);
    }
}