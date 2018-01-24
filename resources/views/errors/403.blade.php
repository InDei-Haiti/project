@extends('layouts.app')

@section('content')
  <section class="not-found">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="code">
            403
          </div>
          <h1>Зөвшөөрөл олгогдоогүй байна</h1>
          <p class="lead">Уучлаарай. Танд энэ хуудсанд нэвтрэх эрх байхгүй байна.</p>
          <div class="search-form">
            <form>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Нийт мэдээллээс хайх">
                  <div class="input-group-btn">
                    <button class="btn btn-primary">Хайх</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="link">
              эсвэл <a href="/">Нүүр хуудас</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
