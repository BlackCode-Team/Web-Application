<?php

<<<<<<<< Updated upstream:var/cache/dev/Container3Nju3es/getHistoriqueControllerService.php
<<<<<<<< Updated upstream:var/cache/dev/ContainerXxRwAvm/getHistoriqueControllerService.php
namespace ContainerXxRwAvm;
========
namespace Container3Nju3es;

>>>>>>>> Stashed changes:var/cache/dev/Container3Nju3es/getHistoriqueControllerService.php
========
namespace ContainerL7ax9pe;

>>>>>>>> Stashed changes:var/cache/dev/ContainerL7ax9pe/getHistoriqueControllerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHistoriqueControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HistoriqueController' shared autowired service.
     *
     * @return \App\Controller\HistoriqueController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'HistoriqueController.php';

        $container->services['App\\Controller\\HistoriqueController'] = $instance = new \App\Controller\HistoriqueController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\HistoriqueController', $container));

        return $instance;
    }
}
