<?php

namespace ContainerRKnx9EY;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ICjB1utService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ICjB1ut' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ICjB1ut'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'amende' => ['privates', '.errored..service_locator.ICjB1ut.App\\Entity\\Amende', NULL, 'Cannot autowire service ".service_locator.ICjB1ut": it references class "App\\Entity\\Amende" but no such service exists.'],
            'amendeRepository' => ['privates', 'App\\Repository\\AmendeRepository', 'getAmendeRepositoryService', true],
        ], [
            'amende' => 'App\\Entity\\Amende',
            'amendeRepository' => 'App\\Repository\\AmendeRepository',
        ]);
    }
}
