<?php

<<<<<<<< HEAD:var/cache/dev/ContainerBuxymzH/getForm_Type_ColorService.php
namespace ContainerBuxymzH;

========
namespace ContainerCVw8QWF;
>>>>>>>> 471308da4104360eaaad4f70dbeadb16addb5ea7:var/cache/dev/ContainerCVw8QWF/getForm_Type_ColorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_Type_ColorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type.color' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ColorType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'ColorType.php';

        return $container->privates['form.type.color'] = new \Symfony\Component\Form\Extension\Core\Type\ColorType(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}