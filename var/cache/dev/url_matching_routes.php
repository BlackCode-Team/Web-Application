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
        '/block' => [[['_route' => 'app_block_index', '_controller' => 'App\\Controller\\BlockedUserController::index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/b(?'
                    .'|adge/([^/]++)(?'
                        .'|(*:106)'
                        .'|/edit(*:119)'
                        .'|(*:127)'
                    .')'
                    .'|lock\\-user/([^/]++)(*:155)'
                .')'
                .'|/historique/(?'
                    .'|([^/]++)(*:187)'
                    .'|user(?:/([^/]++))?(*:213)'
                    .'|([^/]++)(?'
                        .'|/edit(*:237)'
                        .'|(*:245)'
                    .')'
                .')'
                .'|/itineraire/([^/]++)(?'
                    .'|(*:278)'
                    .'|/(?'
                        .'|edit(*:294)'
                        .'|route(*:307)'
                    .')'
                    .'|(*:316)'
                .')'
                .'|/maintenance/([^/]++)(?'
                    .'|(*:349)'
                    .'|/edit(*:362)'
                    .'|(*:370)'
                .')'
                .'|/offre/([^/]++)(?'
                    .'|(*:397)'
                    .'|/edit(*:410)'
                    .'|(*:418)'
                .')'
                .'|/p(?'
                    .'|ark/([^/]++)(?'
                        .'|(*:447)'
                        .'|/(?'
                            .'|adm(*:462)'
                            .'|edit(*:474)'
                            .'|chart/test(*:492)'
                        .')'
                        .'|(*:501)'
                    .')'
                    .'|df/([^/]++)(*:521)'
                .')'
                .'|/r(?'
                    .'|ating/([^/]++)(?'
                        .'|(*:552)'
                        .'|/edit(*:565)'
                        .'|(*:573)'
                    .')'
                    .'|e(?'
                        .'|clamation/([^/]++)(?'
                            .'|(*:607)'
                            .'|/edit(*:620)'
                            .'|(*:628)'
                        .')'
                        .'|ponse/(?'
                            .'|new/([^/]++)(*:658)'
                            .'|([^/]++)(?'
                                .'|(*:677)'
                                .'|/edit(*:690)'
                                .'|(*:698)'
                            .')'
                        .')'
                        .'|servation/(?'
                            .'|new/([^/]++)(*:733)'
                            .'|([^/]++)(?'
                                .'|(*:752)'
                                .'|/edit(?'
                                    .'|Prix(*:772)'
                                    .'|(*:780)'
                                .')'
                                .'|(*:789)'
                            .')'
                            .'|tarif/([^/]++)(*:812)'
                            .'|pdf/([^/]++)(*:832)'
                        .')'
                    .')'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:867)'
                    .'|/edit(*:880)'
                    .'|(*:888)'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:918)'
                    .'|/edit(*:931)'
                    .'|(*:939)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:976)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1015)'
                    .'|wdt/([^/]++)(*:1036)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1083)'
                            .'|router(*:1098)'
                            .'|exception(?'
                                .'|(*:1119)'
                                .'|\\.css(*:1133)'
                            .')'
                        .')'
                        .'|(*:1144)'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|/edit(*:1172)'
                    .'|(*:1181)'
                .')'
                .'|/profil(?'
                    .'|(*:1201)'
                    .'|/(?'
                        .'|(\\d+)(*:1219)'
                        .'|(\\d+)/edit(*:1238)'
                    .')'
                .')'
                .'|/alerteBlock(*:1261)'
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
        155 => [[['_route' => 'block_user', '_controller' => 'App\\Controller\\BlockedUserController::blockUser'], ['iduser'], null, null, false, true, null]],
        187 => [[['_route' => 'app_historique_show', '_controller' => 'App\\Controller\\HistoriqueController::show'], ['idhistorique'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'app_historique_index2', 'iduser' => 1, '_controller' => 'App\\Controller\\HistoriqueController::index2'], ['iduser'], ['GET' => 0], null, false, true, null]],
        237 => [[['_route' => 'app_historique_edit', '_controller' => 'App\\Controller\\HistoriqueController::edit'], ['idhistorique'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        245 => [[['_route' => 'app_historique_delete', '_controller' => 'App\\Controller\\HistoriqueController::delete'], ['idhistorique'], ['POST' => 0], null, false, true, null]],
        278 => [[['_route' => 'app_itineraire_show', '_controller' => 'App\\Controller\\ItineraireController::show'], ['iditineraire'], ['GET' => 0], null, false, true, null]],
        294 => [[['_route' => 'app_itineraire_edit', '_controller' => 'App\\Controller\\ItineraireController::edit'], ['iditineraire'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        307 => [[['_route' => 'app_itineraire_route', '_controller' => 'App\\Controller\\ItineraireController::route'], ['iditineraire'], ['GET' => 0], null, false, false, null]],
        316 => [[['_route' => 'app_itineraire_delete', '_controller' => 'App\\Controller\\ItineraireController::delete'], ['iditineraire'], ['POST' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_maintenance_show', '_controller' => 'App\\Controller\\MaintenanceController::show'], ['idmaintenance'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'app_maintenance_edit', '_controller' => 'App\\Controller\\MaintenanceController::edit'], ['idmaintenance'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        370 => [[['_route' => 'app_maintenance_delete', '_controller' => 'App\\Controller\\MaintenanceController::delete'], ['idmaintenance'], ['POST' => 0], null, false, true, null]],
        397 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        410 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        418 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        447 => [[['_route' => 'app_park_show', '_controller' => 'App\\Controller\\ParkController::show'], ['idpark'], ['GET' => 0], null, false, true, null]],
        462 => [[['_route' => 'app_park_showadm', '_controller' => 'App\\Controller\\ParkController::showadm'], ['idpark'], ['GET' => 0], null, false, false, null]],
        474 => [[['_route' => 'app_park_edit', '_controller' => 'App\\Controller\\ParkController::edit'], ['idpark'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        492 => [[['_route' => 'app_chart_park', '_controller' => 'App\\Controller\\ParkController::chart'], ['idpark'], null, null, false, false, null]],
        501 => [[['_route' => 'app_park_delete', '_controller' => 'App\\Controller\\ParkController::delete'], ['idpark'], ['POST' => 0], null, false, true, null]],
        521 => [[['_route' => 'app_show_pdf', '_controller' => 'App\\Controller\\SearchQRController::showPdf'], ['cin'], null, null, false, true, null]],
        552 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['idrating'], ['GET' => 0], null, false, true, null]],
        565 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['idrating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        573 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['idrating'], ['POST' => 0], null, false, true, null]],
        607 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::showback'], ['idreclamation'], ['GET' => 0], null, false, true, null]],
        620 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idreclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        628 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idreclamation'], ['POST' => 0], null, false, true, null]],
        658 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        677 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['idreponse'], ['GET' => 0], null, false, true, null]],
        690 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['idreponse'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        698 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['idreponse'], ['POST' => 0], null, false, true, null]],
        733 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['idvehicule'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        752 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        772 => [[['_route' => 'app_reservation_editPrix', '_controller' => 'App\\Controller\\ReservationController::editPrix'], ['idreservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        780 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['idreservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        789 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['idreservation'], ['POST' => 0], null, false, true, null]],
        812 => [[['_route' => 'app_reservation_calculatetotalprice', '_controller' => 'App\\Controller\\ReservationController::calculateTotalPrice'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        832 => [[['_route' => 'reservation_pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdfa'], ['idreservation'], null, null, false, true, null]],
        867 => [[['_route' => 'app_utilisateurapp_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['iduser'], ['GET' => 0], null, false, true, null]],
        880 => [[['_route' => 'app_utilisateurapp_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        888 => [
            [['_route' => 'app_utilisateurapp_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['iduser'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['iduser'], null, null, false, true, null],
        ],
        918 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idvehicule'], ['GET' => 0], null, false, true, null]],
        931 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idvehicule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        939 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idvehicule'], ['POST' => 0], null, false, true, null]],
        976 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1015 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1036 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1083 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1098 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1119 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1133 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1144 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1172 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1181 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['iduser'], ['POST' => 0], null, false, true, null]],
        1201 => [[['_route' => 'app_profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], [], ['GET' => 0], null, false, false, null]],
        1219 => [[['_route' => 'profil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['iduser'], ['GET' => 0], null, false, true, null]],
        1238 => [[['_route' => 'profil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1261 => [
            [['_route' => 'blocked_user', '_controller' => 'App\\Controller\\BlockedUserController::alert'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
