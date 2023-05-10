<?php

namespace Container3qVNIjx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B89frLNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.b89frLN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.b89frLN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reservation' => ['privates', '.errored..service_locator.b89frLN.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.b89frLN": it references class "App\\Entity\\Reservation" but no such service exists.'],
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'entityManager' => '?',
            'reservation' => 'App\\Entity\\Reservation',
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
            'serializer' => '?',
        ]);
    }
}
