<?php

namespace ContainerSaoww6i;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Uv2e9y5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Uv2e9y5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Uv2e9y5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'historiqueRepository' => ['privates', 'App\\Repository\\HistoriqueRepository', 'getHistoriqueRepositoryService', true],
            'itineraireRepository' => ['privates', 'App\\Repository\\ItineraireRepository', 'getItineraireRepositoryService', true],
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'historiqueRepository' => 'App\\Repository\\HistoriqueRepository',
            'itineraireRepository' => 'App\\Repository\\ItineraireRepository',
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
            'security' => '?',
        ]);
    }
}
