<?php

namespace ContainerYTXpmtg;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VVLqQPIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VVLqQPI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VVLqQPI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reclamationRepository' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
            'responseRepository' => ['privates', 'App\\Repository\\ResponseRepository', 'getResponseRepositoryService', true],
        ], [
            'reclamationRepository' => 'App\\Repository\\ReclamationRepository',
            'responseRepository' => 'App\\Repository\\ResponseRepository',
        ]);
    }
}
