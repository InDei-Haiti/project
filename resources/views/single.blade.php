@extends('layouts.app')

@section('content')
  <section class="single">
    <div class="container">
      <div class="row">
        <div class="col-md-4 sidebar" id="sidebar">
          <aside>
            <div class="aside-body">
              <figure class="ads">
                <img src="{{asset('images/ad.png')}}">
                <figcaption>Зар сурталчилгаа</figcaption>
              </figure>
            </div>
          </aside>
          @include('sidebar.recentnews')
          @include('sidebar.newsletter')
        </div>
        <div class="col-md-8">
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Нүүр хуудас</a></li>
            <li class="active">{{$post->category->name}}</li>
          </ol>
          <article class="article main-article">
            <header>
              <h1>{{$post->title}}</h1>
              <ul class="details">
                <li>{{ date_format($post->created_at,'m-р сарын d, Y') }}</li>
                <li><a href="{{route('c',['id'=>$post->category_id])}}">{{$post->category->name}}</a></li>
                <li>By <a href="#">{{$post->user->name}}</a></li>
              </ul>
            </header>
            <div class="main">
              <p>{{$post->short_content}}</p>
              <div class="featured">
                <figure>
                  <img src="{{$post->featured}}">
                  <figcaption>Зургийг </figcaption>
                </figure>
              </div>
              <div>
              {!!$post->post_content!!}
              </div>
            </div>
            <footer>
              <div class="col">
                <ul class="tags">
                  @foreach($post->tags as $tag)
                    <li><a href="{{route('t',['id'=>$tag->id])}}">{{$tag->tag}}</a></li>
                  @endforeach
                </ul>
              </div>
              <div class="col">
                <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1220</div></a>
              </div>
            </footer>
          </article>
          <div class="sharing">
          <div class="title"><i class="ion-android-share-alt"></i> Sharing is caring</div>
            <ul class="social">
              <li>
                <a href="#" class="facebook">
                  <i class="ion-social-facebook"></i> Facebook
                </a>
              </li>
              <li>
                <a href="#" class="twitter">
                  <i class="ion-social-twitter"></i> Twitter
                </a>
              </li>
              <li>
                <a href="#" class="googleplus">
                  <i class="ion-social-googleplus"></i> Google+
                </a>
              </li>
              <li>
                <a href="#" class="linkedin">
                  <i class="ion-social-linkedin"></i> Linkedin
                </a>
              </li>
              <li>
                <a href="#" class="skype">
                  <i class="ion-ios-email-outline"></i> Email
                </a>
              </li>
              <li class="count">
                20
                <div>Shares</div>
              </li>
            </ul>
          </div>
          <div class="line">
            <div>Нийтлэлч</div>
          </div>
          <div class="author">
            <figure>
              <img src="{{asset('images/img01.jpg')}}">
            </figure>
            <div class="details">
              <div class="job">Веб хөгжүүлэгч</div>
              <h3 class="name">{{$post->user->name}}</h3>
              <blockquote>{{$post->user->profile->about}}</blockquote>
              <ul class="social trp sm">
                <li>
                  <a href="{{$post->user->profile->facebook}}" class="facebook">
                    <svg><rect/></svg>
                    <i class="ion-social-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="twitter">
                    <svg><rect/></svg>
                    <i class="ion-social-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="{{$post->user->profile->youtube}}" class="youtube">
                    <svg><rect/></svg>
                    <i class="ion-social-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="googleplus">
                    <svg><rect/></svg>
                    <i class="ion-social-googleplus"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="line"><div>Таны сонорт</div></div>
          <div class="row">
            <article class="article related col-md-6 col-sm-6 col-xs-12">
              <div class="inner">
                <figure>
                  <a href="#">
                    <img src="{{asset('images/news/img03.jpg')}}">
                  </a>
                </figure>
                <div class="padding">
                  <h2><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                  <div class="detail">
                    <div class="category"><a href="">Lifestyle</a></div>
                    <div class="time">December 26, 2016</div>
                  </div>
                </div>
              </div>
            </article>
            <article class="article related col-md-6 col-sm-6 col-xs-12">
              <div class="inner">
                <figure>
                  <a href="#">
                    <img src="{{asset('images/news/img08.jpg')}}">
                  </a>
                </figure>
                <div class="padding">
                  <h2><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                  <div class="detail">
                    <div class="category"><a href="">Lifestyle</a></div>
                    <div class="time">December 26, 2016</div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="line thin"></div>
          <div class="comments">
            <h2 class="title">3 сэтгэгдэл <a href="#response">Сэтгэгдэл бичих</a></h2>
            <div class="comment-list">
              <div class="item">
                <div class="user">
                  <figure>
                    <img src="{{asset('images/img01.jpg')}}">
                  </figure>
                  <div class="details">
                    <h5 class="name">Сонинхангай</h5>
                    <div class="time">24 Hours</div>
                    <div class="description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </div>
                    <footer>
                      <a href="#">Хариулах</a>
                    </footer>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="user">
                  <figure>
                    <img src="{{asset('images/img01.jpg')}}">
                  </figure>
                  <div class="details">
                    <h5 class="name">Сонинхангай</h5>
                    <div class="time">24 Hours</div>
                    <div class="description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </div>
                    <footer>
                      <a href="#">Хариулах</a>
                    </footer>
                  </div>
                </div>
                <div class="reply-list">
                  <div class="item">
                    <div class="user">
                      <figure>
                        <img src="{{asset('images/img01.jpg')}}">
                      </figure>
                      <div class="details">
                        <h5 class="name">Сонинхангай</h5>
                        <div class="time">24 Hours</div>
                        <div class="description">
                          Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <footer>
                          <a href="#">Хариулах</a>
                        </footer>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="user">
                  <figure>
                    <img src="{{asset('images/img01.jpg')}}">
                  </figure>
                  <div class="details">
                    <h5 class="name">Сонинхангай</h5>
                    <div class="time">24 Hours</div>
                    <div class="description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                    </div>
                    <footer>
                      <a href="#">Хариулах</a>
                    </footer>
                  </div>
                </div>
              </div>
            </div>
            @include('inc.disqus')
            <form class="row" id="response">
              <div class="col-md-12">
                <h3 class="title">Сэтгэгдлээ үлдээнэ үү.</h3>
              </div>
              <div class="form-group col-md-4">
                <label for="name">Нэр <span class="required"></span></label>
                <input type="text" id="name" name="" class="form-control">
              </div>
              <div class="form-group col-md-4">
                <label for="email">И-мэйл <span class="required"></span></label>
                <input type="email" id="email" name="" class="form-control">
              </div>
              <div class="form-group col-md-4">
                <label for="website">Веб хуудас</label>
                <input type="url" id="website" name="" class="form-control">
              </div>
              <div class="form-group col-md-12">
                <label for="message">Сэтгэгдэл <span class="required"></span></label>
                <textarea class="form-control" name="message" placeholder="Сэтгэгдлээ энд бичнэ үү ..."></textarea>
              </div>
              <div class="form-group col-md-12">
                <button class="btn btn-primary">Сэтгэгдлээ үлдээх</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
