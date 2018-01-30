@extends('admin.dashboard')

@section('admin_content')

@include('admin.inc.errors')

<div class="panel panel-default">
    <div class="panel-heading">
      Ангилалыг засах: {{ $category->name }}
    </div>
    <div class="panel-body">
    <form class="" action="{{ route('category.update',['id'=>$category->id])}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Ангилалын нэр</label>
        <input id="name" type="text" name="name" value="{{ $category->name }}" class="form-control">
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Ангилалыг засах
          </button>
        </div>
      </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
