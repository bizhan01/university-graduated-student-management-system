@extends('layouts.master')
@section('content')
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">
      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>تایید و یا رد درخواست</h3></center>
        <form action = "/updateApplication/<?php echo $application[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

           <input type="hidden" name="user_id" value="<?php echo $application[0]->user_id; ?>">
           <input type="hidden" name="job_id" value="<?php echo $application[0]->job_id; ?>">
           <div class="col-lg-4"></div>
          <div class="row form-group">
           <div class="col-md-4">
            <select name="app_status" class="form-control" required>
                <option value="">----------------------</option>
                <option value="1">تایید درخواست</option>
                <option value="2">رد درخواست</option>
            </select>
           </div>
				 </div>
         <div class="col-lg-5"></div>
				 <div class="row form-group">
					 <div class="col-md-2">
						 <input type="submit" name="submit" value="بروزرسانی" class="btn btn-success form-control">
					 </div>
				</div>
			 @include('layouts.errors')
        </form>
      </nav>
    </div>
  </div>
@endsection
