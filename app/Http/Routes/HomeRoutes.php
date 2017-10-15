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

Route::get('/', function () {
    return view('welcome');
});
Route::auth();
Route::get('/home', ['as' => 'home.index', 'uses' => 'HomeController@index']);
Route::post('/home', ['as' => 'home.store', 'uses' => 'HomeController@store']);
Route::post('/', ['as' => 'home.store', 'uses' => 'HomeController@store']);
Route::get('/findDocTypes', ['as' => 'home.findDocTypes', 'uses' => 'HomeController@findDocTypes']);
Route::get('/findBanks', ['as' => 'home.findBanks', 'uses' => 'HomeController@findBanks']);
Route::get('/findCurrencies', ['as' => 'home.findCurrencies', 'uses' => 'HomeController@findCurrencies']);
Route::get('/findGenders', ['as' => 'home.findGenders', 'uses' => 'HomeController@findGenders']);


