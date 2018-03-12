@extends('layouts.app')

@section('content')
<section class="login first grey">
  <div class="container">
    <div class="box-wrapper">
      <div class="box box-border">
        <div class="box-body">
          <h4>Бүртгүүлэх</h4>
          <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name">Нэр</label>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">И-мэйл хаяг</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label class="fw" for="password">Нууц үг</label>
              <input id="password" type="password" class="form-control" name="password" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group">
              <label class="fw" for="password-confirm" >Нүүц үг дахин</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>


            <div class="form-group text-right">
              <button class="btn btn-primary btn-block">Бүртгүүлэх</button>
            </div>
            <div class="form-group text-center">
              <span class="text-muted">Өмнө нь бүртгүүлсэн үү?</span> <a href="{{route('login')}}">Нэвтрэх</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection
