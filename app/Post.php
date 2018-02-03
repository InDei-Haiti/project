<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable=[
      'title',
      'short_content',
      'post_content',
      'featured',
      'category_id',
      'slug',
      'user_id'
    ];

    public function getFeaturedAttribute($featured)
    {
      return asset($featured);
    }

    protected $dates=['deleted_at'];

    public function category()
    {
      return $this->belongsTo('App\Category');
    }
    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
}
