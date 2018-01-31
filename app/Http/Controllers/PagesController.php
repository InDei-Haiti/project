<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Setting;


class PagesController extends Controller
{
  public function getHome(){
    // $posts=Post::join('categories','posts.category_id','=','categories.id')->select('posts.*','categories.name')->orderBy('id','desc')->take(4)->get();
    return view('home') ->  with('posts',Post::orderBy('id','desc')->get())
                        ;
  }
  public function getAbout(){
    return view('about')  ->  with('setting',Setting::first());
  }
  public function getContact(){
    return view('contact')  ->  with('setting',Setting::first());
  }
  public function getError403(){
    return view('errors.403');
  }
  public function getError404(){
    return view('errors.404');
  }
  public function getError500(){
    return view('errors.500');
  }
  public function getError503(){
    return view('errors.503');
  }
  public function getSingle(){
    return view('single');
  }
  public function getCategory(){
    return view('category');
  }
  public function getSearch(){
    return view('search');
  }
  public function getAdmin(){
    return view('admin.dashboard');
  }
  public function singlePost($id){
    $post=Post::find($id);
    return view('single')->with('post',$post);
  }
    //
}
