<?php

namespace Container1LdppwR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mq5Q57WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mq5Q57W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mq5Q57W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'tokenStorage' => ['services', '.container.private.security.token_storage', 'get_Container_Private_Security_TokenStorageService', false],
        ], [
            'authenticationUtils' => '?',
            'tokenStorage' => '?',
        ]);
    }
}
