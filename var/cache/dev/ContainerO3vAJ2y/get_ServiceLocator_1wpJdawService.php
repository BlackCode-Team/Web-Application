<?php

namespace ContainerO3vAJ2y;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1wpJdawService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1wpJdaw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1wpJdaw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'userRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'serializer' => '?',
            'userRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}
