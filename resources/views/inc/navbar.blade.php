<nav class="menu">
  <div class="container">
    <div class="brand">
      <a href="#">
        <img src="{{asset('images/logo.png')}}" alt="Magz Logo">
      </a>
    </div>
    <div class="mobile-toggle">
      <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
    </div>
    <div class="mobile-toggle">
      <a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
    </div>
    <div id="menu-list">
      <ul class="nav-list">
        <li class="for-tablet nav-title"><a>Цэс</a></li>
        @guest
        <li class="for-tablet"><a href="{{route('login')}}">Нэвтрэх</a></li>
        <li class="for-tablet"><a href="{{route('register')}}">Бүртгүүлэх</a></li>
        @else
          <li class="dropdown magz-dropdown"><a href="#">Хэрэглэгч <i class="ion-ios-arrow-right"></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('admin')}}"><i class="icon ion-person"></i> Миний данс</a></li>
              <li><a href="#"><i class="icon ion-heart"></i> Дуртай</a></li>
              <li><a href="#"><i class="icon ion-chatbox"></i> Сэтгэгдэл</a></li>
              <li><a href="#"><i class="icon ion-key"></i> Нууц үгээ солих</a></li>
              <li><a href="#"><i class="icon ion-settings"></i> Тохиргоо</a></li>
              <li class="divider"></li>
              <li><a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"><i class="icon ion-log-out"></i> Гарах</a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               {{ csrf_field() }}
                           </form>
              </li>
            </ul>
          </li>
        @endguest
        <li class="dropdown magz-dropdown">
          <a href="category">Хуудас<i class="ion-ios-arrow-right"></i></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('app')}}">Нүүр хуудас</a></li>
            <li class="dropdown magz-dropdown">
              <a href="#">Баталгаажуулалт <i class="ion-ios-arrow-right"></i></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
                <li><a href="#">Forgot Password</a></li>
                <li><a href="#">Reset Password</a></li>
              </ul>
            </li>
            <li><a href="search">Хайлт</a></li>
            <li class="dropdown magz-dropdown">
              <a href="#">Алдаа <i class="ion-ios-arrow-right"></i></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('403')}}">403</a></li>
                <li><a href="{{route('404')}}">404</a></li>
                <li><a href="{{route('500')}}">500</a></li>
                <li><a href="{{route('503')}}">503</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Мэдээ <i class="ion-ios-arrow-right"></i> <div class="badge">Шинэ</div></a>
          @include('inc.metamenu')
        </li>
        <li><a href="{{route('about')}}">Бидний тухай </a></li>
        <li><a href="{{route('contact')}}">Холбоо барих </a></li>
      </ul>
    </div>
  </div>
</nav>
