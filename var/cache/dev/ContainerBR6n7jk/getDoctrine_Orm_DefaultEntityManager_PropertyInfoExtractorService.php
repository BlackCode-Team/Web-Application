<?php

<<<<<<<< HEAD:var/cache/dev/ContainerBR6n7jk/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php
namespace ContainerBR6n7jk;

========
namespace ContainerXxRwAvm;
>>>>>>>> dafaa418e965cb562724709fb7ac21731436e887:var/cache/dev/ContainerXxRwAvm/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'PropertyInfo'.\DIRECTORY_SEPARATOR.'DoctrineExtractor.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'])) {
            return $container->privates['doctrine.orm.default_entity_manager.property_info_extractor'];
        }

        return $container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($a);
    }
}