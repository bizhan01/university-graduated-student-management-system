@extends('layouts.master')
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
    <h4>پیام ها</h4>
    <ol class="breadcrumb no-bg mb-1">
      <li class="breadcrumb-item"><a href="#">فرصت های شغلی</a></li>
      <li class="breadcrumb-item"><a href="#">ثبت نظریه</a></li>
      <li class="breadcrumb-item active">پیام ها</li>
    </ol>
		<div class="box bg-white messenger">
			<div class="row no-gutter">

				<div class="col-xs-12">
					<div class="m-chat">
						<div class="m-header">
							<div class="media">
								<div class="media-body">
									<h6 class="media-heading mb-0"><?php echo $message[0]->name; ?></h6>
									<span class="font-90 text-muted"><?php echo $message[0]->subject; ?></span>
								</div>

							</div>
						</div>

						<div class="mc-item left clearfix">
							<div class="avatar box-48">
								<img class="b-a-radius-circle" src="../UploadedImages/<?php echo $message[0]->profileImage; ?>" alt="">
							</div>
							<div class="mc-content">
								<?php echo $message[0]->message; ?>
								<div class="font-90 text-xs-right text-muted">14:20</div>
							</div>
						</div>


					@if($message[0]->reply == null)

					@else
					<div class="mc-item right clearfix">
						<div class="avatar box-48">
							<img class="b-a-radius-circle" src="../UploadedImages/<?php echo $message[0]->profileImage2; ?>" alt="">
						</div>
						<div class="mc-content">
							<span style="color: blue"><?php echo $message[0]->name2; ?></span><br>
							<?php echo $message[0]->reply; ?>
						</div>
					</div>
					@endif


					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
