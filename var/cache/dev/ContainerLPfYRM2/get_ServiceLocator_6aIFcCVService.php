<?php

namespace ContainerLPfYRM2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6aIFcCVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6aIFcCV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6aIFcCV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reponse' => ['privates', '.errored..service_locator.6aIFcCV.App\\Entity\\Reponse', NULL, 'Cannot autowire service ".service_locator.6aIFcCV": it references class "App\\Entity\\Reponse" but no such service exists.'],
        ], [
            'reponse' => 'App\\Entity\\Reponse',
        ]);
    }
}
