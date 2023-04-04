<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_badge_index' => [[], ['_controller' => 'App\\Controller\\BadgeController::index'], [], [['text', '/badge/']], [], [], []],
    'app_badge_new' => [[], ['_controller' => 'App\\Controller\\BadgeController::new'], [], [['text', '/badge/new']], [], [], []],
    'app_badge_show' => [['idbadge'], ['_controller' => 'App\\Controller\\BadgeController::show'], [], [['variable', '/', '[^/]++', 'idbadge', true], ['text', '/badge']], [], [], []],
    'app_badge_edit' => [['idbadge'], ['_controller' => 'App\\Controller\\BadgeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idbadge', true], ['text', '/badge']], [], [], []],
    'app_badge_delete' => [['idbadge'], ['_controller' => 'App\\Controller\\BadgeController::delete'], [], [['variable', '/', '[^/]++', 'idbadge', true], ['text', '/badge']], [], [], []],
    'app_badges' => [[], ['_controller' => 'App\\Controller\\BadgesController::index'], [], [['text', '/badges']], [], [], []],
    'Aff' => [[], ['_controller' => 'App\\Controller\\BadgesController::Affiche'], [], [['text', '/AfficherBadge']], [], [], []],
    'app_historique_index' => [[], ['_controller' => 'App\\Controller\\HistoriqueController::index'], [], [['text', '/historique/']], [], [], []],
    'app_historique_new' => [[], ['_controller' => 'App\\Controller\\HistoriqueController::new'], [], [['text', '/historique/new']], [], [], []],
    'app_historique_show' => [['idhistorique'], ['_controller' => 'App\\Controller\\HistoriqueController::show'], [], [['variable', '/', '[^/]++', 'idhistorique', true], ['text', '/historique']], [], [], []],
    'app_historique_edit' => [['idhistorique'], ['_controller' => 'App\\Controller\\HistoriqueController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idhistorique', true], ['text', '/historique']], [], [], []],
    'app_historique_delete' => [['idhistorique'], ['_controller' => 'App\\Controller\\HistoriqueController::delete'], [], [['variable', '/', '[^/]++', 'idhistorique', true], ['text', '/historique']], [], [], []],
    'app_itineraire_index' => [[], ['_controller' => 'App\\Controller\\ItineraireController::index'], [], [['text', '/itineraire/']], [], [], []],
    'app_itineraire_new' => [[], ['_controller' => 'App\\Controller\\ItineraireController::new'], [], [['text', '/itineraire/new']], [], [], []],
    'app_itineraire_show' => [['iditineraire'], ['_controller' => 'App\\Controller\\ItineraireController::show'], [], [['variable', '/', '[^/]++', 'iditineraire', true], ['text', '/itineraire']], [], [], []],
    'app_itineraire_edit' => [['iditineraire'], ['_controller' => 'App\\Controller\\ItineraireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'iditineraire', true], ['text', '/itineraire']], [], [], []],
    'app_itineraire_delete' => [['iditineraire'], ['_controller' => 'App\\Controller\\ItineraireController::delete'], [], [['variable', '/', '[^/]++', 'iditineraire', true], ['text', '/itineraire']], [], [], []],
    'app_park_index' => [[], ['_controller' => 'App\\Controller\\ParkController::index'], [], [['text', '/park/']], [], [], []],
    'app_park_new' => [[], ['_controller' => 'App\\Controller\\ParkController::new'], [], [['text', '/park/new']], [], [], []],
    'app_park_show' => [['idpark'], ['_controller' => 'App\\Controller\\ParkController::show'], [], [['variable', '/', '[^/]++', 'idpark', true], ['text', '/park']], [], [], []],
    'app_park_edit' => [['idpark'], ['_controller' => 'App\\Controller\\ParkController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idpark', true], ['text', '/park']], [], [], []],
    'app_park_delete' => [['idpark'], ['_controller' => 'App\\Controller\\ParkController::delete'], [], [['variable', '/', '[^/]++', 'idpark', true], ['text', '/park']], [], [], []],
    'app_rating' => [[], ['_controller' => 'App\\Controller\\RatingController::index'], [], [['text', '/rating']], [], [], []],
    'app_reclamation_index' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation/']], [], [], []],
    'app_reclamation_new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], [], []],
    'app_reclamation_show' => [['idreclamation'], ['_controller' => 'App\\Controller\\ReclamationController::show'], [], [['variable', '/', '[^/]++', 'idreclamation', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_edit' => [['idreclamation'], ['_controller' => 'App\\Controller\\ReclamationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idreclamation', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_delete' => [['idreclamation'], ['_controller' => 'App\\Controller\\ReclamationController::delete'], [], [['variable', '/', '[^/]++', 'idreclamation', true], ['text', '/reclamation']], [], [], []],
    'app_reservation_index' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation/']], [], [], []],
    'app_reservation_new' => [[], ['_controller' => 'App\\Controller\\ReservationController::new'], [], [['text', '/reservation/new']], [], [], []],
    'app_reservation_show' => [['idreservation'], ['_controller' => 'App\\Controller\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'idreservation', true], ['text', '/reservation']], [], [], []],
    'app_reservation_edit' => [['idreservation'], ['_controller' => 'App\\Controller\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idreservation', true], ['text', '/reservation']], [], [], []],
    'app_reservation_delete' => [['idreservation'], ['_controller' => 'App\\Controller\\ReservationController::delete'], [], [['variable', '/', '[^/]++', 'idreservation', true], ['text', '/reservation']], [], [], []],
    'app_utilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur/']], [], [], []],
    'app_utilisateur_new' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::new'], [], [['text', '/utilisateur/new']], [], [], []],
    'app_utilisateur_show' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'iduser', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_edit' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'iduser', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_delete' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'iduser', true], ['text', '/utilisateur']], [], [], []],
    'app_vehicule_index' => [[], ['_controller' => 'App\\Controller\\VehiculeController::index'], [], [['text', '/vehicule/']], [], [], []],
    'app_vehicule_new' => [[], ['_controller' => 'App\\Controller\\VehiculeController::new'], [], [['text', '/vehicule/new']], [], [], []],
    'app_vehicule_show' => [['idvehicule'], ['_controller' => 'App\\Controller\\VehiculeController::show'], [], [['variable', '/', '[^/]++', 'idvehicule', true], ['text', '/vehicule']], [], [], []],
    'app_vehicule_edit' => [['idvehicule'], ['_controller' => 'App\\Controller\\VehiculeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idvehicule', true], ['text', '/vehicule']], [], [], []],
    'app_vehicule_delete' => [['idvehicule'], ['_controller' => 'App\\Controller\\VehiculeController::delete'], [], [['variable', '/', '[^/]++', 'idvehicule', true], ['text', '/vehicule']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
