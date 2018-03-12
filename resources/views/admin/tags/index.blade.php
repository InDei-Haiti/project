@extends('admin.index')

@section('admin_content')
<div class="panel panel-default">
  <div class="panel-heading">
  Шинэ холбоос нэмэх
  </div>
  <div class="panel-body">
    <form class="" action="{{ route('tag.store')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Холбоосын нэр</label>
        <input id="name" type="text" name="tag" class="form-control">
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success btn-sm" type="submit">
          Холбоос нэмэх
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-body">
<table class="table table-hover">
  <thead>
    <th>Холбоосын нэр</th>
    <th>Засах</th>
    <th>Устгах</th>
  <thead>
    <tbody>
    @if($tags->count()>0)
      @foreach($tags as $tag)
        <tr>
          <td>{{$tag->tag}}</td>
          <td>
            <a href="{{route('tag.edit',['id'=>$tag->id])}}" class="btn btn-info btn-sm"><span class="ion-edit"></span></a>
          </td>
          <td>
            <a href="{{route('tag.delete',['id'=>$tag->id])}}" class="btn btn-danger btn-sm"><span class="ion-android-delete"></span></a>
          </td>
        </tr>
      @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">Холбоос байхгүй байна</th>
    </tr>
    @endif
      </tbody>
</table>
</div>
</div>
@stop
