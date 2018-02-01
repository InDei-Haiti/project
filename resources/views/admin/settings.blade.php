@extends('admin.index')

@section('admin_content')

@include('admin.inc.errors')

<div class="panel panel-default">
    <div class="panel-heading">
      Сайтын мэдээллийг засварлах
    </div>
    <div class="panel-body">
    <form class="" action="{{route('setting.update')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Сайтын нэр</label>
        <input id="title" type="text" name="site_name" class="form-control" value="{{$settings->site_name}}">
      </div>
      <div class="form-group">
        <label for="contact_number">Утасны дугаар</label>
        <input id="contact_number" type="text" name="contact_number" class="form-control" value="{{$settings->contact_number}}">
      </div>
      <div class="form-group">
        <label for="contact_email">Мэйл хаяг</label>
        <input id="contact_email" type="text" name="contact_email" class="form-control" value="{{$settings->contact_email}}">
      </div>
      <div class="form-group">
        <label for="address">Хаяг</label>
        <input id="address" type="text" name="address" class="form-control" value="{{$settings->address}}">
      </div>

      <div class="form-group">
        <label for="about">Эрхэм зорилго</label>
        <input id="about" type="text" name="about" class="form-control" value="{{$settings->mission}}">
      </div>
      <div class="form-group">
        <label for="mission">Бидний тухай</label>
        <textarea id="mission" type="file" name="mission" cols="5" rows="5" class="form-control">{{$settings->about}}</textarea>
      </div>
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">
            Сайтын мэдээлийг шинэчилэх
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
