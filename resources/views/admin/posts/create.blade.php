@extends('admin.dashboard')

@section('stylesheets')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection

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
        <input id="title" type="text" name="title" class="form-control">
      </div>
      <div class="form-group">
        <label for="category">Ангилал</label>
        <select id="category" class="form-control" name="category_id">
          @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="featured">Зураг</label>
        <input id="featured" type="file" name="featured" class="form-control">
      </div>
      <div class="form-group">
        <label for="tags">Холбоос</label>
        @foreach($tags as $tag)
        <div class="checkbox">
          <label><input id="tags" type="checkbox" name="tags[]" value="{{$tag->id}}">{{$tag->tag}}</label>
        </div>
        @endforeach
    </div>
      <div class="form-group">
        <label for="short_content">Богино контент</label>
        <input id="short_content" type="text" name="short_content" class="form-control">
      </div>
      <div class="form-group">
        <label for="post_content">Бүх контент</label>
        <textarea id="post_content" type="file" name="post_content" cols="10" rows="150" class="form-control"></textarea>
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

@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
  $(document).ready(function() {
    $('#post_content').summernote();
  });
</script>
@endsection
