<?php

namespace ContainerXxvjIWc;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1ZBJPocService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1ZBJPoc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1ZBJPoc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'historique' => ['privates', '.errored..service_locator.1ZBJPoc.App\\Entity\\Historique', NULL, 'Cannot autowire service ".service_locator.1ZBJPoc": it references class "App\\Entity\\Historique" but no such service exists.'],
        ], [
            'historique' => 'App\\Entity\\Historique',
        ]);
    }
}
