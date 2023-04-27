<?php

namespace ContainerCgTIEIK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BEh4HK5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bEh4HK5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bEh4HK5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offreRepository' => ['privates', 'App\\Repository\\OffreRepository', 'getOffreRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'offreRepository' => 'App\\Repository\\OffreRepository',
            'paginator' => '?',
        ]);
    }
}
