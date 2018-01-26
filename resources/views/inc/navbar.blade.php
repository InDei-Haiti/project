<nav class="menu">
  <div class="container">
    <div class="brand">
      <a href="#">
        <img src="images/logo.png" alt="Magz Logo">
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
        <li class="for-tablet"><a href="login">Нэвтрэх</a></li>
        <li class="for-tablet"><a href="register">Бүртгүүлэх</a></li>
        <li><a href="/">Нүүр хуудас</a></li>
        <li class="dropdown magz-dropdown">
          <a href="category">Хуудас<i class="ion-ios-arrow-right"></i></a>
          <ul class="dropdown-menu">
            <li><a href="index">Нүүр хуудас</a></li>
            <li class="dropdown magz-dropdown">
              <a href="#">Баталгаажуулалт <i class="ion-ios-arrow-right"></i></a>
              <ul class="dropdown-menu">
                <li><a href="login">Login</a></li>
                <li><a href="register">Register</a></li>
                <li><a href="forgot">Forgot Password</a></li>
                <li><a href="reset">Reset Password</a></li>
              </ul>
            </li>
            <li><a href="category">Category</a></li>
            <li><a href="single">Single</a></li>
            <li><a href="page">Page</a></li>
            <li><a href="search">Search</a></li>
            <li><a href="contact">Холбоо барих</a></li>
            <li class="dropdown magz-dropdown">
              <a href="#">Алдаа <i class="ion-ios-arrow-right"></i></a>
              <ul class="dropdown-menu">
                <li><a href="403">403</a></li>
                <li><a href="404">404</a></li>
                <li><a href="500">500</a></li>
                <li><a href="503">503</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Мэдээ <i class="ion-ios-arrow-right"></i> <div class="badge">Шинэ</div></a>
          @include('inc.metamenu')
        </li>
        <li class="dropdown magz-dropdown"><a href="#">Dropdown Icons <i class="ion-ios-arrow-right"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="icon ion-person"></i> My Account</a></li>
            <li><a href="#"><i class="icon ion-heart"></i> Favorite</a></li>
            <li><a href="#"><i class="icon ion-chatbox"></i> Comments</a></li>
            <li><a href="#"><i class="icon ion-key"></i> Change Password</a></li>
            <li><a href="#"><i class="icon ion-settings"></i> Settings</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="icon ion-log-out"></i> Logout</a></li>
          </ul>
        </li>
        <li><a href="/about">Бидний тухай </a></li>
        <li><a href="/contact">Холбоо барих </a></li>
      </ul>
    </div>
  </div>
</nav>
