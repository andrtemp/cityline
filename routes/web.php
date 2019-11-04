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

Route::get('/', 'MainController@main');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/pricing', 'MainController@prices')->name('pricing');
Route::get('/contacts', 'MainController@contacts')->name('contacts');
Route::get('/services', 'MainController@services')->name('services');
Route::get('/news', 'MainController@news')->name('news');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/news', 'HomeController@news')->name('admin-news');
Route::get('/admin/news/{id}/edit', 'HomeController@edit');
Route::get('/admin/news/form', 'HomeController@form')->name('admin-news-form');
Route::post('/admin/news/form', 'HomeController@store');
Route::put('/admin/news/form/{id}', 'HomeController@update');
Route::delete('/admin/news/{id}', 'HomeController@delete');
