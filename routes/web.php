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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'HomeController@index');
Route::get('/urun', 'HomeController@urun');
Route::get('/kategoriEkle', 'HomeController@kategoriEkle');
Route::get('/birimEkle', 'HomeController@birimEkle');
Route::get('/hareketler', 'HomeController@hareketler');

Route::get('/kategoriler', 'HomeController@kategoriler')->name('kategoriler');
Route::get('/sil/{id}', 'HomeController@sil');

Route::get('/birimler', 'HomeController@birimler')->name('birimler');
Route::get('/sill/{id}', 'HomeController@sill');
Route::get('/duzenle/{id}', 'HomeController@duzenle');
Route::post('/birimduzenle', 'HomeController@birimduzenle');
Route::get('/kategoriduzenle/{id}', 'HomeController@kategoriduzenle');
Route::post('/duzenle0', 'HomeController@duzenle0');
Route::get('/urunduzenle/{id}', 'HomeController@urunduzenle');
Route::post('/duzenle1', 'HomeController@duzenle1');



Route::get('/urunler', 'HomeController@urun')->name('urun');
Route::get('/sil0/{id}', 'HomeController@sil0');
Route::post('/kategoriEkle1', 'HomeController@kategoriEkle1');
Route::post('/birimEkle1', 'HomeController@birimEkle1');
Route::post('/ekle', 'HomeController@ekle');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/home1', 'HomeController@home')->name('home');
Route::get('/yeniEkle', 'HomeController@yeniEkle');








