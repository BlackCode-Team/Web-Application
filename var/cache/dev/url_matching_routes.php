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
        '/badge' => [[['_route' => 'app_badge_index', '_controller' => 'App\\Controller\\BadgeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/badge/new' => [[['_route' => 'app_badge_new', '_controller' => 'App\\Controller\\BadgeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/badges' => [[['_route' => 'app_badges', '_controller' => 'App\\Controller\\BadgesController::index'], null, null, null, false, false, null]],
        '/AfficherBadge' => [[['_route' => 'Aff', '_controller' => 'App\\Controller\\BadgesController::Affiche'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'base', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null],
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null],
        ],
        '/historique' => [[['_route' => 'app_historique_index', '_controller' => 'App\\Controller\\HistoriqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/historique/new' => [[['_route' => 'app_historique_new', '_controller' => 'App\\Controller\\HistoriqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/itineraire' => [[['_route' => 'app_itineraire_index', '_controller' => 'App\\Controller\\ItineraireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/itineraire/new' => [[['_route' => 'app_itineraire_new', '_controller' => 'App\\Controller\\ItineraireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
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
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [
            [['_route' => 'app_utilisateurapp_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/utilisateur/new' => [[['_route' => 'app_utilisateurapp_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicule' => [[['_route' => 'app_vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/back' => [[['_route' => 'app_vehicule_indexback', '_controller' => 'App\\Controller\\VehiculeController::indexback'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/new' => [[['_route' => 'app_vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                    .'|/edit(*:250)'
                    .'|(*:258)'
                .')'
                .'|/offre/([^/]++)(?'
                    .'|(*:285)'
                    .'|/edit(*:298)'
                    .'|(*:306)'
                .')'
                .'|/park/([^/]++)(?'
                    .'|(*:332)'
                    .'|/(?'
                        .'|adm(*:347)'
                        .'|edit(*:359)'
                    .')'
                    .'|(*:368)'
                .')'
                .'|/r(?'
                    .'|ating/([^/]++)(?'
                        .'|(*:399)'
                        .'|/edit(*:412)'
                        .'|(*:420)'
                    .')'
                    .'|e(?'
                        .'|clamation/([^/]++)(?'
                            .'|(*:454)'
                            .'|/edit(*:467)'
                            .'|(*:475)'
                        .')'
                        .'|ponse/(?'
                            .'|new/([^/]++)(*:505)'
                            .'|([^/]++)(?'
                                .'|(*:524)'
                                .'|/edit(*:537)'
                                .'|(*:545)'
                            .')'
                        .')'
                        .'|servation/(?'
                            .'|([^/]++)(?'
                                .'|(*:579)'
                                .'|/edit(*:592)'
                                .'|(*:600)'
                            .')'
                            .'|tarif/([^/]++)(*:623)'
                        .')'
                    .')'
                .')'
                .'|/u(?'
                    .'|tilisateur/(?'
                        .'|([^/]++)(?'
                            .'|(*:664)'
                            .'|/edit(*:677)'
                            .'|(*:685)'
                        .')'
                        .'|block(?'
                            .'|(*:702)'
                            .'|\\-user/([^/]++)(*:725)'
                        .')'
                        .'|unblock\\-user/([^/]++)(*:756)'
                        .'|([^/]++)(*:772)'
                        .'|block(*:785)'
                    .')'
                    .'|nblock/([^/]++)(*:809)'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:839)'
                    .'|/edit(*:852)'
                    .'|(*:860)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:900)'
                    .'|wdt/([^/]++)(*:920)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:966)'
                            .'|router(*:980)'
                            .'|exception(?'
                                .'|(*:1000)'
                                .'|\\.css(*:1014)'
                            .')'
                        .')'
                        .'|(*:1025)'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|/edit(*:1053)'
                    .'|(*:1062)'
                .')'
                .'|/profil(?'
                    .'|(*:1082)'
                    .'|/(?'
                        .'|(\\d+)(*:1100)'
                        .'|(\\d+)/edit(*:1119)'
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
        250 => [[['_route' => 'app_itineraire_edit', '_controller' => 'App\\Controller\\ItineraireController::edit'], ['iditineraire'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'app_itineraire_delete', '_controller' => 'App\\Controller\\ItineraireController::delete'], ['iditineraire'], ['POST' => 0], null, false, true, null]],
        285 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        298 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        306 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        332 => [[['_route' => 'app_park_show', '_controller' => 'App\\Controller\\ParkController::show'], ['idpark'], ['GET' => 0], null, false, true, null]],
        347 => [[['_route' => 'app_park_showadm', '_controller' => 'App\\Controller\\ParkController::showadm'], ['idpark'], ['GET' => 0], null, false, false, null]],
        359 => [[['_route' => 'app_park_edit', '_controller' => 'App\\Controller\\ParkController::edit'], ['idpark'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        368 => [[['_route' => 'app_park_delete', '_controller' => 'App\\Controller\\ParkController::delete'], ['idpark'], ['POST' => 0], null, false, true, null]],
        399 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['idrating'], ['GET' => 0], null, false, true, null]],
        412 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['idrating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        420 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['idrating'], ['POST' => 0], null, false, true, null]],
        454 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::showback'], ['idreclamation'], ['GET' => 0], null, false, true, null]],
        467 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idreclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        475 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idreclamation'], ['POST' => 0], null, false, true, null]],
        505 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        524 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['idreponse'], ['GET' => 0], null, false, true, null]],
        537 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['idreponse'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        545 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['idreponse'], ['POST' => 0], null, false, true, null]],
        579 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        592 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['idreservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        600 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['idreservation'], ['POST' => 0], null, false, true, null]],
        623 => [[['_route' => 'app_reservation_calculatetotalprice', '_controller' => 'App\\Controller\\ReservationController::calculateTotalPrice'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        664 => [[['_route' => 'app_utilisateurapp_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['iduser'], ['GET' => 0], null, false, true, null]],
        677 => [[['_route' => 'app_utilisateurapp_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        685 => [[['_route' => 'app_utilisateurapp_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['iduser'], ['POST' => 0], null, false, true, null]],
        702 => [[['_route' => 'app_utilisateurapp_utilisateur_block', '_controller' => 'App\\Controller\\UtilisateurController::showBlock'], [], ['GET' => 0], null, false, false, null]],
        725 => [[['_route' => 'app_utilisateurblock_user', '_controller' => 'App\\Controller\\UtilisateurController::blockUser'], ['iduser'], null, null, false, true, null]],
        756 => [[['_route' => 'app_utilisateurunblock_user', '_controller' => 'App\\Controller\\UtilisateurController::unblockUser'], ['iduser'], null, null, false, true, null]],
        772 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['iduser'], null, null, false, true, null]],
        785 => [[['_route' => 'app_utilisateur_block', '_controller' => 'App\\Controller\\UtilisateurController::showBlock'], [], ['GET' => 0], null, false, false, null]],
        809 => [[['_route' => 'unblock_user', '_controller' => 'App\\Controller\\UtilisateurController::unblockUser'], ['iduser'], null, null, false, true, null]],
        839 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idvehicule'], ['GET' => 0], null, false, true, null]],
        852 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idvehicule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        860 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idvehicule'], ['POST' => 0], null, false, true, null]],
        900 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        920 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        966 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        980 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1000 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1014 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1025 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1053 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1062 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['iduser'], ['POST' => 0], null, false, true, null]],
        1082 => [[['_route' => 'app_profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], [], ['GET' => 0], null, false, false, null]],
        1100 => [[['_route' => 'profil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['iduser'], ['GET' => 0], null, false, true, null]],
        1119 => [
            [['_route' => 'profil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
