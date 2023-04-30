<?php

namespace Container1LdppwR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQrCodeRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Endroid\QrCodeBundle\Twig\QrCodeRuntime' shared autowired service.
     *
     * @return \Endroid\QrCodeBundle\Twig\QrCodeRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'QrCodeRuntime.php';

        return $container->privates['Endroid\\QrCodeBundle\\Twig\\QrCodeRuntime'] = new \Endroid\QrCodeBundle\Twig\QrCodeRuntime(($container->privates['Endroid\\QrCode\\Builder\\BuilderRegistry'] ?? $container->load('getBuilderRegistryService')), ($container->services['router'] ?? $container->getRouterService()));
    }
}
