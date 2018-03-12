@extends('admin.index')

@section('admin_content')
<div class="panel panel-default">
  <div class="panel-heading">
  Шинэ суваг нэмэх
  </div>
  <div class="panel-body">
    <form class="" action="{{ route('channels.store')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Сувгийн нэр</label>
        <input id="name" type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success btn-sm" type="submit">
            Суваг нэмэх
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
    @if($channels->count()>0)
      @foreach($channels as $channel)
        <tr>
          <td>{{$channel->name}}</td>
          <td>
            <a href="{{route('channels.edit',['channel'=>$channel->id])}}" class="btn btn-info btn-sm"><span class="ion-edit"></span></a>
          </td>
          <td>
            <form action="{{route('channels.destroy',['channel'=>$channel->id])}}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button class="btn btn-danger btn-sm" type="submit" name="button"><span class="ion-android-delete"></span></button>
            </form>

          </td>
        </tr>
      @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">Суваг байхгүй байна</th>
    </tr>
    @endif
      </tbody>
</table>
</div>
</div>
@stop
