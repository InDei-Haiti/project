@extends('admin.index')

@section('admin_content')
            <div class="jumbotron text-center">
              <h2>Тавтай морилно уу. Админаа</h2>
            </div>
						<div class="col-lg-3">
							<div class="panel panel-info">
								<div class="panel-heading text-center">
									Нийт мэдээ
								</div>
								<div class="panel-body text-center">
									{{$post_count}}
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="panel panel-success">
								<div class="panel-heading text-center">
									Хэрэглэгч
								</div>
								<div class="panel-body text-center">
									{{$user_count}}
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="panel panel-info">
								<div class="panel-heading text-center">
									Ангилал
								</div>
								<div class="panel-body text-center">
									{{$category_count}}
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="panel panel-danger">
								<div class="panel-heading text-center">
									Хогийн сав
								</div>
								<div class="panel-body text-center">
									{{$trashed_count}}
								</div>
							</div>
						</div>
@endsection
