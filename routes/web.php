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
	});
});

Auth::routes();

Route::get('signinPendonor', 'Pendonor\LoginController@showLoginForm')->name('pendonor.login');
Route::post('signinPendonor', 'Pendonor\LoginController@login');

Route::get('signupPendonor', 'Pendonor\RegisterController@showRegistrationForm')->name('pendonor.register');
Route::post('signupPendonor', 'Auth\RegisterController@register');
 
Route::get('/', 'MapsController@index')->name('maps');
