<?php

namespace ContainerL7ax9pe;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WdRBGEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wdRBG_e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wdRBG_e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reponse' => ['privates', '.errored..service_locator.wdRBG_e.App\\Entity\\Reponse', NULL, 'Cannot autowire service ".service_locator.wdRBG_e": it references class "App\\Entity\\Reponse" but no such service exists.'],
            'responseRepository' => ['privates', 'App\\Repository\\ResponseRepository', 'getResponseRepositoryService', true],
        ], [
            'reponse' => 'App\\Entity\\Reponse',
            'responseRepository' => 'App\\Repository\\ResponseRepository',
        ]);
    }
}
