<?php

namespace ContainerS5qyPfw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ky9OCSEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ky9OCSE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ky9OCSE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reclamation' => ['privates', '.errored..service_locator.Ky9OCSE.App\\Entity\\Reclamation', NULL, 'Cannot autowire service ".service_locator.Ky9OCSE": it references class "App\\Entity\\Reclamation" but no such service exists.'],
        ], [
            'reclamation' => 'App\\Entity\\Reclamation',
        ]);
    }
}
