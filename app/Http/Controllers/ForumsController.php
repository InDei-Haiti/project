<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Reply;
use App\Channel;
use App\User;
use Auth;
use Session;
use Notication;
use App\Notifications\NewReplyAdded;
use Illuminate\Pagination\Paginator;

class ForumsController extends Controller
{
    public function index(){

      switch(request('filter')){
        case 'me':
          $discussions=Discussion::where('user_id',Auth::id())->paginate(3);
          break;
       case 'solved':
         $answered=array();
         foreach(Discussion::all() as $discussion)
         {
           if($discussion->has_best_answer()){
             array_push($answered,$discussion);
           }
         }
         $discussions=new Paginator($answered,3);
         break;

        default:
         $discussions=Discussion::orderBy('created_at','desc')->paginate(3);
          break;
      }

      return view('admin.discussions.index',['discussions'=>$discussions]);
    }
    public function channel($id){
      $channel=Channel::find($id);
      return view('admin.discussions.channel')->with('discussions',$channel->discussions()->orderBy('created_at','desc')->paginate(3));
    }
}
