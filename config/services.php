<?php

/**
 * Fetching the list of from the micro service
 * @param void
 * @return string $base_uri
 */
return [
    'security' => [
        'authentication' => [
            'base_uri' => env('AUTHENTICATION_SERVICE_BASE_URL'),
        ],

        'authorization' => [
            'base_uri' => env('AUTHORIZATION_SERVICE_BASE_URL'),
        ],
    ],

    'users' => [
        'base_uri' => env('USERS_SERVICE_BASE_URL'),
    ],
];

