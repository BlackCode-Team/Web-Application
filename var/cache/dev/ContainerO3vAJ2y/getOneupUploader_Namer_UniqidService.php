<?php

namespace ContainerO3vAJ2y;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOneupUploader_Namer_UniqidService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'oneup_uploader.namer.uniqid' shared service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Naming\UniqidNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'oneup'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Uploader'.\DIRECTORY_SEPARATOR.'Naming'.\DIRECTORY_SEPARATOR.'NamerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'oneup'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Uploader'.\DIRECTORY_SEPARATOR.'Naming'.\DIRECTORY_SEPARATOR.'UniqidNamer.php';

        return $container->services['oneup_uploader.namer.uniqid'] = new \Oneup\UploaderBundle\Uploader\Naming\UniqidNamer();
    }
}
