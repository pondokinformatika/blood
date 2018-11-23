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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth'])->group(function () {
	Route::prefix('admin')->group(function () {
		Route::resource('/patients', 'Admin\PatientsCotroller');
		Route::resource('/provinsi', 'Admin\ProvincesController');
		Route::resource('/pendonor', 'Admin\PendonorController');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MapsController@index')->name('maps');