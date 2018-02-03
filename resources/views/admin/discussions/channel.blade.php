@extends('layouts.app')

@section('content')
<section class="home">
<div class="container">
	<div class="row">
    <div class="col-lg-4">
      <a href="{{route('discussions.create')}}" class="form-control btn btn-primary ">Шинэ хэлэлцүүлэг нээх</a>
      <ul class="list-group">
        <li class="list-group-item">
          <a href="{{route('discussions.index')}}">Бүгд</a>
        </li>
        @foreach($channels as $channel)
        <li class="list-group-item">
          <a href="{{route('channel',['id'=>$channel->id])}}">{{$channel->name}}</a>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="col-lg-8">
      @section('admin_content')
        @foreach($discussions as $d)
					<div class="panel panel-default">
						<div class="panel-heading">
							<img src="{{asset($d->user->avatar)}}" alt="" width="40px" height="40px">&nbsp;
							<span>{{$d->user->name}}</span>,
							<span>{{$d->created_at->diffForHumans()}}</span>
							<a href="{{route('discussions.show',['id'=>$d->id])}}" class="btn btn-sm btn-primary pull-right">Хариулах</a>
						</div>
						<div class="panel-body">
							<h5 class="text-center">{{$d->title}}</h5>
							<p>
								{{str_limit($d->content,50)}}
							</p>
						</div>
						<div class="panel-footer">
							<p>
								{{$d->replies->count()}} хариулт
							</p>
						</div>
					</div>
        @endforeach
				<div class="col-md-12 text-center">
					{{$discussions->links()}}
					<div class="pagination-help-text">
						Нийт: {{$discussions->total()}}
					</div>
				</div>
      @show
    </div>
	</div>
</div>
</section>
@endsection
