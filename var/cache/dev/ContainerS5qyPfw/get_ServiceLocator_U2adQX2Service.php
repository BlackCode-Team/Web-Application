<?php

namespace ContainerS5qyPfw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U2adQX2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.u2adQX2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.u2adQX2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reponse' => ['privates', '.errored..service_locator.u2adQX2.App\\Entity\\Reponse', NULL, 'Cannot autowire service ".service_locator.u2adQX2": it references class "App\\Entity\\Reponse" but no such service exists.'],
            'responseRepository' => ['privates', 'App\\Repository\\ResponseRepository', 'getResponseRepositoryService', true],
        ], [
            'reponse' => 'App\\Entity\\Reponse',
            'responseRepository' => 'App\\Repository\\ResponseRepository',
        ]);
    }
}
