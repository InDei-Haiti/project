@extends('admin.dashboard')

@section('admin_content')
<div class="panel panel-default">
  <div class="panel-body">
<table class="table table-hover">
  <thead>
    <th>Зураг</th>
    <th>Мэдээний гарчиг</th>
    <th>Засах</th>
    <th>Устгах</th>
  <thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
      <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="100px" height="100px"></td>
      <td>{{$post->title}}</td>
      <td>
        <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-info"><span class="ion-edit"></span></a>
      </td>
      <td>
        <a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-danger"><span class="ion-android-delete"></span></a>
      </td>

    </tr>
    @endforeach
      </tbody>
</table>
</div>
</div>
@stop
