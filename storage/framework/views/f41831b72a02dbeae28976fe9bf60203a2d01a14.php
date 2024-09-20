<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/pages-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 11:12:31 GMT -->
<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Title -->
		<title>تغییر پاسورد</title>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/bootstrap4-rtl/css/bootstrap.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/themify-icons/themify-icons.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('../vendors/font-awesome/css/font-awesome.min.css')); ?>">

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('css/core.css')); ?>">

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="img-cover" style="background-image: url(<?php echo e(asset('img/photos-1/2.jpg')); ?>);">

		<div class="container-fluid">
			<div class="sign-form">
				<div class="row">
					<div class="col-md-4 offset-md-4 px-3">
						<div class="box b-a-0">
							<div class="p-2 text-xs-center">
								<h5>بازیابی گذرواژه</h5>
								<p>سیستم الکترونیک ثبت پروفایل فارغ التحصیلان دانشکده کمپیوتر ساینس کاتب </p>
							</div>
              <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form class="form-material mb-1" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="ایمیل آدرس" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        	<div class="px-2 form-group mb-0">
                            <button type="submit" class="btn  btn-block text-uppercase" style="background-color: #7f9d18">
                                <?php echo e(__('فرستادن لینک بازیابی گذرواژه')); ?>

                            </button>
                         </div>
                     </form>
                    <br></br>
                  <br></br>
                </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Vendor JS -->
		<script type="text/javascript" src="<?php echo e(asset('../vendors/jquery/jquery-1.12.3.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/tether/js/tether.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('../vendors/bootstrap4-rtl/js/bootstrap.min.js')); ?>"></script>
	</body>

<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/pages-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 11:12:31 GMT -->
</html>
