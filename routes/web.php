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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','KelasController@homepage')->name('homepage');

Route::resource('/kelas','KelasController');

Route::get('Siswa/','SiswaController@index');
Route::get('Siswa/create','SiswaController@create');
Route::post('Siswa/store','SiswaController@store');
Route::get('Siswa/show/{id}','SiswaController@show');
Route::get('Siswa/edit/{id}','SiswaController@edit');
Route::post('Siswa/update/{id}','SiswaController@update');
Route::delete('Siswa/destroy/{id}','SiswaController@destroy');




