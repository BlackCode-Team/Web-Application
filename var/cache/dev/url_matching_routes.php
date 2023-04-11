<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/badge' => [[['_route' => 'app_badge_index', '_controller' => 'App\\Controller\\BadgeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/badge/new' => [[['_route' => 'app_badge_new', '_controller' => 'App\\Controller\\BadgeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/badges' => [[['_route' => 'app_badges', '_controller' => 'App\\Controller\\BadgesController::index'], null, null, null, false, false, null]],
        '/AfficherBadge' => [[['_route' => 'Aff', '_controller' => 'App\\Controller\\BadgesController::Affiche'], null, null, null, false, false, null]],
        '/historique' => [[['_route' => 'app_historique_index', '_controller' => 'App\\Controller\\HistoriqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/historique/new' => [[['_route' => 'app_historique_new', '_controller' => 'App\\Controller\\HistoriqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/itineraire' => [[['_route' => 'app_itineraire_index', '_controller' => 'App\\Controller\\ItineraireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/itineraire/new' => [[['_route' => 'app_itineraire_new', '_controller' => 'App\\Controller\\ItineraireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offre' => [[['_route' => 'app_offre_index', '_controller' => 'App\\Controller\\OffreController::index'], null, ['GET' => 0], null, true, false, null]],
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
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicule' => [[['_route' => 'app_vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/new' => [[['_route' => 'app_vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/badge/([^/]++)(?'
                    .'|(*:25)'
                    .'|/edit(*:37)'
                    .'|(*:44)'
                .')'
                .'|/historique/([^/]++)(?'
                    .'|(*:75)'
                    .'|/edit(*:87)'
                    .'|(*:94)'
                .')'
                .'|/itineraire/([^/]++)(?'
                    .'|(*:125)'
                    .'|/edit(*:138)'
                    .'|(*:146)'
                .')'
                .'|/offre/([^/]++)(?'
                    .'|(*:173)'
                    .'|/edit(*:186)'
                    .'|(*:194)'
                .')'
                .'|/park/([^/]++)(?'
                    .'|(*:220)'
                    .'|/(?'
                        .'|adm(*:235)'
                        .'|edit(*:247)'
                    .')'
                    .'|(*:256)'
                .')'
                .'|/r(?'
                    .'|ating/([^/]++)(?'
                        .'|(*:287)'
                        .'|/edit(*:300)'
                        .'|(*:308)'
                    .')'
                    .'|e(?'
                        .'|clamation/([^/]++)(?'
                            .'|(*:342)'
                            .'|/edit(*:355)'
                            .'|(*:363)'
                        .')'
                        .'|ponse/([^/]++)(?'
                            .'|(*:389)'
                            .'|/edit(*:402)'
                            .'|(*:410)'
                        .')'
                        .'|servation/([^/]++)(?'
                            .'|(*:440)'
                            .'|/edit(*:453)'
                            .'|(*:461)'
                        .')'
                    .')'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:496)'
                    .'|/edit(*:509)'
                    .'|(*:517)'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:547)'
                    .'|/edit(*:560)'
                    .'|(*:568)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:608)'
                    .'|wdt/([^/]++)(*:628)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:674)'
                            .'|router(*:688)'
                            .'|exception(?'
                                .'|(*:708)'
                                .'|\\.css(*:721)'
                            .')'
                        .')'
                        .'|(*:731)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'app_badge_show', '_controller' => 'App\\Controller\\BadgeController::show'], ['idbadge'], ['GET' => 0], null, false, true, null]],
        37 => [[['_route' => 'app_badge_edit', '_controller' => 'App\\Controller\\BadgeController::edit'], ['idbadge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        44 => [[['_route' => 'app_badge_delete', '_controller' => 'App\\Controller\\BadgeController::delete'], ['idbadge'], ['POST' => 0], null, false, true, null]],
        75 => [[['_route' => 'app_historique_show', '_controller' => 'App\\Controller\\HistoriqueController::show'], ['idhistorique'], ['GET' => 0], null, false, true, null]],
        87 => [[['_route' => 'app_historique_edit', '_controller' => 'App\\Controller\\HistoriqueController::edit'], ['idhistorique'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        94 => [[['_route' => 'app_historique_delete', '_controller' => 'App\\Controller\\HistoriqueController::delete'], ['idhistorique'], ['POST' => 0], null, false, true, null]],
        125 => [[['_route' => 'app_itineraire_show', '_controller' => 'App\\Controller\\ItineraireController::show'], ['iditineraire'], ['GET' => 0], null, false, true, null]],
        138 => [[['_route' => 'app_itineraire_edit', '_controller' => 'App\\Controller\\ItineraireController::edit'], ['iditineraire'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        146 => [[['_route' => 'app_itineraire_delete', '_controller' => 'App\\Controller\\ItineraireController::delete'], ['iditineraire'], ['POST' => 0], null, false, true, null]],
        173 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        186 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        194 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        220 => [[['_route' => 'app_park_show', '_controller' => 'App\\Controller\\ParkController::show'], ['idpark'], ['GET' => 0], null, false, true, null]],
        235 => [[['_route' => 'app_park_showadm', '_controller' => 'App\\Controller\\ParkController::showadm'], ['idpark'], ['GET' => 0], null, false, false, null]],
        247 => [[['_route' => 'app_park_edit', '_controller' => 'App\\Controller\\ParkController::edit'], ['idpark'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        256 => [[['_route' => 'app_park_delete', '_controller' => 'App\\Controller\\ParkController::Delete'], ['idpark'], null, null, false, true, null]],
        287 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['idrating'], ['GET' => 0], null, false, true, null]],
        300 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['idrating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['idrating'], ['POST' => 0], null, false, true, null]],
        342 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idreclamation'], ['GET' => 0], null, false, true, null]],
        355 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idreclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        363 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idreclamation'], ['POST' => 0], null, false, true, null]],
        389 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['idreponse'], ['GET' => 0], null, false, true, null]],
        402 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['idreponse'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        410 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['idreponse'], ['POST' => 0], null, false, true, null]],
        440 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        453 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['idreservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        461 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['idreservation'], ['POST' => 0], null, false, true, null]],
        496 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['iduser'], ['GET' => 0], null, false, true, null]],
        509 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        517 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['iduser'], ['POST' => 0], null, false, true, null]],
        547 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idvehicule'], ['GET' => 0], null, false, true, null]],
        560 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idvehicule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        568 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idvehicule'], ['POST' => 0], null, false, true, null]],
        608 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        628 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        674 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        688 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        708 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        721 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        731 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
