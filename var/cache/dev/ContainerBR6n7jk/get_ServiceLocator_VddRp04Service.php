<?php

<<<<<<<< HEAD:var/cache/dev/ContainerBR6n7jk/get_ServiceLocator_VddRp04Service.php
namespace ContainerBR6n7jk;

========
namespace ContainerXxRwAvm;
>>>>>>>> dafaa418e965cb562724709fb7ac21731436e887:var/cache/dev/ContainerXxRwAvm/get_ServiceLocator_LyRga8rService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LyRga8rService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LyRga8r' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LyRga8r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
        ]);
    }
}
