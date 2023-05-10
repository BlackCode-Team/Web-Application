<?php

namespace ContainerO3vAJ2y;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOneupUploader_OrphanageManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'oneup_uploader.orphanage_manager' shared service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'oneup'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Uploader'.\DIRECTORY_SEPARATOR.'Orphanage'.\DIRECTORY_SEPARATOR.'OrphanageManager.php';

        return $container->services['oneup_uploader.orphanage_manager'] = new \Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager($container, $container->getParameter('oneup_uploader.orphanage'));
    }
}
