<?php

<<<<<<<< HEAD:var/cache/dev/ContainerBuxymzH/get_ServiceLocator_PB20uqvService.php
namespace ContainerBuxymzH;

========
namespace ContainerCVw8QWF;
>>>>>>>> 471308da4104360eaaad4f70dbeadb16addb5ea7:var/cache/dev/ContainerCVw8QWF/get_ServiceLocator_0J1782jService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0J1782jService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0J1782j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0J1782j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'vehicule' => ['privates', '.errored..service_locator.0J1782j.App\\Entity\\Vehicule', NULL, 'Cannot autowire service ".service_locator.0J1782j": it references class "App\\Entity\\Vehicule" but no such service exists.'],
        ], [
            'vehicule' => 'App\\Entity\\Vehicule',
        ]);
    }
}
