<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
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
}
