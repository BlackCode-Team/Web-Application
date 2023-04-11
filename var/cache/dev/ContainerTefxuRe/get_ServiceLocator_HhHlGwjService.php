<?php

namespace ContainerTefxuRe;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HhHlGwjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hhHlGwj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hhHlGwj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'historiqueRepository' => ['privates', 'App\\Repository\\HistoriqueRepository', 'getHistoriqueRepositoryService', true],
        ], [
            'historiqueRepository' => 'App\\Repository\\HistoriqueRepository',
        ]);
    }
}
