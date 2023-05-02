<?php

namespace ContainerKxOvKpE;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IZm8H3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IZm8_h3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IZm8_h3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'parkRepository' => ['privates', 'App\\Repository\\ParkRepository', 'getParkRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'parkRepository' => 'App\\Repository\\ParkRepository',
            'security' => '?',
        ]);
    }
}
