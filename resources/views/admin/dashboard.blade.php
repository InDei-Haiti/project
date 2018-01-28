<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Монголын хамгийн том портал сайт">
		<meta name="author" content="Сонинхангай">
		<meta name="keyword" content="Mongolian Portal Website">
		<!-- Shareable -->
		<meta property="og:title" content="Irlee.NET" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://irlee.net" />
		<meta property="og:image" content="http://irlee.net/images/news/img01.jpg" />
		<title>Ирлээ.NET</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="../scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="../scripts/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="../scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="../scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="../scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="../scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="../scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/skins/all.css">
		<link rel="stylesheet" href="../css/demo.css">
	 </head>
  <body class="skin-default">
    <div class="container">
      <div class="row">
    <div class="col-lg-4">
      <ul class="list-group">
        <li class="list-group-item">
          <a href="/admin">Home</a>
        </li>
        <li class="list-group-item">
          <a href="{{ route('post/create')}}">Create a new post</a>
        </li>
      </ul>
    </div>
    <div class="col-lg-8">
      @yield('content')
    </div>
    </div>
    </div>
    <script src="j../s/jquery.js"></script>
    <script src="../js/jquery.migrate.js"></script>
    <script src="../scripts/bootstrap/bootstrap.min.js"></script>
    <script>var $target_end=$(".best-of-the-week");</script>
    <script src="../scripts/jquery-number/jquery.number.min.js"></script>
    <script src="../scripts/owlcarousel/dist/owl.carousel.min.js"></script>
    <script src="../scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="../scripts/easescroll/jquery.easeScroll.js"></script>
    <script src="../scripts/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../scripts/toast/jquery.toast.min.js"></script>
    <script src="../js/e-magz.js"></script>

  </body>
</html>
