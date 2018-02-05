<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Reply;
use App\User;
use Auth;
use Session;
use Notication;
use App\Notifications\NewReplyAdded;
use Illuminate\Pagination\Paginator;

class DiscussionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        case 'unsolved':
          $unanswered=array();
          foreach(Discussion::all() as $discussion)
          {
            if(!$discussion->has_best_answer()){
              array_push($unanswered,$discussion);
            }
          }
          $discussions=new Paginator($unanswered,3);
          break;

         default:
          $discussions=Discussion::orderBy('created_at','desc')->paginate(3);
           break;
       }

       return view('admin.discussions.index',['discussions'=>$discussions]);
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
      $discussion=Discussion::find($id);
      $best_answer = $discussion->replies()->where('best_answer',1)->first();
      return view('admin.discussions.show')->with('discussion',Discussion::find($id))->with('best_answer',$best_answer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.discussions.edit')->with('discussion',Discussion::find($id));
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
        $this->validate(request(),[
          'content'=>'required'
        ]);

        $discussion=Discussion::find($id);

        $discussion->content=request()->content;

        $discussion->save();

        return redirect()->route('discussions.show',['id'=>$discussion->id]);
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
      $reply=Reply::create([
        'user_id'=>Auth::id(),
        'discussion_id'=>$id,
        'content'=>request()->reply
      ]);

      $reply->user->profile->points += 25;
      $reply->user->profile->save();

      $d=Discussion::find($id);
      $watchers=array();
      foreach($d->watchers as $watcher):
        array_push($watchers,User::find($watcher->user_id));
      endforeach;

      \Notification::send($watchers,new \App\Notifications\NewReplyAdded($d));

      Session::flash('success','Асуулгад хариулсанд баярлалаа');

      return redirect()->back();
    }
}
