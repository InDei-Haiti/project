@extends('layouts.app')

@section('content')
<section class="login first grey">
  <div class="container">
    <div class="box-wrapper">
      <div class="box box-border">
        <div class="box-body">
          <h4>Нэвтрэх</h4>
          <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" >И-мэйл</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required tabindex="1" autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label class="fw">Нууц үг
                <a href="{{ route('password.request') }}" class="pull-right">Нууц үг мартсан уу?</a>
              </label>
              <input id="password" type="password" class="form-control" name="password" required tabindex="2">
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} tabindex="3"> Сануулах
                        </label>
            </div>

            <div class="form-group text-right">
              <button type="submit" class="btn btn-primary btn-block" tabindex="4">Нэвтрэх</button>
            </div>
            <div class="form-group text-center">
              <span class="text-muted">Та өмнө нь бүртгүүлээгүй юу?</span> <a href="{{route('register')}}">Бүртгүүлэх</a>
            </div>
            <div class="title-line">
              эсвэл
            </div>
            <a href="{{route('social.auth',['provider'=>'facebook'])}}" class="btn btn-social btn-block facebook"><i class="ion-social-facebook"></i> Facebook-ээр нэвтрэх</a>
            <a href="{{route('social.auth',['provider'=>'github'])}}" class="btn btn-social btn-block github"><i class="ion-social-github"></i> GitHub-аар нэвтрэх</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
