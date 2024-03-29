<?php

namespace ContainerO3vAJ2y;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SOcQ1WdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SOcQ1Wd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SOcQ1Wd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'badgeRepository' => ['privates', 'App\\Repository\\BadgeRepository', 'getBadgeRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'badgeRepository' => 'App\\Repository\\BadgeRepository',
            'paginator' => '?',
        ]);
    }
}
