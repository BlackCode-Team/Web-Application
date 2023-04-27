<?php

namespace ContainerGEIzZFj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MxLQRmVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mxLQRmV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mxLQRmV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservation' => ['privates', '.errored..service_locator.mxLQRmV.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.mxLQRmV": it references class "App\\Entity\\Reservation" but no such service exists.'],
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'reservation' => 'App\\Entity\\Reservation',
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
        ]);
    }
}
