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

use App\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mahasiswa','MahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa-create','MahasiswaController@create')->name('tambah.mahasiswa');
Route::post('simpan-mahasiswa','MahasiswaController@store')->name('simpan.mahasiswa');
Route::get('edit-mahasiswa/{id}','MahasiswaController@edit')->name('edit.mahasiswa');
Route::post('update-mahasiswa/{id}','MahasiswaController@update')->name('update.mahasiswa');
Route::get('hapus-mahasiswa/{id}','MahasiswaController@hapus')->name('hapus.mahasiswa');

Route::get('makul','MakulController@index')->name('makul');
Route::get('makul-create','MakulController@create')->name('tambah.makul');
Route::post('simpan-makul','MakulController@store')->name('simpan.makul');
Route::get('edit-makul/{id}','MakulController@edit')->name('edit.makul');
Route::post('update-makul/{id}','MakulController@update')->name('update.makul');
Route::get('hapus-makul/{id}','MakulController@hapus')->name('hapus.makul');
