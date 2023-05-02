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
                .'|/b(?'
                    .'|adge/([^/]++)(?'
                        .'|(*:106)'
                        .'|/edit(*:119)'
                        .'|(*:127)'
                    .')'
                    .'|lock/([^/]++)(*:149)'
                .')'
                .'|/historique/(?'
                    .'|([^/]++)(*:181)'
                    .'|user(?:/([^/]++))?(*:207)'
                    .'|([^/]++)(?'
                        .'|/edit(*:231)'
                        .'|(*:239)'
                    .')'
                .')'
                .'|/itineraire/([^/]++)(?'
                    .'|(*:272)'
                    .'|/(?'
                        .'|edit(*:288)'
                        .'|route(*:301)'
                    .')'
                    .'|(*:310)'
                .')'
                .'|/maintenance/([^/]++)(?'
                    .'|(*:343)'
                    .'|/edit(*:356)'
                    .'|(*:364)'
                .')'
                .'|/offre/([^/]++)(?'
                    .'|(*:391)'
                    .'|/edit(*:404)'
                    .'|(*:412)'
                .')'
                .'|/park/([^/]++)(?'
                    .'|(*:438)'
                    .'|/(?'
                        .'|adm(*:453)'
                        .'|edit(*:465)'
                        .'|chart/test(*:483)'
                    .')'
                    .'|(*:492)'
                .')'
                .'|/r(?'
                    .'|ating/([^/]++)(?'
                        .'|(*:523)'
                        .'|/edit(*:536)'
                        .'|(*:544)'
                    .')'
                    .'|e(?'
                        .'|clamation/([^/]++)(?'
                            .'|(*:578)'
                            .'|/edit(*:591)'
                            .'|(*:599)'
                        .')'
                        .'|ponse/(?'
                            .'|new/([^/]++)(*:629)'
                            .'|([^/]++)(?'
                                .'|(*:648)'
                                .'|/edit(*:661)'
                                .'|(*:669)'
                            .')'
                        .')'
                        .'|servation/(?'
                            .'|new/([^/]++)(*:704)'
                            .'|([^/]++)(?'
                                .'|(*:723)'
                                .'|/edit(?'
                                    .'|Prix(*:743)'
                                    .'|(*:751)'
                                .')'
                                .'|(*:760)'
                            .')'
                            .'|tarif/([^/]++)(*:783)'
                            .'|pdf/([^/]++)(*:803)'
                        .')'
                    .')'
                .')'
                .'|/u(?'
                    .'|tilisateur/(?'
                        .'|([^/]++)(?'
                            .'|(*:844)'
                            .'|/edit(*:857)'
                            .'|(*:865)'
                        .')'
                        .'|block(?'
                            .'|(*:882)'
                            .'|\\-user/([^/]++)(*:905)'
                        .')'
                        .'|unblock\\-user/([^/]++)(*:936)'
                        .'|([^/]++)(*:952)'
                        .'|block(*:965)'
                    .')'
                    .'|nblock/([^/]++)(*:989)'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:1019)'
                    .'|/edit(*:1033)'
                    .'|(*:1042)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1080)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1120)'
                    .'|wdt/([^/]++)(*:1141)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1188)'
                            .'|router(*:1203)'
                            .'|exception(?'
                                .'|(*:1224)'
                                .'|\\.css(*:1238)'
                            .')'
                        .')'
                        .'|(*:1249)'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|/edit(*:1277)'
                    .'|(*:1286)'
                .')'
                .'|/profil(?'
                    .'|(*:1306)'
                    .'|/(?'
                        .'|(\\d+)(*:1324)'
                        .'|(\\d+)/edit(*:1343)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'app_amende_show', '_controller' => 'App\\Controller\\AmendeController::show'], ['idamende'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'app_amende_showback', '_controller' => 'App\\Controller\\AmendeController::showAdmin'], ['idamende'], ['GET' => 0], null, false, true, null]],
        69 => [[['_route' => 'app_amende_edit', '_controller' => 'App\\Controller\\AmendeController::edit'], ['idamende'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        76 => [[['_route' => 'app_amende_delete', '_controller' => 'App\\Controller\\AmendeController::delete'], ['idamende'], ['POST' => 0], null, false, true, null]],
        106 => [[['_route' => 'app_badge_show', '_controller' => 'App\\Controller\\BadgeController::show'], ['idbadge'], ['GET' => 0], null, false, true, null]],
        119 => [[['_route' => 'app_badge_edit', '_controller' => 'App\\Controller\\BadgeController::edit'], ['idbadge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        127 => [[['_route' => 'app_badge_delete', '_controller' => 'App\\Controller\\BadgeController::delete'], ['idbadge'], ['POST' => 0], null, false, true, null]],
        149 => [[['_route' => 'block_user', '_controller' => 'App\\Controller\\UtilisateurController::blockUser'], ['iduser'], null, null, false, true, null]],
        181 => [[['_route' => 'app_historique_show', '_controller' => 'App\\Controller\\HistoriqueController::show'], ['idhistorique'], ['GET' => 0], null, false, true, null]],
        207 => [[['_route' => 'app_historique_index2', 'iduser' => 1, '_controller' => 'App\\Controller\\HistoriqueController::index2'], ['iduser'], ['GET' => 0], null, false, true, null]],
        231 => [[['_route' => 'app_historique_edit', '_controller' => 'App\\Controller\\HistoriqueController::edit'], ['idhistorique'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        239 => [[['_route' => 'app_historique_delete', '_controller' => 'App\\Controller\\HistoriqueController::delete'], ['idhistorique'], ['POST' => 0], null, false, true, null]],
        272 => [[['_route' => 'app_itineraire_show', '_controller' => 'App\\Controller\\ItineraireController::show'], ['iditineraire'], ['GET' => 0], null, false, true, null]],
        288 => [[['_route' => 'app_itineraire_edit', '_controller' => 'App\\Controller\\ItineraireController::edit'], ['iditineraire'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        301 => [[['_route' => 'app_itineraire_route', '_controller' => 'App\\Controller\\ItineraireController::route'], ['iditineraire'], ['GET' => 0], null, false, false, null]],
        310 => [[['_route' => 'app_itineraire_delete', '_controller' => 'App\\Controller\\ItineraireController::delete'], ['iditineraire'], ['POST' => 0], null, false, true, null]],
        343 => [[['_route' => 'app_maintenance_show', '_controller' => 'App\\Controller\\MaintenanceController::show'], ['idmaintenance'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'app_maintenance_edit', '_controller' => 'App\\Controller\\MaintenanceController::edit'], ['idmaintenance'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'app_maintenance_delete', '_controller' => 'App\\Controller\\MaintenanceController::delete'], ['idmaintenance'], ['POST' => 0], null, false, true, null]],
        391 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        404 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        412 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        438 => [[['_route' => 'app_park_show', '_controller' => 'App\\Controller\\ParkController::show'], ['idpark'], ['GET' => 0], null, false, true, null]],
        453 => [[['_route' => 'app_park_showadm', '_controller' => 'App\\Controller\\ParkController::showadm'], ['idpark'], ['GET' => 0], null, false, false, null]],
        465 => [[['_route' => 'app_park_edit', '_controller' => 'App\\Controller\\ParkController::edit'], ['idpark'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        483 => [[['_route' => 'app_chart_park', '_controller' => 'App\\Controller\\ParkController::chart'], ['idpark'], null, null, false, false, null]],
        492 => [[['_route' => 'app_park_delete', '_controller' => 'App\\Controller\\ParkController::delete'], ['idpark'], ['POST' => 0], null, false, true, null]],
        523 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['idrating'], ['GET' => 0], null, false, true, null]],
        536 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['idrating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        544 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['idrating'], ['POST' => 0], null, false, true, null]],
        578 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::showback'], ['idreclamation'], ['GET' => 0], null, false, true, null]],
        591 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idreclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        599 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idreclamation'], ['POST' => 0], null, false, true, null]],
        629 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        648 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['idreponse'], ['GET' => 0], null, false, true, null]],
        661 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['idreponse'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        669 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['idreponse'], ['POST' => 0], null, false, true, null]],
        704 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['idvehicule'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        723 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        743 => [[['_route' => 'app_reservation_editPrix', '_controller' => 'App\\Controller\\ReservationController::editPrix'], ['idreservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        751 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['idreservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        760 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['idreservation'], ['POST' => 0], null, false, true, null]],
        783 => [[['_route' => 'app_reservation_calculatetotalprice', '_controller' => 'App\\Controller\\ReservationController::calculateTotalPrice'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        803 => [[['_route' => 'reservation_pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdfa'], ['idreservation'], null, null, false, true, null]],
        844 => [[['_route' => 'app_utilisateurapp_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['iduser'], ['GET' => 0], null, false, true, null]],
        857 => [[['_route' => 'app_utilisateurapp_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        865 => [[['_route' => 'app_utilisateurapp_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['iduser'], ['POST' => 0], null, false, true, null]],
        882 => [[['_route' => 'app_utilisateurapp_utilisateur_block', '_controller' => 'App\\Controller\\UtilisateurController::showBlock'], [], ['GET' => 0], null, false, false, null]],
        905 => [[['_route' => 'app_utilisateurblock_user', '_controller' => 'App\\Controller\\UtilisateurController::blockUser'], ['iduser'], null, null, false, true, null]],
        936 => [[['_route' => 'app_utilisateurunblock_user', '_controller' => 'App\\Controller\\UtilisateurController::unblockUser'], ['iduser'], null, null, false, true, null]],
        952 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['iduser'], null, null, false, true, null]],
        965 => [[['_route' => 'app_utilisateur_block', '_controller' => 'App\\Controller\\UtilisateurController::showBlock'], [], ['GET' => 0], null, false, false, null]],
        989 => [[['_route' => 'unblock_user', '_controller' => 'App\\Controller\\UtilisateurController::unblockUser'], ['iduser'], null, null, false, true, null]],
        1019 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idvehicule'], ['GET' => 0], null, false, true, null]],
        1033 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idvehicule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1042 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idvehicule'], ['POST' => 0], null, false, true, null]],
        1080 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1120 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1141 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1188 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1203 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1224 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1238 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1249 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1277 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1286 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['iduser'], ['POST' => 0], null, false, true, null]],
        1306 => [[['_route' => 'app_profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], [], ['GET' => 0], null, false, false, null]],
        1324 => [[['_route' => 'profil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['iduser'], ['GET' => 0], null, false, true, null]],
        1343 => [
            [['_route' => 'profil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
