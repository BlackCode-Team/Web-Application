<?php

namespace ContainerLPfYRM2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QUcY63pService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QUcY63p' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QUcY63p'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.QUcY63p.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.QUcY63p": it references class "App\\Entity\\Utilisateur" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'user' => 'App\\Entity\\Utilisateur',
        ]);
    }
}
