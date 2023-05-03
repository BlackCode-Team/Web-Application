<?php

namespace ContainerLPfYRM2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOneupUploader_Command_ClearOrphansService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'oneup_uploader.command.clear_orphans' shared service.
     *
     * @return \Oneup\UploaderBundle\Command\ClearOrphansCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'oneup'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ClearOrphansCommand.php';

        $container->privates['oneup_uploader.command.clear_orphans'] = $instance = new \Oneup\UploaderBundle\Command\ClearOrphansCommand(($container->services['oneup_uploader.orphanage_manager'] ?? $container->load('getOneupUploader_OrphanageManagerService')));

        $instance->setName('oneup:uploader:clear-orphans');

        return $instance;
    }
}
