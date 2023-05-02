<?php

namespace ContainerLapqLFd;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7u_GGMdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7u.gGMd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7u.gGMd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'historique' => ['privates', '.errored..service_locator.7u.gGMd.App\\Entity\\Historique', NULL, 'Cannot autowire service ".service_locator.7u.gGMd": it references class "App\\Entity\\Historique" but no such service exists.'],
            'historiqueRepository' => ['privates', 'App\\Repository\\HistoriqueRepository', 'getHistoriqueRepositoryService', true],
        ], [
            'historique' => 'App\\Entity\\Historique',
            'historiqueRepository' => 'App\\Repository\\HistoriqueRepository',
        ]);
    }
}
