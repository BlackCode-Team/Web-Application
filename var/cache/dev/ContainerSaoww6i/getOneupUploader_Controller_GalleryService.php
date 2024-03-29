<?php

namespace ContainerSaoww6i;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOneupUploader_Controller_GalleryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'oneup_uploader.controller.gallery' shared service.
     *
     * @return \Oneup\UploaderBundle\Controller\BlueimpController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'oneup'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'oneup'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractChunkedController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'oneup'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'BlueimpController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'oneup'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Uploader'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'StorageInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'oneup'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Uploader'.\DIRECTORY_SEPARATOR.'Storage'.\DIRECTORY_SEPARATOR.'FilesystemStorage.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'oneup'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Uploader'.\DIRECTORY_SEPARATOR.'ErrorHandler'.\DIRECTORY_SEPARATOR.'ErrorHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'oneup'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Uploader'.\DIRECTORY_SEPARATOR.'ErrorHandler'.\DIRECTORY_SEPARATOR.'BlueimpErrorHandler.php';

        return $container->services['oneup_uploader.controller.gallery'] = new \Oneup\UploaderBundle\Controller\BlueimpController($container, new \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage((\dirname(__DIR__, 4).'/public/uploads/images')), new \Oneup\UploaderBundle\Uploader\ErrorHandler\BlueimpErrorHandler(($container->services['translator'] ?? $container->getTranslatorService())), $container->parameters['oneup_uploader.config.gallery'], 'gallery');
    }
}
