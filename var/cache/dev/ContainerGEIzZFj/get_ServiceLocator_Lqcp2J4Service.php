<?php

namespace ContainerGEIzZFj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Lqcp2J4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lqcp2J4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lqcp2J4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'UtilisateurRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
            'authUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
        ], [
            'UtilisateurRepository' => 'App\\Repository\\UtilisateurRepository',
            'authUtils' => '?',
        ]);
    }
}
