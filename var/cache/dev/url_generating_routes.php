<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_amende_index' => [[], ['_controller' => 'App\\Controller\\AmendeController::index'], [], [['text', '/amende/']], [], [], []],
    'app_amende_new' => [[], ['_controller' => 'App\\Controller\\AmendeController::new'], [], [['text', '/amende/new']], [], [], []],
    'app_amende_show' => [['idamende'], ['_controller' => 'App\\Controller\\AmendeController::show'], [], [['variable', '/', '[^/]++', 'idamende', true], ['text', '/amende']], [], [], []],
    'app_amende_edit' => [['idamende'], ['_controller' => 'App\\Controller\\AmendeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idamende', true], ['text', '/amende']], [], [], []],
    'app_amende_delete' => [['idamende'], ['_controller' => 'App\\Controller\\AmendeController::delete'], [], [['variable', '/', '[^/]++', 'idamende', true], ['text', '/amende']], [], [], []],
    'amende_filter' => [[], ['_controller' => 'App\\Controller\\AmendeController::filter'], [], [['text', '/amende/filtre/status']], [], [], []],
    'app_badge_index' => [[], ['_controller' => 'App\\Controller\\BadgeController::index'], [], [['text', '/badge/']], [], [], []],
    'TrieByNbpointDESC' => [[], ['_controller' => 'App\\Controller\\BadgeController::TrieNbpointDESC'], [], [['text', '/badge/Trie']], [], [], []],
    'TrieByNbpointASC' => [[], ['_controller' => 'App\\Controller\\BadgeController::TrieNbpointASC'], [], [['text', '/badge/Triee']], [], [], []],
    'app_badge_new' => [[], ['_controller' => 'App\\Controller\\BadgeController::new'], [], [['text', '/badge/new']], [], [], []],
    'app_badge_show' => [['idbadge'], ['_controller' => 'App\\Controller\\BadgeController::show'], [], [['variable', '/', '[^/]++', 'idbadge', true], ['text', '/badge']], [], [], []],
    'app_badge_edit' => [['idbadge'], ['_controller' => 'App\\Controller\\BadgeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idbadge', true], ['text', '/badge']], [], [], []],
    'app_badge_delete' => [['idbadge'], ['_controller' => 'App\\Controller\\BadgeController::delete'], [], [['variable', '/', '[^/]++', 'idbadge', true], ['text', '/badge']], [], [], []],
    'app_badges' => [[], ['_controller' => 'App\\Controller\\BadgesController::index'], [], [['text', '/badges']], [], [], []],
    'Aff' => [[], ['_controller' => 'App\\Controller\\BadgesController::Affiche'], [], [['text', '/AfficherBadge']], [], [], []],
    'base' => [[], ['_controller' => 'App\\Controller\\BaseController::index'], [], [['text', '/']], [], [], []],
    'app_park_chart' => [[], ['_controller' => 'App\\Controller\\ChartParkController::chart'], [], [['text', '/chart/bayoudh']], [], [], []],
    'app_historique_index' => [[], ['_controller' => 'App\\Controller\\HistoriqueController::index'], [], [['text', '/historique/']], [], [], []],
    'app_historique_new' => [[], ['_controller' => 'App\\Controller\\HistoriqueController::new'], [], [['text', '/historique/new']], [], [], []],
    'app_historique_show' => [['idhistorique'], ['_controller' => 'App\\Controller\\HistoriqueController::show'], [], [['variable', '/', '[^/]++', 'idhistorique', true], ['text', '/historique']], [], [], []],
    'app_historique_index2' => [['iduser'], ['iduser' => 1, '_controller' => 'App\\Controller\\HistoriqueController::index2'], [], [['variable', '/', '[^/]++', 'iduser', true], ['text', '/historique/user']], [], [], []],
    'app_historique_edit' => [['idhistorique'], ['_controller' => 'App\\Controller\\HistoriqueController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idhistorique', true], ['text', '/historique']], [], [], []],
    'app_historique_delete' => [['idhistorique'], ['_controller' => 'App\\Controller\\HistoriqueController::delete'], [], [['variable', '/', '[^/]++', 'idhistorique', true], ['text', '/historique']], [], [], []],
    'app_itineraire_index' => [[], ['_controller' => 'App\\Controller\\ItineraireController::index'], [], [['text', '/itineraire/']], [], [], []],
    'app_itineraire_new' => [[], ['_controller' => 'App\\Controller\\ItineraireController::new'], [], [['text', '/itineraire/new']], [], [], []],
    'app_itineraire_show' => [['iditineraire'], ['_controller' => 'App\\Controller\\ItineraireController::show'], [], [['variable', '/', '[^/]++', 'iditineraire', true], ['text', '/itineraire']], [], [], []],
    'app_itineraire_edit' => [['iditineraire'], ['_controller' => 'App\\Controller\\ItineraireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'iditineraire', true], ['text', '/itineraire']], [], [], []],
    'app_itineraire_delete' => [['iditineraire'], ['_controller' => 'App\\Controller\\ItineraireController::delete'], [], [['variable', '/', '[^/]++', 'iditineraire', true], ['text', '/itineraire']], [], [], []],
    'app_itineraire_route' => [['iditineraire'], ['_controller' => 'App\\Controller\\ItineraireController::route'], [], [['text', '/route'], ['variable', '/', '[^/]++', 'iditineraire', true], ['text', '/itineraire']], [], [], []],
    'app_maintenance_index' => [[], ['_controller' => 'App\\Controller\\MaintenanceController::index'], [], [['text', '/maintenance/']], [], [], []],
    'app_maintenance_new' => [[], ['_controller' => 'App\\Controller\\MaintenanceController::new'], [], [['text', '/maintenance/new']], [], [], []],
    'app_maintenance_show' => [['idmaintenance'], ['_controller' => 'App\\Controller\\MaintenanceController::show'], [], [['variable', '/', '[^/]++', 'idmaintenance', true], ['text', '/maintenance']], [], [], []],
    'app_maintenance_edit' => [['idmaintenance'], ['_controller' => 'App\\Controller\\MaintenanceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idmaintenance', true], ['text', '/maintenance']], [], [], []],
    'app_maintenance_delete' => [['idmaintenance'], ['_controller' => 'App\\Controller\\MaintenanceController::delete'], [], [['variable', '/', '[^/]++', 'idmaintenance', true], ['text', '/maintenance']], [], [], []],
    'app_offre_index' => [[], ['_controller' => 'App\\Controller\\OffreController::index'], [], [['text', '/offre/']], [], [], []],
    'searchO' => [[], ['_controller' => 'App\\Controller\\OffreController::searchOffre'], [], [['text', '/offre/searchO']], [], [], []],
    'app_offre_new' => [[], ['_controller' => 'App\\Controller\\OffreController::new'], [], [['text', '/offre/new']], [], [], []],
    'app_offre_show' => [['idoffre'], ['_controller' => 'App\\Controller\\OffreController::show'], [], [['variable', '/', '[^/]++', 'idoffre', true], ['text', '/offre']], [], [], []],
    'app_offre_edit' => [['idoffre'], ['_controller' => 'App\\Controller\\OffreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idoffre', true], ['text', '/offre']], [], [], []],
    'app_offre_delete' => [['idoffre'], ['_controller' => 'App\\Controller\\OffreController::delete'], [], [['variable', '/', '[^/]++', 'idoffre', true], ['text', '/offre']], [], [], []],
    'app_offres' => [[], ['_controller' => 'App\\Controller\\OffresController::index'], [], [['text', '/offres']], [], [], []],
    'Affi' => [[], ['_controller' => 'App\\Controller\\OffresController::Affiche'], [], [['text', '/AfficherOffre']], [], [], []],
    'app_park_index' => [[], ['_controller' => 'App\\Controller\\ParkController::index'], [], [['text', '/park/']], [], [], []],
    'app_park_indexad' => [[], ['_controller' => 'App\\Controller\\ParkController::indexad'], [], [['text', '/park/admin']], [], [], []],
    'app_park_new' => [[], ['_controller' => 'App\\Controller\\ParkController::new'], [], [['text', '/park/new']], [], [], []],
    'app_park_show' => [['idpark'], ['_controller' => 'App\\Controller\\ParkController::show'], [], [['variable', '/', '[^/]++', 'idpark', true], ['text', '/park']], [], [], []],
    'app_park_showadm' => [['idpark'], ['_controller' => 'App\\Controller\\ParkController::showadm'], [], [['text', '/adm'], ['variable', '/', '[^/]++', 'idpark', true], ['text', '/park']], [], [], []],
    'app_park_edit' => [['idpark'], ['_controller' => 'App\\Controller\\ParkController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idpark', true], ['text', '/park']], [], [], []],
    'app_park_delete' => [['idpark'], ['_controller' => 'App\\Controller\\ParkController::delete'], [], [['variable', '/', '[^/]++', 'idpark', true], ['text', '/park']], [], [], []],
    'app_chart_park' => [['idpark'], ['_controller' => 'App\\Controller\\ParkController::chart'], [], [['text', '/chart/test'], ['variable', '/', '[^/]++', 'idpark', true], ['text', '/park']], [], [], []],
    'app_rating_index' => [[], ['_controller' => 'App\\Controller\\RatingController::index'], [], [['text', '/rating/']], [], [], []],
    'app_rating_new' => [[], ['_controller' => 'App\\Controller\\RatingController::new'], [], [['text', '/rating/new']], [], [], []],
    'app_rating_show' => [['idrating'], ['_controller' => 'App\\Controller\\RatingController::show'], [], [['variable', '/', '[^/]++', 'idrating', true], ['text', '/rating']], [], [], []],
    'app_rating_edit' => [['idrating'], ['_controller' => 'App\\Controller\\RatingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idrating', true], ['text', '/rating']], [], [], []],
    'app_rating_delete' => [['idrating'], ['_controller' => 'App\\Controller\\RatingController::delete'], [], [['variable', '/', '[^/]++', 'idrating', true], ['text', '/rating']], [], [], []],
    'app_reclamation_index' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation/']], [], [], []],
    'app_reclamation_new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], [], []],
    'app_reclamation_show' => [['idreclamation'], ['_controller' => 'App\\Controller\\ReclamationController::showback'], [], [['variable', '/', '[^/]++', 'idreclamation', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_edit' => [['idreclamation'], ['_controller' => 'App\\Controller\\ReclamationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idreclamation', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_delete' => [['idreclamation'], ['_controller' => 'App\\Controller\\ReclamationController::delete'], [], [['variable', '/', '[^/]++', 'idreclamation', true], ['text', '/reclamation']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegisterController::register'], [], [['text', '/register']], [], [], []],
    'app_reponse_index' => [[], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['text', '/reponse/']], [], [], []],
    'app_reponse_new' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse/new']], [], [], []],
    'app_reponse_show' => [['idreponse'], ['_controller' => 'App\\Controller\\ReponseController::show'], [], [['variable', '/', '[^/]++', 'idreponse', true], ['text', '/reponse']], [], [], []],
    'app_reponse_edit' => [['idreponse'], ['_controller' => 'App\\Controller\\ReponseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idreponse', true], ['text', '/reponse']], [], [], []],
    'app_reponse_delete' => [['idreponse'], ['_controller' => 'App\\Controller\\ReponseController::delete'], [], [['variable', '/', '[^/]++', 'idreponse', true], ['text', '/reponse']], [], [], []],
    'app_reservation_index' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation/']], [], [], []],
    'app_reservation_new' => [[], ['_controller' => 'App\\Controller\\ReservationController::new'], [], [['text', '/reservation/new']], [], [], []],
    'app_reservation_show' => [['idreservation'], ['_controller' => 'App\\Controller\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'idreservation', true], ['text', '/reservation']], [], [], []],
    'app_reservation_editPrix' => [['idreservation'], ['_controller' => 'App\\Controller\\ReservationController::editPrix'], [], [['text', '/editPrix'], ['variable', '/', '[^/]++', 'idreservation', true], ['text', '/reservation']], [], [], []],
    'app_reservation_edit' => [['idreservation'], ['_controller' => 'App\\Controller\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idreservation', true], ['text', '/reservation']], [], [], []],
    'app_reservation_delete' => [['idreservation'], ['_controller' => 'App\\Controller\\ReservationController::delete'], [], [['variable', '/', '[^/]++', 'idreservation', true], ['text', '/reservation']], [], [], []],
    'app_reservation_calculatetotalprice' => [['idreservation'], ['_controller' => 'App\\Controller\\ReservationController::calculateTotalPrice'], [], [['variable', '/', '[^/]++', 'idreservation', true], ['text', '/reservation/tarif']], [], [], []],
    'reservation_filter' => [[], ['_controller' => 'App\\Controller\\ReservationController::filter'], [], [['text', '/reservation/filtre/status']], [], [], []],
    'reservation_pdf' => [['idreservation'], ['_controller' => 'App\\Controller\\ReservationController::generatePdfa'], [], [['variable', '/', '[^/]++', 'idreservation', true], ['text', '/reservation/pdf']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_utilisateurapp_utilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur/']], [], [], []],
    'app_utilisateurapp_utilisateur_new' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::new'], [], [['text', '/utilisateur/new']], [], [], []],
    'app_utilisateurapp_utilisateur_show' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'iduser', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateurapp_utilisateur_edit' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'iduser', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateurapp_utilisateur_delete' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'iduser', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateurapp_utilisateur_block' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::showBlock'], [], [['text', '/utilisateur/block']], [], [], []],
    'app_utilisateurblock_user' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::blockUser'], [], [['variable', '/', '[^/]++', 'iduser', true], ['text', '/utilisateur/block-user']], [], [], []],
    'app_utilisateurunblock_user' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::unblockUser'], [], [['variable', '/', '[^/]++', 'iduser', true], ['text', '/utilisateur/unblock-user']], [], [], []],
    'app_vehicule_index' => [[], ['_controller' => 'App\\Controller\\VehiculeController::index'], [], [['text', '/vehicule/']], [], [], []],
    'app_vehicule_indexback' => [[], ['_controller' => 'App\\Controller\\VehiculeController::indexback'], [], [['text', '/vehicule/back']], [], [], []],
    'search_vehicule' => [[], ['_controller' => 'App\\Controller\\VehiculeController::search'], [], [['text', '/vehicule/search']], [], [], []],
    'app_vehicule_new' => [[], ['_controller' => 'App\\Controller\\VehiculeController::new'], [], [['text', '/vehicule/new']], [], [], []],
    'app_vehicule_show' => [['idvehicule'], ['_controller' => 'App\\Controller\\VehiculeController::show'], [], [['variable', '/', '[^/]++', 'idvehicule', true], ['text', '/vehicule']], [], [], []],
    'app_vehicule_edit' => [['idvehicule'], ['_controller' => 'App\\Controller\\VehiculeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idvehicule', true], ['text', '/vehicule']], [], [], []],
    'app_vehicule_delete' => [['idvehicule'], ['_controller' => 'App\\Controller\\VehiculeController::delete'], [], [['variable', '/', '[^/]++', 'idvehicule', true], ['text', '/vehicule']], [], [], []],
    'vehicule_filter' => [[], ['_controller' => 'App\\Controller\\VehiculeController::filter'], [], [['text', '/vehicule/filtre/type']], [], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\VehiculeController::searchpsrchoix'], [], [['text', '/vehicule/Search/a']], [], [], []],
    'pdf_catalogue' => [[], ['_controller' => 'App\\Controller\\VehiculeController::cataloguePdf'], [], [['text', '/vehicule/pdf/catalogue']], [], [], []],
    'fc_load_events' => [[], ['_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], [], [['text', '/fc-load-events']], [], [], []],
    'qr_code_generate' => [['builder', 'data'], ['_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['data' => '[\\w\\W]+'], [['variable', '/', '[\\w\\W]+', 'data', true], ['variable', '/', '[^/]++', 'builder', true], ['text', '/qr-code']], [], [], []],
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
    'app_home' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/']], [], [], []],
    'app_utilisateur_new' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::new'], [], [['text', '/new']], [], [], []],
    'app_utilisateur_show' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'iduser', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur']], [], [], []],
    'app_utilisateur_block' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::showBlock'], [], [['text', '/utilisateur/block']], [], [], []],
    'block_user' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::blockUser'], [], [['variable', '/', '[^/]++', 'iduser', true], ['text', '/block']], [], [], []],
    'unblock_user' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::unblockUser'], [], [['variable', '/', '[^/]++', 'iduser', true], ['text', '/unblock']], [], [], []],
    'app_utilisateur_edit' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'iduser', true]], [], [], []],
    'app_utilisateur_delete' => [['iduser'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'iduser', true]], [], [], []],
    'app_profil_index' => [[], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['text', '/profil']], [], [], []],
    'profil_show' => [['iduser'], ['_controller' => 'App\\Controller\\ProfilController::show'], ['iduser' => '\\d+'], [['variable', '/', '\\d+', 'iduser', true], ['text', '/profil']], [], [], []],
    'profil_edit' => [['iduser'], ['_controller' => 'App\\Controller\\ProfilController::edit'], ['iduser' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'iduser', true], ['text', '/profil']], [], [], []],
];
