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
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/filtre/status' => [[['_route' => 'reservation_filter', '_controller' => 'App\\Controller\\ReservationController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/utilisateur' => [
            [['_route' => 'app_utilisateurapp_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/utilisateur/new' => [[['_route' => 'app_utilisateurapp_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicule' => [[['_route' => 'app_vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/back' => [[['_route' => 'app_vehicule_indexback', '_controller' => 'App\\Controller\\VehiculeController::indexback'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/amende/([^/]++)(?'
                    .'|(*:26)'
                    .'|/edit(*:38)'
                    .'|(*:45)'
                .')'
                .'|/b(?'
                    .'|adge/([^/]++)(?'
                        .'|(*:74)'
                        .'|/edit(*:86)'
                        .'|(*:93)'
                    .')'
                    .'|lock/([^/]++)(*:114)'
                .')'
                .'|/historique/(?'
                    .'|([^/]++)(*:146)'
                    .'|user(?:/([^/]++))?(*:172)'
                    .'|([^/]++)(?'
                        .'|/edit(*:196)'
                        .'|(*:204)'
                    .')'
                .')'
                .'|/itineraire/([^/]++)(?'
                    .'|(*:237)'
                    .'|/(?'
                        .'|edit(*:253)'
                        .'|route(*:266)'
                    .')'
                    .'|(*:275)'
                .')'
                .'|/maintenance/([^/]++)(?'
                    .'|(*:308)'
                    .'|/edit(*:321)'
                    .'|(*:329)'
                .')'
                .'|/offre/([^/]++)(?'
                    .'|(*:356)'
                    .'|/edit(*:369)'
                    .'|(*:377)'
                .')'
                .'|/park/([^/]++)(?'
                    .'|(*:403)'
                    .'|/(?'
                        .'|adm(*:418)'
                        .'|edit(*:430)'
                        .'|chart/test(*:448)'
                    .')'
                    .'|(*:457)'
                .')'
                .'|/r(?'
                    .'|ating/([^/]++)(?'
                        .'|(*:488)'
                        .'|/edit(*:501)'
                        .'|(*:509)'
                    .')'
                    .'|e(?'
                        .'|clamation/([^/]++)(?'
                            .'|(*:543)'
                            .'|/edit(*:556)'
                            .'|(*:564)'
                        .')'
                        .'|ponse/(?'
                            .'|new/([^/]++)(*:594)'
                            .'|([^/]++)(?'
                                .'|(*:613)'
                                .'|/edit(*:626)'
                                .'|(*:634)'
                            .')'
                        .')'
                        .'|servation/(?'
                            .'|([^/]++)(?'
                                .'|(*:668)'
                                .'|/edit(?'
                                    .'|Prix(*:688)'
                                    .'|(*:696)'
                                .')'
                                .'|(*:705)'
                            .')'
                            .'|tarif/([^/]++)(*:728)'
                            .'|pdf/([^/]++)(*:748)'
                        .')'
                    .')'
                .')'
                .'|/u(?'
                    .'|tilisateur/(?'
                        .'|([^/]++)(?'
                            .'|(*:789)'
                            .'|/edit(*:802)'
                            .'|(*:810)'
                        .')'
                        .'|block(?'
                            .'|(*:827)'
                            .'|\\-user/([^/]++)(*:850)'
                        .')'
                        .'|unblock\\-user/([^/]++)(*:881)'
                        .'|([^/]++)(*:897)'
                        .'|block(*:910)'
                    .')'
                    .'|nblock/([^/]++)(*:934)'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:964)'
                    .'|/edit(*:977)'
                    .'|(*:985)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1022)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1062)'
                    .'|wdt/([^/]++)(*:1083)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1130)'
                            .'|router(*:1145)'
                            .'|exception(?'
                                .'|(*:1166)'
                                .'|\\.css(*:1180)'
                            .')'
                        .')'
                        .'|(*:1191)'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|/edit(*:1219)'
                    .'|(*:1228)'
                .')'
                .'|/profil(?'
                    .'|(*:1248)'
                    .'|/(?'
                        .'|(\\d+)(*:1266)'
                        .'|(\\d+)/edit(*:1285)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'app_amende_show', '_controller' => 'App\\Controller\\AmendeController::show'], ['idamende'], ['GET' => 0], null, false, true, null]],
        38 => [[['_route' => 'app_amende_edit', '_controller' => 'App\\Controller\\AmendeController::edit'], ['idamende'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        45 => [[['_route' => 'app_amende_delete', '_controller' => 'App\\Controller\\AmendeController::delete'], ['idamende'], ['POST' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_badge_show', '_controller' => 'App\\Controller\\BadgeController::show'], ['idbadge'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'app_badge_edit', '_controller' => 'App\\Controller\\BadgeController::edit'], ['idbadge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        93 => [[['_route' => 'app_badge_delete', '_controller' => 'App\\Controller\\BadgeController::delete'], ['idbadge'], ['POST' => 0], null, false, true, null]],
        114 => [[['_route' => 'block_user', '_controller' => 'App\\Controller\\UtilisateurController::blockUser'], ['iduser'], null, null, false, true, null]],
        146 => [[['_route' => 'app_historique_show', '_controller' => 'App\\Controller\\HistoriqueController::show'], ['idhistorique'], ['GET' => 0], null, false, true, null]],
        172 => [[['_route' => 'app_historique_index2', 'iduser' => 1, '_controller' => 'App\\Controller\\HistoriqueController::index2'], ['iduser'], ['GET' => 0], null, false, true, null]],
        196 => [[['_route' => 'app_historique_edit', '_controller' => 'App\\Controller\\HistoriqueController::edit'], ['idhistorique'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        204 => [[['_route' => 'app_historique_delete', '_controller' => 'App\\Controller\\HistoriqueController::delete'], ['idhistorique'], ['POST' => 0], null, false, true, null]],
        237 => [[['_route' => 'app_itineraire_show', '_controller' => 'App\\Controller\\ItineraireController::show'], ['iditineraire'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'app_itineraire_edit', '_controller' => 'App\\Controller\\ItineraireController::edit'], ['iditineraire'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'app_itineraire_route', '_controller' => 'App\\Controller\\ItineraireController::route'], ['iditineraire'], ['GET' => 0], null, false, false, null]],
        275 => [[['_route' => 'app_itineraire_delete', '_controller' => 'App\\Controller\\ItineraireController::delete'], ['iditineraire'], ['POST' => 0], null, false, true, null]],
        308 => [[['_route' => 'app_maintenance_show', '_controller' => 'App\\Controller\\MaintenanceController::show'], ['idmaintenance'], ['GET' => 0], null, false, true, null]],
        321 => [[['_route' => 'app_maintenance_edit', '_controller' => 'App\\Controller\\MaintenanceController::edit'], ['idmaintenance'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        329 => [[['_route' => 'app_maintenance_delete', '_controller' => 'App\\Controller\\MaintenanceController::delete'], ['idmaintenance'], ['POST' => 0], null, false, true, null]],
        356 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        377 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        403 => [[['_route' => 'app_park_show', '_controller' => 'App\\Controller\\ParkController::show'], ['idpark'], ['GET' => 0], null, false, true, null]],
        418 => [[['_route' => 'app_park_showadm', '_controller' => 'App\\Controller\\ParkController::showadm'], ['idpark'], ['GET' => 0], null, false, false, null]],
        430 => [[['_route' => 'app_park_edit', '_controller' => 'App\\Controller\\ParkController::edit'], ['idpark'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        448 => [[['_route' => 'app_chart_park', '_controller' => 'App\\Controller\\ParkController::chart'], ['idpark'], null, null, false, false, null]],
        457 => [[['_route' => 'app_park_delete', '_controller' => 'App\\Controller\\ParkController::delete'], ['idpark'], ['POST' => 0], null, false, true, null]],
        488 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['idrating'], ['GET' => 0], null, false, true, null]],
        501 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['idrating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        509 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['idrating'], ['POST' => 0], null, false, true, null]],
        543 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::showback'], ['idreclamation'], ['GET' => 0], null, false, true, null]],
        556 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idreclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        564 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idreclamation'], ['POST' => 0], null, false, true, null]],
        594 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        613 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['idreponse'], ['GET' => 0], null, false, true, null]],
        626 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['idreponse'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        634 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['idreponse'], ['POST' => 0], null, false, true, null]],
        668 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        688 => [[['_route' => 'app_reservation_editPrix', '_controller' => 'App\\Controller\\ReservationController::editPrix'], ['idreservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        696 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['idreservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        705 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['idreservation'], ['POST' => 0], null, false, true, null]],
        728 => [[['_route' => 'app_reservation_calculatetotalprice', '_controller' => 'App\\Controller\\ReservationController::calculateTotalPrice'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        748 => [[['_route' => 'reservation_pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdfa'], ['idreservation'], null, null, false, true, null]],
        789 => [[['_route' => 'app_utilisateurapp_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['iduser'], ['GET' => 0], null, false, true, null]],
        802 => [[['_route' => 'app_utilisateurapp_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        810 => [[['_route' => 'app_utilisateurapp_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['iduser'], ['POST' => 0], null, false, true, null]],
        827 => [[['_route' => 'app_utilisateurapp_utilisateur_block', '_controller' => 'App\\Controller\\UtilisateurController::showBlock'], [], ['GET' => 0], null, false, false, null]],
        850 => [[['_route' => 'app_utilisateurblock_user', '_controller' => 'App\\Controller\\UtilisateurController::blockUser'], ['iduser'], null, null, false, true, null]],
        881 => [[['_route' => 'app_utilisateurunblock_user', '_controller' => 'App\\Controller\\UtilisateurController::unblockUser'], ['iduser'], null, null, false, true, null]],
        897 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['iduser'], null, null, false, true, null]],
        910 => [[['_route' => 'app_utilisateur_block', '_controller' => 'App\\Controller\\UtilisateurController::showBlock'], [], ['GET' => 0], null, false, false, null]],
        934 => [[['_route' => 'unblock_user', '_controller' => 'App\\Controller\\UtilisateurController::unblockUser'], ['iduser'], null, null, false, true, null]],
        964 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idvehicule'], ['GET' => 0], null, false, true, null]],
        977 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idvehicule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        985 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idvehicule'], ['POST' => 0], null, false, true, null]],
        1022 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1062 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1083 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1130 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1145 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1166 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1180 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1219 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1228 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['iduser'], ['POST' => 0], null, false, true, null]],
        1248 => [[['_route' => 'app_profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], [], ['GET' => 0], null, false, false, null]],
        1266 => [[['_route' => 'profil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['iduser'], ['GET' => 0], null, false, true, null]],
        1285 => [
            [['_route' => 'profil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
