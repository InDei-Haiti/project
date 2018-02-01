@extends('admin.index')

@section('admin_content')

@include('admin.inc.errors')

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
          <button class="btn btn-success" type="submit">
          Холбоос нэмэх
          </button>
        </div>
      </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
