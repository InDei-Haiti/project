@extends('admin.discussions.forum')

@section('admin_content')
      <div class="panel panel-default">
        <div class="panel-heading">
          <img src="{{asset($discussion->user->avatar)}}" alt="" width="40px" height="40px" style="border-radius: 50%">&nbsp;
          <span><b>{{$discussion->user->name}}({{$discussion->user->profile->points}})</b></span>,
          <span>{{$discussion->created_at->diffForHumans()}}</span>
          @if($discussion->is_being_watched_by_auth_user())
            <a href="{{route('discussions.unwatch',['id' => $discussion->id])}}" class="btn btn-rounded btn-info btn-sm pull-right"><i class="ion-eye-disabled"></i>Харахгүй</a>
          @else
            <a href="{{route('discussions.watch',['id' => $discussion->id])}}" class="btn btn-rounded btn-info btn-sm pull-right"><i class="ion-eye"></i>Харъя</a>
          @endif
          @if(Auth::id()==$discussion->user_id && !$discussion->has_best_answer())
            <a href="{{route('discussions.edit',['id' => $discussion->id])}}" class="btn btn-rounded btn-primary btn-sm pull-right"><i class="ion-edit"></i>Засах</a>
          @endif
          @if($discussion->has_best_answer())
            <span class="btn btn-rounded btn-sm btn-danger pull-right"><i class="ion-close"></i>Хаагдсан</span>
          @else
            <span class="btn btn-rounded btn-sm btn-success pull-right"><i class="ion-android-open"></i>Нээлттэй</span>
          @endif
        </div>
        <div class="panel-body">
          <h5 class="text-center">{{$discussion->title}}</h5>
          <p>
            {!! Markdown::convertToHtml($discussion->content) !!}
          </p>
          <hr>
          @if($best_answer)
            <div>
              <h5 class="text-center">Хамгийн зөв хариулт</h5>
              <div class="panel panel-success">
                <div class="panel-heading text-center">
                  <img src="{{asset($best_answer->user->avatar)}}" alt="" width="40px" height="40px" style="border-radius: 50%">&nbsp;
                  <span><b>{{$best_answer->user->name}}({{$best_answer->user->profile->points}})</b></span>,
                </div>
                <div class="panel-body">
                  {!! Markdown::convertToHtml($best_answer->content) !!}
                </div>
              </div>
            </div>
          @endif
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
            <img src="{{asset($reply->user->avatar)}}" alt="" width="40px" height="40px" style="border-radius: 50%">&nbsp;
            <span><b>{{$reply->user->name}}({{$reply->user->profile->points}})</b></span>,
            <span>{{$reply->created_at->diffForHumans()}}</span>
            @if(!$best_answer)
              @if(Auth::id()==$discussion->user->id)
                <a href="{{route('reply.best_answer',['id'=>$reply->id])}}" class="btn btn-rounded btn-success btn-sm pull-right">Хамгийн зөв хариулт</a>
              @endif
            @endif
            @if(Auth::id()==$reply->user_id && !$reply->best_answer)
              <a href="{{route('replies.edit',['id'=>$reply->id])}}" class="btn btn-rounded btn-info btn-sm pull-right"><i class="ion-edit"></i>Засах</a>
              <a href="{{route('replies.delete',['id'=>$reply->id])}}" class="btn btn-rounded btn-danger btn-sm pull-right"><i class="ion-android-delete"></i>Устгах</a>
            @endif
          </div>
          <div class="panel-body">
            <p>
              {!! Markdown::convertToHtml($reply->content) !!}
            </p>
          </div>
          <div class="panel-footer">
            <span>
              @if($reply->is_liked_by_auth_user())
                <a href="{{route('reply.unlike',['id'=>$reply->id])}}" class="btn btn-rounded btn-primary btn-sm">Unlike<span class="badge">{{$reply->likes->count()}}</span></a>
              @else
                <a href="{{route('reply.like',['id'=>$reply->id])}}" class="btn btn-rounded btn-success btn-sm">Like <span class="badge">{{$reply->likes->count()}}</span></a>
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
              <button class="btn btn-rounded btn-sm pull-right" type="submit">Хариулах</button>
            </div>
          </form>
        </div>
      </div>
      @stop
