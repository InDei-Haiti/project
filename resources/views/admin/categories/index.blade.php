@extends('admin.index')

@section('admin_content')
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
            <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-info"><span class="ion-edit"></span></a>
          </td>
          <td>
            <a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger"><span class="ion-android-delete"></span></a>
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
