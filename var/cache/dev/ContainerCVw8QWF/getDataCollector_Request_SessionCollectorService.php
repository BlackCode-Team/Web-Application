<?php

<<<<<<<< HEAD:var/cache/dev/ContainerBuxymzH/getDataCollector_Request_SessionCollectorService.php
namespace ContainerBuxymzH;

========
namespace ContainerCVw8QWF;
>>>>>>>> 471308da4104360eaaad4f70dbeadb16addb5ea7:var/cache/dev/ContainerCVw8QWF/getDataCollector_Request_SessionCollectorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDataCollector_Request_SessionCollectorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'data_collector.request.session_collector' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['data_collector.request.session_collector'] = \Closure::fromCallable([0 => ($container->privates['data_collector.request'] ?? $container->getDataCollector_RequestService()), 1 => 'collectSessionUsage']);
    }
}
