<?php

<<<<<<<< Updated upstream:var/cache/dev/Container3Nju3es/getDataCollector_Request_SessionCollectorService.php
<<<<<<<< Updated upstream:var/cache/dev/ContainerHSNjuhU/getDataCollector_Request_SessionCollectorService.php
namespace ContainerHSNjuhU;
========
namespace Container3Nju3es;
>>>>>>>> Stashed changes:var/cache/dev/Container3Nju3es/getDataCollector_Request_SessionCollectorService.php
========
namespace ContainerL7ax9pe;
>>>>>>>> Stashed changes:var/cache/dev/ContainerL7ax9pe/getDataCollector_Request_SessionCollectorService.php


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
