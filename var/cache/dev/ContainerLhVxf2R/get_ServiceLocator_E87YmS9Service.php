<?php

namespace ContainerLhVxf2R;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E87YmS9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.E87YmS9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E87YmS9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'parkRepository' => ['privates', 'App\\Repository\\ParkRepository', 'getParkRepositoryService', true],
        ], [
            'paginator' => '?',
            'parkRepository' => 'App\\Repository\\ParkRepository',
        ]);
    }
}
