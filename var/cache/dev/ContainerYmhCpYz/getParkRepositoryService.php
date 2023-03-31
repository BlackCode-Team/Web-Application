<?php

namespace ContainerYmhCpYz;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getParkRepositoryService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Repository\ParkRepository' shared autowired service.
     *
     * @return \App\Repository\ParkRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ParkRepository'] = new \App\Repository\ParkRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
