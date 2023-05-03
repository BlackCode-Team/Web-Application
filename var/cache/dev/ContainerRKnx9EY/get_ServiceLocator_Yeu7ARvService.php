<?php

namespace ContainerRKnx9EY;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yeu7ARvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Yeu7ARv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Yeu7ARv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'amende' => ['privates', '.errored..service_locator.Yeu7ARv.App\\Entity\\Amende', NULL, 'Cannot autowire service ".service_locator.Yeu7ARv": it references class "App\\Entity\\Amende" but no such service exists.'],
        ], [
            'amende' => 'App\\Entity\\Amende',
        ]);
    }
}
