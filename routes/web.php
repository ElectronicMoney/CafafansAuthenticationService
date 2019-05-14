<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//Authors Micro Service Routes
$router->get('/users', 'UserMicroService\UserController@index');
$router->post('/users', 'UserMicroService\UserController@store');
$router->get('/users/{user}', 'UserMicroService\UserController@show');
$router->put('/users/{user}', 'UserMicroService\UserController@update');
$router->patch('/users/{user}', 'UserMicroService\UserController@update');
$router->delete('/users/{user}', 'UserMicroService\UserController@destroy');
