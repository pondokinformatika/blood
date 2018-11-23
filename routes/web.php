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


Route::prefix('admin')->group(function () {
	Route::resource('/patients', 'Admin\PatientsCotroller');
	Route::resource('/provinsi', 'Admin\ProvincesController');
});

Auth::routes();

Route::get('/', [
	'uses'	=>	'Admin\HomeController@index',
	'as'	=>	'home'
]);
