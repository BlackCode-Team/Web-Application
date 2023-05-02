<?php

namespace Container4dahU3u;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VGHnoQWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VGHnoQW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VGHnoQW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'flashy' => ['services', 'mercuryseries_flashy.flashy_notifier', 'getMercuryseriesFlashy_FlashyNotifierService', true],
            'offreRepository' => ['privates', 'App\\Repository\\OffreRepository', 'getOffreRepositoryService', true],
        ], [
            'flashy' => '?',
            'offreRepository' => 'App\\Repository\\OffreRepository',
        ]);
    }
}
