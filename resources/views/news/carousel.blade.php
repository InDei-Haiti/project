<div class="owl-carousel owl-theme slide" id="featured">
  @foreach($posts as $post)
  <div class="item">
    <article class="featured">
      <div class="overlay"></div>
      <figure>
        <img src="{{$post->featured}}" alt="Sample Article">
      </figure>
      <div class="details">
        <div class="category"><a href="category">{{$post->category->name}}</a></div>
        <h1><a href="{{route('p',['id'=>$post->id])}}">{{ $post->title }}</a></h1>
        <div class="time">{{$post->created_at->diffForHumans()}}</div>
      </div>
    </article>
  </div>
  @endforeach
</div>
