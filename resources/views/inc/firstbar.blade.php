<div class="firstbar">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-12">
        <div class="brand">
          <a href="{{route('app')}}">
            <img src="{{asset('images/logo.png')}}" alt="Magz Logo">
          </a>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <form class="search" autocomplete="off">
          <div class="form-group">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Хайх үг...">
              <div class="input-group-btn">
                <button class="btn btn-primary"><i class="ion-search"></i></button>
              </div>
            </div>
          </div>
          <div class="help-block">
            <div><strong>Түгээмэл:</strong></div>
            <ul>
              <li><a href="#"><strong>Улс төр</strong></a></li>
              <li><a href="#">Эдийн засаг</a></li>
              <li><a href="#">Эрүүл мэнд</a></li>
              <li><a href="#">Спорт</a></li>
              <li><a href="#">Технологи</a></li>
            </ul>
          </div>
        </form>
      </div>
      @guest
      <div class="col-md-3 col-sm-12 text-right">
        <ul class="nav-icons">
          <li><a href="{{route('register')}}"><i class="ion-person-add"></i><div>Элсэх</div></a></li>
          <li><a href="{{route('login')}}"><i class="ion-person"></i><div>Нэвтрэх</div></a></li>
        </ul>
      </div>
      @endguest
    </div>
  </div>
</div>
