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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/login', 'CustomAuthController@getLogin');
Route::post('/login_action', 'CustomAuthController@login');
Route::get('/logout', 'CustomAuthController@logout');

Route::get('/admin', 'AdminController@adminPage');
Route::get('/tambah', 'AdminController@simpanMahasiswa');
Route::get('/date_settings', 'AdminController@dateSetting');
Route::post('/insert', 'AdminController@insert');
Route::post('/set_date', 'AdminController@setDate');
Route::get('/kirim_pesan/{id}', 'AdminController@getKirimPesan');
Route::post('/kirim_pesan/{id}', 'AdminController@postKirimPesan');

Route::get('/edit/{id}', 'AdminController@getEdit');
Route::post('/edit/{id}', 'AdminController@postEdit');

Route::get('/delete/{id}', 'AdminController@delete');

// list api
Route::get('/json_me', 'ApiController@getJson');
Route::post('/api/login_mahasiswa', 'ApiController@loginMahasiswa');
Route::post('/api/get_notif', 'ApiController@getNotif');
Route::post('/api/get_pesan', 'ApiController@getMessageAdmin');
Route::post('/api/registrasi', 'ApiController@uploadRegistration');
Route::post('/api/daftar_mahasiswa', 'ApiController@daftarMahasiswa');
Route::post('/api/change_server', 'ApiController@setServer');