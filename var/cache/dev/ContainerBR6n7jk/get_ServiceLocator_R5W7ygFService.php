<?php

<<<<<<<< HEAD:var/cache/dev/ContainerBR6n7jk/get_ServiceLocator_R5W7ygFService.php
namespace ContainerBR6n7jk;

========
namespace ContainerXxRwAvm;
>>>>>>>> dafaa418e965cb562724709fb7ac21731436e887:var/cache/dev/ContainerXxRwAvm/get_ServiceLocator_WxsJsLAService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WxsJsLAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wxsJsLA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wxsJsLA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'utilisateur' => ['privates', '.errored..service_locator.wxsJsLA.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.wxsJsLA": it references class "App\\Entity\\Utilisateur" but no such service exists.'],
        ], [
            'utilisateur' => 'App\\Entity\\Utilisateur',
        ]);
    }
}
