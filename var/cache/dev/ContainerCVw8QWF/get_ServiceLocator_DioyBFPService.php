<?php

<<<<<<<< HEAD:var/cache/dev/ContainerBuxymzH/get_ServiceLocator_EkDI47jService.php
namespace ContainerBuxymzH;

========
namespace ContainerCVw8QWF;
>>>>>>>> 471308da4104360eaaad4f70dbeadb16addb5ea7:var/cache/dev/ContainerCVw8QWF/get_ServiceLocator_DioyBFPService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DioyBFPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dioyBFP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dioyBFP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\BadgeRepository', 'getBadgeRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\BadgeRepository',
        ]);
    }
}
