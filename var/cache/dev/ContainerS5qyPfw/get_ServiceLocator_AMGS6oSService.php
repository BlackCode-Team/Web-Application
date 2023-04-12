<?php

namespace ContainerS5qyPfw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AMGS6oSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AMGS6oS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AMGS6oS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservation' => ['privates', '.errored..service_locator.AMGS6oS.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.AMGS6oS": it references class "App\\Entity\\Reservation" but no such service exists.'],
        ], [
            'reservation' => 'App\\Entity\\Reservation',
        ]);
    }
}
