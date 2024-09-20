@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>لیست محصلین</h4>
		<h6>محصلین  تکنالوژی معلوماتی</h6>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">داشبورد</a></li>
			<li class="breadcrumb-item"><a href="">محصلین</a></li>
			<li class="breadcrumb-item active">لیست محصلین</li>
		</ol>

		@include('layouts.errors')

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<td style="width: 50px !important; ">عکس</td>
							<th>آقا/خانم</th>
							<th>نام</th>
							<th>نام خانوادگی</th>
							<td>تاریخ تولد</td>
							<td>تاریخ ورود</td>
							<td>تاریخ فراغت</td>
							<td>رشته/گرایش</td>
							<td>تلفن</td>
							<td>آدرس فعلی</td>
							<td>ایمیل آدرس</td>
							<td>عملیات</td>
						</tr>
					</thead>
					<tbody>
						@foreach($students as $student)
							<tr>
								<td  style="width: 50px !important; padding: 2px;">
									<img src="{{ asset('UploadedImages/').'/'.$student->profileImage}}"  style="width: 100% !important; ">
								</td>
								<td>{{ $student->gender}}</td>
								<td>{{ $student->name}}</td>
								<td>{{ $student->lastName}}</td>
								<td>{{ $student->dob}}</td>
								<td>{{ $student->entery_year}}</td>
								<td>{{ $student->graduate_year}}</td>
								<td>{{ $student->field}}</td>
								<td>{{ $student->phone}}</td>
								<td>{{ $student->address}}</td>
								<td>{{ $student->email}}</td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="{{url('editUser').'/' .$student->id}}" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href = 'blockUser/{{ $student->id }}'> <i class="fa fa-ban text-warning"></i></a>
									&nbsp;&nbsp;&nbsp;
									<a href="{{url('deleteUser').'/' .$student->id}}" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
										<i class="ti ti-trash text-danger"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
