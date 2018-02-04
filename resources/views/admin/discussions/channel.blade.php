@extends('admin.discussions.forum')

@section('admin_content')
        @foreach($discussions as $d)
					<div class="panel panel-default">
						<div class="panel-heading">
							<img src="{{asset($d->user->avatar)}}" alt="" width="40px" height="40px" style="border-radius: 50%">&nbsp;
							<span>{{$d->user->name}}</span>,
							<span>{{$d->created_at->diffForHumans()}}</span>
              @if($d->has_best_answer())
              <span class="btn btn-sm btn-danger pull-right">Хаагдсан</span>
              @else
              <span class="btn btn-sm btn-success pull-right">Нээлттэй</span>
              @endif
              <a href="{{route('discussions.show',['id'=>$d->id])}}" class="btn btn-sm btn-info pull-right">Хариулах</a>
						</div>
						<div class="panel-body">
							<h5 class="text-center">{{$d->title}}</h5>
							<p>
								{{str_limit($d->content,50)}}
							</p>
						</div>
						<div class="panel-footer">
							<span>
								{{$d->replies->count()}} хариулт
							</span>
							<a href="{{route('channel',['id'=>$d->channel->id])}}" class="btn btn-info btn-sm pull-right">{{$d->channel->name}}</a>
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
