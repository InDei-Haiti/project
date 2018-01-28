@extends('layouts.app')

@section('content')
<section class="home">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="headline">
          <div class="nav" id="headline-nav">
            <a class="left carousel-control" role="button" data-slide="prev">
              <span class="ion-ios-arrow-left" aria-hidden="true"></span>
              <span class="sr-only">Өмнөх</span>
            </a>
            <a class="right carousel-control" role="button" data-slide="next">
              <span class="ion-ios-arrow-right" aria-hidden="true"></span>
              <span class="sr-only">Дараах</span>
            </a>
          </div>
          <div class="owl-carousel owl-theme" id="headline">
            <div class="item">
              <a href="#"><div class="badge">Онцлох!</div> Шинэ сайт зарна.</a>
            </div>
            <div class="item">
              <a href="#">Дараа дараагийн мэдээ</a>
            </div>
            <div class="item">
              <a href="#">Яаралтай зарын хэсэг</a>
            </div>
          </div>
        </div>
        @include('news.carousel')
        @include('news.latest')
        <div class="banner">
          <a href="#">
            <img src="images/ads.png" alt="Sample Article">
          </a>
        </div>
        <div class="line transparent little"></div>
        <div class="row">
          <div class="col-md-6 col-sm-6 trending-tags">
            <h1 class="title-col">Trending Tags</h1>
            <div class="body-col">
              <ol class="tags-list">
                <li><a href="#">HTML5</a></li>
                <li><a href="#">CSS3</a></li>
                <li><a href="#">JavaScript</a></li>
                <li><a href="#">jQuery</a></li>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">Responsive</a></li>
                <li><a href="#">AuteIrure</a></li>
                <li><a href="#">Voluptate</a></li>
                <li><a href="#">Veit</a></li>
                <li><a href="#">Reprehenderit</a></li>
              </ol>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <h1 class="title-col">
              Hot News
              <div class="carousel-nav" id="hot-news-nav">
                <div class="prev">
                  <i class="ion-ios-arrow-left"></i>
                </div>
                <div class="next">
                  <i class="ion-ios-arrow-right"></i>
                </div>
              </div>
            </h1>
            <div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="/single">
                      <img src="images/news/img09.jpg" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="/single">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                    <div class="detail">
                      <div class="category"><a href="category">Улс төр</a></div>
                      <div class="time">12-р сарын 22, 2018</div>
                    </div>
                  </div>
                </div>
              </article>
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="/single">
                      <img src="images/news/img01.jpg" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="/single">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                    <div class="detail">
                      <div class="category"><a href="category">Улс төр</a></div>
                      <div class="time">12-р сарын 22, 2018</div>
                    </div>
                  </div>
                </div>
              </article>
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="/single">
                      <img src="images/news/img05.jpg" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="/single">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                    <div class="detail">
                      <div class="category"><a href="category">Улс төр</a></div>
                      <div class="time">12-р сарын 22, 2018</div>
                    </div>
                  </div>
                </div>
              </article>
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="/single">
                      <img src="images/news/img02.jpg" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="/single">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                    <div class="detail">
                      <div class="category"><a href="category">Аялал</a></div>
                      <div class="time">12-р сарын 21, 2018</div>
                    </div>
                  </div>
                </div>
              </article>
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="/single">
                      <img src="images/news/img13.jpg" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="/single">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                    <div class="detail">
                      <div class="category"><a href="category">Дэлхий дахинд</a></div>
                      <div class="time">12-р сарын 20, 2018</div>
                    </div>
                  </div>
                </div>
              </article>
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="/single">
                      <img src="images/news/img08.jpg" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="/single">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
                    <div class="detail">
                      <div class="category"><a href="category">Технологи</a></div>
                      <div class="time">12-р сарын 19, 2018</div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
        @include('news.othernews')
      </div>
      <div class="col-xs-6 col-md-4 sidebar" id="sidebar">
        <div class="sidebar-title for-tablet">Самбар</div>
        @include('sidebar.featured')
        @include('sidebar.popular')
        @include('sidebar.newsletter')
        @include('sidebar.recommended')
        @include('sidebar.video')
        @include('sidebar.sponsored')
      </div>
    </div>
  </div>
</section>
  @include('news.bestofweek')
@endsection
