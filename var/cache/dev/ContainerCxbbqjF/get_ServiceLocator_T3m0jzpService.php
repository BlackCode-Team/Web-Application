<?php

namespace ContainerCxbbqjF;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T3m0jzpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t3m0jzp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t3m0jzp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'amendeRepository' => ['privates', 'App\\Repository\\AmendeRepository', 'getAmendeRepositoryService', true],
        ], [
            'amendeRepository' => 'App\\Repository\\AmendeRepository',
        ]);
    }
}
