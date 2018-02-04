<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
Use Session;

class Discussion extends Model
{
    protected $fillable=[
      'user_id',
      'title',
      'channel_id',
      'content',
    ];
    public function replies(){
      return $this->hasMany('App\Reply');
    }
    public function channel(){
      return $this->belongsTo('App\Channel');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function watchers(){
      return $this->hasMany('App\Watcher');
    }

    public function is_being_watched_by_auth_user(){
      $id=Auth::id();
      $watchers_ids=array();
      foreach($this->watchers as $w):
        array_push($watchers_ids,$w->user_id);
      endforeach;
      return in_array($id,$watchers_ids);
    }

    public function has_best_answer()
    {
      $result=false;
      foreach($this->replies as $reply)
      {
        if($reply->best_answer){
          $result=true;
          break;
        }
      }
      return $result;
    }
}
