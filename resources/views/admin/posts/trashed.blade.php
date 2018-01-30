@extends('admin.dashboard')

@section('admin_content')
<div class="panel panel-default">
  <div class="panel-body">
<table class="table table-hover">
  <thead>
    <th>Зураг</th>
    <th>Мэдээний гарчиг</th>
    <th>Засах</th>
    <th>Сэргээх</th>
    <th>Устгах</th>
  <thead>
    <tbody>
    @if($posts->count()>0)
    @foreach($posts as $post)
    <tr>
      <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="100px" height="100px"></td>
      <td>{{$post->title}}</td>
      <td>
        <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-info"><span class="ion-edit"></span></a>
      </td>
      <td>
        <a href="{{route('post.restore',['id'=>$post->id])}}" class="btn btn-info"><span class="ion-refresh">Сэргээх</span></a>
      </td>
      <td>
        <a href="{{route('post.kill',['id'=>$post->id])}}" class="btn btn-danger"><span class="ion-android-delete">Устгах</span></a>
      </td>
    </tr>
    @endforeach
    @else
      <tr>
        <th colspan="5" class="text-center">Устгагдсан мэдээ байхгүй байна.</th>
      </tr>
    @endif

      </tbody>
</table>
</div>
</div>
@stop
