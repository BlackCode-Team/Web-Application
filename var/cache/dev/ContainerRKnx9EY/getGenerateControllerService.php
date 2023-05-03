<?php

namespace ContainerRKnx9EY;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Endroid\QrCodeBundle\Controller\GenerateController' shared autowired service.
     *
     * @return \Endroid\QrCodeBundle\Controller\GenerateController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'GenerateController.php';

        return $container->services['Endroid\\QrCodeBundle\\Controller\\GenerateController'] = new \Endroid\QrCodeBundle\Controller\GenerateController(($container->privates['Endroid\\QrCode\\Builder\\BuilderRegistry'] ?? $container->load('getBuilderRegistryService')));
    }
}
