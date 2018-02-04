@extends('layouts.app')

@section('content')
<section class="home">
<div class="container">
	<div class="row">
    <div class="col-lg-4">
      <a href="{{route('discussions.create')}}" class="form-control btn btn-primary btn-rounded">Шинэ хэлэлцүүлэг нээх</a>
      <div class="panel panel-default">
        <div class="panel-heading"></div>
        <div class="panel-body">
          <ul class="list-group">
            <li class="list-group-item">
              <a href="{{route('discussions.index')}}">Бүгд</a>
            </li>
						<li class="list-group-item">
							<a href="{{route('discussions.index',['filter'=>'me'])}}">Миний хэлэлцүүлэг</a>
						</li>
						<li class="list-group-item">
							<a href="{{route('discussions.index',['filter'=>'solved'])}}">Хаагдсан хэлэлцүүлэг</a>
						</li>
						<li class="list-group-item">
							<a href="{{route('discussions.index',['filter'=>'unsolved'])}}">Нээлттэй хэлэлцүүлэг</a>
						</li>
          </ul>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Бүх сувгууд</div>
        <div class="panel-body">
          <ul class="list-group">
            @foreach($channels as $channel)
            <li class="list-group-item">
              <a href="{{route('channel',['id'=>$channel->id])}}">{{$channel->name}}</a>
            </li>
            @endforeach
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
