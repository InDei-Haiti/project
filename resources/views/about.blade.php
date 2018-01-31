@extends('layouts.app')

@section('content')
<section class="page">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
	          <ol class="breadcrumb">
	          	<li><a href="{{route('app')}}">Нүүр хуудас</a></li>
	            <li class="active">Бидний тухай</li>
	          </ol>
						<h1 class="page-title">Бидний тухай</h1>
						<p class="page-subtitle">Бид танд хэн гэдгээ хэлье</p>
						<div class="line thin"></div>
						<div class="page-description">
							<h4>Эрхэм зорилго</h4>
							<p>
								{{$setting->mission}}
							</p>
							<h4>Бидний тухай</h4>
							<p>
								{{$setting->about}}
							</p>
							<div class="question">
								Асуулт байна уу? <a href="{{route('contact')}}" class="btn btn-primary">Холбоо барих</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    @endsection
