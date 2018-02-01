@extends('layouts.app')

@section('content')
  <section class="category">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-left">
          <div class="row">
            <div class="col-md-12">
              <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Нүүр хуудас</a></li>
                <li class="active">#{{$tag->tag}}</li>
              </ol>
              <h1 class="page-title">Холбоос: {{$tag->tag}}</h1>
              <p class="page-subtitle"><i>{{$tag->tag}}</i> холбоостой бүх мэдээг харуулж байна</p>
            </div>
          </div>
          <div class="line"></div>
          <div class="row">
            @foreach($posts as $post)
            <article class="col-md-12 article-list">
              <div class="inner">
                <figure>
                  <a href="{{route('p',['id'=>$post->id])}}">
                    <img src="{{$post->featured}}">
                  </a>
                </figure>
                <div class="details">
                  <div class="detail">
                    <div class="category">
                     <a href="{{route('c',['id'=>$post->category_id])}}">{{$post->category->name}}</a>
                    </div>
                    <div class="time">{{ date_format($post->created_at,'m-р сарын d, Y') }}</div>
                  </div>
                  <h1><a href="{{route('p',['id'=>$post->id])}}">{{$post->title}}</a></h1>
                  <p>
                    {{$post->short_content}}...
                  </p>
                  <footer>
                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>237</div></a>
                    <a class="btn btn-primary more" href="{{route('p',['id'=>$post->id])}}">
                      <div>Уншъя</div>
                      <div><i class="ion-ios-arrow-thin-right"></i></div>
                    </a>
                  </footer>
                </div>
              </div>
            </article>
            @endforeach
            <div class="col-md-12 text-center">
              {{$posts->links()}}
                  <div class="pagination-help-text">
                    Нийт: {{$posts->total()}}
                  </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 sidebar">
          <aside>
            <div class="aside-body">
              <figure class="ads">
                <a href="">
                  <img src="{{asset('images/ad.png')}}">
                </a>
                <figcaption class="text-center">Зар сурталчилгаа</figcaption>
              </figure>
            </div>
          </aside>
          @include('sidebar.recentnews')
          @include('sidebar.newsletter')
        </div>
      </div>
    </div>
  </section>
@endsection
