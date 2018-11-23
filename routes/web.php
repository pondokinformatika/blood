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
    return view('example');
});

<<<<<<< HEAD
Route::prefix('admin')->group(function () {
	Route::resource('/patients', 'Admin\PatientsCotroller');
});
=======
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 57c20cce7ad3734f9a24d342c49dc72165de4183
