<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/** @var \Illuminate\Routing\Router $router */
$router->get('auth', ['uses' => 'AuthController@login', 'as' => 'login', 'middleware' => 'guest']);
$router->get('auth/logout', ['uses' => 'AuthController@logout', 'as' => 'logout', 'middleware' => 'auth']);

$router->resource('user', 'UsersController', ['only' => ['index', 'show', 'edit', 'update']]);
$router->resource('discussion', 'DiscussionsController');

$router->get('channel/{channel}', ['uses' => 'DiscussionsController@index', 'as' => 'channel']);

$router->get('/', ['uses' => 'DiscussionsController@index', 'as' => 'home']);
