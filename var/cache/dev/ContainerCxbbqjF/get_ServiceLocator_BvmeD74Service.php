<?php

namespace ContainerCxbbqjF;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BvmeD74Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bvmeD74' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bvmeD74'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reclamationRepository' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
        ], [
            'reclamationRepository' => 'App\\Repository\\ReclamationRepository',
        ]);
    }
}
