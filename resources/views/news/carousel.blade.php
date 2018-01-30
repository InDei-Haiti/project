<div class="owl-carousel owl-theme slide" id="featured">
  @foreach($posts as $post)
  <div class="item">
    <article class="featured">
      <div class="overlay"></div>
      <figure>
        <img src="{{$post->featured}}" alt="Sample Article">
      </figure>
      <div class="details">
        <div class="category"><a href="category">Технологи</a></div>
        <h1><a href="/single">{{ $post->title }}</a></h1>
        <div class="time">{{ date_format($post->created_at,'m-р сарын d, Y') }}</div>
      </div>
    </article>
  </div>
  @endforeach
</div>
