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

Route::get('/','PagesController@getHome');
Route::get('/403','PagesController@getError403');
Route::get('/404','PagesController@getError404');
Route::get('/500','PagesController@getError500');
Route::get('/503','PagesController@getError503');
Route::get('/about','PagesController@getAbout');
Route::get('/contact','PagesController@getContact');
Route::get('/single','PagesController@getSingle');
Route::get('/category','PagesController@getCategory');
Route::get('/search','PagesController@getSearch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
