<?php

namespace ContainerYmhCpYz;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVehiculeControllerService extends App_KernelDevContainer
{
    /*
     * Gets the public 'App\Controller\VehiculeController' shared autowired service.
     *
     * @return \App\Controller\VehiculeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\VehiculeController'] = $instance = new \App\Controller\VehiculeController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\VehiculeController', $container));

        return $instance;
    }
}
