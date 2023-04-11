<?php

namespace ContainerXxRwAvm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UnRSzoYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UnRSzoY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UnRSzoY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'itineraireRepository' => ['privates', 'App\\Repository\\ItineraireRepository', 'getItineraireRepositoryService', true],
        ], [
            'itineraireRepository' => 'App\\Repository\\ItineraireRepository',
        ]);
    }
}