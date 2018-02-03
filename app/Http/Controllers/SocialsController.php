<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SocialAuth;
use App\Profile;

class SocialsController extends Controller
{
    public function auth($provider)
    {
      return SocialAuth::authorize($provider);
    }
    public function auth_callback($provider)
    {
      SocialAuth::login($provider,function($user,$details){
        $user->email = $details->email;
        $user->name = $details->full_name;
        $user->avatar=$details->avatar;
        $user->save();
        $user->profile()->save(new Profile);
      });
      return redirect('/');
    }
}
