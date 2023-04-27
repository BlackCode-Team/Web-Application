<?php

namespace ContainerCgTIEIK;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendarControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'CalendarBundle\Controller\CalendarController' shared autowired service.
     *
     * @return \CalendarBundle\Controller\CalendarController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'tattali'.\DIRECTORY_SEPARATOR.'calendar-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CalendarController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'tattali'.\DIRECTORY_SEPARATOR.'calendar-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'SerializerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'tattali'.\DIRECTORY_SEPARATOR.'calendar-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'Serializer.php';

        return $container->services['CalendarBundle\\Controller\\CalendarController'] = new \CalendarBundle\Controller\CalendarController(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), new \CalendarBundle\Serializer\Serializer());
    }
}
