@extends('layouts.app')

@section('content')
<section class="page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
	          <ol class="breadcrumb">
	          	<li><a href="{{route('app')}}">Нүүр хуудас</a></li>
	            <li class="active">Холбоо барих</li>
	          </ol>
						<h1 class="page-title">Холбоо барих</h1>
						<p class="page-subtitle">Бид таныг сонсож байна</p>
						<div class="line thin"></div>
						<div class="page-description">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<h3>Холбоо барих</h3>
									<p>
										Монголчууддаа зориулан энэхүү сайтыг нээв.
									</p>
									<p>
										Утас: <span class="bold"> {{$setting->contact_number}}</span> <br>
										И-мэйл: <span class="bold"> {{$setting->contact_email}}</span>
										<br>
										<br>
										{{$setting->address}}
									</p>
								</div>
								<div class="col-md-6 col-sm-6">
									<form class="row contact" id="contact-form">
										<div class="col-md-6">
											<div class="form-group">
												<label>Нэр <span class="required"></span></label>
												<input type="text" class="form-control" name="name" required="">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>И-мэйл <span class="required"></span></label>
												<input type="text" class="form-control" name="email" required="">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Гарчиг</label>
												<input type="text" class="form-control" name="subject">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Таны мессеж <span class="required"></span></label>
												<textarea class="form-control" name="message" required=""></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<button class="btn btn-primary">Илгээх</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    <section class="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.160185918374!2d140.0976811005663!3d35.623777330110656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602283628c7058ed%3A0xf4fb0feef36292f2!2z44CSMjYzLTAwMjMgQ2hpYmEta2VuLCBDaGliYS1zaGksIEluYWdlLWt1LCBNaWRvcmljaMWNLCAxIENob21l4oiSMTniiJIxMSwg77yv77yz77ym44OT44Or!5e0!3m2!1sen!2sjp!4v1516721106102" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
<!-- {!! Form::open(['url' => 'contact/submit']) !!}
  <div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name','',['class' => 'form-control', 'placeholder'=>'Enter your name'])}}
  </div>
  <div class="form-group">
    {{Form::label('email','E-mail Address')}}
    {{Form::text('email','',['class' => 'form-control', 'placeholder'=>'Enter your e-mail address'])}}
  </div>
  <div class="form-group">
    {{Form::label('message','Message')}}
    {{Form::textarea('email','',['class' => 'form-control', 'placeholder'=>'Enter message'])}}
  </div>
  <div class="">
    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
  </div>
{!! Form::close() !!} -->
@endsection
