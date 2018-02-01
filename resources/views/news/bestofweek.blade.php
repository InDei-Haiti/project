<section class="best-of-the-week">
  <div class="container">
    <h1><div class="text">7 ХОНОГИЙН ШИЛДЭГ</div>
      <div class="carousel-nav" id="best-of-the-week-nav">
        <div class="prev">
          <i class="ion-ios-arrow-left"></i>
        </div>
        <div class="next">
          <i class="ion-ios-arrow-right"></i>
        </div>
      </div>
    </h1>
    <div class="owl-carousel owl-theme carousel-1">
      @foreach($posts as $post)
      <article class="article">
        <div class="inner">
          <figure>
            <a href="{{route('p',['id'=>$post->id])}}">
              <img src="{{$post->featured}}" alt="Sample Article">
              <!-- {{ asset('images/news/img0'.$post->id.'.jpg') }} -->
            </a>
          </figure>
          <div class="padding">
            <div class="detail">
                <div class="time">{{ date_format($post->created_at,'m-р сарын d, Y') }}</div>
                <div class="category"><a href="{{route('c',['id'=>$post->category_id])}}">{{$post->category->name}}</a></div>
            </div>
            <h2><a href="{{route('p',['id'=>$post->id])}}">{{ $post->title }}</a></h2>
            <p>{{ $post->short_content }}</p>
          </div>
        </div>
      </article>
      @endforeach
    </div>
  </div>
</section>
