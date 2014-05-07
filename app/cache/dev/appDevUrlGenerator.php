<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'travel_agence_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'travel_voyageur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_voyageur/',    ),  ),  4 =>   array (  ),),
        'travel_voyageur_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_voyageur',    ),  ),  4 =>   array (  ),),
        'travel_voyageur_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_voyageur/new',    ),  ),  4 =>   array (  ),),
        'travel_voyageur_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_voyageur/create',    ),  ),  4 =>   array (  ),),
        'travel_voyageur_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_voyageur',    ),  ),  4 =>   array (  ),),
        'travel_voyageur_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_voyageur',    ),  ),  4 =>   array (  ),),
        'travel_voyageur_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageurController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_voyageur',    ),  ),  4 =>   array (  ),),
        'travel_hotel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_hotel/',    ),  ),  4 =>   array (  ),),
        'travel_hotel_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_hotel',    ),  ),  4 =>   array (  ),),
        'travel_hotel_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_hotel/new',    ),  ),  4 =>   array (  ),),
        'travel_hotel_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_hotel/create',    ),  ),  4 =>   array (  ),),
        'travel_hotel_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_hotel',    ),  ),  4 =>   array (  ),),
        'travel_hotel_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_hotel',    ),  ),  4 =>   array (  ),),
        'travel_hotel_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\HotelController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_hotel',    ),  ),  4 =>   array (  ),),
        'travel_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_admin/',    ),  ),  4 =>   array (  ),),
        'travel_admin_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_admin',    ),  ),  4 =>   array (  ),),
        'travel_admin_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_admin/new',    ),  ),  4 =>   array (  ),),
        'travel_admin_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_admin/create',    ),  ),  4 =>   array (  ),),
        'travel_admin_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_admin',    ),  ),  4 =>   array (  ),),
        'travel_admin_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_admin',    ),  ),  4 =>   array (  ),),
        'travel_admin_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\AdministrateurController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_admin',    ),  ),  4 =>   array (  ),),
        'travel_facture' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_facture/',    ),  ),  4 =>   array (  ),),
        'travel_facture_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_facture',    ),  ),  4 =>   array (  ),),
        'travel_facture_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_facture/new',    ),  ),  4 =>   array (  ),),
        'travel_facture_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_facture/create',    ),  ),  4 =>   array (  ),),
        'travel_facture_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_facture',    ),  ),  4 =>   array (  ),),
        'travel_facture_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_facture',    ),  ),  4 =>   array (  ),),
        'travel_facture_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\FactureController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_facture',    ),  ),  4 =>   array (  ),),
        'travel_agence' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_agence/',    ),  ),  4 =>   array (  ),),
        'travel_agence_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_agence',    ),  ),  4 =>   array (  ),),
        'travel_agence_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_agence/new',    ),  ),  4 =>   array (  ),),
        'travel_agence_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_agence/create',    ),  ),  4 =>   array (  ),),
        'travel_agence_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_agence',    ),  ),  4 =>   array (  ),),
        'travel_agence_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_agence',    ),  ),  4 =>   array (  ),),
        'travel_agence_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\RespoAgenceController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_agence',    ),  ),  4 =>   array (  ),),
        'travel_reservation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_reservation/',    ),  ),  4 =>   array (  ),),
        'travel_reservation_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_reservation',    ),  ),  4 =>   array (  ),),
        'travel_reservation_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_reservation/new',    ),  ),  4 =>   array (  ),),
        'travel_reservation_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_reservation/create',    ),  ),  4 =>   array (  ),),
        'travel_reservation_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_reservation',    ),  ),  4 =>   array (  ),),
        'travel_reservation_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_reservation',    ),  ),  4 =>   array (  ),),
        'travel_reservation_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\ReservationController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_reservation',    ),  ),  4 =>   array (  ),),
        'travel_voyage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_voyage/',    ),  ),  4 =>   array (  ),),
        'travel_voyage_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_voyage',    ),  ),  4 =>   array (  ),),
        'travel_voyage_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_voyage/new',    ),  ),  4 =>   array (  ),),
        'travel_voyage_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/travel_voyage/create',    ),  ),  4 =>   array (  ),),
        'travel_voyage_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_voyage',    ),  ),  4 =>   array (  ),),
        'travel_voyage_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_voyage',    ),  ),  4 =>   array (  ),),
        'travel_voyage_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\AgenceBundle\\Controller\\VoyageController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/travel_voyage',    ),  ),  4 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),  4 =>   array (  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),  4 =>   array (  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),  4 =>   array (  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),  4 =>   array (  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),  4 =>   array (  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),  4 =>   array (  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
