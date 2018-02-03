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
          <a href="{{$channel->name}}">{{$channel->name}}</a>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="col-lg-8">
      @section('admin_content')
      <div class="panel panel-default">
        <div class="panel-heading">
          <img src="{{asset($discussion->user->avatar)}}" alt="" width="40px" height="40px">&nbsp;
          <span>{{$discussion->user->name}}</span>,
          <span>{{$discussion->created_at->diffForHumans()}}</span>
          <a href="{{route('discussions.show',['id'=>$discussion->id])}}" class="btn btn-sm btn-primary pull-right">Хариулах</a>
        </div>
        <div class="panel-body">
          <h5 class="text-center">{{$discussion->title}}</h5>
          <p>
            {{str_limit($discussion->content,50)}}
          </p>
        </div>
        <div class="panel-footer">
          <p>
            {{$discussion->replies->count()}} хариулт
          </p>
        </div>
      </div>
      @foreach($discussion->replies as $reply)
        <div class="panel panel-default">
          <div class="panel-heading">
            <img src="{{asset($reply->user->avatar)}}" alt="" width="40px" height="40px">&nbsp;
            <span>{{$reply->user->name}}</span>,
            <span>{{$reply->created_at->diffForHumans()}}</span>
          </div>
          <div class="panel-body">
            <p>
              {{$reply->content,50}}
            </p>
          </div>
          <div class="panel-footer">
            <p>
              @if($reply->is_liked_by_auth_user())
                <a href="{{route('reply.unlike',['id'=>$reply->id])}}" class="btn btn-primary btn-sm">Unlike<span class="badge">{{$reply->likes->count()}}</span></a>
              @else
                <a href="{{route('reply.like',['id'=>$reply->id])}}" class="btn btn-success btn-sm">Like <span class="badge">{{$reply->likes->count()}}</span></a>
              @endif
            </p>
          </div>
        </div>
      @endforeach

      <div class="panel panel-default">
        <div class="panel-body">
          <form action="{{route('discussion.reply',['id'=>$discussion->id])}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <textarea name="reply" rows="8" cols="80" class="form-control" placeholder="Энд хариултаа бичнэ үү.."></textarea>
            </div>
            <div class="form-group">
              <button class="btn btn-sm pull-right" type="submit">Хариулах</button>
            </div>
          </form>
        </div>
      </div>
      @show
    </div>
	</div>
</div>
</section>
@endsection
