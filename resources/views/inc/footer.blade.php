<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="block">
          <h1 class="block-title"> Бидний тухай</h1>
          <div class="block-body">
            <figure class="foot-logo">
              <img src="{{asset('images/logo.png')}}" class="img-responsive" alt="Logo">
            </figure>
            <p class="brand-description">
              Ирлээ.NET сайтыг Монголын бүхий л оюунлаг залуучууддаа зориулан бүтээв.
            </p>
            <a href="{{route('about')}}" class="btn btn-magz white">Дэлгэрэнгүй <i class="ion-ios-arrow-thin-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="block">
          <h1 class="block-title">Түгээмэл холбоос
            <!-- <div class="right"><a href="#">Бүгдийг харах <i class="ion-ios-arrow-thin-right"></i></a></div> -->
          </h1>
          <div class="block-body">
            <ul class="tags">
              <li><a href="#"></a></li>
            </ul>
          </div>
        </div>
        <div class="line"></div>
        <div class="block">
          <h1 class="block-title">Сонин</h1>
          <div class="block-body">
            <p>Захиалснаар та хамгийн сүүлийн үеийн мэдээг байнга авах болно.</p>
            <form class="newsletter" method="POST" action="/subscribe">
              {{ csrf_field() }}
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="ion-ios-email-outline"></i>
                </div>
                <input type="email" class="form-control email" placeholder="Таны мэйл">
              </div>
              <button type="submit" class="btn btn-primary btn-block white">Захиалах</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="block">
          <h1 class="block-title">Сүүлийн үеийн мэдээ</h1>
          <div class="block-body">
            <article class="article-mini">
              <div class="inner">
                <figure>
                  <a href="single">
                    <img src="{{asset('images/news/img12.jpg')}}" alt="Sample Article">
                  </a>
                </figure>
                <div class="padding">
                  <h1><a href="single">Donec consequat lorem quis augue pharetra</a></h1>
                </div>
              </div>
            </article>
            <article class="article-mini">
              <div class="inner">
                <figure>
                  <a href="single">
                    <img src="{{asset('images/news/img14.jpg')}}" alt="Sample Article">
                  </a>
                </figure>
                <div class="padding">
                  <h1><a href="single">eu dapibus risus aliquam etiam ut venenatis</a></h1>
                </div>
              </div>
            </article>
            <article class="article-mini">
              <div class="inner">
                <figure>
                  <a href="single">
                    <img src="{{asset('images/news/img15.jpg')}}" alt="Sample Article">
                  </a>
                </figure>
                <div class="padding">
                  <h1><a href="single">Nulla facilisis odio quis gravida vestibulum </a></h1>
                </div>
              </div>
            </article>
            <article class="article-mini">
              <div class="inner">
                <figure>
                  <a href="single">
                    <img src="{{asset('images/news/img16.jpg')}}" alt="Sample Article">
                  </a>
                </figure>
                <div class="padding">
                  <h1><a href="single">Proin venenatis pellentesque arcu vitae </a></h1>
                </div>
              </div>
            </article>
            <a href="#" class="btn btn-magz white btn-block">Бүгдийг харах <i class="ion-ios-arrow-thin-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 col-sm-6">
        <div class="block">
          <h1 class="block-title">Биднийг дага</h1>
          <div class="block-body">
            <p>Биднийг дагаад хамгийн сүүлийн үеийн мэдээтэй хамт байгаарай</p>
            <ul class="social trp">
              <li>
                <a href="www.facebook.com/irleenet" class="facebook">
                  <svg><rect width="0" height="0"/></svg>
                  <i class="ion-social-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#" class="twitter">
                  <svg><rect width="0" height="0"/></svg>
                  <i class="ion-social-twitter-outline"></i>
                </a>
              </li>
              <li>
                <a href="#" class="youtube">
                  <svg><rect width="0" height="0"/></svg>
                  <i class="ion-social-youtube-outline"></i>
                </a>
              </li>
              <li>
                <a href="#" class="googleplus">
                  <svg><rect width="0" height="0"/></svg>
                  <i class="ion-social-googleplus"></i>
                </a>
              </li>
              <li>
                <a href="#" class="instagram">
                  <svg><rect width="0" height="0"/></svg>
                  <i class="ion-social-instagram-outline"></i>
                </a>
              </li>
              <li>
                <a href="#" class="tumblr">
                  <svg><rect width="0" height="0"/></svg>
                  <i class="ion-social-tumblr"></i>
                </a>
              </li>
              <li>
                <a href="#" class="dribbble">
                  <svg><rect width="0" height="0"/></svg>
                  <i class="ion-social-dribbble"></i>
                </a>
              </li>
              <li>
                <a href="#" class="linkedin">
                  <svg><rect width="0" height="0"/></svg>
                  <i class="ion-social-linkedin"></i>
                </a>
              </li>
              <li>
                <a href="#" class="skype">
                  <svg><rect width="0" height="0"/></svg>
                  <i class="ion-social-skype"></i>
                </a>
              </li>
              <li>
                <a href="#" class="rss">
                  <svg><rect width="0" height="0"/></svg>
                  <i class="ion-social-rss"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="line"></div>
        <div class="block">
          <div class="block-body no-margin">
            <ul class="footer-nav-horizontal">
              <li><a href="index">Нүүр хуудас</a></li>
              <li><a href="contact">Холбогдох</a></li>
              <li><a href="page">Бидний тухай</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="copyright">
          &copy; 2018. БҮХ ЭРХ ХУУЛИАР ХАМГААЛАГДСАН.
          <div>
            Сайтыг хөгжүүлсэн <i class="ion-heart"></i><a href="http://www.facebook.com/hangai247">Сонинхангай</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
