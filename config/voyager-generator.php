<?php

return [

    /*
     * The config_key for voyager-generator package.
     */
    'config_key' => env('VOYAGER_GENERATOR_CONFIG_KEY', 'joy-voyager-generator'),

    /*
     * The route_prefix for voyager-generator package.
     */
    'route_prefix' => env('VOYAGER_GENERATOR_ROUTE_PREFIX', 'joy-voyager-generator'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerGenerator\\Http\\Controllers',
    ],
];
