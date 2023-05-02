<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/amende' => [[['_route' => 'app_amende_index', '_controller' => 'App\\Controller\\AmendeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/amende/new' => [[['_route' => 'app_amende_new', '_controller' => 'App\\Controller\\AmendeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/amende/filtre/status' => [[['_route' => 'amende_filter', '_controller' => 'App\\Controller\\AmendeController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/badge' => [[['_route' => 'app_badge_index', '_controller' => 'App\\Controller\\BadgeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/badge/Trie' => [[['_route' => 'TrieByNbpointDESC', '_controller' => 'App\\Controller\\BadgeController::TrieNbpointDESC'], null, null, null, false, false, null]],
        '/badge/Triee' => [[['_route' => 'TrieByNbpointASC', '_controller' => 'App\\Controller\\BadgeController::TrieNbpointASC'], null, null, null, false, false, null]],
        '/badge/new' => [[['_route' => 'app_badge_new', '_controller' => 'App\\Controller\\BadgeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/badges' => [[['_route' => 'app_badges', '_controller' => 'App\\Controller\\BadgesController::index'], null, null, null, false, false, null]],
        '/AfficherBadge' => [[['_route' => 'Aff', '_controller' => 'App\\Controller\\BadgesController::Affiche'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'base', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null],
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null],
        ],
        '/chart/bayoudh' => [[['_route' => 'app_park_chart', '_controller' => 'App\\Controller\\ChartParkController::chart'], null, null, null, false, false, null]],
        '/historique' => [[['_route' => 'app_historique_index', '_controller' => 'App\\Controller\\HistoriqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/historique/new' => [[['_route' => 'app_historique_new', '_controller' => 'App\\Controller\\HistoriqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/h' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\IndexController::index'], null, ['GET' => 0], null, false, false, null]],
        '/itineraire' => [[['_route' => 'app_itineraire_index', '_controller' => 'App\\Controller\\ItineraireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/itineraire/new' => [[['_route' => 'app_itineraire_new', '_controller' => 'App\\Controller\\ItineraireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/maintenance' => [[['_route' => 'app_maintenance_index', '_controller' => 'App\\Controller\\MaintenanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/maintenance/new' => [[['_route' => 'app_maintenance_new', '_controller' => 'App\\Controller\\MaintenanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offre' => [[['_route' => 'app_offre_index', '_controller' => 'App\\Controller\\OffreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offre/searchO' => [[['_route' => 'searchO', '_controller' => 'App\\Controller\\OffreController::searchOffre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offre/new' => [[['_route' => 'app_offre_new', '_controller' => 'App\\Controller\\OffreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offres' => [[['_route' => 'app_offres', '_controller' => 'App\\Controller\\OffresController::index'], null, null, null, false, false, null]],
        '/AfficherOffre' => [[['_route' => 'Affi', '_controller' => 'App\\Controller\\OffresController::Affiche'], null, null, null, false, false, null]],
        '/park' => [[['_route' => 'app_park_index', '_controller' => 'App\\Controller\\ParkController::index'], null, ['GET' => 0], null, true, false, null]],
        '/park/admin' => [[['_route' => 'app_park_indexad', '_controller' => 'App\\Controller\\ParkController::indexad'], null, ['GET' => 0], null, false, false, null]],
        '/park/new' => [[['_route' => 'app_park_new', '_controller' => 'App\\Controller\\ParkController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rating' => [[['_route' => 'app_rating_index', '_controller' => 'App\\Controller\\RatingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rating/new' => [[['_route' => 'app_rating_new', '_controller' => 'App\\Controller\\RatingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/filtre/status' => [[['_route' => 'reservation_filter', '_controller' => 'App\\Controller\\ReservationController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'app_search_q_r', '_controller' => 'App\\Controller\\SearchQRController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/utilisateur' => [
            [['_route' => 'app_utilisateurapp_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/utilisateur/new' => [[['_route' => 'app_utilisateurapp_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicule' => [[['_route' => 'app_vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/indexback' => [[['_route' => 'app_vehicule_indexback', '_controller' => 'App\\Controller\\VehiculeController::indexbackkk'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/back' => [[['_route' => 'app_vehicule_back', '_controller' => 'App\\Controller\\VehiculeController::indexback'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/search' => [[['_route' => 'search_vehicule', '_controller' => 'App\\Controller\\VehiculeController::search'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/new' => [[['_route' => 'app_vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicule/filtre/type' => [[['_route' => 'vehicule_filter', '_controller' => 'App\\Controller\\VehiculeController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/Search/a' => [[['_route' => 'search', '_controller' => 'App\\Controller\\VehiculeController::searchpsrchoix'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/pdf/catalogue' => [[['_route' => 'pdf_catalogue', '_controller' => 'App\\Controller\\VehiculeController::cataloguePdf'], null, ['GET' => 0], null, false, false, null]],
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/amende/(?'
                    .'|([^/]++)(*:26)'
                    .'|back/([^/]++)(*:46)'
                    .'|([^/]++)(?'
                        .'|/edit(*:69)'
                        .'|(*:76)'
                    .')'
                .')'
                .'|/badge/([^/]++)(?'
                    .'|(*:103)'
                    .'|/edit(*:116)'
                    .'|(*:124)'
                .')'
                .'|/historique/(?'
                    .'|([^/]++)(*:156)'
                    .'|user(?:/([^/]++))?(*:182)'
                    .'|([^/]++)(?'
                        .'|/edit(*:206)'
                        .'|(*:214)'
                    .')'
                .')'
                .'|/itineraire/([^/]++)(?'
                    .'|(*:247)'
                    .'|/(?'
                        .'|edit(*:263)'
                        .'|route(*:276)'
                    .')'
                    .'|(*:285)'
                .')'
                .'|/maintenance/([^/]++)(?'
                    .'|(*:318)'
                    .'|/edit(*:331)'
                    .'|(*:339)'
                .')'
                .'|/offre/([^/]++)(?'
                    .'|(*:366)'
                    .'|/edit(*:379)'
                    .'|(*:387)'
                .')'
                .'|/p(?'
                    .'|ark/([^/]++)(?'
                        .'|(*:416)'
                        .'|/(?'
                            .'|adm(*:431)'
                            .'|edit(*:443)'
                            .'|chart/test(*:461)'
                        .')'
                        .'|(*:470)'
                    .')'
                    .'|df/([^/]++)(*:490)'
                .')'
                .'|/r(?'
                    .'|ating/([^/]++)(?'
                        .'|(*:521)'
                        .'|/edit(*:534)'
                        .'|(*:542)'
                    .')'
                    .'|e(?'
                        .'|clamation/([^/]++)(?'
                            .'|(*:576)'
                            .'|/edit(*:589)'
                            .'|(*:597)'
                        .')'
                        .'|ponse/(?'
                            .'|new/([^/]++)(*:627)'
                            .'|([^/]++)(?'
                                .'|(*:646)'
                                .'|/edit(*:659)'
                                .'|(*:667)'
                            .')'
                        .')'
                        .'|servation/(?'
                            .'|new/([^/]++)(*:702)'
                            .'|([^/]++)(?'
                                .'|(*:721)'
                                .'|/edit(?'
                                    .'|Prix(*:741)'
                                    .'|(*:749)'
                                .')'
                                .'|(*:758)'
                            .')'
                            .'|tarif/([^/]++)(*:781)'
                            .'|pdf/([^/]++)(*:801)'
                        .')'
                    .')'
                .')'
                .'|/utilisateur/(?'
                    .'|([^/]++)(?'
                        .'|(*:839)'
                        .'|/edit(*:852)'
                        .'|(*:860)'
                    .')'
                    .'|block(?'
                        .'|(*:877)'
                        .'|\\-user/([^/]++)(*:900)'
                    .')'
                    .'|unblock\\-user/([^/]++)(*:931)'
                    .'|([^/]++)(*:947)'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:977)'
                    .'|/edit(*:990)'
                    .'|(*:998)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1035)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1075)'
                    .'|wdt/([^/]++)(*:1096)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1143)'
                            .'|router(*:1158)'
                            .'|exception(?'
                                .'|(*:1179)'
                                .'|\\.css(*:1193)'
                            .')'
                        .')'
                        .'|(*:1204)'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|/edit(*:1232)'
                    .'|(*:1241)'
                .')'
                .'|/profil(?'
                    .'|(*:1261)'
                    .'|/(?'
                        .'|(\\d+)(*:1279)'
                        .'|(\\d+)/edit(*:1298)'
                    .')'
                .')'
                .'|/utilisateur/(?'
                    .'|block(?'
                        .'|(*:1333)'
                        .'|\\-user/([^/]++)(*:1357)'
                    .')'
                    .'|unblock\\-user/([^/]++)(*:1389)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'app_amende_show', '_controller' => 'App\\Controller\\AmendeController::show'], ['idamende'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'app_amende_showback', '_controller' => 'App\\Controller\\AmendeController::showAdmin'], ['idamende'], ['GET' => 0], null, false, true, null]],
        69 => [[['_route' => 'app_amende_edit', '_controller' => 'App\\Controller\\AmendeController::edit'], ['idamende'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        76 => [[['_route' => 'app_amende_delete', '_controller' => 'App\\Controller\\AmendeController::delete'], ['idamende'], ['POST' => 0], null, false, true, null]],
        103 => [[['_route' => 'app_badge_show', '_controller' => 'App\\Controller\\BadgeController::show'], ['idbadge'], ['GET' => 0], null, false, true, null]],
        116 => [[['_route' => 'app_badge_edit', '_controller' => 'App\\Controller\\BadgeController::edit'], ['idbadge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        124 => [[['_route' => 'app_badge_delete', '_controller' => 'App\\Controller\\BadgeController::delete'], ['idbadge'], ['POST' => 0], null, false, true, null]],
        156 => [[['_route' => 'app_historique_show', '_controller' => 'App\\Controller\\HistoriqueController::show'], ['idhistorique'], ['GET' => 0], null, false, true, null]],
        182 => [[['_route' => 'app_historique_index2', 'iduser' => 1, '_controller' => 'App\\Controller\\HistoriqueController::index2'], ['iduser'], ['GET' => 0], null, false, true, null]],
        206 => [[['_route' => 'app_historique_edit', '_controller' => 'App\\Controller\\HistoriqueController::edit'], ['idhistorique'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        214 => [[['_route' => 'app_historique_delete', '_controller' => 'App\\Controller\\HistoriqueController::delete'], ['idhistorique'], ['POST' => 0], null, false, true, null]],
        247 => [[['_route' => 'app_itineraire_show', '_controller' => 'App\\Controller\\ItineraireController::show'], ['iditineraire'], ['GET' => 0], null, false, true, null]],
        263 => [[['_route' => 'app_itineraire_edit', '_controller' => 'App\\Controller\\ItineraireController::edit'], ['iditineraire'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        276 => [[['_route' => 'app_itineraire_route', '_controller' => 'App\\Controller\\ItineraireController::route'], ['iditineraire'], ['GET' => 0], null, false, false, null]],
        285 => [[['_route' => 'app_itineraire_delete', '_controller' => 'App\\Controller\\ItineraireController::delete'], ['iditineraire'], ['POST' => 0], null, false, true, null]],
        318 => [[['_route' => 'app_maintenance_show', '_controller' => 'App\\Controller\\MaintenanceController::show'], ['idmaintenance'], ['GET' => 0], null, false, true, null]],
        331 => [[['_route' => 'app_maintenance_edit', '_controller' => 'App\\Controller\\MaintenanceController::edit'], ['idmaintenance'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        339 => [[['_route' => 'app_maintenance_delete', '_controller' => 'App\\Controller\\MaintenanceController::delete'], ['idmaintenance'], ['POST' => 0], null, false, true, null]],
        366 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        379 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        387 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        416 => [[['_route' => 'app_park_show', '_controller' => 'App\\Controller\\ParkController::show'], ['idpark'], ['GET' => 0], null, false, true, null]],
        431 => [[['_route' => 'app_park_showadm', '_controller' => 'App\\Controller\\ParkController::showadm'], ['idpark'], ['GET' => 0], null, false, false, null]],
        443 => [[['_route' => 'app_park_edit', '_controller' => 'App\\Controller\\ParkController::edit'], ['idpark'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        461 => [[['_route' => 'app_chart_park', '_controller' => 'App\\Controller\\ParkController::chart'], ['idpark'], null, null, false, false, null]],
        470 => [[['_route' => 'app_park_delete', '_controller' => 'App\\Controller\\ParkController::delete'], ['idpark'], ['POST' => 0], null, false, true, null]],
        490 => [[['_route' => 'app_show_pdf', '_controller' => 'App\\Controller\\SearchQRController::showPdf'], ['cin'], null, null, false, true, null]],
        521 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['idrating'], ['GET' => 0], null, false, true, null]],
        534 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['idrating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        542 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['idrating'], ['POST' => 0], null, false, true, null]],
        576 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::showback'], ['idreclamation'], ['GET' => 0], null, false, true, null]],
        589 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idreclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        597 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idreclamation'], ['POST' => 0], null, false, true, null]],
        627 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        646 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['idreponse'], ['GET' => 0], null, false, true, null]],
        659 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['idreponse'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        667 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['idreponse'], ['POST' => 0], null, false, true, null]],
        702 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['idvehicule'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        721 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        741 => [[['_route' => 'app_reservation_editPrix', '_controller' => 'App\\Controller\\ReservationController::editPrix'], ['idreservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        749 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['idreservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        758 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['idreservation'], ['POST' => 0], null, false, true, null]],
        781 => [[['_route' => 'app_reservation_calculatetotalprice', '_controller' => 'App\\Controller\\ReservationController::calculateTotalPrice'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        801 => [[['_route' => 'reservation_pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdfa'], ['idreservation'], null, null, false, true, null]],
        839 => [[['_route' => 'app_utilisateurapp_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['iduser'], ['GET' => 0], null, false, true, null]],
        852 => [[['_route' => 'app_utilisateurapp_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        860 => [[['_route' => 'app_utilisateurapp_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['iduser'], ['POST' => 0], null, false, true, null]],
        877 => [[['_route' => 'app_utilisateurapp_utilisateur_block', '_controller' => 'App\\Controller\\UtilisateurController::showBlock'], [], ['GET' => 0], null, false, false, null]],
        900 => [[['_route' => 'app_utilisateurblock_user', '_controller' => 'App\\Controller\\UtilisateurController::blockUser'], ['iduser'], null, null, false, true, null]],
        931 => [[['_route' => 'app_utilisateurunblock_user', '_controller' => 'App\\Controller\\UtilisateurController::unblockUser'], ['iduser'], null, null, false, true, null]],
        947 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['iduser'], null, null, false, true, null]],
        977 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idvehicule'], ['GET' => 0], null, false, true, null]],
        990 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idvehicule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        998 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idvehicule'], ['POST' => 0], null, false, true, null]],
        1035 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1075 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1096 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1143 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1158 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1179 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1193 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1204 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1232 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1241 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['iduser'], ['POST' => 0], null, false, true, null]],
        1261 => [[['_route' => 'app_profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], [], ['GET' => 0], null, false, false, null]],
        1279 => [[['_route' => 'profil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['iduser'], ['GET' => 0], null, false, true, null]],
        1298 => [[['_route' => 'profil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1333 => [[['_route' => 'app_utilisateur_block', '_controller' => 'App\\Controller\\UtilisateurController::showBlock'], [], ['GET' => 0], null, false, false, null]],
        1357 => [[['_route' => 'block_user', '_controller' => 'App\\Controller\\UtilisateurController::blockUser'], ['iduser'], ['POST' => 0], null, false, true, null]],
        1389 => [
            [['_route' => 'unblock_user', '_controller' => 'App\\Controller\\UtilisateurController::unblockUser'], ['iduser'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
