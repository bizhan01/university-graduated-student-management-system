@extends('layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>ثبت نظریه</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">داشبورد</a></li>
			<li class="breadcrumb-item"><a href="">محصلین</a></li>
			<li class="breadcrumb-item active">فرصت ها</li>
		</ol>
		<div class="box box-block bg-white">
			<h5></h5>

		<div class="box box-block bg-white" style="margin-top: -35px">
			 <form method="POST" action="{{ route('addOpinion') }}" enctype="multipart/form-data">
			  {{ csrf_field() }}
			  @include('layouts.errors')
			  <div class="content-area py-1">
			    <div class="container-fluid">
			      <div class="box box-block bg-white">
			        <h5>فورم ثبت انتقادات و پشنهادات:</h5>

			        <div class="form-material material-success">
			          <div class="form-group row">
			            <label for="inputEmail3" class="col-sm-2 col-form-label">بخش</label>
			            <div class="col-sm-10">
										<select name="field" class="form-control" id="inputEmail3" required style="padding:0px">
			                  <option value="">لطفا در مورد بخش که میخواهید نظریه ثبت کنید را انختاب کنید.</option>
			                  <option>ریاست</option>
			                  <option>برنامه درسی</option>
			                  <option>محیط درسی</option>
			                  <option>کارمندان اداری</option>
			                  <option>فیس و مالی</option>
			                  <option>سایر</option>
			              </select>
			            </div>
			          </div>
			        </div>

			        <div class="form-material material-primary">
			          <div class="form-group row">
			            <label for="inputEmail3" class="col-sm-2 col-form-label">انتقادات</label>
			            <div class="col-sm-10">
			              <textarea name="objection" rows="8" cols="40" class="form-control" placeholder="لطفا انتقادات خویش را جهت اصلاح گزینه انتخاب شده با ما شریک سازید...."></textarea>
			            </div>
			          </div>
			        </div>

              <div class="form-material material-info">
			          <div class="form-group row">
			            <label for="inputEmail3" class="col-sm-2 col-form-label">پشنهادات</label>
			            <div class="col-sm-10">
			              <textarea name="suggestion" rows="8" cols="40" class="form-control" placeholder="لطفا پشنهادات خویش را جهت بهتر شدن گزینه انتخاب شده باما شریک سازید...."></textarea>
			            </div>
			          </div>
			        </div>

              <div class="form-material material-success">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">میزان رضایت شما</label>
                  <div class="col-sm-10">
                    <select name="satisfaction" class="form-control" id="inputEmail3" required>
                        <option value="">-------------</option>
                        <option value="0">0%</option>
                        <option value="25">25%</option>
                        <option value="50">50%</option>
                        <option value="75">75%</option>
                        <option value="100">100%</option>
                    </select>
                  </div>
                </div>
              </div>
              <input type="hidden" name="status" value="1">
			        <div class="row form-group">
			          <div class="col-md-6">
			            <input type="submit" name="submit" value="ذخیره" class="btn btn-rounded" style="background-color: #a9c83e;">
			            <input type="reset" name="reset" value="لغو" class="btn btn-rounded bg-warning ">
			          </div>
			       </div>
			      </div>
			    </div>
			  </div>
			</form>
		</div>
		</div>
	</div>
</div>



<div class="content-area py-1">
	<div class="container-fluid">

			<div class="overflow-x-auto">
					@foreach($opinions as $opinion)
						<div class="box box-block bg-white">
						<div class="box bg-white post post-1">
							<div class="p-content">
									<span class="avatar box-32">
									 <img src="UploadedImages/{{$opinion->profileImage}}" style="width: 40px; height: 40px;">
									</span>&nbsp;&nbsp;&nbsp;
									{{$opinion->name}}

									<!-- Operations -->
									<div class="nav-item dropdown" dir="ltr" style="margin-top: -40px">
										<a class="nav-link p-0" href="#" data-toggle="dropdown" aria-expanded="false">
											<div class="avatar box-32">
												<span class="fa fa-ellipsis-v"></span>
											</div>
										</a>
										<div class="dropdown-menu dropdown-menu-right animated flipInY">
											<a class="dropdown-item" href="editOpinion/{{ $opinion->id }}" style="color: green">
												بروزرسانی
												<i class="ti-pencil mr-0-5"></i>
											</a>
											<a class="dropdown-item" href="deleteOpinion/{{ $opinion->id }}" style="color: red" onclick='return confirm("آیا مطمین استید حذف شود؟")'>
												حذف
												<i class="ti-trash mr-0-5"></i>
											</a>
										</div>
									</div>
								<!-- Operations -->
								<br></br>
								<h5><a class="text-black" href="#"><span style="color: green">موضوع:</span> {{$opinion->field}}</a></h5>
								<p class="mb-0"> <span style="color: green; font-size: 15px"><b>انتقادات و نقد:</b></span> {{$opinion->objection}}
									<br></br>
								<p class="mb-0"> <span style="color: green; font-size: 15px"><b>پشنهدات و اصلاحات:</b></span> {{$opinion->suggestion}}
							</div>

							@if($opinion->satisfaction == 0)
								<p class="mb-0-5">میزان رضایت<span class="float-xs-right">0%</span></p>
								<progress class="progress progress-danger progress-md" value="1" max="100"></progress>
							@elseif($opinion->satisfaction == 25)
								<p class="mb-0-5">میزان رضایت<span class="float-xs-right">25%</span></p>
								<progress class="progress progress-danger progress-md" value="25" max="100"></progress>
							@elseif($opinion->satisfaction == 50)
								<p class="mb-0-5">میزان رضایت<span class="float-xs-right">50%</span></p>
								<progress class="progress progress-warning progress-md" value="50" max="100"></progress>
							@elseif($opinion->satisfaction == 75)
								<p class="mb-0-5">میزان رضایت<span class="float-xs-right">75%</span></p>
								<progress class="progress progress-info progress-md" value="75" max="100"></progress>
							@elseif($opinion->satisfaction == 100)
								<p class="mb-0-5">میزان رضایت<span class="float-xs-right">100%</span></p>
								<progress class="progress progress-success progress-md" value="100" max="100"></progress>
							@else
							@endif


						</div>
					</div>
					@endforeach
			</div>

	</div>
</div>
@endsection
