<?php

/**
 * Fetching the list of from the micro service
 * @param void
 * @return string $base_uri
 */
// return [
//     'security' => [
//         'authentication' => [
//             'base_uri' => env('AUTHENTICATION_SERVICE_BASE_URL'),
//         ],

//         'base_uri' => [
//             'authorization' => env('AUTHORIZATION_SERVICE_BASE_URL'),
//         ],
//     ],

//     'users' => [
//         'base_uri' => env('USERS_SERVICE_BASE_URL'),
//     ],
// ];


return [
    'users' => [
        'base_uri' => env('USERS_SERVICE_BASE_URL'),
    ],
];
