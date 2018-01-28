@extends('layouts.app')

@section('content')
<section class="home">
<div class="container">
	<div class="row">
    <div class="col-lg-4">
      <ul class="list-group">
        <li class="list-group-item">
          <a href="{{route('admin')}}">Нүүр хуудас</a>
        </li>
        <li class="list-group-item">
          <a href="{{route('post.create')}}">Мэдээ шинээр нэмэх</a>
        </li>
        <li class="list-group-item">
          <a href="{{route('category.create')}}">Ангилал шинээр  нэмэх</a>
        </li>
      </ul>
    </div>
    <div class="col-lg-8">
      @section('admin_content')
            <div class="jumbotron text-center">
              <h2>Тавтай морилно уу. Админаа</h2>
            </div>
      @show
    </div>
	</div>
</div>
</section>
@endsection
