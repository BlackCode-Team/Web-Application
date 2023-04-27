<?php

namespace ContainerCgTIEIK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_20cMmfJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.20cMmfJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.20cMmfJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'badge' => ['privates', '.errored..service_locator.20cMmfJ.App\\Entity\\Badge', NULL, 'Cannot autowire service ".service_locator.20cMmfJ": it references class "App\\Entity\\Badge" but no such service exists.'],
            'badgeRepository' => ['privates', 'App\\Repository\\BadgeRepository', 'getBadgeRepositoryService', true],
        ], [
            'badge' => 'App\\Entity\\Badge',
            'badgeRepository' => 'App\\Repository\\BadgeRepository',
        ]);
    }
}
