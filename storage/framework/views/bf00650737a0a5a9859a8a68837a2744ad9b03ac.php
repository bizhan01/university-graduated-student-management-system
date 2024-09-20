<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
	<div class="container-fluid">
    <div class="row row-md mb-2">
      <br>
      <div class="col-md-5">
        <div class="box box-block bg-white">
          <h5 class="mb-2">آمار کلی رضایت مندی محصلین</h5>
          <p class="mb-0-5">ریاست <span class="float-xs-right">25%</span></p>
          <progress class="progress progress-success progress-sm" value="25" max="100">100%</progress>
          <p class="mb-0-5">برنامه درسی<span class="float-xs-right">75%</span></p>
          <progress class="progress progress-danger progress-sm" value="75" max="100">100%</progress>
          <p class="mb-0-5">محیط درسی<span class="float-xs-right">40%</span></p>
          <progress class="progress progress-info progress-sm" value="40" max="100">100%</progress>
          <p class="mb-0-5">کارمندان اداری<span class="float-xs-right">18%</span></p>
          <progress class="progress progress-primary progress-sm" value="18" max="100">100%</progress>
          <p class="mb-0-5">فیس و مالی<span class="float-xs-right">90%</span></p>
          <progress class="progress progress-success progress-sm" value="90" max="100">100%</progress>
          <p class="mb-0-5">سایر موارید<span class="float-xs-right">63%</span></p>
          <progress class="progress progress-primary progress-sm mb-0" value="63" max="100">100%</progress>
        </div>
      </div>

      <div class="col-md-7">
        <div class="card">
          <div class="card-block b-b clearfix">
            <h5 class="float-xs-left">آخرین پشنهادات</h5>
            <div class="float-xs-right">
              <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-angle-down"></i></button>
              <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-reload"></i></button>
              <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-close"></i></button>
            </div>
          </div>
          <div class="items-list scroll-demo custom-scroll custom-scroll-dark" style="height: 270px;">

            <?php $__currentLoopData = $opinions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opinion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="il-item">
                <a class="text-black" href="#">
                  <div class="media">
                    <div class="media-left">
                      <div class="avatar box-48">
                        <img class="b-a-radius-circle" src="UploadedImages/<?php echo e($opinion->profileImage); ?>" alt="">
                        <i class="status bg-success bottom right"></i>
                      </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading"><?php echo e($opinion->name); ?></h6>
                      <span class="text-muted"><?php echo e($opinion->suggestion); ?></span>
                    </div>
                  </div>
                  <div class="il-icon"><i class="fa fa-angle-right"></i></div>
                </a>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="content-area py-1">
	<div class="container-fluid">

			<div class="overflow-x-auto">
					<?php $__currentLoopData = $opinions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opinion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="box box-block bg-white">
						<div class="box bg-white post post-1">
							<div class="p-content">
									<span class="avatar box-32">
									 <img src="UploadedImages/<?php echo e($opinion->profileImage); ?>" style="width: 40px; height: 40px;">
									</span>&nbsp;&nbsp;&nbsp;
									<?php echo e($opinion->name); ?>


									<!-- Operations -->
									<div class="nav-item dropdown" dir="ltr" style="margin-top: -40px">
										<a class="nav-link p-0" href="#" data-toggle="dropdown" aria-expanded="false">
											<div class="avatar box-32">
												<span class="fa fa-ellipsis-v"></span>
											</div>
										</a>
										<div class="dropdown-menu dropdown-menu-right animated flipInY">
											<a class="dropdown-item" href="editOpinion/<?php echo e($opinion->id); ?>" style="color: green">
												بروزرسانی
												<i class="ti-pencil mr-0-5"></i>
											</a>
											<a class="dropdown-item" href="deleteOpinion/<?php echo e($opinion->id); ?>" style="color: red" onclick='return confirm("آیا مطمین استید حذف شود؟")'>
												حذف
												<i class="ti-trash mr-0-5"></i>
											</a>
										</div>
									</div>
								<!-- Operations -->


								<br></br>
								<h5><a class="text-black" href="#"><span style="color: green">موضوع:</span> <?php echo e($opinion->field); ?></a></h5>
								<p class="mb-0"> <span style="color: green; font-size: 15px"><b>انتقادات و نقد:</b></span> <?php echo e($opinion->objection); ?>

									<br></br>
								<p class="mb-0"> <span style="color: green; font-size: 15px"><b>پشنهدات و اصلاحات:</b></span> <?php echo e($opinion->suggestion); ?>

							</div>

							<?php if($opinion->satisfaction == 0): ?>
								<p class="mb-0-5">میزان رضایت<span class="float-xs-right">0%</span></p>
								<progress class="progress progress-danger progress-md" value="1" max="100"></progress>
							<?php elseif($opinion->satisfaction == 25): ?>
								<p class="mb-0-5">میزان رضایت<span class="float-xs-right">25%</span></p>
								<progress class="progress progress-danger progress-md" value="25" max="100"></progress>
							<?php elseif($opinion->satisfaction == 50): ?>
								<p class="mb-0-5">میزان رضایت<span class="float-xs-right">50%</span></p>
								<progress class="progress progress-warning progress-md" value="50" max="100"></progress>
							<?php elseif($opinion->satisfaction == 75): ?>
								<p class="mb-0-5">میزان رضایت<span class="float-xs-right">75%</span></p>
								<progress class="progress progress-info progress-md" value="75" max="100"></progress>
							<?php elseif($opinion->satisfaction == 100): ?>
								<p class="mb-0-5">میزان رضایت<span class="float-xs-right">100%</span></p>
								<progress class="progress progress-success progress-md" value="100" max="100"></progress>
							<?php else: ?>
							<?php endif; ?>


						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>