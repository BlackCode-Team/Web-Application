<?php

<<<<<<<< HEAD:var/cache/dev/ContainerBR6n7jk/getReclamationTypeService.php
namespace ContainerBR6n7jk;

========
namespace ContainerXxRwAvm;
>>>>>>>> dafaa418e965cb562724709fb7ac21731436e887:var/cache/dev/ContainerXxRwAvm/getReclamationTypeService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReclamationTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ReclamationType' shared autowired service.
     *
     * @return \App\Form\ReclamationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'ReclamationType.php';

        return $container->privates['App\\Form\\ReclamationType'] = new \App\Form\ReclamationType();
    }
}