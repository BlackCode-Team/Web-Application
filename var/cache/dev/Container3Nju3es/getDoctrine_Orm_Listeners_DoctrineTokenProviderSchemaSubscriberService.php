<?php

<<<<<<<< Updated upstream:var/cache/dev/Container3Nju3es/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php
<<<<<<<< Updated upstream:var/cache/dev/ContainerHSNjuhU/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php
namespace ContainerHSNjuhU;
========
namespace Container3Nju3es;
>>>>>>>> Stashed changes:var/cache/dev/Container3Nju3es/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php
========
namespace ContainerL7ax9pe;
>>>>>>>> Stashed changes:var/cache/dev/ContainerL7ax9pe/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'event-manager'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'SchemaListener'.\DIRECTORY_SEPARATOR.'RememberMeTokenProviderDoctrineSchemaSubscriber.php';

        return $container->privates['doctrine.orm.listeners.doctrine_token_provider_schema_subscriber'] = new \Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0));
    }
}
