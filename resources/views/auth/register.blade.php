@extends('layouts.app')

@section('content')
<section class="login first grey">
  <div class="container">
    <div class="box-wrapper">
      <div class="box box-border">
        <div class="box-body">
          <h4>Register</h4>
          <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name">Name</label>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">Email</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label class="fw" for="password">Password</label>
              <input id="password" type="password" class="form-control" name="password" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group">
              <label class="fw" for="password-confirm" >Confirm Password</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>


            <div class="form-group text-right">
              <button class="btn btn-primary btn-block">Register</button>
            </div>
            <div class="form-group text-center">
              <span class="text-muted">Already have an account?</span> <a href="login">Login</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection
