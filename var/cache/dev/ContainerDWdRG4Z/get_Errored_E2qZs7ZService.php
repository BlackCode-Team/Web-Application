<?php

namespace ContainerDWdRG4Z;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_E2qZs7ZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.E2qZs7Z' shared service.
     *
     * @return \App\Controller\ManagerRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\ParkController::Delete()": the $doctrine argument is type-hinted with the non-existent class or interface: "App\\Controller\\ManagerRegistry". Did you forget to add a use statement?');
    }
}
