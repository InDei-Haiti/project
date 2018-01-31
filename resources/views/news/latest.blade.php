<div class="line">
  <div>Сүүлийн үеийн мэдээ</div>
</div>
<div class="row">
  @foreach($posts as $post)
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="row">
      <article class="article col-md-12">
        <div class="inner">
          <figure>
            <a href="{{route('p',['id'=>$post->id])}}">
              <img src="{{$post->featured}}" alt="Sample Article">
            </a>
          </figure>
          <div class="padding">
            <div class="detail">
              <div class="time">{{ date_format($post->created_at,'m-р сарын d, Y') }}</div>
              <div class="category"><a href="category">{{$post->category->name}}</a></div>
            </div>
            <h2><a href="{{route('p',['id'=>$post->id])}}">{{ $post->title }}</a></h2>
            <p>{{ $post->short_content }}</p>
            <footer>
              <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1263</div></a>
              <a class="btn btn-primary more" href="/single">
                <div>Уншъя</div>
                <div><i class="ion-ios-arrow-thin-right"></i></div>
              </a>
            </footer>
          </div>
        </div>
      </article>
    </div>
  </div>
  @endforeach
</div>
