<div class="line top">
  <div>Бусад мэдээ</div>
</div>
<div class="row">
  @foreach($posts as $post)
  <article class="col-md-12 article-list">
    <div class="inner">
      @if($post->featured==1)
      <div class="badge">
        Захиалгат
      </div>
      @endif
      <figure>
        <a href="/single">
          <img src="{{ asset('images/news/img0'.$post->id.'.jpg') }}" alt="Sample Article">
        </a>
      </figure>
      <div class="details">
        <div class="detail">
          <div class="category">
            <a href="#">Кино</a>
          </div>
          <div class="time">{{ date_format($post->created_at,'m-р сарын d, Y') }}</div>
        </div>
        <h1><a href="/single">{{ $post->title }}</a></h1>
        <p>{{ $post->short_content }}</p>
        <footer>
          <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>273</div></a>
          <a class="btn btn-primary more" href="/single">
            <div>Уншъя</div>
            <div><i class="ion-ios-arrow-thin-right"></i></div>
          </a>
        </footer>
      </div>
    </div>
  </article>
  @endforeach
</div>
