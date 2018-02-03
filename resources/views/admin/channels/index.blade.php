@extends('admin.index')

@section('admin_content')
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
            <a href="{{route('channels.edit',['channel'=>$channel->id])}}" class="btn btn-info"><span class="ion-edit"></span></a>
          </td>
          <td>
            <a href="{{route('channels.destroy',['channel'=>$channel->id])}}" class="btn btn-danger"><span class="ion-android-delete"></span></a>
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
