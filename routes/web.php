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

//Route::get('login', function () {
//    return view('login');
//});




Route::get('/login',function () {
    return view('login');
})->name('login');

Route::get('/loginkoor',function () {
    return view('dosen.login');
})->name('loginkoor');

Route::get('/logindosen',function () {
    return view('admin.login');
})->name('logindosen');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::post('/postlogin1', 'DosenController@postlogin1')->name('postlogin1');
Route::get('/logout1', 'DosenController@logout1')->name('logout1');

Route::post('/postlogin2', 'AdminController@postlogin2')->name('postlogin2');
Route::get('/logout2', 'AdminController@logout2')->name('logout2');

Route::group(['middleware' => ['auth','ceklogin:mahasiswa']], function () {

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
});


Route::group(['middleware' => ['auth','koor:koor']], function () {
    Route::get('dosen',function () {
        return view('dosen');
    });
    Route::get('dosen/suratketerangan','DosenController@tampil');
    Route::get('suratketerangan/verifikasi/{id}','DosenController@verifikasi');
    Route::patch('dosensk/{id}','DosenController@verifikasiProses');

    Route::get('dosen/prakp','DosenController@tampilprakp');
    Route::get('prakp/verifikasi/{id}','DosenController@verifikasiprakp');
    Route::patch('dosenprakp/{id}','DosenController@verifprakpProses');

    Route::get('dosen/kp','DosenController@tampilkp');
    Route::get('kp/verifikasi/{id}','DosenController@verifikasikp');
    Route::patch('dosenkp/{id}','DosenController@verifkpProses');

    Route::get('dosen/ujian', 'DosenController@jadwal');
    Route::get('dosen/ujian/setjadwal/{id}','DosenController@setjadwal');
Route::patch('dosen/{id}','DosenController@setProses');
Route::get('/dosen/batas', 'DosenController@bataskp');
Route::get('/dosen/prosesbataskp', 'DosenController@prosesbataskp');
Route::get('dosen/dafregis','DosenController@regiskp');


//Route::patch('verifikasi/{id}','DosenController@verifikasiProses');
//Route::get('suratketerangan/verifikasi','DosenController@verifikasi');
//Route::post('verifikasi','DosenController@verifikasiProses');

});


//Route::get('dosen/setjadwal', 'DosenController@setjadwal');
//Route::patch('ujian{id}', 'DosenController@setjadwalProses');
//Route::get('/dosen/prosessetjadwal', 'DosenController@setjadwal');

Route::group(['middleware' => ['auth','dosen:dosen']], function () {
Route::get('admin',function () {
    return view('admin');
});
Route::get('admin/dafbimbingan','AdminController@bimbingan');
Route::get('set/ujian/{id}','AdminController@setujian');
Route::patch('setujian/{id}','AdminController@setujianProses');
//Route::get('/admin/prosessetujian', 'AdminController@prosessetujian');
Route::get('admin/jadwal','AdminController@jadwal');
});