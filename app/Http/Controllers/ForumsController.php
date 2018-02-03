<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Channel;
class ForumsController extends Controller
{
    public function index(){

      $discussions=Discussion::orderBy('created_at','desc')->paginate(3);
      return view('admin.discussions.index',['discussions'=>$discussions]);
    }
    public function channel($id){
      $channel=Channel::find($id);
      return view('admin.discussions.channel')->with('discussions',$channel->discussions()->orderBy('created_at','desc')->paginate(3));
    }
}
