<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/chefs' => [[['_route' => 'chefs_list', '_controller' => 'App\\Controller\\ChefController::index'], null, null, null, false, false, null]],
        '/admin/chefs/create' => [[['_route' => 'chefs_create', '_controller' => 'App\\Controller\\ChefController::create'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contacts/new' => [[['_route' => 'contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, null, null, false, false, null]],
        '/gallery' => [[['_route' => 'gallery_index', '_controller' => 'App\\Controller\\GalleryController::index'], null, null, null, false, false, null]],
        '/gallery/new' => [[['_route' => 'gallery_new', '_controller' => 'App\\Controller\\GalleryController::new'], null, null, null, false, false, null]],
        '/home/menu' => [[['_route' => 'app_menus_home', '_controller' => 'App\\Controller\\HomeController::show'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'front_index', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/menus' => [[['_route' => 'firebase_menu_index', '_controller' => 'App\\Controller\\MenuFirebaseController::index'], null, null, null, false, false, null]],
        '/menus/add' => [[['_route' => 'firebase_menu_add', '_controller' => 'App\\Controller\\MenuFirebaseController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/partties' => [[['_route' => 'app_partties_index', '_controller' => 'App\\Controller\\ParttiesController::index'], null, null, null, false, false, null]],
        '/partties/create' => [[['_route' => 'app_partties_create', '_controller' => 'App\\Controller\\ParttiesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/specialee' => [[['_route' => 'special_index', '_controller' => 'App\\Controller\\SpecialController::index'], null, null, null, false, false, null]],
        '/special/new' => [[['_route' => 'special_new', '_controller' => 'App\\Controller\\SpecialController::new'], null, null, null, false, false, null]],
        '/specialss' => [[['_route' => 'speciale_index', '_controller' => 'App\\Controller\\SpecialController::indexww'], null, null, null, false, false, null]],
        '/tables' => [[['_route' => 'firebase_table_index', '_controller' => 'App\\Controller\\TableFirebaseController::index'], null, null, null, true, false, null]],
        '/tables/new' => [[['_route' => 'firebase_table_new', '_controller' => 'App\\Controller\\TableFirebaseController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/chefs/(?'
                    .'|edit/([^/]++)(*:36)'
                    .'|delete/([^/]++)(*:58)'
                .')'
                .'|/contacts/([^/]++)(?'
                    .'|(*:87)'
                    .'|/(?'
                        .'|edit(*:102)'
                        .'|delete(*:116)'
                    .')'
                .')'
                .'|/gallery/([^/]++)(?'
                    .'|(*:146)'
                    .'|/(?'
                        .'|edit(*:162)'
                        .'|delete(*:176)'
                    .')'
                .')'
                .'|/menus/(?'
                    .'|edit/([^/]++)(*:209)'
                    .'|delete/([^/]++)(*:232)'
                .')'
                .'|/partties/(?'
                    .'|edit/([^/]++)(*:267)'
                    .'|update/([^/]++)(*:290)'
                    .'|delete/([^/]++)(*:313)'
                .')'
                .'|/special/([^/]++)(?'
                    .'|(*:342)'
                    .'|/(?'
                        .'|edit(*:358)'
                        .'|delete(*:372)'
                    .')'
                .')'
                .'|/tables/([^/]++)(?'
                    .'|(*:401)'
                    .'|/(?'
                        .'|edit(*:417)'
                        .'|delete(*:431)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'chefs_edit', '_controller' => 'App\\Controller\\ChefController::edit'], ['key'], null, null, false, true, null]],
        58 => [[['_route' => 'chefs_delete', '_controller' => 'App\\Controller\\ChefController::delete'], ['key'], ['POST' => 0], null, false, true, null]],
        87 => [[['_route' => 'contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['key'], null, null, false, true, null]],
        102 => [[['_route' => 'contact_edit', '_controller' => 'App\\Controller\\ContactController::edit'], ['key'], null, null, false, false, null]],
        116 => [[['_route' => 'contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['key'], ['POST' => 0], null, false, false, null]],
        146 => [[['_route' => 'gallery_show', '_controller' => 'App\\Controller\\GalleryController::show'], ['key'], null, null, false, true, null]],
        162 => [[['_route' => 'gallery_edit', '_controller' => 'App\\Controller\\GalleryController::edit'], ['key'], null, null, false, false, null]],
        176 => [[['_route' => 'gallery_delete', '_controller' => 'App\\Controller\\GalleryController::delete'], ['key'], ['POST' => 0], null, false, false, null]],
        209 => [[['_route' => 'firebase_menu_edit', '_controller' => 'App\\Controller\\MenuFirebaseController::edit'], ['key'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        232 => [[['_route' => 'firebase_menu_delete', '_controller' => 'App\\Controller\\MenuFirebaseController::delete'], ['key'], ['POST' => 0], null, false, true, null]],
        267 => [[['_route' => 'app_partties_edit', '_controller' => 'App\\Controller\\ParttiesController::edit'], ['key'], null, null, false, true, null]],
        290 => [[['_route' => 'app_partties_update', '_controller' => 'App\\Controller\\ParttiesController::update'], ['key'], ['POST' => 0], null, false, true, null]],
        313 => [[['_route' => 'app_partties_delete', '_controller' => 'App\\Controller\\ParttiesController::delete'], ['key'], null, null, false, true, null]],
        342 => [[['_route' => 'special_show', '_controller' => 'App\\Controller\\SpecialController::show'], ['key'], null, null, false, true, null]],
        358 => [[['_route' => 'special_edit', '_controller' => 'App\\Controller\\SpecialController::edit'], ['key'], null, null, false, false, null]],
        372 => [[['_route' => 'special_delete', '_controller' => 'App\\Controller\\SpecialController::delete'], ['key'], ['POST' => 0], null, false, false, null]],
        401 => [[['_route' => 'firebase_table_show', '_controller' => 'App\\Controller\\TableFirebaseController::show'], ['key'], null, null, false, true, null]],
        417 => [[['_route' => 'firebase_table_edit', '_controller' => 'App\\Controller\\TableFirebaseController::edit'], ['key'], null, null, false, false, null]],
        431 => [
            [['_route' => 'firebase_table_delete', '_controller' => 'App\\Controller\\TableFirebaseController::delete'], ['key'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
