<?php

namespace ContainerRIxxHde;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UQRUBkfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uQRUBkf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uQRUBkf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offre' => ['privates', '.errored..service_locator.uQRUBkf.App\\Entity\\Offre', NULL, 'Cannot autowire service ".service_locator.uQRUBkf": it references class "App\\Entity\\Offre" but no such service exists.'],
            'offreRepository' => ['privates', 'App\\Repository\\OffreRepository', 'getOffreRepositoryService', true],
        ], [
            'offre' => 'App\\Entity\\Offre',
            'offreRepository' => 'App\\Repository\\OffreRepository',
        ]);
    }
}
