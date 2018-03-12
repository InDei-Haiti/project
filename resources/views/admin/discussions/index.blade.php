@extends('admin.discussions.forum')

@section('admin_content')
@foreach($discussions as $d)
  <div class="panel panel-default">
    <div class="panel-heading">
      <img src="{{asset($d->user->avatar)}}" alt="" width="40px" height="40px" style="border-radius: 50%">&nbsp;
      <span><b>{{$d->user->name}}({{$d->user->profile->points}})</b></span>,
      <span>{{$d->created_at->diffForHumans()}}</span>
      @if($d->has_best_answer())
      <span class="btn btn-rounded btn-sm btn-danger pull-right"><i class="ion-close"></i>Хаагдсан</span>
      @else
      <span class="btn btn-rounded btn-sm btn-success pull-right"><i class="ion-android-open"></i>Нээлттэй</span>
      @endif
      <a href="{{route('channel',['id'=>$d->channel_id])}}" class="btn btn-rounded btn-info btn-sm pull-right">{{$d->channel->name}}</a>
    </div>
    <div class="panel-body">
      <h5 class="text-center">{{$d->title}}</h5>
      <p>{{str_limit($d->content,50)}}</p>
    </div>
    <div class="panel-footer">
      <span>{{$d->replies->count()}} хариулт</span>
      <a href="{{route('discussions.show',['id'=>$d->id])}}" class="btn btn-rounded btn-sm btn-info pull-right">Хариулах</a>
      @if(Auth::id()==$d->user_id)
        <form action="{{route('discussions.destroy',['id'=>$d->id])}}" method="post" class="pull-right">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <button class="btn btn-rounded btn-sm btn-danger" type="submit"><i class="ion-android-delete"></i>Устгах</button>
        </form>
      @endif
    </div>
  </div>
@endforeach
  <div class="col-md-12 text-center">
    {{$discussions->links()}}
    <div class="pagination-help-text">
    Нийт: {{$discussions->count()}}
    </div>
  </div>
@stop
