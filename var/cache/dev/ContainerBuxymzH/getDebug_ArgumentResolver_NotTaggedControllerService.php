<?php

<<<<<<<< HEAD:var/cache/dev/ContainerBuxymzH/getDebug_ArgumentResolver_NotTaggedControllerService.php
namespace ContainerBuxymzH;

========
namespace ContainerCVw8QWF;
>>>>>>>> 471308da4104360eaaad4f70dbeadb16addb5ea7:var/cache/dev/ContainerCVw8QWF/getDebug_ArgumentResolver_NotTaggedControllerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ArgumentResolver_NotTaggedControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.argument_resolver.not_tagged_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'NotTaggedControllerValueResolver.php';

<<<<<<<< HEAD:var/cache/dev/ContainerBuxymzH/getDebug_ArgumentResolver_NotTaggedControllerService.php
        return $container->privates['debug.argument_resolver.not_tagged_controller'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver(($container->privates['.service_locator.zdNrdoc'] ?? $container->load('get_ServiceLocator_ZdNrdocService'))), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
========
        return $container->privates['debug.argument_resolver.not_tagged_controller'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver(($container->privates['.service_locator.teccZOw'] ?? $container->load('get_ServiceLocator_TeccZOwService'))), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
>>>>>>>> 471308da4104360eaaad4f70dbeadb16addb5ea7:var/cache/dev/ContainerCVw8QWF/getDebug_ArgumentResolver_NotTaggedControllerService.php
    }
}