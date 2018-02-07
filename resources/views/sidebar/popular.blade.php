<aside>
  <h1 class="aside-title">Хэлэлцүүлэг <a href="#" class="all">Бүгд <i class="ion-ios-arrow-right"></i></a></h1>
  <div class="aside-body">
    @foreach($discussions as $discussion)
    <article class="article-mini">
      <div class="inner">
        <figure>
          <a href="{{route('discussions.show',['id'=>$discussion->id])}}">
            <img src="{{asset($discussion->user->avatar)}}" alt="Sample Article">
          </a>
        </figure>
        <div class="padding">
          <h1><a href="{{route('discussions.show',['id'=>$discussion->id])}}">{{str_limit($discussion->title,50)}}</a></h1>
        </div>
      </div>
    </article>
    @endforeach
  </div>
</aside>
