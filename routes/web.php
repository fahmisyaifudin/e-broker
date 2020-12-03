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

$router->post('hitung-topsis', 'Controller@hitungTopsis');
$router->get('get-kendaraan', 'Controller@getKendaraan');

$router->post('saving-matrik', 'SavingMatrikController@index');

$router->post('login', 'AuthController@login');
$router->post('register/petani', 'AuthController@petaniRegister');
$router->post('register/rental', 'AuthController@rentalRegister');

$router->group(['middleware' => 'jwt'], function() use ($router) {
    $router->post('fuzzy-topsis', 'FuzzyTopsisController@index');
    $router->post('set-location', 'FuzzyTopsisController@setLocation');

    $router->post('transaksi/create', 'TransactionController@create');
    $router->get('transaksi/view/{id}', 'TransactionController@view');
    $router->get('transaksi/accept/{id}', 'TransactionController@accept');
    $router->get('transaksi/finish/{id}', 'TransactionController@finish');
    $router->post('transaksi/rating', 'TransactionController@giveRating');
    $router->get('transaksi/list', 'TransactionController@list');
});




