@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>پیام های دریافتی</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="#">فرصت های شغلی</a></li>
			<li class="breadcrumb-item"><a href="#">ثبت نظریه</a></li>
			<li class="breadcrumb-item active">پیام ها</li>
		</ol>
		<div class="row">
			<div class="col-md-12">
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
