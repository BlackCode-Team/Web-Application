<?php

namespace Container0DDFC98;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KYtU5aIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kYtU5aI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kYtU5aI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'responseRepository' => ['privates', 'App\\Repository\\ResponseRepository', 'getResponseRepositoryService', true],
        ], [
            'responseRepository' => 'App\\Repository\\ResponseRepository',
        ]);
    }
}
