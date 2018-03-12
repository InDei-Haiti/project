@extends('layouts.app')

@section('content')
<section class="home">
<div class="container">
	<div class="row">
    <div class="col-lg-4">
			<a href="{{route('post.create')}}" class="form-control btn btn-primary"><i class="ion-plus"></i>Шинэ мэдээ нэмэх</a>
			<div class="panel panel-default">
				<div class="panel-heading">Цэс</div>
				<div class="panel-body">
		      <ul class="list-group">
						<li class="list-group-item">
							<a href="{{route('discussions.index')}}">Бүх хэлэлцүүлэг</a>
						</li>
						<li class="list-group-item">
							<a href="{{route('channels.index')}}">Бүх сувгууд</a>
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
						@if(Auth::user()->admin)
						<li class="list-group-item">
							<a href="{{route('dashboard')}}">Нүүр хуудас</a>
						</li>
						<li class="list-group-item">
							<a href="{{route('users')}}">Бүх хэрэглэгч</a>
						</li>
						<li class="list-group-item">
							<a href="{{route('settings')}}">Сайтын мэдээлэл</a>
						</li>
						<li class="list-group-item">
							<a href="{{route('post.trash')}}">Бүх устгагдсан мэдээ</a>
						</li>
						@endif
		      </ul>
				</div>
		</div>
    </div>
    <div class="col-lg-8">
      @yield('admin_content')
    </div>
	</div>
</div>
</section>
@endsection
