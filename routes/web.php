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

Route::get('data-dokter', 'dokterController@index');
Route::get('/data-dokter/{id}/edit', 'dokterController@edit');
Route::get('data-dokter/add-dokter', 'dokterController@create');

Route::get('/pasien', 'pasienController@index');
Route::get('pasien/add-pasien', 'pasienController@input');
Route::post('pasien', 'pasienController@store');
Route::get('/pasien/{id}/edit', "pasienController@edit");
Route::patch('/pasien/{id}', 'pasienController@update');

Route::delete('/pasien/{id}', 'pasienController@destroy');

Route::get('/data-spesialis', 'SpesialisController@index');
Route::get('/data-ruangan', 'RuanganController@index');
