<?php

<<<<<<<< HEAD:var/cache/dev/ContainerBR6n7jk/get_ServiceLocator_1ZBJPocService.php
namespace ContainerBR6n7jk;

========
namespace ContainerXxRwAvm;
>>>>>>>> dafaa418e965cb562724709fb7ac21731436e887:var/cache/dev/ContainerXxRwAvm/get_ServiceLocator_OAbCvMmService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OAbCvMmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oAbCvMm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oAbCvMm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'historique' => ['privates', '.errored..service_locator.oAbCvMm.App\\Entity\\Historique', NULL, 'Cannot autowire service ".service_locator.oAbCvMm": it references class "App\\Entity\\Historique" but no such service exists.'],
        ], [
            'historique' => 'App\\Entity\\Historique',
        ]);
    }
}