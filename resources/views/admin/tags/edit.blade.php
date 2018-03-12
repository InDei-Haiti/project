@extends('admin.index')

@section('admin_content')

@include('admin.inc.errors')

<div class="panel panel-default">
  <div class="panel-heading">
    Ангилалыг засах: {{ $tag->tag }}
  </div>
  <div class="panel-body">
    <form class="" action="{{ route('tag.update',['id'=>$tag->id])}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Холбоосын нэр</label>
        <input id="name" type="text" name="tag" value="{{ $tag->tag }}" class="form-control">
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Холбоосыг засах
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
