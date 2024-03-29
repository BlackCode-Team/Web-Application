<?php

namespace ContainerSaoww6i;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YdyC4xDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YdyC4xD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YdyC4xD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'vehicule' => ['privates', '.errored..service_locator.YdyC4xD.App\\Entity\\Vehicule', NULL, 'Cannot autowire service ".service_locator.YdyC4xD": it references class "App\\Entity\\Vehicule" but no such service exists.'],
            'vehiculeRepository' => ['privates', 'App\\Repository\\VehiculeRepository', 'getVehiculeRepositoryService', true],
        ], [
            'vehicule' => 'App\\Entity\\Vehicule',
            'vehiculeRepository' => 'App\\Repository\\VehiculeRepository',
        ]);
    }
}
