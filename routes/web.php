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

$router->get('/', function () {
    return 'Hello World';
});

$router->get('recipe', [
    'as' => 'recipe', 'uses' => 'RecipeController@index'
]);

$router->get('recipe/{id}', 'RecipeController@show');
$router->post('recipe', 'RecipeController@store');
$router->put('recipe/{id}', 'RecipeController@update');
$router->delete('recipe/{id}', 'RecipeController@destroy');

