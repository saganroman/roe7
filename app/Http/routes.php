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
/*Route::auth();*/
// Hello from RIVNEOBLENERGO!!!

Route::get('/', 'ChangeController@index');
Route::get('/changeView/{id}', 'ChangeController@view');
Route::get('/changeAdd', 'ChangeController@create');
Route::get('/changeStore', 'ChangeController@store');
Route::get('/changeEdit/{id}', 'ChangeController@edit');
Route::get('/changeUpdate/{id}', 'ChangeController@update');
Route::get('/changeDelete/{id}', 'ChangeController@destroy');
Route::get('/changeAutocomplete/{number}', 'ChangeController@autocomplete');

Route::get('/cartridges', 'CartridgeController@index');
Route::get('/cartridgeView/{id}', 'CartridgeController@view');
Route::get('/cartridgeAdd', 'CartridgeController@create');
Route::get('/cartridgeStore', 'CartridgeController@store');
Route::get('/cartridgeEdit/{id}', 'CartridgeController@edit');
Route::get('/cartridgeUpdate/{id}', 'CartridgeController@update');
Route::get('/cartridgeDelete/{id}', 'CartridgeController@destroy');

