@extends('admin.dashboard')

@section('admin_content')

@include('admin.inc.errors')

<div class="panel panel-default">
    <div class="panel-heading">
      Мэдээг засварлах
    </div>
    <div class="panel-body">
    <form class="" action="{{route('post.update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Гарчиг</label>
        <input id="title" type="text" name="title" class="form-control" value="{{$post->title}}">
      </div>
      <div class="form-group">
        <label for="category">Ангилал</label>
        <select id="category" class="form-control" name="category_id">
          @foreach($categories as $category)
            <option value="{{$category->id}}"
              @if($post->category->id==$category->id)
                selected
              @endif
              >{{$category->name}}</option>
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
          <label><input id="tags" type="checkbox" name="tags[]" value="{{$tag->id}}"
            @foreach($post->tags as $t)
             @if($tag->id==$t->id)
              checked
             @endif
            @endforeach
            >{{$tag->tag}}</label>
        </div>
        @endforeach
    </div>
      <div class="form-group">
        <label for="short_content">Богино контент</label>
        <input id="short_content" type="text" name="short_content" class="form-control" value="{{$post->short_content}}">
      </div>
      <div class="form-group">
        <label for="post_content">Бүх контент</label>
        <textarea id="post_content" type="file" name="post_content" id="content" cols="5" rows="5" class="form-control">{{$post->post_content}}</textarea>
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Мэдээг засаж нэмэх
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
