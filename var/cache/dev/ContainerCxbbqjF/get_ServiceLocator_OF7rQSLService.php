<?php

namespace ContainerCxbbqjF;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OF7rQSLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OF7rQSL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OF7rQSL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'historiqueRepository' => ['privates', 'App\\Repository\\HistoriqueRepository', 'getHistoriqueRepositoryService', true],
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'historiqueRepository' => 'App\\Repository\\HistoriqueRepository',
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
        ]);
    }
}
