<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ирлээ.NET</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/scripts/bootstrap/bootstrap.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="/scripts/ionicons/css/ionicons.min.css">
    <!-- Toast -->
    <link rel="stylesheet" href="/scripts/toast/jquery.toast.min.css">
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="/scripts/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/scripts/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="/scripts/sweetalert/dist/sweetalert.css">
    <!-- Custom style -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/skins/all.css">
    <link rel="stylesheet" href="/css/demo.css">
    <!-- <link rel="stylesheet" href="/css/app.css"> -->
  </head>
  <body class="skin-default">
    <header class="primary">
      <div class="firstbar">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-12">
              <div class="brand">
                <a href="index.html">
                  <img src="images/logo.png" alt="Magz Logo">
                </a>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <form class="search" autocomplete="off">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Хайх">
                    <div class="input-group-btn">
                      <button class="btn btn-primary"><i class="ion-search"></i></button>
                    </div>
                  </div>
                </div>
                <div class="help-block">
                  <div><strong>Түгээмэл:</strong></div>
                  <ul>
                    <li><a href="#"><strong>Ажил</strong></a></li>
                    <li><a href="#">Байр</a></li>
                    <li><a href="#">Зарна</a></li>
                    <li><a href="#">Мөнгөх солилцох</a></li>
                    <li><a href="#">Ачаа дайх</a></li>
                  </ul>
                </div>
              </form>
            </div>
            <div class="col-md-3 col-sm-12 text-right">
              <ul class="nav-icons">
                <li><a href="register.html"><i class="ion-person-add"></i><div>Элсэх</div></a></li>
                <li><a href="login.html"><i class="ion-person"></i><div>Нэвтрэх</div></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Start nav -->
      @include('inc.navbar')
      <!-- End nav -->
    </header>
    @yield('content')
    <!-- Start footer -->
    @include('inc.footer')
    <!-- End footer -->


    <script src="js/jquery.js"></script>
    <script src="js/jquery.migrate.js"></script>
    <script src="scripts/bootstrap/bootstrap.min.js"></script>
    <script>var $target_end=$(".best-of-the-week");</script>
    <script src="scripts/jquery-number/jquery.number.min.js"></script>
    <script src="scripts/owlcarousel/dist/owl.carousel.min.js"></script>
    <script src="scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="scripts/easescroll/jquery.easeScroll.js"></script>
    <script src="scripts/sweetalert/dist/sweetalert.min.js"></script>
    <script src="scripts/toast/jquery.toast.min.js"></script>
    <script src="js/e-magz.js"></script>

  </body>
</html>
