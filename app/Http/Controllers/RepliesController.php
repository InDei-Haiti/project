<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\Reply;
use Session;
use Auth;

class RepliesController extends Controller
{
    public function like($id)
    {
      Like::create([
        'user_id'=>Auth::id(),
        'reply_id'=>$id,
      ]);

      return redirect()->back();
    }
    public function unlike($id)
    {
      $like=Like::where('user_id',Auth::id())->where('reply_id',$id)->first();
      $like->delete();

      return redirect()->back();
    }
    public function best_answer($id)
    {
      $reply=Reply::find($id);

      $reply->best_answer=1;

      $reply->save();

      $reply->user->profile->points +=100;
      $reply->user->profile->save();

      Session::flash('success','Хариултыг хамгийн зөв хариултаар сонголоо');

      return redirect()->back();
    }

    public function edit($id){
      return view('admin.replies.edit')->with('reply',Reply::find($id));
    }

    public function update($id){
      $reply=Reply::find($id);
      $reply->content=request()->content;
      $reply->save();

      return redirect()->route('discussions.show',['id'=>$reply->discussion_id]);
    }
}
