<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.home');
});


$router->get('/pages/create', 'PagesController@create');
$router->post('/pages/store', 'PagesController@store');
$router->get('/pages', 'PagesController@index');
$router->post('/callback', 'SpotifyController@callback');
$router->get('/spotify/login', 'SpotifyController@login');
$router->get('/spotify/authorize', 'SpotifyController@authorize');
