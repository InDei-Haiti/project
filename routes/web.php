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


Route::post('/subscribe',function(){
  $email=request('email');

  Newsletter::subscribe($email);

  Session::flash('success','Та амжилттай бүртгүүллээ, одооноос манай сайтын хамгийн сүүлийн үеийн мэдээтэй хамт байх болно.');
  return redirect()->back();
});

Route::get('{provider}/auth',[
  'uses'=>'SocialsController@auth',
  'as'=>'social.auth'
]);

Route::get('/{provider}/redirect',[
  'uses'=>'SocialsController@auth_callback',
  'as'=>'social.callback'
]);

Route::get('/forum',[
  'uses'=>'ForumsController@index',
  'as'=>'forum'
]);
Route::get('/','PagesController@getHome')->name('app');
Route::get('/403','PagesController@getError403')->name('403');
Route::get('/404','PagesController@getError404')->name('404');
Route::get('/500','PagesController@getError500')->name('500');
Route::get('/503','PagesController@getError503')->name('503');
Route::get('/about','PagesController@getAbout')->name('about');
Route::get('/contact','PagesController@getContact')->name('contact');
Route::get('/single','PagesController@getSingle')->name('single');
Route::get('/category','PagesController@getCategory')->name('category');
Route::get('/search',function(){
    $posts=\App\Post::where('title','like','%'.request('query').'%')->get();
    return view('result')->with('posts',$posts);
})->name('search');

Route::get('/p/{id}',[
  'uses'=>'PagesController@getPost',
  'as'=>'p'
]);
Route::get('/c/{id}',[
  'uses'=>'PagesController@getCategory',
  'as'=>'c'
]);
Route::get('/t/{id}',[
  'uses'=>'PagesController@getTag',
  'as'=>'t'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
  Route::get('/',[
    'uses'=>'PagesController@getAdmin',
    'as'=>'admin'
  ]);
  Route::get('/dashboard',[
    'uses'=>'PagesController@getDashboard',
    'as'=>'dashboard'
  ]);
  Route::get('/posts',[
    'uses' => 'PostsController@index',
    'as' => 'posts'
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
    'uses' => 'PostsController@edit',
    'as' => 'post.edit'
  ]);
  Route::post('/post/update/{id}',[
    'uses' => 'PostsController@update',
    'as' => 'post.update'
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

  Route::get('/tags',[
    'uses'=>'TagsController@index',
    'as'=>'tags'
  ]);
  Route::get('/tag/create',[
    'uses'=>'TagsController@create',
    'as'=>'tag.create'
  ]);
  Route::post('/tag/store',[
    'uses'=>'TagsController@store',
    'as'=>'tag.store'
  ]);
  Route::get('/tag/edit/{id}',[
    'uses'=>'TagsController@edit',
    'as'=>'tag.edit'
  ]);
  Route::post('/tag/update/{id}',[
    'uses'=>'TagsController@update',
    'as'=>'tag.update'
  ]);
  Route::get('/tag/delete/{id}',[
    'uses'=>'TagsController@destroy',
    'as'=>'tag.delete'
  ]);

  Route::get('/users',[
    'uses'=>'UsersController@index',
    'as'=>'users'
  ]);
  Route::get('/user/delete/{id}',[
    'uses'=>'UsersController@destroy',
    'as'=>'user.delete'
  ]);
  Route::get('user/admin/{id}',[
    'uses'=>'UsersController@admin',
    'as'=>'user.admin'
  ]);
  Route::get('user/notadmin/{id}',[
    'uses'=>'UsersController@notadmin',
    'as'=>'user.notadmin'
  ]);
  Route::get('settings',[
    'uses'=>'SettingsController@index',
    'as'=>'settings'
  ]);
  Route::post('setting/update',[
    'uses'=>'SettingsController@update',
    'as'=>'setting.update'
  ]);

  Route::get('/reply/like/{id}',[
    'uses'=>'RepliesController@like',
    'as'=>'reply.like'
  ]);
  Route::get('/reply/unlike/{id}',[
    'uses'=>'RepliesController@unlike',
    'as'=>'reply.unlike'
  ]);
  Route::resource('channels','ChannelsController');
  Route::resource('discussions','DiscussionsController');
  Route::post('discussions/reply/{id}',[
    'uses'=>'DiscussionsController@reply',
    'as'=>'discussion.reply'
  ]);
  Route::get('channel/{id}',[
    'uses'=>'ForumsController@channel',
    'as'=>'channel'
  ]);

  Route::get('/discussion/watch/{id}',[
    'uses'=>'WatchersController@watch',
    'as'=>'discussion.watch'
  ]);
  Route::get('/discussion/unwatch/{id}',[
    'uses'=>'WatchersController@unwatch',
    'as'=>'discussion.unwatch'
  ]);
});
