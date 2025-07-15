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
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/chefs/(?'
                    .'|edit/([^/]++)(*:71)'
                    .'|delete/([^/]++)(*:93)'
                .')'
                .'|/contacts/([^/]++)(?'
                    .'|(*:122)'
                    .'|/(?'
                        .'|edit(*:138)'
                        .'|delete(*:152)'
                    .')'
                .')'
                .'|/gallery/([^/]++)(?'
                    .'|(*:182)'
                    .'|/(?'
                        .'|edit(*:198)'
                        .'|delete(*:212)'
                    .')'
                .')'
                .'|/menus/(?'
                    .'|edit/([^/]++)(*:245)'
                    .'|delete/([^/]++)(*:268)'
                .')'
                .'|/partties/(?'
                    .'|edit/([^/]++)(*:303)'
                    .'|update/([^/]++)(*:326)'
                    .'|delete/([^/]++)(*:349)'
                .')'
                .'|/special/([^/]++)(?'
                    .'|(*:378)'
                    .'|/(?'
                        .'|edit(*:394)'
                        .'|delete(*:408)'
                    .')'
                .')'
                .'|/tables/([^/]++)(?'
                    .'|(*:437)'
                    .'|/(?'
                        .'|edit(*:453)'
                        .'|delete(*:467)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        71 => [[['_route' => 'chefs_edit', '_controller' => 'App\\Controller\\ChefController::edit'], ['key'], null, null, false, true, null]],
        93 => [[['_route' => 'chefs_delete', '_controller' => 'App\\Controller\\ChefController::delete'], ['key'], ['POST' => 0], null, false, true, null]],
        122 => [[['_route' => 'contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['key'], null, null, false, true, null]],
        138 => [[['_route' => 'contact_edit', '_controller' => 'App\\Controller\\ContactController::edit'], ['key'], null, null, false, false, null]],
        152 => [[['_route' => 'contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['key'], ['POST' => 0], null, false, false, null]],
        182 => [[['_route' => 'gallery_show', '_controller' => 'App\\Controller\\GalleryController::show'], ['key'], null, null, false, true, null]],
        198 => [[['_route' => 'gallery_edit', '_controller' => 'App\\Controller\\GalleryController::edit'], ['key'], null, null, false, false, null]],
        212 => [[['_route' => 'gallery_delete', '_controller' => 'App\\Controller\\GalleryController::delete'], ['key'], ['POST' => 0], null, false, false, null]],
        245 => [[['_route' => 'firebase_menu_edit', '_controller' => 'App\\Controller\\MenuFirebaseController::edit'], ['key'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        268 => [[['_route' => 'firebase_menu_delete', '_controller' => 'App\\Controller\\MenuFirebaseController::delete'], ['key'], ['POST' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_partties_edit', '_controller' => 'App\\Controller\\ParttiesController::edit'], ['key'], null, null, false, true, null]],
        326 => [[['_route' => 'app_partties_update', '_controller' => 'App\\Controller\\ParttiesController::update'], ['key'], ['POST' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_partties_delete', '_controller' => 'App\\Controller\\ParttiesController::delete'], ['key'], null, null, false, true, null]],
        378 => [[['_route' => 'special_show', '_controller' => 'App\\Controller\\SpecialController::show'], ['key'], null, null, false, true, null]],
        394 => [[['_route' => 'special_edit', '_controller' => 'App\\Controller\\SpecialController::edit'], ['key'], null, null, false, false, null]],
        408 => [[['_route' => 'special_delete', '_controller' => 'App\\Controller\\SpecialController::delete'], ['key'], ['POST' => 0], null, false, false, null]],
        437 => [[['_route' => 'firebase_table_show', '_controller' => 'App\\Controller\\TableFirebaseController::show'], ['key'], null, null, false, true, null]],
        453 => [[['_route' => 'firebase_table_edit', '_controller' => 'App\\Controller\\TableFirebaseController::edit'], ['key'], null, null, false, false, null]],
        467 => [
            [['_route' => 'firebase_table_delete', '_controller' => 'App\\Controller\\TableFirebaseController::delete'], ['key'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
