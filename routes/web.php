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

Route::get('ujian','MahasiswaController@tampilujian');


Route::get('dosen',function () {
    return view('dosen');
});
Route::get('dosen/suratketerangan','DosenController@tampil');
Route::get('dosen/prosessetujuisk/{any:}', 'DosenController@prosessetujuisk');
Route::get('dosen/prosesbatalsk/{any:}', 'DosenController@prosesbatalsk');
Route::get('dosen/prakp','DosenController@tampilprakp');
Route::get('dosen/prosessetujuiprakp/{any:}', 'DosenController@prosessetujuiprakp');
Route::get('dosen/prosesbatalprakp/{any:}', 'DosenController@prosesbatalprakp');
Route::get('dosen/kp','DosenController@tampilkp');
Route::get('dosen/prosessetujuikp/{any:}', 'DosenController@prosessetujuikp');
Route::get('dosen/prosesbatalkp/{any:}', 'DosenController@prosesbatalkp');
Route::get('dosen/ujian', 'DosenController@jadwal');
//Route::get('dosen/setjadwal', 'DosenController@setjadwal');
//Route::patch('ujian{id}', 'DosenController@setjadwalProses');
//Route::get('/dosen/prosessetjadwal', 'DosenController@setjadwal');
Route::get('dosen/ujian/setjadwal/{id}','DosenController@setjadwal');
Route::patch('dosen/{id}','DosenController@setProses');
Route::get('/dosen/batas', 'DosenController@bataskp');
Route::get('/dosen/prosesbataskp', 'DosenController@prosesbataskp');
Route::get('dosen/dafregis','DosenController@regiskp');

Route::get('admin',function () {
    return view('admin');
});
Route::get('admin/dafbimbingan','AdminController@bimbingan');
Route::get('admin/jadwal','AdminController@jadwal');