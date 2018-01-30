@extends('layouts.app')

@section('content')
<section class="home">
<div class="container">
	<div class="row">
		@guest
				<li><a href="{{ route('login') }}">Login</a></li>
				<li><a href="{{ route('register') }}">Register</a></li>
		@else
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
								{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
								<li>
										<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();">
												Logout
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
										</form>
								</li>
						</ul>
				</li>
		@endguest
    <div class="col-lg-4">
      <ul class="list-group">
        <li class="list-group-item">
          <a href="{{route('admin')}}">Нүүр хуудас</a>
        </li>
				<li class="list-group-item">
					<a href="{{route('categories')}}">Бүх ангилал</a>
				</li>
				<li class="list-group-item">
					<a href="{{route('tags')}}">Бүх холбоос</a>
				</li>
				<li class="list-group-item">
					<a href="{{route('posts')}}">Бүх мэдээ</a>
				</li>
				<li class="list-group-item">
					<a href="{{route('users')}}">Бүх хэрэглэгч</a>
				</li>
				<li class="list-group-item">
					<a href="{{route('post.trash')}}">Бүх устгагдсан мэдээ</a>
				</li>
				<li class="list-group-item">
					<a href="{{route('category.create')}}">Шинэ ангилал нэмэх</a>
				</li>
				<li class="list-group-item">
					<a href="{{route('tag.create')}}">Шинэ холбоос нэмэх</a>
				</li>
        <li class="list-group-item">
          <a href="{{route('post.create')}}">Шинэ мэдээ нэмэх</a>
        </li>
        <li class="list-group-item">
          <a href="{{route('settings')}}">Сайтын мэдээлэл</a>
        </li>




      </ul>
    </div>
    <div class="col-lg-8">
      @section('admin_content')
            <div class="jumbotron text-center">
              <h2>Тавтай морилно уу. Админаа</h2>
            </div>
      @show
    </div>
	</div>
</div>
</section>
@endsection
