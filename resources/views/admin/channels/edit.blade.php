@extends('admin.index')

@section('admin_content')

@include('admin.inc.errors')

<div class="panel panel-default">
  <div class="panel-heading">
    Сувгийг засах: {{ $channel->name }}
  </div>
  <div class="panel-body">
    <form class="" action="{{ route('channels.update',['channel'=>$channel->id])}}" method="post">
      {{ csrf_field() }}
      {{ method_field('PUT')}}
      <div class="form-group">
        <label for="name">Сувгийн нэр</label>
        <input id="name" type="text" name="name" value="{{ $channel->name }}" class="form-control">
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Сувгийг засах
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
