<?php $__env->startSection('content'); ?>
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">

      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>بروزرسانی</h3></center>
        <form action = "/updateUser/<?php echo $user[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<div class="row">

						<div class="col-md-3">
							<div class="form-group">
								<label>جنسیت<span style="color: red">*</span></label>
								<select class="form-control" name="gender" required>
									<option><?php echo $user[0]->gender; ?></option>
									<option>آقای</option>
									<option>خانم</option>
								</select>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>نام<span style="color: red">*</span></label>
								<input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo $user[0]->name; ?>" required autofocus required placeholder="اسم کامل کاربر">
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>نام خانوادگی<span style="color: red">*</span></label>
								<input type="text" class="form-control" name="lastName" value="<?php echo $user[0]->lastName; ?>" placeholder="نام خانوادگی" required>
								<span class="font-90 text-muted"></span>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>تاریخ تولد<span style="color: red">*</span></label>
								 <input type="date" name="dob" value="<?php echo $user[0]->dob; ?>" class="form-control" required>
							</div>
						</div>
				</div>

			<div class="row">
					<div class="col-md-3">
							<div class="form-group">
								<label>تاریخ ورود<span style="color: red">*</span></label>
								 <input type="date" name="entery_year" value="<?php echo $user[0]->entery_year; ?>" class="form-control" required>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>تاریخ فراغت<span style="color: red">*</span></label>
								 <input type="date" name="graduate_year" value="<?php echo $user[0]->graduate_year; ?>" class="form-control" required>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>رشته/گرایش<span style="color: red">*</span></label>
								<select class="form-control" name="field" required style="padding:0px">
									<option><?php echo $user[0]->field; ?></option>
									<option>انجنیری نرم افزار</option>
									<option>تکنالوژی معلوماتی</option>
								</select>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>تلفن <span style="color: red">*</span></label>
								<input type="text" placeholder="(0xx) xxx-xxxx" data-mask="(099) 999-9999" class="form-control" dir="ltr" name="phone" value="<?php echo $user[0]->phone; ?>" required>
								<span class="font-90 text-muted pull-left" dir="ltr" style="text-align: left;"></span>
							</div>
						</div>
				</div>

				<div class="row">
						<div class="col-md-3">
								<div class="form-group">
									<label>آدرس فعلی<span style="color: red">*</span></label>
									 <input type="text" name="address" value="<?php echo $user[0]->address; ?>" class="form-control" required>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>ایمیل آدرس<span style="color: red">*</span></label>
									<input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo $user[0]->email; ?>" required required placeholder="someone@domain.com">
								</div>
							</div>

								<input type="hidden" name="password" value="<?php echo $user[0]->password; ?>">
								<input type="hidden" name="isAdmin" value="<?php echo $user[0]->isAdmin; ?>">
								<input type="hidden" name="status" value="<?php echo $user[0]->status; ?>">
								<input type="hidden" name="profileImage" value="<?php echo $user[0]->profileImage; ?>">

							<div class="col-md-3">
								<div class="form-group">
									<label for="">اعمال عملیات</label><br>
									<input type="submit" name="submit" value="ذخیره" class="btn btn-success">
		 						 <input type="reset"  value="لغو" class="btn btn-warning ">
								</div>
							</div>
					</div>

			 <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </form>
      </nav>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>