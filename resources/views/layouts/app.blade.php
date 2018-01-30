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
		<link rel="stylesheet" href="{{asset('scripts/bootstrap/bootstrap.min.css')}}">
		<!-- IonIcons -->
		<link rel="stylesheet" href="{{asset('scripts/ionicons/css/ionicons.min.css')}}">
		<!-- Toast -->
		<link rel="stylesheet" href="{{asset('scripts/toast/jquery.toast.min.css')}}">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="{{asset('scripts/owlcarousel/dist/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('scripts/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{asset('scripts/magnific-popup/dist/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('scripts/sweetalert/dist/sweetalert.css')}}">
		<!-- Custom style -->
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<link rel="stylesheet" href="{{asset('css/skins/all.css')}}">
		<link rel="stylesheet" href="{{asset('css/demo.css')}}">

		@yield('stylesheets')
	 </head>
  <body class="skin-default">
    @include('inc.header')
    @yield('content')
    @include('inc.footer')
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.migrate.js')}}"></script>
    <script src="{{asset('scripts/bootstrap/bootstrap.min.js')}}"></script>
    <!-- <script>var $target_end=$(".best-of-the-week");</script> -->
    <script src="{{asset('scripts/jquery-number/jquery.number.min.js')}}"></script>
    <script src="{{asset('scripts/owlcarousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('scripts/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('scripts/easescroll/jquery.easeScroll.js')}}"></script>
    <script src="{{asset('scripts/sweetalert/dist/sweetalert.min.js')}}"></script>
    <script src="{{asset('scripts/toast/jquery.toast.min.js')}}"></script>
    <script src="{{asset('js/e-magz.js')}}"></script>
		<script>
			@if(Session::has('success'))
						$.toast({text: '{{Session::get('success')}}',position: 'top-right',heading: 'Мессеж',icon:'success'})
			@endif
			@if(Session::has('info'))
						$.toast({text: '{{Session::get('info')}}',position: 'top-right',heading: 'Мессеж',icon:'info'})
			@endif
		</script>
		@yield('scripts');
  </body>
</html>
