@extends('admin.discussions.forum')

@section('admin_content')
	<div class="panel panel-default">
		<div class="panel-heading text-center">Хэлэлцүүлэг засах</div>
  		<div class="panel-body">
  			<form action="{{route('discussions.update',['id'=>$discussion->id])}}" method="Post">
  				{{csrf_field()}}
          {{method_field('PUT')}}
  				<div class="form-group">
  					<label for="content">Асуух асуултаа дэлгэрэнгүй энд бичнэ үү</label>
  					<textarea id="content" name="content" rows="15" cols="10" class=form-control>{{$discussion->content}}</textarea>
  				</div>
  				<div class="form-group">
  					<button class="btn btn-success text-center" type="submit">Хэлэлцүүлгийг засах</button>
  				</div>
        </form>
  		</div>
		</div>
@endsection
