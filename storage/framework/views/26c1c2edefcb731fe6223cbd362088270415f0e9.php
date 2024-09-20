<?php $__env->startSection('content'); ?>

<style type="text/css">
		body
		{
				font-family: Arial;
				font-size: 10pt;
		}
		.error
		{
				color: Red;
		}
</style>

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>ثبت محصل جدید</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">داشبورد</a></li>
			<li class="breadcrumb-item"><a href="">محصلین</a></li>
			<li class="breadcrumb-item active">ثبت محصل جدید</li>
		</ol>
		<div class="box box-block bg-white">
			<h5>فورم ثبت نام محصلین:</h5>

			<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<form method="post" action="<?php echo e(route('saveStudent')); ?>" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<div class="row">


					<div class="col-md-3">
						<div class="form-group">
							<label>نام<span style="color: red">*</span></label>
							<input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus required placeholder="اسم کامل کاربر">
							<?php if($errors->has('name')): ?>
									<span class="invalid-feedback" role="alert">
											<strong><?php echo e($errors->first('name')); ?></strong>
									</span>
							<?php endif; ?>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label>نام خانوادگی<span style="color: red">*</span></label>
							<input type="text" class="form-control" name="lastName" placeholder="نام خانوادگی" required>
							<span class="font-90 text-muted"></span>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label>جنسیت<span style="color: red">*</span></label>
							<select class="form-control" name="gender" required>
								<option value=""></option>
								<option>آقا</option>
								<option>خانم</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
					<div class="form-group">
						<label>تاریخ تولد<span style="color: red">*</span></label>
						 <input type="text" name="dob" value="" class="form-control" required id="txtDate" onblur="ValidateDOB()" placeholder="روز/ماه/سال">
						 <span class="error" id="lblError"></span>
					</div>
				</div>
			</div>

		<div class="row">
		  	<div class="col-md-3">
						<div class="form-group">
							<label>تاریخ ورود<span style="color: red">*</span></label>
							 <input type="date" name="entery_year" value="" class="form-control" id="start" required>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label>تاریخ فراغت<span style="color: red">*</span></label>
							 <input type="date" name="graduate_year" value="" class="form-control" id="end" required>
							 <div style="color: red" id="message"></div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label>رشته/گرایش<span style="color: red">*</span></label>
							<select class="form-control" name="field" required>
								<option value=""></option>
								<option value="سافت ویر">انجنیری نرم افزار</option>
								<option value="شبکه">تکنالوژی ملوماتی</option>
							</select>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label>تلفن <span style="color: red">*</span></label>
							<input type="text" placeholder="(0xx) xxx-xxxx" data-mask="(099) 999-9999" class="form-control" dir="ltr" name="phone" required>
							<span class="font-90 text-muted pull-left" dir="ltr" style="text-align: left;"></span>
						</div>
					</div>
			</div>

			<div class="row">
			  	<div class="col-md-3">
							<div class="form-group">
								<label>آدرس فعلی<span style="color: red">*</span></label>
								 <input type="text" name="address" value="" class="form-control" required>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>ایمیل آدرس<span style="color: red">*</span></label>
								<input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required required placeholder="someone@domain.com">
								<?php if($errors->has('email')): ?>
										<span class="invalid-feedback" role="alert">
												<strong><?php echo e($errors->first('email')); ?></strong>
										</span>
								<?php endif; ?>
							</div>
						</div>


						<div class="col-md-3">
							<div class="form-group">
								<label  for="University Name" style="color:black">گذرواژه <span style="color: red">*</span></label>
								<input id="myInput" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required placeholder="********** زبان ورودی تان باید انگلیسی باشد" >
								<?php if($errors->has('password')): ?>
										<span class="invalid-feedback" role="alert">
												<strong><?php echo e($errors->first('password')); ?></strong>
										</span>
								<?php endif; ?>
							</div>
							<input type="checkbox" onclick="myFunction()"> نمایش گذرواژه
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label  for="Field of Study" style="color:black">تکرار گذرواژه <span style="color: red">*</span></label>
								<input id="myInput1" type="password" class="form-control"  name="password_confirmation"  required required placeholder="**********">
							</div>
						</div>
							<input type="checkbox" onclick="myFunction1()"> نمایش گذرواژه
				</div>

				<input type="hidden" name="isAdmin" value="1">
				<br>
				<div class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-outline-success mb-0-25 waves-effect waves-light">
							<i class="ti-save"></i>
							<span>ذخیره</span>
						</button>
						<button type="reset" class="btn btn-outline-danger mb-0-25 waves-effect waves-light">
							<i class="ti-loop"></i>
							<span>لغو</span>
						</button>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>



<script type="text/javascript">
		function ValidateDOB() {
				var lblError = document.getElementById("lblError");

				//Get the date from the TextBox.
				var dateString = document.getElementById("txtDate").value;
				var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;

				//Check whether valid dd/MM/yyyy Date Format.
				if (regex.test(dateString)) {
						var parts = dateString.split("/");
						var dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
						var dtCurrent = new Date();
						lblError.innerHTML = "باید بزرگتر از 18 سال باشد"
						if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
								return false;
						}

						if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {

								//CD: 11/06/2018 and DB: 15/07/2000. Will turned 18 on 15/07/2018.
								if (dtCurrent.getMonth() < dtDOB.getMonth()) {
										return false;
								}
								if (dtCurrent.getMonth() == dtDOB.getMonth()) {
										//CD: 11/06/2018 and DB: 15/06/2000. Will turned 18 on 15/06/2018.
										if (dtCurrent.getDate() < dtDOB.getDate()) {
												return false;
										}
								}
						}
						lblError.innerHTML = "";
						return true;
				} else {
						lblError.innerHTML = "به فارمت روز/ماه/سال بنوسید."
						return false;
				}
		}
</script>




<script type="text/javascript">
  let startInput = document.getElementById('start');
  let endInput = document.getElementById('end');
  let messageDiv = document.getElementById('message');
  let submitButton = document.getElementById('submit');

  let compare = () => {
    let startValue = (new Date(startInput.value)).getTime();
    let endValue = (new Date(endInput.value)).getTime();

    if (endValue < startValue) {
      messageDiv.innerHTML = 'تاریخ ورود باید قبل از تاریخ فراغت باشد.';
      submitButton.disabled = true;
    } else {
      messageDiv.innerHTML = '';
      submitButton.disabled = false;
    }
  };

  startInput.addEventListener('change', compare);
  endInput.addEventListener('change', compare);
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>