<?php $__env->startSection('content'); ?>
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">
      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>بروزرسانی</h3></center>
        <form action = "/updateJob/<?php echo $job[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <div class="row form-group">
					 <div class="col-md-4">
						 <label  style="color: black">عنوان وظیفه</label><br>
						   <input type="text" name="title" value="<?php echo $job[0]->title; ?>" class="form-control b-a" placeholder="عنوان خدمات" required>
					 </div>
           <div class="col-md-4">
						 <label  style="color: black">محل وظیفه</label><br>
               <select name="branch" class="form-control" id="inputEmail3" required>
                   <option><?php echo $job[0]->branch; ?></option>
                   <option>مرکز</option>
                   <option>برچی</option>
                   <option>ماستری</option>
                   <option>تحقیقات</option>
               </select>
					 </div>
           <div class="col-md-4">
						 <label  style="color: black">زمان کاری</label><br>
               <select name="shift" class="form-control" required>
                   <option><?php echo $job[0]->shift; ?></option>
                   <option>فول تایم</option>
                   <option>پارت تایم</option>
                   <option>شبانه</option>
               </select>
					 </div>
				 </div>
         <div class="row form-group">
          <div class="col-md-4">
            <label  style="color: black">جنسیت</label><br>
              <select name="gender" class="form-control"  required>
                  <option><?php echo $job[0]->gender; ?></option>
                  <option>آقا</option>
                  <option>خانم</option>
                  <option>آقا و خانم</option>
              </select>
          </div>
          <div class="col-md-4">
            <label  style="color: black">تحصیلات</label><br>
              <select name="field" class="form-control" required>
                  <option><?php echo $job[0]->field; ?></option>
                  <option>دکتر</option>
                  <option>ماستر</option>
                  <option>لیسانس</option>
                  <option>سایر</option>
              </select>
          </div>
          <div class="col-md-4">
            <label  style="color: black">تجربه کاری</label><br>
              <input type="number" name="experience" value="<?php echo $job[0]->experience; ?>" class="form-control b-a" placeholder="عنوان خدمات" required>
          </div>
        </div>
         <div class="row form-group">
         <div class="col-md-12">
           <label  style="color: black">جزئیات کاری</label><br>
           <textarea name="description" rows="5" class="col-md-12" placeholder="تفصیل..."><?php echo $job[0]->description; ?></textarea>
         </div>
       </div>
				 <div class="row form-group">
					 <div class="col-md-6">
						 <input type="submit" name="submit" value="ذخیره" class="btn btn-success ">
						 <input type="reset"  value="لغو" class="btn btn-warning ">
					 </div>
				</div>
			 <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </form>
      </nav>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>