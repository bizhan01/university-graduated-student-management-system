<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>لیست درخواست کننده های </h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">داشبورد</a></li>
			<li class="breadcrumb-item"><a href="">محصلین</a></li>
			<li class="breadcrumb-item active">لیست محصلین</li>
		</ol>

		<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" >
					<thead>
						<tr>
							<td>آقا/خانم</td>
							<th>نام</th>
							<th>تخلص</th>
							<th>تلفن</th>
							<th>ایمیل</th>
							<th>تاریخ فراغت</th>
							<td>وضعیت درخواست</td>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($application->gender); ?></td>
								<td><?php echo e($application->name); ?></td>
								<td><?php echo e($application->lastName); ?></td>
								<td dir="ltr" style="text-align: center"><?php echo e($application->phone); ?></td>
								<td><?php echo e($application->email); ?></td>
								<td><?php echo e($application->graduate_year); ?></td>
								<td>
									<?php if($application->app_status == 1): ?>
									<li class="fa fa-check" style="color: green"> تایید شده </li>
									<?php elseif($application->app_status == 2): ?>
									<li class="fa fa-times-circle" style="color: red"> رد درخواست</li>
									<?php else: ?>
									<li class="fa fa-hourglass-half" style="color: orange"> منتظر بررسی</li>
									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>