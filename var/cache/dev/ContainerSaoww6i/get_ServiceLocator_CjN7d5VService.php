<?php

namespace ContainerSaoww6i;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CjN7d5VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CjN7d5V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CjN7d5V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\VehiculeRepository', 'getVehiculeRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\VehiculeRepository',
        ]);
    }
}
