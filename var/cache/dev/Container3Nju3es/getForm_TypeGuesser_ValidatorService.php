<?php

<<<<<<<< Updated upstream:var/cache/dev/Container3Nju3es/getForm_TypeGuesser_ValidatorService.php
<<<<<<<< Updated upstream:var/cache/dev/ContainerHSNjuhU/getForm_TypeGuesser_ValidatorService.php
namespace ContainerHSNjuhU;
========
namespace Container3Nju3es;
>>>>>>>> Stashed changes:var/cache/dev/Container3Nju3es/getForm_TypeGuesser_ValidatorService.php
========
namespace ContainerL7ax9pe;
>>>>>>>> Stashed changes:var/cache/dev/ContainerL7ax9pe/getForm_TypeGuesser_ValidatorService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeGuesser_ValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'ValidatorTypeGuesser.php';

        return $container->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService()));
    }
}
