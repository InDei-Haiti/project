@extends('layouts.app')

@section('content')
  <section class="search">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <aside>
            <h2 class="aside-title">Хайлт</h2>
            <div class="aside-body">
              <p>Илүү тодорхой үр дүнг олохын тулд шүүлт эсвэл өөр түлхүүр үг ашиглана уу.</p>
              <form>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Мэдээллээс хайх..." value="">
                    <div class="input-group-btn">
                      <button class="btn btn-primary">
                        <i class="ion-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </aside>
          <aside>
            <h2 class="aside-title">Шүүлт</h2>
            <div class="aside-body">
              <form class="checkbox-group" method="get" action="routes('search')">
                <div class="group-title">Огноо</div>
                <div class="form-group">
                  <label><input type="radio" name="date" value= checked> Бүх цаг үеийн</label>
                </div>
                <div class="form-group">
                  <label><input type="radio" name="date"> Өнөөдөр</label>
                </div>
                <div class="form-group">
                  <label><input type="radio" name="date"> Өмнөх 7 хоногт</label>
                </div>
                <div class="form-group">
                  <label><input type="radio" name="date"> Өмнөх сард</label>
                </div>
                <br>
                <div class="group-title">Ангилал</div>
                <div class="form-group">
                  <label><input type="checkbox" name="category" checked> Бүх ангилал</label>
                </div>

                <div class="form-group">
                  <label><input type="checkbox" name="category"> Lifestyle</label>
                </div>

              </form>
            </div>
          </aside>
        </div>
        <div class="col-md-9">
          <div class="nav-tabs-group">
            <ul class="nav-tabs-list">
              <li class="active"><a href="#">Бүгд</a></li>
              <li><a href="#">Сүүлийн үед</a></li>
              <li><a href="#">Хамгийн их үзсэн</a></li>
              <li><a href="#">Түгээмэл</a></li>
              <li><a href="#">Видео</a></li>
            </ul>
            <div class="nav-tabs-right">
              <select class="form-control">
                <option>Limit</option>
                <option>10</option>
                <option>20</option>
                <option>50</option>
                <option>100</option>
              </select>
            </div>
          </div>
          <div class="search-result">
            Search results for keyword "hello" found in 5,200 posts.
          </div>
          <div class="row">
            <article class="col-md-12 article-list">
              <div class="inner">
                <figure>
                  <a href="single.html">
                    <img src="images/news/img11.jpg">
                  </a>
                </figure>
                <div class="details">
                  <div class="detail">
                    <div class="category">
                      <a href="#">Film</a>
                    </div>
                    <time>December 19, 2016</time>
                  </div>
                  <h1><a href="single.html">Donec consequat arcu at ultrices sodales quam erat aliquet diam</a></h1>
                  <p>
                  Donec consequat, arcu at ultrices sodales, quam erat aliquet diam, sit amet interdum libero nunc accumsan nisi.
                  </p>
                  <footer>
                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>273</div></a>
                    <a class="btn btn-primary more" href="single.html">
                      <div>More</div>
                      <div><i class="ion-ios-arrow-thin-right"></i></div>
                    </a>
                  </footer>
                </div>
              </div>
            </article>
            <article class="col-md-12 article-list">
              <div class="inner">
                <div class="badge">
                  Sponsored
                </div>
                <figure>
                  <a href="single.html">
                    <img src="images/news/img02.jpg">
                  </a>
                </figure>
                <div class="details">
                  <div class="detail">
                    <div class="category">
                      <a href="#">Travel</a>
                    </div>
                    <time>December 18, 2016</time>
                  </div>
                  <h1><a href="single.html">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
                  <p>
                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat sollicitudin ut est. In fringilla dui.
                  </p>
                  <footer>
                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>4209</div></a>
                    <a class="btn btn-primary more" href="single.html">
                      <div>More</div>
                      <div><i class="ion-ios-arrow-thin-right"></i></div>
                    </a>
                  </footer>
                </div>
              </div>
            </article>
            <article class="col-md-12 article-list">
              <div class="inner">
                <figure>
                  <a href="single.html">
                    <img src="images/news/img03.jpg">
                  </a>
                </figure>
                <div class="details">
                  <div class="detail">
                    <div class="category">
                    <a href="#">Travel</a>
                    </div>
                    <time>December 16, 2016</time>
                  </div>
                  <h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum Proin venenatis pellentesque arcu</a></h1>
                  <p>
                    Nulla facilisis odio quis gravida vestibulum. Proin venenatis pellentesque arcu, ut mattis nulla placerat et.
                  </p>
                  <footer>
                    <a href="#" class="love active"><i class="ion-android-favorite"></i> <div>302</div></a>
                    <a class="btn btn-primary more" href="single.html">
                      <div>More</div>
                      <div><i class="ion-ios-arrow-thin-right"></i></div>
                    </a>
                  </footer>
                </div>
              </div>
            </article>
            <article class="col-md-12 article-list">
              <div class="inner">
                <figure>
                  <a href="single.html">
                    <img src="images/news/img09.jpg">
                  </a>
                </figure>
                <div class="details">
                  <div class="detail">
                    <div class="category">
                      <a href="#">Healthy</a>
                    </div>
                    <time>December 16, 2016</time>
                  </div>
                  <h1><a href="single.html">Maecenas blandit ultricies lorem id tempor enim pulvinar at</a></h1>
                  <p>
                    Maecenas blandit ultricies lorem, id tempor enim pulvinar at. Curabitur sit amet tortor eu ipsum lacinia malesuada. Etiam sed vulputate magna.
                  </p>
                  <footer>
                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>783</div></a>
                    <a class="btn btn-primary more" href="single.html">
                      <div>More</div>
                      <div><i class="ion-ios-arrow-thin-right"></i></div>
                    </a>
                  </footer>
                </div>
              </div>
            </article>
            <div class="col-md-12 text-center">
              <ul class="pagination">
                <li class="prev"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">97</a></li>
                <li class="next"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
              </ul>
              <div class="pagination-help-text">
                Showing 8 results of 776 &mdash; Page 1
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
