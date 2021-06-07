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

Route::get('/', 'PagesController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('index', 'PagesController@index')->name('index');

Route::get('about', 'PagesController@about')->name('about');

Route::get('contact', 'PagesController@contact')->name('contact');

Route::resource('articles', 'ArticlesController');

Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');

Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

Route::get('excel', 'ExcelController@create')->name('excel.create');

Route::post('excel', 'ExcelController@store')->name('excel.store');

Route::get('excel/list', 'ExcelController@index')->name('excel.index');

Route::get('export', 'ExcelController@export');

Route::get('file','FileController@create');

Route::post('file','FileController@store');
