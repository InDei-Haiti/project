@extends('admin.discussions.forum')

@section('admin_content')
	<div class="panel panel-default">
		<div class="panel-heading text-center">Бичсэн хариултаа засах</div>
  		<div class="panel-body">
  			<form action="{{route('replies.update',['id'=>$reply->id])}}" method="Post">
  				{{csrf_field()}}
  				<div class="form-group">
  					<label for="content">Хариулт</label>
  					<textarea id="content" name="content" rows="15" cols="10" class=form-control>{{$reply->content}}</textarea>
  				</div>
  				<div class="form-group">
  					<button class="btn btn-success text-center" type="submit">Хариултаа засах</button>
  				</div>
        </form>
  		</div>
		</div>
@endsection
