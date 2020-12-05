<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/create_kategori', 'KategoriController@create');
$router->get('/show_kategori_all', 'KategoriController@showAll');
$router->get('/show_kategori_detail/{id}', 'KategoriController@showDetailData');
$router->put('/update_kategori/{id}', 'KategoriController@update');
$router->delete('/delete_kategori/{id}', 'KategoriController@delete');