<?php

namespace ContainerCx9my14;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QyDsvTDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QyDsvTD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QyDsvTD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'parkRepository' => ['privates', 'App\\Repository\\ParkRepository', 'getParkRepositoryService', true],
        ], [
            'parkRepository' => 'App\\Repository\\ParkRepository',
        ]);
    }
}
