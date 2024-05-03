<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'security_logout'], null, null, null, false, false, null],
        ],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/users-manager' => [
            [['_route' => 'users_manager', '_controller' => 'App\\Controller\\UsersManagerController::usersTable'], null, null, null, false, false, null],
            [['_route' => 'users_managemer', '_controller' => 'App\\Controller\\UsersManagerController::usersTable'], null, null, null, false, false, null],
        ],
        '/login' => [[['_route' => 'security_login', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], null, null, null, false, false, null]],
        '/user-details' => [[['_route' => 'user_details', '_controller' => 'App\\Controller\\UserDetailsController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/users\\-manager/(?'
                    .'|delete/([^/]++)(*:76)'
                    .'|block/([^/]++)(*:97)'
                    .'|unblock/([^/]++)(*:120)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        76 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\UsersManagerController::deleteUser'], ['id'], null, null, false, true, null]],
        97 => [[['_route' => 'block_user', '_controller' => 'App\\Controller\\UsersManagerController::blockUser'], ['id'], null, null, false, true, null]],
        120 => [
            [['_route' => 'unblock_user', '_controller' => 'App\\Controller\\UsersManagerController::unblockUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
