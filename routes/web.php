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

Route::get('/home', 'HomeController@home')->middleware('auth');

Route::get('/mahasiswa', 'MahasiswaController@mahasiswa')->middleware('auth');
Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian')->middleware('auth');
Route::get('/mahasiswa/formulirmahasiswa', 'MahasiswaController@formulirmahasiswa')->middleware('auth');
Route::post('/mahasiswa/simpanmahasiswa', 'MahasiswaController@simpanmahasiswa')->middleware('auth');
Route::get('/mahasiswa/editmahasiswa/{id}', 'MahasiswaController@editmahasiswa')->middleware('auth');
Route::put('/mahasiswa/updatemahasiswa/{id}', 'MahasiswaController@updatemahasiswa')->middleware('auth');
Route::get('/mahasiswa/hapusmahasiswa/{id}', 'MahasiswaController@hapusmahasiswa')->middleware('auth');

Route::get('/dosen', 'DosenController@dosen')->middleware('auth');
Route::get('/dosen/cari', 'DosenController@pencarian')->middleware('auth');
Route::get('/dosen/formulirdosen', 'DosenController@formulirdosen')->middleware('auth');
Route::post('/dosen/simpandosen', 'DosenController@simpandosen')->middleware('auth');
Route::get('/dosen/editdosen/{id}', 'DosenController@editdosen')->middleware('auth');
Route::put('/dosen/updatedosen/{id}', 'DosenController@updatedosen')->middleware('auth');
Route::get('/dosen/hapusdosen/{id}', 'DosenController@hapusdosen')->middleware('auth');

Route::get('/user', 'AuthController@user')->middleware('auth');
Route::get('/user/formuliruser', 'AuthController@formuliruser')->middleware('auth');
Route::post('/user/simpanuser', 'AuthController@simpanuser')->middleware('auth');
Route::get('/user/edituser/{id}', 'AuthController@edituser')->middleware('auth');
Route::put('/user/updateuser/{id}', 'AuthController@updateuser')->middleware('auth');
Route::get('/user/hapususer/{id}', 'AuthController@hapususer')->middleware('auth');
Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');
Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->middleware('auth');


