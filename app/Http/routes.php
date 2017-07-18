<?php
/*Route::auth();*/
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

Route::get('/branches', 'BranchController@index');
Route::get('/branchStore', 'BranchController@store');
Route::get('/branchAdd', 'BranchController@create');
Route::get('/branchEdit/{id}', 'BranchController@edit');
Route::get('/branchUpdate/{id}', 'BranchController@update');
Route::get('/branchDelete/{id}', 'BranchController@destroy');

Route::get('/service', 'ServiceController@index');
Route::get('/serviceStore', 'ServiceController@store');
Route::get('/serviceAdd', 'ServiceController@create');
Route::get('/serviceEdit/{id}', 'ServiceController@edit');
Route::get('/serviceUpdate/{id}', 'ServiceController@update');
Route::get('/serviceDelete/{id}', 'ServiceController@destroy');

