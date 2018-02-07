@extends('admin.discussions.forum')

@section('admin_content')
	<div class="panel panel-default">
		@if($errors->count()>0)
			<ul class="list-group text-danger">
				@foreach($errors->all() as $error)
					<li class="list-group-item">{{$error}}</li>
				@endforeach
			</ul>
		@endif
		<div class="panel-heading text-center">Хэлэлцүүлэг нээх</div>
			<div class="panel-body">
				<form action="{{route('discussions.store')}}" method="Post">
					{{csrf_field()}}
					<div class="form-group">
						<label for="channel_id">Сувгаа сонгоно уу</label>
						<select id="channel_id" class="form-control" name="channel_id">
							@foreach($channels as $channel)
								<option value="{{$channel->id}}">{{$channel->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="title">Гарчиг</label>
						<input id="title" type="text" class="form-control" name="title" value="{{old('title')}}">
					</div>
					<div class="form-group">
						<label for="content">Асуух асуултаа энд дэлгэрэнгүй бичнэ үү</label>
						<textarea id="content" name="content" rows="15" cols="10" class=form-control>{{old('content')}}</textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-success text-center" type="submit">Хэлэлцүүлгийг нэмэх</button>
					</div>
				</form>
			</div>
		</div>
@endsection
