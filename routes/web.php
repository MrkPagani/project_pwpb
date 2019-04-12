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
    return view('welcome');
});

Route::get('/signup/create', 'UserController@SignUp');
Route::post('/signup', 'UserController@postSignUp');

Route::get('/index', function () {
    return view('home.home');
});

Route::get('/data-dokter', 'dokterController@index');
Route::get('/data-dokter/add-dokter', 'dokterController@input');
Route::post('data-dokter', 'dokterController@store');
Route::get('/data-dokter/{id}/edit', 'dokterController@edit');
Route::patch('/data-dokter/{id}', 'dokterController@update');
Route::delete('/data-dokter/{id}', 'dokterController@destroy');


Route::get('/pasien', 'pasienController@index');
Route::get('pasien/add-pasien', 'pasienController@input');
Route::post('/pasien', 'pasienController@store');
Route::get('/pasien/{id}/edit', "pasienController@edit");
Route::patch('/pasien/{id}', 'pasienController@update');
Route::delete('/pasien/{id}', 'pasienController@destroy');

Route::get('/data-spesialis', 'SpesialisController@index');
Route::get('data-spesialis/add-spesialis', 'SpesialisController@input');
Route::post('data-spesialis', 'SpesialisController@store');
Route::get('/data-spesialis/{id}/edit', "SpesialisController@edit");
Route::patch('/dataspesialis/{id}', 'SpesialisController@update');
Route::patch('/dataspesialis/{id}', 'SpesialisController@destroy');

Route::get('/data-ruangan', 'RuanganController@index');
