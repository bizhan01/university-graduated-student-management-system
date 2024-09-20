<?php $__env->startSection('content'); ?>
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
			<div class="col-lg-12 box box-block bg-white">
        <!-- Content -->
        <div class="content-area py-1">
          <div class="container-fluid">
            <div class="box box-block bg-white">
              <center><h4>لیست تبلیغات تائید شده</h4> </center>
              <h6 class="mb-1">نمایش اطلاعات</h6>
              <table class="table table-striped table-bordered dataTable">
                <thead>
                  <tr>
                    <th>شماره</th>
                    <th>تبلیغات</th>
                    <th>حذف</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $advertisements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($adv->id); ?></td>
                    <td><a href="/UploadedImages/adv/<?php echo e($adv->image); ?>"><img style="height: 30px" src="UploadedImages/adv/<?php echo e($adv->image); ?>" alt="" /> </a></td>
                    <td><a href = 'deleteAdvertisement/<?php echo e($adv->id); ?>' onclick='return confirm("حذف شود؟")' title="حذف"> <i class="fa fa-trash text-danger"></i></a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>