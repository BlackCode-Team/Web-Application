<?php

<<<<<<<< HEAD:var/cache/dev/ContainerBuxymzH/get_ServiceLocator_C7f47p7Service.php
namespace ContainerBuxymzH;

========
namespace ContainerCVw8QWF;
>>>>>>>> 471308da4104360eaaad4f70dbeadb16addb5ea7:var/cache/dev/ContainerCVw8QWF/get_ServiceLocator_C7f47p7Service.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C7f47p7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c7f47p7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c7f47p7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'async' => ['privates', 'messenger.transport.async', 'getMessenger_Transport_AsyncService', true],
            'failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
            'messenger.transport.async' => ['privates', 'messenger.transport.async', 'getMessenger_Transport_AsyncService', true],
            'messenger.transport.failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
        ], [
            'async' => '?',
            'failed' => '?',
            'messenger.transport.async' => '?',
            'messenger.transport.failed' => '?',
        ]);
    }
}
