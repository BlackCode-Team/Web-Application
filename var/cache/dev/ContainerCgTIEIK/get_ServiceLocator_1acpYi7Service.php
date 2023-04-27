<?php

namespace ContainerCgTIEIK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1acpYi7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1acpYi7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1acpYi7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.1acpYi7.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.1acpYi7": it references class "App\\Entity\\Utilisateur" but no such service exists.'],
            'userRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'user' => 'App\\Entity\\Utilisateur',
            'userRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}
