<?php

namespace Container5D42BZN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVehiculeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\VehiculeController' shared autowired service.
     *
     * @return \App\Controller\VehiculeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'VehiculeController.php';

        $container->services['App\\Controller\\VehiculeController'] = $instance = new \App\Controller\VehiculeController(($container->privates['App\\Repository\\VehiculeRepository'] ?? $container->load('getVehiculeRepositoryService')), ($container->services['knp_snappy.pdf'] ?? $container->load('getKnpSnappy_PdfService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\VehiculeController', $container));

        return $instance;
    }
}
