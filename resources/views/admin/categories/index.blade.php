@extends('admin.index')

@section('admin_content')
<div class="panel panel-default">
  <div class="panel-heading">
    Шинэ ангилал нэмэх
  </div>
  <div class="panel-body">
  <form class="" action="{{ route('category.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Ангилалын нэр</label>
      <input id="name" type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
      <div class="text-center">
        <button class="btn btn-success btn-sm" type="submit">
          Ангилал нэмэх
        </button>
      </div>
    </div>
  </form>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-body">
<table class="table table-hover">
  <thead>
    <th>Ангилалын нэр</th>
    <th>Засах</th>
    <th>Устгах</th>
  <thead>
    <tbody>
    @if($categories->count()>0)
      @foreach($categories as $category)
        <tr>
          <td>{{$category->name}}</td>
          <td>
            <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-info btn-sm"><span class="ion-edit"></span></a>
          </td>
          <td>
            <a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger btn-sm"><span class="ion-android-delete"></span></a>
          </td>
        </tr>
      @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">Ангилал байхгүй байна</th>
    </tr>
    @endif
      </tbody>
</table>
</div>
</div>
@stop
