<?php

namespace ContainerIsJW3wy;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOneupUploader_Command_ClearChunksService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'oneup_uploader.command.clear_chunks' shared service.
     *
     * @return \Oneup\UploaderBundle\Command\ClearChunkCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'oneup'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ClearChunkCommand.php';

        $container->privates['oneup_uploader.command.clear_chunks'] = $instance = new \Oneup\UploaderBundle\Command\ClearChunkCommand(($container->services['oneup_uploader.chunk_manager'] ?? $container->load('getOneupUploader_ChunkManagerService')));

        $instance->setName('oneup:uploader:clear-chunks');

        return $instance;
    }
}
