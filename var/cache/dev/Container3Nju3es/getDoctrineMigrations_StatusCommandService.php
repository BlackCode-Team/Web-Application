<?php

<<<<<<<< Updated upstream:var/cache/dev/Container3Nju3es/getDoctrineMigrations_StatusCommandService.php
<<<<<<<< Updated upstream:var/cache/dev/ContainerHSNjuhU/getDoctrineMigrations_StatusCommandService.php
namespace ContainerHSNjuhU;
========
namespace Container3Nju3es;
>>>>>>>> Stashed changes:var/cache/dev/Container3Nju3es/getDoctrineMigrations_StatusCommandService.php
========
namespace ContainerL7ax9pe;
>>>>>>>> Stashed changes:var/cache/dev/ContainerL7ax9pe/getDoctrineMigrations_StatusCommandService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMigrations_StatusCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\StatusCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'StatusCommand.php';

        $container->privates['doctrine_migrations.status_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\StatusCommand(($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService')), 'doctrine:migrations:status');

        $instance->setName('doctrine:migrations:status');

        return $instance;
    }
}
