<?php

namespace ContainerFOVTQxc;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VddRp04Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VddRp04' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VddRp04'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
        ]);
    }
}
