<?php

namespace Container3qVNIjx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TgHS13Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tgHS_13' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tgHS_13'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'repo' => ['privates', 'App\\Repository\\BadgeRepository', 'getBadgeRepositoryService', true],
        ], [
            'paginator' => '?',
            'repo' => 'App\\Repository\\BadgeRepository',
        ]);
    }
}
