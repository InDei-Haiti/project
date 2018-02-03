<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
