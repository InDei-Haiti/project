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

Route::get('/','PagesController@getHome')->name('app');
Route::get('/403','PagesController@getError403')->name('403');
Route::get('/404','PagesController@getError404')->name('404');
Route::get('/500','PagesController@getError500')->name('500');
Route::get('/503','PagesController@getError503')->name('503');
Route::get('/about','PagesController@getAbout')->name('about');
Route::get('/contact','PagesController@getContact')->name('contact');
Route::get('/single','PagesController@getSingle')->name('single');
Route::get('/category','PagesController@getCategory')->name('category');
Route::get('/search','PagesController@getSearch')->name('search');

Auth::routes();

Route::get('/home', 'PagesController@getHome')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
  Route::get('/',[
    'uses'=>'PagesController@getAdmin',
    'as'=>'admin'
  ]);
  Route::get('/posts',[
    'uses' => 'PostsController@index',
    'as' => 'post.index'
  ]);
  Route::get('/post/trash',[
    'uses' => 'PostsController@trash',
    'as' => 'post.trash'
  ]);
  Route::get('/post/create',[
    'uses' => 'PostsController@create',
    'as' => 'post.create'
  ]);
  Route::post('/post/store',[
    'uses' => 'PostsController@store',
    'as' => 'post.store'
  ]);
  Route::get('/post/edit/{id}',[
    'uses' => 'PostsController@update',
    'as' => 'post.edit'
  ]);
  Route::get('/post/delete/{id}',[
    'uses' => 'PostsController@destroy',
    'as' => 'post.delete'
  ]);
  Route::get('/post/kill/{id}',[
    'uses' => 'PostsController@kill',
    'as' => 'post.kill'
  ]);
  Route::get('/post/restore/{id}',[
    'uses' => 'PostsController@restore',
    'as' => 'post.restore'
  ]);
  Route::get('/category/create',[
    'uses' => 'CategoriesController@create',
    'as' => 'category.create'
  ]);
  Route::get('/categories',[
    'uses' => 'CategoriesController@index',
    'as' => 'categories'
  ]);
  Route::post('/category/store',[
    'uses' => 'CategoriesController@store',
    'as' => 'category.store'
  ]);
  Route::get('/category/edit/{id}',[
    'uses' => 'CategoriesController@edit',
    'as' => 'category.edit'
  ]);
  Route::get('/category/delete/{id}',[
    'uses' => 'CategoriesController@destroy',
    'as' => 'category.delete'
  ]);
  Route::post('/category/update/{id}',[
    'uses' => 'CategoriesController@update',
    'as' => 'category.update'
  ]);
});
