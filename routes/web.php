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

Route::get('signinPendonor', 'Pendonor\LoginController@showLoginForm')->name('pendonor.login');
Route::post('signinPendonor', 'Pendonor\LoginController@login');

Route::get('signupPendonor', 'Pendonor\RegisterController@showRegistrationForm')->name('pendonor.register');
Route::post('signupPendonor', 'Pendonor\RegisterController@register');

Route::middleware(['web', 'pendonor', 'auth:pendonor'])->group(function () {
	Route::prefix('pendonor')->group(function () {
		Route::get('home', 'Pendonor\HomeController@index')->name('pendonor.home');
		Route::post('home', 'Pendonor\HomeController@update')->name('pendonor.update');
	});
});
Route::post('pendonor/logout', 'Pendonor\LoginController@logout')->name('pendonor.logout');

Route::get('test', function() {
	$data = array("msisdn" => "085872893723", "content" => "hello bilal");                                                                    
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
	curl_setopt($ch, CURLINFO_HEADER_OUT, true);                                                                   
	curl_setopt($ch, CURLOPT_POST, true);                                                                     
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		    'Authorization: Bearer 3139b6ef1295bb8d262258106a18ac29',
		    'X-MainAPI-Senderid: TELKOM',                                                                                
		    'Accept: application/json' 
		)                                             
	);                                                                                                                   
	$result = curl_exec($ch);
	curl_close($ch);
	dd($result);
});
