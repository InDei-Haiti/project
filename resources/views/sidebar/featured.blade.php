<aside>
  <div class="aside-body">
    <div class="featured-author">
      <div class="featured-author-inner">
        <div class="featured-author-cover" style="background-image: url('images/news/img15.jpg');">
          <div class="badges">
            <div class="badge-item"><i class="ion-star"></i> Онцлох</div>
          </div>
          <div class="featured-author-center">
            <figure class="featured-author-picture">
              <img src="images/img01.jpg" alt="Sample Article">
            </figure>
            <div class="featured-author-info">
              <h2 class="name">{{$user->name}}</h2>
              <div class="desc">@hangai247</div>
            </div>
          </div>
        </div>
        <div class="featured-author-body">
          <div class="featured-author-count">
            <div class="item">
              <a href="#">
                <div class="name"><strong>Нийтлэл</strong></div>
                <div class="value">{{$user->posts->count()}}</div>
              </a>
            </div>
            <div class="item">
              <a href="#">
                <div class="name"><strong>Зүрх</strong></div>
                <div class="value">3,729</div>
              </a>
            </div>
            <div class="item">
              <a href="#">
                <div class="icon">
                  <div><strong>Илүү</strong></div>
                  <i class="ion-chevron-right"></i>
                </div>
              </a>
            </div>
          </div>
          <div class="featured-author-quote">
            {{$user->profile->about}}
          </div>
          <div class="block">
            <h2 class="block-title">Зураг</h2>
            <div class="block-body">
              <ul class="item-list-round" data-magnific="gallery">
                @foreach($user->posts->take(8) as $post)
                  <li><a href="{{$post->featured}}" style="background-image: url('{{$post->featured}}');"></a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="featured-author-footer">
            <a href="#">Бүх нийтлэлч</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</aside>
