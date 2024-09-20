@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>پیام ها</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="#">فرصت های شغلی</a></li>
			<li class="breadcrumb-item"><a href="#">ثبت نظریه</a></li>
			<li class="breadcrumb-item active">پیام ها</li>
		</ol>
		<div class="row">
			<div class="col-md-12">
				<div class="mb-1">
					<div class="clearfix">

						<div class="box box-block bg-white">
							 @include('layouts.errors')<br>
							<button type="button"  role="tab" id="heading-2" class="btn btn-success float-left mr-0-5 label-left waves-effect waves-light">
									<a class="text-black" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
									<span class="btn-label"><i class="ti-pencil"></i></span>
									جدید
									</a>
							</button>
								<a href="#"><button type="button" class="btn btn-outline-primary btn-icon float-left mr-0-5"><i class="ti-reload"></i></button></a>
							<div id="collapse-3" class="panel-collapse collapse mt-1" role="tabpanel" aria-labelledby="heading-2">
								<form method="POST" action="{{ route('sendMessage') }}" enctype="multipart/form-data">
								 {{ csrf_field() }}
								 <div class="content-area py-1">
									 <div class="container-fluid">
										 <div class="box box-block bg-white">
											 <h5>پیام جدید</h5>

											 <div class="form-material material-success">
												 <div class="form-group row">
													 <label for="inputEmail3" class="col-sm-2 col-form-label">موضوع</label>
													 <div class="col-sm-10">
														 <input type="text" name="subject" class="form-control" id="inputEmail3" placeholder="لطفا موضوع پیام تانرا در اینجا مشخص کنید." required>
													 </div>
												 </div>
											 </div>

											 <div class="form-material material-primary">
												 <div class="form-group row">
													 <label for="inputEmail3" class="col-sm-2 col-form-label">پیام</label>
													 <div class="col-sm-10">
														 <textarea name="message" rows="8" cols="40" class="form-control" placeholder="پیام شما..." required></textarea>
													 </div>
												 </div>
											 </div>

											 <input type="hidden" name="status" value="0">
											 <div class="row form-group">
												 <div class="col-md-6">
													 <button type="submit" class="btn btn-outline-success mb-0-25 waves-effect waves-light">
							 							<i class="fa fa-send"></i>
							 							<span>ارسال</span>
							 						</button>
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
				<div class="box bg-white">
					<div class="">
						<table class="table table-hover mail-items mb-0">
							<tbody>
								@foreach($messages as $message)
									<tr class="unread">
										<td class="mail-item-sender">
											<a class="mail-item-important" href="#">
												<i class="fa fa-bookmark fa-rotate-90"></i>
											</a>
											<a class="avatar box-32 mr-0-5" href="#">
												<img class="b-a-radius-circle" src="UploadedImages/{{$message->profileImage}}" alt="">
											</a>
											<a href="#">{{$message->name}}</a>
										</td>
										<td>
											<i class="fa fa-circle text-info mr-0-5"></i>
											<a href="#">{{$message->subject}}</a>
										</td>
										<td class="mail-item-time" colspan="3">
											{{$message->created_at}}
										</td>
										<td class="mail-item-attachment" >
											<a href="readMessage/{{ $message->id }}"><i class="fa fa-eye" style="color: green"></i></a>
										</td>
										<td class="mail-item-attachment" >
										<a href="deleteMessage/{{ $message->id }}"><i class="fa fa-trash" style="color: red" onclick='return confirm("آیا مطمین استید حذف شود؟")'></i></a>
										</td>
									</tr>
						   @endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
