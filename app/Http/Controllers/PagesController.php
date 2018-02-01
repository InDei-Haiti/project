<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\Setting;
use App\User;


class PagesController extends Controller
{
  public function getHome(){
    // $posts=Post::join('categories','posts.category_id','=','categories.id')->select('posts.*','categories.name')->orderBy('id','desc')->take(4)->get();
    return view('home') ->  with('posts',Post::orderBy('id','desc')->take(4)->get())
                        ->  with('tags',Tag::take(10)->get())
                        ->  with('user',User::first());
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
  public function getSearch(){
    return view('search');
  }
  public function getAdmin(){
    return view('admin.index');
  }
  public function getDashboard(){
    return view('admin.dashboard')->  with('post_count',Post::all()->count())
                                  ->  with('trashed_count',Post::onlyTrashed()->get()->count())
                                  ->  with('user_count',User::all()->count())
                                  ->  with('category_count',Category::all()->count());
  }
  public function getPost($id){
    $post=Post::find($id);
    return view('single')->with('post',$post);
  }
  public function getCategory($id){
    $category=Category::find($id);
    $posts=Post::orderBy('created_at','desc')->where('category_id','=',$category->id)->paginate(10);
    return view('category',['posts'=>$posts,'category'=>$category]);
  }
  public function getTag($id){
    $tag=Tag::find($id);
    $posts=$tag->posts()->paginate(3);
    return view('tag',['posts'=>$posts,'tag'=>$tag]);
  }
    //
}
