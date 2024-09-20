@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>درخواست های ارسال شده</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">داشبورد</a></li>
			<li class="breadcrumb-item"><a href="">محصلین</a></li>
			<li class="breadcrumb-item active">لیست محصلین</li>
		</ol>

		@include('layouts.errors')

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-3">
					<thead>
						<tr>
							<td>آقا/خانم</td>
							<th>تلفن</th>
							<th>تاریخ فراغت</th>
							<td>عنوان وظیفه</td>
							<td>محل وظیفه</td>
							<td>وضعیت درخواست</td>
							<td>لغو درخواست</td>
						</tr>
					</thead>
					<tbody>
						@foreach($applications as $application)
							<tr>
								<td>{{$application->gender}} {{$application->name}} {{$application->lastName}}</td>
								<td dir="ltr" style="text-align: center">{{$application->phone}}</td>
								<td>{{$application->graduate_year}}</td>
								<td>{{$application->title}}</td>
								<td>{{$application->branch}}</td>
								<td>
									@if($application->app_status == 1)
									<li class="fa fa-check" style="color: green"> تایید شده </li>
									@elseif($application->app_status == 2)
									<li class="fa fa-times-circle" style="color: red"> رد درخواست</li>
									@else
									<li class="fa fa-hourglass-half" style="color: orange"> منتظر بررسی</li>
									@endif
								</td>
                <td>
                  <a href="{{url('deleteApplication').'/' .$application->id}}" title="لغو درخواست" onclick='return confirm("آیا مطمین استید درخواست شما لغو شود؟")'>
                    <i class="fa fa-trash" style="color: red"></i>
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
