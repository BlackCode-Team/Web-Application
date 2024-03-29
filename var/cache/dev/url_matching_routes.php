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
        '/amende/front' => [[['_route' => 'app_amende_indexfront', '_controller' => 'App\\Controller\\AmendeController::indexfront'], null, ['GET' => 0], null, false, false, null]],
        '/amende/filtre/status' => [[['_route' => 'amende_filter', '_controller' => 'App\\Controller\\AmendeController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/amende/front/filtre/status' => [[['_route' => 'amende_filterfront', '_controller' => 'App\\Controller\\AmendeController::filterfront'], null, ['GET' => 0], null, false, false, null]],
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
        '/park/jsonall' => [[['_route' => 'app_park_json', '_controller' => 'App\\Controller\\ParkController::jsonindex'], null, ['GET' => 0], null, false, false, null]],
        '/park/addparkJSON/new' => [[['_route' => 'addparkJSON', '_controller' => 'App\\Controller\\ParkController::addparkJSON'], null, null, null, false, false, null]],
        '/park/admin' => [[['_route' => 'app_park_indexad', '_controller' => 'App\\Controller\\ParkController::indexad'], null, ['GET' => 0], null, false, false, null]],
        '/park/new' => [[['_route' => 'app_park_new', '_controller' => 'App\\Controller\\ParkController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rating' => [[['_route' => 'app_rating_index', '_controller' => 'App\\Controller\\RatingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rating/new' => [[['_route' => 'app_rating_new', '_controller' => 'App\\Controller\\RatingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/jsonall' => [[['_route' => 'app_reservation_json', '_controller' => 'App\\Controller\\ReservationController::jsonindex'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/filtre/status' => [[['_route' => 'reservation_filter', '_controller' => 'App\\Controller\\ReservationController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/Search/a' => [[['_route' => 'search', '_controller' => 'App\\Controller\\ReservationController::search'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'app_search_q_r', '_controller' => 'App\\Controller\\SearchQRController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/utilisateur/jsonall' => [[['_route' => 'app_user_json', '_controller' => 'App\\Controller\\UtilisateurController::jsonindex'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/adduserJSON/new' => [[['_route' => 'adduserJSON', '_controller' => 'App\\Controller\\UtilisateurController::adduserJSON'], null, null, null, false, false, null]],
        '/vehicule' => [[['_route' => 'app_vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/JSON' => [[['_route' => 'app_vehicule_indexJSON', '_controller' => 'App\\Controller\\VehiculeController::indexJSON'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/indexback' => [[['_route' => 'app_vehicule_indexback', '_controller' => 'App\\Controller\\VehiculeController::indexbackkk'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/back' => [[['_route' => 'app_vehicule_back', '_controller' => 'App\\Controller\\VehiculeController::indexback'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/Search/a' => [[['_route' => 'searchv', '_controller' => 'App\\Controller\\VehiculeController::searchpsrchoix'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/search' => [[['_route' => 'search_vehicule', '_controller' => 'App\\Controller\\VehiculeController::search'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/new' => [[['_route' => 'app_vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicule/newJSON' => [[['_route' => 'app_vehicule_newJSON', '_controller' => 'App\\Controller\\VehiculeController::newJSON'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicule/filtre/type' => [[['_route' => 'vehicule_filter', '_controller' => 'App\\Controller\\VehiculeController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/pdf/catalogue' => [[['_route' => 'pdf_catalogue', '_controller' => 'App\\Controller\\VehiculeController::cataloguePdf'], null, ['GET' => 0], null, false, false, null]],
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null]],
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
                    .'|ark/(?'
                        .'|([^/]++)/recjson(*:455)'
                        .'|deleteparksJSON/([^/]++)(*:487)'
                        .'|updateparkJSON/([^/]++)(*:518)'
                        .'|jsonmap/([^/]++)(*:542)'
                        .'|([^/]++)(?'
                            .'|(*:561)'
                            .'|/(?'
                                .'|adm(*:576)'
                                .'|edit(*:588)'
                                .'|chart/test(*:606)'
                            .')'
                            .'|(*:615)'
                        .')'
                    .')'
                    .'|df/([^/]++)(*:636)'
                .')'
                .'|/r(?'
                    .'|ating/([^/]++)(?'
                        .'|(*:667)'
                        .'|/edit(*:680)'
                        .'|(*:688)'
                    .')'
                    .'|e(?'
                        .'|clamation/([^/]++)(?'
                            .'|(*:722)'
                            .'|/edit(*:735)'
                            .'|(*:743)'
                        .')'
                        .'|ponse/(?'
                            .'|new/([^/]++)(*:773)'
                            .'|([^/]++)(?'
                                .'|(*:792)'
                                .'|/edit(*:805)'
                                .'|(*:813)'
                            .')'
                        .')'
                        .'|servation/(?'
                            .'|([^/]++)/recjson(*:852)'
                            .'|new/([^/]++)(*:872)'
                            .'|([^/]++)(*:888)'
                            .'|back/([^/]++)(*:909)'
                            .'|([^/]++)(?'
                                .'|/edit(?'
                                    .'|Prix(*:940)'
                                    .'|(*:948)'
                                .')'
                                .'|(*:957)'
                            .')'
                            .'|tarif/([^/]++)(*:980)'
                            .'|pdf/([^/]++)(*:1000)'
                        .')'
                    .')'
                .')'
                .'|/utilisateur/(?'
                    .'|([^/]++)/recjson(*:1044)'
                    .'|deleteusersJSON/([^/]++)(*:1077)'
                    .'|updateuserJSON/([^/]++)(*:1109)'
                    .'|([^/]++)(*:1126)'
                .')'
                .'|/vehicule/(?'
                    .'|([^/]++)(*:1157)'
                    .'|showJSON/([^/]++)(*:1183)'
                    .'|([^/]++)/edit(*:1205)'
                    .'|editJSON/([^/]++)(*:1231)'
                    .'|([^/]++)(*:1248)'
                    .'|deleteJSON/([^/]++)(*:1276)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1314)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1354)'
                    .'|wdt/([^/]++)(*:1375)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1422)'
                            .'|router(*:1437)'
                            .'|exception(?'
                                .'|(*:1458)'
                                .'|\\.css(*:1472)'
                            .')'
                        .')'
                        .'|(*:1483)'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|/edit(*:1511)'
                    .'|(*:1520)'
                .')'
                .'|/profil(?'
                    .'|(*:1540)'
                    .'|/(?'
                        .'|(\\d+)(*:1558)'
                        .'|(\\d+)/edit(*:1577)'
                    .')'
                .')'
                .'|/alerteBlock(*:1600)'
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
        455 => [[['_route' => 'recupjsonpark', '_controller' => 'App\\Controller\\ParkController::parkId'], ['idpark'], null, null, false, false, null]],
        487 => [[['_route' => 'deleteparksJSON', '_controller' => 'App\\Controller\\ParkController::deleteparksJSON'], ['id'], null, null, false, true, null]],
        518 => [[['_route' => 'updateparkJSON', '_controller' => 'App\\Controller\\ParkController::updateparkJSON'], ['id'], null, null, false, true, null]],
        542 => [[['_route' => 'app_json_map', '_controller' => 'App\\Controller\\ParkController::mapjson'], ['idpark'], null, null, false, true, null]],
        561 => [[['_route' => 'app_park_show', '_controller' => 'App\\Controller\\ParkController::show'], ['idpark'], ['GET' => 0], null, false, true, null]],
        576 => [[['_route' => 'app_park_showadm', '_controller' => 'App\\Controller\\ParkController::showadm'], ['idpark'], ['GET' => 0], null, false, false, null]],
        588 => [[['_route' => 'app_park_edit', '_controller' => 'App\\Controller\\ParkController::edit'], ['idpark'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        606 => [[['_route' => 'app_chart_park', '_controller' => 'App\\Controller\\ParkController::chart'], ['idpark'], null, null, false, false, null]],
        615 => [[['_route' => 'app_park_delete', '_controller' => 'App\\Controller\\ParkController::delete'], ['idpark'], ['POST' => 0], null, false, true, null]],
        636 => [[['_route' => 'app_show_pdf', '_controller' => 'App\\Controller\\SearchQRController::showPdf'], ['cin'], null, null, false, true, null]],
        667 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['idrating'], ['GET' => 0], null, false, true, null]],
        680 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['idrating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        688 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['idrating'], ['POST' => 0], null, false, true, null]],
        722 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::showback'], ['idreclamation'], ['GET' => 0], null, false, true, null]],
        735 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idreclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        743 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idreclamation'], ['POST' => 0], null, false, true, null]],
        773 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        792 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['idreponse'], ['GET' => 0], null, false, true, null]],
        805 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['idreponse'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        813 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['idreponse'], ['POST' => 0], null, false, true, null]],
        852 => [[['_route' => 'app_reservation_show_JSON', '_controller' => 'App\\Controller\\ReservationController::showJSON'], ['idreservation'], ['GET' => 0], null, false, false, null]],
        872 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['idvehicule'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        888 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        909 => [[['_route' => 'app_reservation_showback', '_controller' => 'App\\Controller\\ReservationController::showadmin'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        940 => [[['_route' => 'app_reservation_editPrix', '_controller' => 'App\\Controller\\ReservationController::editPrix'], ['idreservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        948 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['idreservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        957 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['idreservation'], ['POST' => 0], null, false, true, null]],
        980 => [[['_route' => 'app_reservation_calculatetotalprice', '_controller' => 'App\\Controller\\ReservationController::calculateTotalPrice'], ['idreservation'], ['GET' => 0], null, false, true, null]],
        1000 => [[['_route' => 'reservation_pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdfa'], ['idreservation'], null, null, false, true, null]],
        1044 => [[['_route' => 'recupjsonuser', '_controller' => 'App\\Controller\\UtilisateurController::userId'], ['iduser'], null, null, false, false, null]],
        1077 => [[['_route' => 'deleteusersJSON', '_controller' => 'App\\Controller\\UtilisateurController::deleteusersJSON'], ['id'], null, null, false, true, null]],
        1109 => [[['_route' => 'updateuserJSON', '_controller' => 'App\\Controller\\UtilisateurController::updateuserJSON'], ['id'], null, null, false, true, null]],
        1126 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['iduser'], null, null, false, true, null]],
        1157 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idvehicule'], ['GET' => 0], null, false, true, null]],
        1183 => [[['_route' => 'app_vehicule_showJSON', '_controller' => 'App\\Controller\\VehiculeController::showJSON'], ['idvehicule'], ['GET' => 0], null, false, true, null]],
        1205 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idvehicule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1231 => [[['_route' => 'app_vehicule_editJSON', '_controller' => 'App\\Controller\\VehiculeController::editJSON'], ['idvehicule'], null, null, false, true, null]],
        1248 => [[['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idvehicule'], ['POST' => 0], null, false, true, null]],
        1276 => [[['_route' => 'app_vehicule_deleteJSON', '_controller' => 'App\\Controller\\VehiculeController::deleteJSON'], ['idvehicule'], null, null, false, true, null]],
        1314 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1354 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1375 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1422 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1437 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1458 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1472 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1483 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1511 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1520 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['iduser'], ['POST' => 0], null, false, true, null]],
        1540 => [[['_route' => 'app_profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], [], ['GET' => 0], null, false, false, null]],
        1558 => [[['_route' => 'profil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['iduser'], ['GET' => 0], null, false, true, null]],
        1577 => [[['_route' => 'profil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['iduser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1600 => [
            [['_route' => 'blocked_user', '_controller' => 'App\\Controller\\BlockedUserController::alert'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
