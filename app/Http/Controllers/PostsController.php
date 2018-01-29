<?php

namespace App\Http\Controllers;

use Session;
use App\Category;
use App\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();

        if($categories->count()==0)
        {
          Session::flash('info','Та мэдээ нэмэхийн тулд эхлээд ангилал үүсгэх шаардлагатай');

          return redirect()->back();
        }

        return view('admin.posts.create')->with('categories',Category::all());//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request,[
          'title'=> 'required|max:255',
          'short_content'=> 'required',
          'post_content'=> 'required',
          'featured'=> 'required|image',
          'category_id'=>'required'
        ]);

        $featured=$request->featured;
        $featured_new_name=time().$featured->getClientOriginalName();
        $featured->move('uploads/posts',$featured_new_name);

        $post=Post::create([
          'title'=>$request->title,
          'short_content'=>$request->short_content,
          'post_content'=>$request->post_content,
          'featured'=>'uploads/posts/'.$featured_new_name,
          'category_id'=>$request->category_id,
          'slug'=>str_slug($request->title)
        ]);

        Session::flash('success','Та амжилттай мэдээ нэмлээ');

        return redirect()->route('post.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);

        $post->delete();

        Session::flash('success','Та мэдээг амжилттай устгалаа');

        return redirect()->back();
    }
    public function trash()
    {
        $posts=Post::onlyTrashed()->get();

        return view('admin.posts.trashed')->with('posts',$posts);
    }

    public function kill($id)
    {
      $post=Post::withTrashed()->where('id',$id)->first();

      dd($post);
      $post->forceDelete();

      Session::flash('success','Мэдээ бүр мөсөн устгагдлаа');

      return redirect()->back();
    }

    public function restore($id)
    {
      $post=Post::withTrashed()->where('id',$id)->first();

      $post->restore();

      Session::flash('success','Мэдээ буцан сэргээгдлээ');

      return redirect()->back();
    }
}
