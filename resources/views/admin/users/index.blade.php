@extends('admin.dashboard')

@section('admin_content')
<div class="panel panel-default">
  <div class="panel-body">
<table class="table table-hover">
  <thead>
    <th>Зураг</th>
    <th>Нэр</th>
    <th>Админ эрх</th>
    <th>Хасах</th>
  <thead>
    <tbody>
    @if($users->count()>0)
    @foreach($users as $user)
    <tr>
      <td><img src="{{asset($user->profile->avatar)}}" alt="{{$user->name}}" width="100px" height="100px"></td>
      <td>{{$user->name}}</td>
      <td>

          @if($user->admin)
            <a href="{{route('user.notadmin',['id'=>$user->id])}}" class="btn btn-danger">Эрхийг хасах
          @else
            <a href="{{route('user.admin',['id'=>$user->id])}}" class="btn btn-success">Админ болгох
          @endif
        </a>
      </td>
      <td>
        @if(Auth::id()!== $user->id)
        <a href="{{route('user.delete',['id'=>$user->id])}}" class="btn btn-danger"><span class="ion-android-delete"></span></a>
        @endif
      </td>

    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">Ямар ч хэрэглэгч байхгүй байна</th>
    </tr>
    @endif
      </tbody>
</table>
</div>
</div>
@stop
