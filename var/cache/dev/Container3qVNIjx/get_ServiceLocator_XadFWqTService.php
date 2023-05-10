<?php

namespace Container3qVNIjx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XadFWqTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XadFWqT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XadFWqT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'qrcodeService' => ['privates', 'App\\Services\\qrcodeService', 'getQrcodeServiceService', true],
            'userRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'qrcodeService' => 'App\\Services\\qrcodeService',
            'userRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}
