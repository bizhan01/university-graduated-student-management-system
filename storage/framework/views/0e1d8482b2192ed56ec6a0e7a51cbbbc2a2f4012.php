<?php $__env->startSection('content'); ?>
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
			<div class="col-lg-12 box box-block bg-white">
        <!-- Content -->
        <center><h3>افزودن تبلیغات</h3></center>
        <form method="post" action="<?php echo e(route('addAdvertisement')); ?>" enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>

          <input type="file" name="image" id="input-file-now" class="dropify" required/>
          <input type="hidden" name="status" value="1">
          <br>
          <input type="submit" class="btn btn-rounded  form-control" value="ذخیره" style="background-color: #7f9d18">
        </form>
      </div>
   </div>
</div>

<br>

<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
			<?php $__currentLoopData = $advertisements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-3">
					<div class="box bg-white product product-3">
						<div class="p-img img-cover" style="background-image: url(/UploadedImages/adv/<?php echo e($adv->image); ?>);">
							<a href="deleteAdvertisement/<?php echo e($adv->id); ?>" onclick='return confirm("آیا مطمین استید حذف شود؟")'>
								<button type="reset" class="btn btn-outline-danger btn-block">
									<i class="ti-trash"></i>
									<span>حذف مورد</span>
								</button>
							</a>
						</div>
					</div>
				</div>
		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	 </div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>