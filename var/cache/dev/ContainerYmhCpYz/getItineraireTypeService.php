<?php

namespace ContainerYmhCpYz;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getItineraireTypeService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Form\ItineraireType' shared autowired service.
     *
     * @return \App\Form\ItineraireType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ItineraireType'] = new \App\Form\ItineraireType();
    }
}
