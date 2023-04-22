<?php

namespace ContainerAdVRlUb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I7iqqrBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i7iqqrB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i7iqqrB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'itineraire' => ['privates', '.errored..service_locator.i7iqqrB.App\\Entity\\Itineraire', NULL, 'Cannot autowire service ".service_locator.i7iqqrB": it references class "App\\Entity\\Itineraire" but no such service exists.'],
            'itineraireRepository' => ['privates', 'App\\Repository\\ItineraireRepository', 'getItineraireRepositoryService', true],
        ], [
            'itineraire' => 'App\\Entity\\Itineraire',
            'itineraireRepository' => 'App\\Repository\\ItineraireRepository',
        ]);
    }
}
