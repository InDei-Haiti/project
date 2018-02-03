@extends('admin.discussions.forum')

@section('admin_content')
      <div class="panel panel-default">
        <div class="panel-heading">
          <img src="{{asset($discussion->user->avatar)}}" alt="" width="40px" height="40px">&nbsp;
          <span>{{$discussion->user->name}}</span>,
          <span>{{$discussion->created_at->diffForHumans()}}</span>
          @if($discussion->is_being_watched_by_auth_user())
            <a href="{{route('discussion.unwatch',['id' => $discussion->id])}}" class="btn btn-success btn-sm pull-right"><i class="ion-eye-disabled"></i>Харахгүй</a>
          @else
            <a href="{{route('discussion.watch',['id' => $discussion->id])}}" class="btn btn-success btn-sm pull-right"><i class="ion-eye"></i>Харъя</a>
          @endif
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
            <span>
              @if($reply->is_liked_by_auth_user())
                <a href="{{route('reply.unlike',['id'=>$reply->id])}}" class="btn btn-primary btn-sm">Unlike<span class="badge">{{$reply->likes->count()}}</span></a>
              @else
                <a href="{{route('reply.like',['id'=>$reply->id])}}" class="btn btn-success btn-sm">Like <span class="badge">{{$reply->likes->count()}}</span></a>
              @endif
            </span>

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
      @stop
