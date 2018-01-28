@extends('admin.dashboard')

@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">
      Create a new post
    </div>
    <div class="panel-body">
      <form class="" action="{{ route('post.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="featured">Image</label>
          <input type="file" name="featured" class="form-control">
        </div>
        <div class="form-group">
          <label for="short_content">Short Content</label>
          <input type="text" name="short_content" class="form-control">
        </div>
        <div class="form-group">
          <label for="post_content">Post Content</label>
          <textarea type="file" name="post_content" id="content" cols="5" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">
              Store Post
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
