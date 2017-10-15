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

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->group(['prefix' => 'book/'], function ($app) {
    $app->get('/','BooksController@index'); //get all the routes	
    $app->post('/','BooksController@store'); //store single route
    $app->get('/{id}/', 'BooksController@show'); //get single route
    $app->put('/{id}/','BooksController@update'); //update single route
    $app->delete('/{id}/','BooksController@destroy'); //delete single route
});
