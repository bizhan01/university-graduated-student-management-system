@extends('layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>ثبت فرصت های شغلی</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">داشبورد</a></li>
			<li class="breadcrumb-item"><a href="">محصلین</a></li>
			<li class="breadcrumb-item active">فرصت ها</li>
		</ol>
		<div class="box box-block bg-white">
			<h5></h5>

		<div class="box box-block bg-white" style="margin-top: -35px">
			 <form method="POST" action="{{ route('addJob') }}" enctype="multipart/form-data">
			  {{ csrf_field() }}
			  @include('layouts.errors')
			  <div class="content-area py-1">
			    <div class="container-fluid">
			      <div class="box box-block bg-white">
			        <h5>فورم افزودن فرصت های شغلی:</h5>
			        <div class="form-material material-primary">
			          <div class="form-group row">
			            <label for="inputEmail3" class="col-sm-2 col-form-label">عنوان وظیفه</label>
			            <div class="col-sm-10">
			              <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="عنوان وظیفه" required>
			            </div>
			          </div>
			        </div>
			        <div class="form-material material-info">
			          <div class="form-group row">
			            <label for="inputEmail3" class="col-sm-2 col-form-label">محل وظیفه</label>
			            <div class="col-sm-10">
										<select name="branch" class="form-control" id="inputEmail3" required style="padding:0px">
												<option value="">---------</option>
												<option>مرکز</option>
												<option>برچی</option>
												<option>ماستری</option>
												<option>تحقیقات</option>
										</select>
			            </div>
			          </div>
			        </div>
							<div class="form-material material-primary">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">زمان کاری</label>
									<div class="col-sm-10">
										<select name="shift" class="form-control" id="inputEmail3" required style="padding:0px">
												<option value="">---------</option>
												<option>فول تایم</option>
												<option>پارت تایم</option>
												<option>شبانه</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-material material-info">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">جنسیت</label>
									<div class="col-sm-10">
										<select name="gender" class="form-control" id="inputEmail3" required style="padding:0px">
												<option value="">---------</option>
												<option>آقا</option>
												<option>خانم</option>
												<option>آقا و خانم</option>
										</select>
									</div>
								</div>
							</div>
			        <div class="form-material material-success">
			          <div class="form-group row">
			            <label for="inputEmail3" class="col-sm-2 col-form-label">تحصیلات</label>
			            <div class="col-sm-10">
										<select name="field" class="form-control" id="inputEmail3" required style="padding:0px">
			                  <option value="">-------------</option>
			                  <option>دکتر</option>
			                  <option>ماستر</option>
			                  <option>لیسانس</option>
			                  <option>سایر</option>
			              </select>
			            </div>
			          </div>
			        </div>
			        <div class="form-material material-warning">
			          <div class="form-group row">
			            <label for="inputEmail3" class="col-sm-2 col-form-label">تجربه کاری</label>
			            <div class="col-sm-10">
			              <input type="number" min="1"  name="experience" class="form-control" id="inputEmail3" placeholder="حداقل سال لازم را مشخص کنید" required>
			            </div>
			          </div>
			        </div>
							<div class="form-material material-danger">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">آخرین مهلت درخواست</label>
									<div class="col-sm-10">
										<input type="date"   name="deadLine" class="form-control" id="inputEmail3"  required>
									</div>
								</div>
							</div>
			        <div class="form-material material-danger">
			          <div class="form-group row">
			            <label for="inputEmail3" class="col-sm-2 col-form-label">توضیحات  بیشتر</label>
			            <div class="col-sm-10">
			              <textarea name="description" rows="8" cols="40" class="form-control"></textarea>
			            </div>
			          </div>
			        </div>
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
				@foreach($jobs as $job)
         <div class="box box-block bg-white">
           <div class="box bg-white post post-1">
             <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                <tbody><tr>
                    <td>
											<!-- Operations -->
											<div class="nav-item dropdown" dir="ltr" style="margin-left: 10px; margin-bottom: -25px">
												<a class="nav-link p-0" href="#" data-toggle="dropdown" aria-expanded="false">
													<div class="avatar box-32">
														<span class="fa fa-ellipsis-v"></span>
													</div>
												</a>
												<div class="dropdown-menu dropdown-menu-right animated flipInY">
													<a class="dropdown-item" href="editeJob/{{ $job->id }}" style="color: green">
														بروزرسانی
														<i class="ti-pencil mr-0-5"></i>
													</a>
													<a class="dropdown-item" href="deleteJob/{{ $job->id }}" style="color: red" onclick='return confirm("آیا مطمین استید حذف شود؟")'>
														حذف
														<i class="ti-trash mr-0-5"></i>
													</a>
												</div>
											</div>
										<!-- Operations -->
                        <h1 style="color: #24222f; font-size: 20px; font-weight: bold">{{$job->title}}</h1>
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; border: 1px solid #eee;">
                            <tr style="background-color: #a9c83e;">
                                <td style=" padding: 8px 12px;">
                                    <span style="font-weight: bold; text-transform: uppercase;">عنوان وظیفه</span>
                                </td>
                                <td style="width: 80%; text-align: right; padding: 8px 12px;">
                                    <span style="font-weight: bold; white-space: nowrap;">{{$job->title}}</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right; padding: 8px 12px;">
                                    <a href="#">محل وظیفه</a>
                                </td>
                                <td style="width: 20%; text-align:  right; padding: 8px 12px;">
                                    {{$job->branch}}
                                </td>
                            </tr>
                            <tr style="background-color: #eee;">
                                <td style="text-align: right; padding: 8px 12px;">
                                    <a href="#">تایم کاری</a>
                                </td>
                                <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                    {{$job->shift}}
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right; padding: 8px 12px;">
                                    <a href="#">جنسیت</a>
                                </td>
                                <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                    {{$job->gender}}
                                </td>
                            </tr>
                            <tr style="background-color: #eee;">
                                <td style="text-align: right; padding: 8px 12px;">
                                    <a href="#">بخش/رشته </a>
                                </td>
                                <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                    {{$job->field}}
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right; padding: 8px 12px;">
                                   <a href="#"> تجربه کاری </a>
                                </td>
                                <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                    {{$job->experience}}
                                </td>
                            </tr>

														<tr style="background-color: #eee;">
                                <td style="text-align: right; padding: 8px 12px;">
                                    <a href="#">تاریخ اعلان</a>
                                </td>
                                <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                    {{$job->created_at}}
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right; padding: 8px 12px;">
                                   <a href="#">اخرین مهلت درخواست</a>
                                </td>
                                <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                    {{$job->deadLine}}
                                </td>
                            </tr>

                            <tr style="background-color: #eee;">
                                <td style="text-align: right; padding: 8px 12px;">
                                    <a href="#">توضیحات بیشتر... </a>
                                </td>
                                <td style="width: 20%; text-align: right; padding: 8px 12px;">

                                </td>
                            </tr>
                        </table>
                        <br>
                        <p>{{$job->description}}</p>
                    </td>
                </tr>
                </tbody>
            </table>
           </div>
         </div>
         @endforeach
			</div>
		</div>
</div>
@endsection
