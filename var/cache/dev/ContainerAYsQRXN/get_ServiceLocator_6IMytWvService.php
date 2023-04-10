<?php

namespace ContainerAYsQRXN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6IMytWvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6IMytWv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6IMytWv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'badgeRepository' => ['privates', 'App\\Repository\\BadgeRepository', 'getBadgeRepositoryService', true],
        ], [
            'badgeRepository' => 'App\\Repository\\BadgeRepository',
        ]);
    }
}
