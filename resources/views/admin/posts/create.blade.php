@extends('admin.dashboard')

@section('admin_content')

@include('admin.inc.errors')

<div class="panel panel-default">
    <div class="panel-heading">
      Шинэ мэдээ нэмэх
    </div>
    <div class="panel-body">
    <form class="" action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Гарчиг</label>
        <input type="text" name="title" class="form-control">
      </div>
      <div class="form-group">
        <label for="category">Ангилал</label>
        <select class="form-control" id="category" name="category_id">
          @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="featured">Зураг</label>
        <input type="file" name="featured" class="form-control">
      </div>
      <div class="form-group">
        <label for="short_content">Богино контент</label>
        <input type="text" name="short_content" class="form-control">
      </div>
      <div class="form-group">
        <label for="post_content">Бүх контент</label>
        <textarea type="file" name="post_content" id="content" cols="5" rows="5" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Мэдээг нэмэх
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
