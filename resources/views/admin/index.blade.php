@extends('layouts.app')

@section('content')
<section class="home">
<div class="container">
	<div class="row">
    <div class="col-lg-4">
      <ul class="list-group">
        <li class="list-group-item">
          <a href="{{route('dashboard')}}">Нүүр хуудас</a>
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
				<li class="list-group-item">
					<a href="{{route('discussions.index')}}">Бүх хэлэлцүүлэг</a>
				</li>
				<li class="list-group-item">
					<a href="{{route('channels.create')}}">Шинэ суваг нэмэх</a>
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
				@if(Auth::user()->admin)
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
    <div class="col-lg-8">
      @yield('admin_content')
    </div>
	</div>
</div>
</section>
@endsection
