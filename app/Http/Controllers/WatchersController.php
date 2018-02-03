<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Watcher;
use Auth;
use Session;

class WatchersController extends Controller
{
    public function watch($id){
      Watcher::create([
        'user_id'=>Auth::id(),
        'discussion_id'=>$id
      ]);

      return redirect()->back();
    }
    public function unwatch($id){
      $watcher=Watcher::where('discussion_id',$id)->where('user_id',Auth::id()) ;

      $watcher->delete();

      Session::flash('success','Та энэ хэлэлцүүлгийг ахин харахгүй');

      return redirect()->back();
    }
}
