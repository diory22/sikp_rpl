<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home',function () {
    return view('home');
});

Route::get('suratketerangan','MahasiswaController@tampil');
Route::get('suratketerangan/tambah','MahasiswaController@tambah');
Route::post('suratketerangan','MahasiswaController@tambahProses');
Route::get('suratketerangan/edit/{id}','MahasiswaController@edit');
Route::patch('suratketerangan/{id}','MahasiswaController@editProses');
Route::delete('suratketerangan/{id}','MahasiswaController@delete');

Route::get('prakp','MahasiswaController@tampilprakp');
Route::get('prakp/tambahprakp','MahasiswaController@tambahprakp');
Route::post('prakp','MahasiswaController@tambahProsesprakp');
Route::get('prakp/editprakp/{id}','MahasiswaController@editprakp');
Route::patch('prakp/{id}','MahasiswaController@editProsesprakp');
Route::delete('prakp/{id}','MahasiswaController@deleteprakp');

Route::get('kp','MahasiswaController@tampilkp');
Route::get('kp/tambahkp','MahasiswaController@tambahkp');
Route::post('kp','MahasiswaController@tambahProseskp');
Route::get('kp/editkp/{id}','MahasiswaController@editkp');
Route::patch('kp/{id}','MahasiswaController@editProseskp');
Route::delete('kp/{id}','MahasiswaController@deletekp');