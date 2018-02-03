@extends('admin.index')

@section('admin_content')

@include('admin.inc.errors')

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
          <button class="btn btn-success" type="submit">
          Суваг нэмэх
          </button>
        </div>
      </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
