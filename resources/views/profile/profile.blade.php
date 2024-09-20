@extends('layouts.master')

@section('content')
<div class="content-area pb-1">
	<div class="profile-header mb-1">
		<div class="profile-header-cover img-cover" style="background-image: url(img/photos-1/4.jpg);"></div>
		<div class="profile-header-counters clearfix">
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-md-3">
				<div class="card profile-card">
					<div class="profile-avatar">
						<img src="{{ asset('UploadedImages').'/'.Auth::user()->profileImage }}" alt="">
					</div>
					<div class="card-block">
						<h4 class="mb-0-25">{{ Auth::user()->gender }} {{ Auth::user()->name }} {{ Auth::user()->lastName }}</h4>
					</div>
					<ul class="list-group">
						<li class="list-group-item"><span style="color: #7f9d18"  class="fa fa-heartbeat"> تاریخ تولد:</span> <b>{{Auth::user()->dob}}</b></li>
						<li class="list-group-item"><span style="color: #7f9d18" class="fa fa-bank"> تاریخ ورود:</span> <b>{{Auth::user()->entery_year}}</b></li>
						<li class="list-group-item"><span style="color: #7f9d18" class="fa fa-graduation-cap"> تاریخ فراغت:</span> <b>{{Auth::user()->graduate_year}}</b></li>
						<li class="list-group-item"><span style="color: #7f9d18" class="fa fa-pagelines"> رشته/گرایسش:</span> <b>{{Auth::user()->field}}</b></li>
						<li class="list-group-item"><span style="color: #7f9d18" class="fa fa-phone"> تلفن:</span> <b>{{Auth::user()->phone}}</b></li>
						<li class="list-group-item"><span style="color: #7f9d18" class="fa fa-map-marker"> آدرس:</span> <b>{{Auth::user()->address}}</b></li>
						<li class="list-group-item"><span style="color: #7f9d18" class="fa fa-at"> ایمیل:</span> <b>{{Auth::user()->email}}</b></li>
					</ul>
				</div>


			</div>
			<div class="col-sm-8 col-md-9">
				<div>
  					@include('layouts.errors')
				</div>

				<div class="card mb-0">
					<ul class="nav nav-tabs nav-tabs-2 profile-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#stream" role="tab">بروزرسانی اطلاعات</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#photos" role="tab">تغیر عکس</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#change-password" role="tab">تغیر رمز عبور</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="stream" role="tabpanel">
							<form method="post" action="{{ route('updateNameUser') }}">
								@csrf
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="name">اسم</label>
										<input type="name" name="name" class="form-control" value="{{Auth::user()->name}}">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>&nbsp;</label>
										<input type="submit" class="btn btn-success form-control" value="ذخیره">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
							</form>
						</div>
						<div class="tab-pane card-block" id="photos" role="tabpanel">
							<div class="gallery-2 row">
								<form method="post" action="{{ route('updateUserImage') }}" enctype="multipart/form-data">
									@csrf
									<div class="col-md-3 col-sm-3"></div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="g-item">
											<div>
		                    		<input type="file" name="image" id="input-file-now" class="dropify" />
		                    		<input type="submit" class="btn btn-success form-control" value="ذخیره">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="tab-pane card-block" id="change-password" role="tabpanel">
							<form method="post" action="{{ route('updateUserPass') }}">
								@csrf
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>پسورد قدیمی</label>
										<input type="password" name="current-password" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>پسورد جدید</label>
										<input type="password" name="new-password" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>تکرار پسورد جدید</label>
										<input type="password" name="confirm_password" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>&nbsp;</label>
										<input type="submit" class="btn btn-success form-control" value="ذخیره">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
