@extends('layouts.master')
@section('content')
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">

      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>بروزرسانی</h3></center>
        <form action = "/updateOpinion/<?php echo $opinion[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

          <input type="hidden" name="user_id" value="<?php echo $opinion[0]->user_id; ?>">

          <div class="row form-group">
					 <div class="col-md-12">
						 <label  style="color: black">بخش مورد نظر</label><br>
               <select name="field" class="form-control" required>
                    <option><?php echo $opinion[0]->field; ?></option>
                    <option>ریاست</option>
                    <option>کریگولم</option>
                    <option>محیط درسی</option>
                    <option>کارمندان اداری</option>
                    <option>فیس و مالی</option>
                    <option>سایر</option>
                </select>
				  	 </div>
				  </div>

          <div class="row form-group">
					   <div class="col-md-12">
               <label  class="col-sm-2 col-form-label">انتقادات</label>
               <textarea name="objection" rows="8" cols="40" class="form-control" placeholder="لطفا انتقادات خویش را جهت اطلاح گزینه انتخاب شده باما شریک سازید...."><?php echo $opinion[0]->objection; ?></textarea>
				  	 </div>
				   </div>


           <div class="row form-group">
 					   <div class="col-md-12">
               <label  class="col-sm-2 col-form-label">پشنهادات</label>
               <textarea name="suggestion" rows="8" cols="40" class="form-control" placeholder="لطفا پشنهادات خویش را جهت بهتر شدن گزینه انتخاب شده باما شریک سازید...."><?php echo $opinion[0]->suggestion; ?></textarea>
 				  	 </div>
 				   </div>


         <div class="row form-group">
          <div class="col-md-12">
           <label for="inputEmail3" class="col-sm-2 col-form-label">میزان رضایت شما</label>
           <select name="satisfaction" class="form-control" id="inputEmail3" required>
               <option><?php echo $opinion[0]->satisfaction;?></option>
               <option value="0">0%</option>
               <option value="25">25%</option>
               <option value="50">50%</option>
               <option value="75">75%</option>
               <option value="100">100%</option>
           </select>
         </div>
       </div>

        <input type="hidden" name="status" value="<?php echo $opinion[0]->status; ?>">

				 <div class="row form-group">
					 <div class="col-md-6">
						 <input type="submit" name="submit" value="ذخیره" class="btn btn-success ">
						 <input type="reset"  value="لغو" class="btn btn-warning ">
					 </div>
				</div>
			 @include('layouts.errors')
        </form>
      </nav>
    </div>
  </div>
@endsection
