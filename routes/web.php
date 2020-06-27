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



Route::resource('/', 'HomeController');
//Route::get('/home', 'HomeController@index')->name('home');
Route::view('/news', '/content/news/news')->name('news');
Route::view('/ressources', '/content/ressources/ressources')->name('ressources');
Route::view('/personnages', '/content/characters/characters')->name('characters');