<?php

namespace ContainerYmhCpYz;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelDevContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HistoriqueController::delete' => ['privates', '.service_locator.7u.gGMd', 'get_ServiceLocator_7u_GGMdService', true],
            'App\\Controller\\HistoriqueController::edit' => ['privates', '.service_locator.7u.gGMd', 'get_ServiceLocator_7u_GGMdService', true],
            'App\\Controller\\HistoriqueController::index' => ['privates', '.service_locator.hhHlGwj', 'get_ServiceLocator_HhHlGwjService', true],
            'App\\Controller\\HistoriqueController::new' => ['privates', '.service_locator.hhHlGwj', 'get_ServiceLocator_HhHlGwjService', true],
            'App\\Controller\\HistoriqueController::show' => ['privates', '.service_locator.1ZBJPoc', 'get_ServiceLocator_1ZBJPocService', true],
            'App\\Controller\\ItineraireController::delete' => ['privates', '.service_locator.i7iqqrB', 'get_ServiceLocator_I7iqqrBService', true],
            'App\\Controller\\ItineraireController::edit' => ['privates', '.service_locator.i7iqqrB', 'get_ServiceLocator_I7iqqrBService', true],
            'App\\Controller\\ItineraireController::index' => ['privates', '.service_locator.K9TRytY', 'get_ServiceLocator_K9TRytYService', true],
            'App\\Controller\\ItineraireController::new' => ['privates', '.service_locator.K9TRytY', 'get_ServiceLocator_K9TRytYService', true],
            'App\\Controller\\ItineraireController::show' => ['privates', '.service_locator.FdDxxpr', 'get_ServiceLocator_FdDxxprService', true],
            'App\\Controller\\ParkController::delete' => ['privates', '.service_locator.ZNVBNHv', 'get_ServiceLocator_ZNVBNHvService', true],
            'App\\Controller\\ParkController::edit' => ['privates', '.service_locator.ZNVBNHv', 'get_ServiceLocator_ZNVBNHvService', true],
            'App\\Controller\\ParkController::index' => ['privates', '.service_locator.xwfY7a4', 'get_ServiceLocator_XwfY7a4Service', true],
            'App\\Controller\\ParkController::new' => ['privates', '.service_locator.xwfY7a4', 'get_ServiceLocator_XwfY7a4Service', true],
            'App\\Controller\\ParkController::show' => ['privates', '.service_locator.tUog_7F', 'get_ServiceLocator_TUog7FService', true],
            'App\\Controller\\ReservationController::delete' => ['privates', '.service_locator.mxLQRmV', 'get_ServiceLocator_MxLQRmVService', true],
            'App\\Controller\\ReservationController::edit' => ['privates', '.service_locator.mxLQRmV', 'get_ServiceLocator_MxLQRmVService', true],
            'App\\Controller\\ReservationController::index' => ['privates', '.service_locator.VddRp04', 'get_ServiceLocator_VddRp04Service', true],
            'App\\Controller\\ReservationController::new' => ['privates', '.service_locator.VddRp04', 'get_ServiceLocator_VddRp04Service', true],
            'App\\Controller\\ReservationController::show' => ['privates', '.service_locator.jtI7Unb', 'get_ServiceLocator_JtI7UnbService', true],
            'App\\Controller\\UtilisateurController::delete' => ['privates', '.service_locator.KzL3gdR', 'get_ServiceLocator_KzL3gdRService', true],
            'App\\Controller\\UtilisateurController::edit' => ['privates', '.service_locator.KzL3gdR', 'get_ServiceLocator_KzL3gdRService', true],
            'App\\Controller\\UtilisateurController::index' => ['privates', '.service_locator.JMejbpE', 'get_ServiceLocator_JMejbpEService', true],
            'App\\Controller\\UtilisateurController::new' => ['privates', '.service_locator.JMejbpE', 'get_ServiceLocator_JMejbpEService', true],
            'App\\Controller\\UtilisateurController::show' => ['privates', '.service_locator.r5W7ygF', 'get_ServiceLocator_R5W7ygFService', true],
            'App\\Controller\\VehiculeController::delete' => ['privates', '.service_locator.YdyC4xD', 'get_ServiceLocator_YdyC4xDService', true],
            'App\\Controller\\VehiculeController::edit' => ['privates', '.service_locator.YdyC4xD', 'get_ServiceLocator_YdyC4xDService', true],
            'App\\Controller\\VehiculeController::index' => ['privates', '.service_locator.y1420Rl', 'get_ServiceLocator_Y1420RlService', true],
            'App\\Controller\\VehiculeController::new' => ['privates', '.service_locator.y1420Rl', 'get_ServiceLocator_Y1420RlService', true],
            'App\\Controller\\VehiculeController::show' => ['privates', '.service_locator.pB20uqv', 'get_ServiceLocator_PB20uqvService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\HistoriqueController:delete' => ['privates', '.service_locator.7u.gGMd', 'get_ServiceLocator_7u_GGMdService', true],
            'App\\Controller\\HistoriqueController:edit' => ['privates', '.service_locator.7u.gGMd', 'get_ServiceLocator_7u_GGMdService', true],
            'App\\Controller\\HistoriqueController:index' => ['privates', '.service_locator.hhHlGwj', 'get_ServiceLocator_HhHlGwjService', true],
            'App\\Controller\\HistoriqueController:new' => ['privates', '.service_locator.hhHlGwj', 'get_ServiceLocator_HhHlGwjService', true],
            'App\\Controller\\HistoriqueController:show' => ['privates', '.service_locator.1ZBJPoc', 'get_ServiceLocator_1ZBJPocService', true],
            'App\\Controller\\ItineraireController:delete' => ['privates', '.service_locator.i7iqqrB', 'get_ServiceLocator_I7iqqrBService', true],
            'App\\Controller\\ItineraireController:edit' => ['privates', '.service_locator.i7iqqrB', 'get_ServiceLocator_I7iqqrBService', true],
            'App\\Controller\\ItineraireController:index' => ['privates', '.service_locator.K9TRytY', 'get_ServiceLocator_K9TRytYService', true],
            'App\\Controller\\ItineraireController:new' => ['privates', '.service_locator.K9TRytY', 'get_ServiceLocator_K9TRytYService', true],
            'App\\Controller\\ItineraireController:show' => ['privates', '.service_locator.FdDxxpr', 'get_ServiceLocator_FdDxxprService', true],
            'App\\Controller\\ParkController:delete' => ['privates', '.service_locator.ZNVBNHv', 'get_ServiceLocator_ZNVBNHvService', true],
            'App\\Controller\\ParkController:edit' => ['privates', '.service_locator.ZNVBNHv', 'get_ServiceLocator_ZNVBNHvService', true],
            'App\\Controller\\ParkController:index' => ['privates', '.service_locator.xwfY7a4', 'get_ServiceLocator_XwfY7a4Service', true],
            'App\\Controller\\ParkController:new' => ['privates', '.service_locator.xwfY7a4', 'get_ServiceLocator_XwfY7a4Service', true],
            'App\\Controller\\ParkController:show' => ['privates', '.service_locator.tUog_7F', 'get_ServiceLocator_TUog7FService', true],
            'App\\Controller\\ReservationController:delete' => ['privates', '.service_locator.mxLQRmV', 'get_ServiceLocator_MxLQRmVService', true],
            'App\\Controller\\ReservationController:edit' => ['privates', '.service_locator.mxLQRmV', 'get_ServiceLocator_MxLQRmVService', true],
            'App\\Controller\\ReservationController:index' => ['privates', '.service_locator.VddRp04', 'get_ServiceLocator_VddRp04Service', true],
            'App\\Controller\\ReservationController:new' => ['privates', '.service_locator.VddRp04', 'get_ServiceLocator_VddRp04Service', true],
            'App\\Controller\\ReservationController:show' => ['privates', '.service_locator.jtI7Unb', 'get_ServiceLocator_JtI7UnbService', true],
            'App\\Controller\\UtilisateurController:delete' => ['privates', '.service_locator.KzL3gdR', 'get_ServiceLocator_KzL3gdRService', true],
            'App\\Controller\\UtilisateurController:edit' => ['privates', '.service_locator.KzL3gdR', 'get_ServiceLocator_KzL3gdRService', true],
            'App\\Controller\\UtilisateurController:index' => ['privates', '.service_locator.JMejbpE', 'get_ServiceLocator_JMejbpEService', true],
            'App\\Controller\\UtilisateurController:new' => ['privates', '.service_locator.JMejbpE', 'get_ServiceLocator_JMejbpEService', true],
            'App\\Controller\\UtilisateurController:show' => ['privates', '.service_locator.r5W7ygF', 'get_ServiceLocator_R5W7ygFService', true],
            'App\\Controller\\VehiculeController:delete' => ['privates', '.service_locator.YdyC4xD', 'get_ServiceLocator_YdyC4xDService', true],
            'App\\Controller\\VehiculeController:edit' => ['privates', '.service_locator.YdyC4xD', 'get_ServiceLocator_YdyC4xDService', true],
            'App\\Controller\\VehiculeController:index' => ['privates', '.service_locator.y1420Rl', 'get_ServiceLocator_Y1420RlService', true],
            'App\\Controller\\VehiculeController:new' => ['privates', '.service_locator.y1420Rl', 'get_ServiceLocator_Y1420RlService', true],
            'App\\Controller\\VehiculeController:show' => ['privates', '.service_locator.pB20uqv', 'get_ServiceLocator_PB20uqvService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\HistoriqueController::delete' => '?',
            'App\\Controller\\HistoriqueController::edit' => '?',
            'App\\Controller\\HistoriqueController::index' => '?',
            'App\\Controller\\HistoriqueController::new' => '?',
            'App\\Controller\\HistoriqueController::show' => '?',
            'App\\Controller\\ItineraireController::delete' => '?',
            'App\\Controller\\ItineraireController::edit' => '?',
            'App\\Controller\\ItineraireController::index' => '?',
            'App\\Controller\\ItineraireController::new' => '?',
            'App\\Controller\\ItineraireController::show' => '?',
            'App\\Controller\\ParkController::delete' => '?',
            'App\\Controller\\ParkController::edit' => '?',
            'App\\Controller\\ParkController::index' => '?',
            'App\\Controller\\ParkController::new' => '?',
            'App\\Controller\\ParkController::show' => '?',
            'App\\Controller\\ReservationController::delete' => '?',
            'App\\Controller\\ReservationController::edit' => '?',
            'App\\Controller\\ReservationController::index' => '?',
            'App\\Controller\\ReservationController::new' => '?',
            'App\\Controller\\ReservationController::show' => '?',
            'App\\Controller\\UtilisateurController::delete' => '?',
            'App\\Controller\\UtilisateurController::edit' => '?',
            'App\\Controller\\UtilisateurController::index' => '?',
            'App\\Controller\\UtilisateurController::new' => '?',
            'App\\Controller\\UtilisateurController::show' => '?',
            'App\\Controller\\VehiculeController::delete' => '?',
            'App\\Controller\\VehiculeController::edit' => '?',
            'App\\Controller\\VehiculeController::index' => '?',
            'App\\Controller\\VehiculeController::new' => '?',
            'App\\Controller\\VehiculeController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HistoriqueController:delete' => '?',
            'App\\Controller\\HistoriqueController:edit' => '?',
            'App\\Controller\\HistoriqueController:index' => '?',
            'App\\Controller\\HistoriqueController:new' => '?',
            'App\\Controller\\HistoriqueController:show' => '?',
            'App\\Controller\\ItineraireController:delete' => '?',
            'App\\Controller\\ItineraireController:edit' => '?',
            'App\\Controller\\ItineraireController:index' => '?',
            'App\\Controller\\ItineraireController:new' => '?',
            'App\\Controller\\ItineraireController:show' => '?',
            'App\\Controller\\ParkController:delete' => '?',
            'App\\Controller\\ParkController:edit' => '?',
            'App\\Controller\\ParkController:index' => '?',
            'App\\Controller\\ParkController:new' => '?',
            'App\\Controller\\ParkController:show' => '?',
            'App\\Controller\\ReservationController:delete' => '?',
            'App\\Controller\\ReservationController:edit' => '?',
            'App\\Controller\\ReservationController:index' => '?',
            'App\\Controller\\ReservationController:new' => '?',
            'App\\Controller\\ReservationController:show' => '?',
            'App\\Controller\\UtilisateurController:delete' => '?',
            'App\\Controller\\UtilisateurController:edit' => '?',
            'App\\Controller\\UtilisateurController:index' => '?',
            'App\\Controller\\UtilisateurController:new' => '?',
            'App\\Controller\\UtilisateurController:show' => '?',
            'App\\Controller\\VehiculeController:delete' => '?',
            'App\\Controller\\VehiculeController:edit' => '?',
            'App\\Controller\\VehiculeController:index' => '?',
            'App\\Controller\\VehiculeController:new' => '?',
            'App\\Controller\\VehiculeController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]));
    }
}
