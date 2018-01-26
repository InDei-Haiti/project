<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function getHome(){
    return view('home');
  }
  public function getAbout(){
    return view('about');
  }
  public function getContact(){
    return view('contact');
  }
  public function getError403(){
    return view('errors.403');
  }
  public function getError404(){
    return view('errors.404');
  }
  public function getError500(){
    return view('errors.500');
  }
  public function getError503(){
    return view('errors.503');
  }
  public function getSingle(){
    return view('single');
  }
    //
}
