<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Reply;
use Auth;
use Session;

class DiscussionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discussions=Discussion::orderBy('created_at','desc')->paginate(3);
        return view('admin.discussions.index')->with('discussions',$discussions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.discussions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      $r=request();
      $this->validate($r,[
        'title'=>'required',
        'channel_id'=>'required',
        'content'=>'required'
      ]);

      $discussion=Discussion::create([
        'title'=>$r->title,
        'channel_id'=>$r->channel_id,
        'content'=>$r->content,
        'user_id'=>Auth::id(),
      ]);

      Session::flash('success','Хэлэлцүүлгийг амжилттай нэмлээ');
      return redirect()->route('discussions.show',['id'=>$discussion->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('admin.discussions.show')->with('discussion',Discussion::find($id));
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
        //
    }

    public function reply($id){

      $this->validate(request(),[
        'reply'=>'required'
      ]);
      Reply::create([
        'user_id'=>Auth::id(),
        'discussion_id'=>$id,
        'content'=>request()->reply
      ]);
      Session::flash('success','Та асуулгад хариуллаа. Баярлалаа');

      return redirect()->back();
    }
}
