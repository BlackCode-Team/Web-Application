<?php

namespace ContainerB57Ntvg;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R5W7ygFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.r5W7ygF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.r5W7ygF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'utilisateur' => ['privates', '.errored..service_locator.r5W7ygF.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.r5W7ygF": it references class "App\\Entity\\Utilisateur" but no such service exists.'],
        ], [
            'utilisateur' => 'App\\Entity\\Utilisateur',
        ]);
    }
}