<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>لیست محصلین</h4>
		<h6>محصلین سافت ویر</h6>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">داشبورد</a></li>
			<li class="breadcrumb-item"><a href="">محصلین</a></li>
			<li class="breadcrumb-item active">لیست محصلین</li>
		</ol>

		<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<td style="width: 50px !important; ">عکس</td>
							<th>آقا/خانم</th>
							<th>نام</th>
							<th>نام خانوادگی</th>
							<td>تاریخ تولد</td>
							<td>تاریخ ورود</td>
							<td>تاریخ فراغت</td>
							<td>رشته/گرایش</td>
							<td>تلفن</td>
							<td>آدرس فعلی</td>
							<td>ایمیل آدرس</td>
							<td>عملیات</td>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td  style="width: 50px !important; padding: 2px;">
									<img src="<?php echo e(asset('UploadedImages/').'/'.$student->profileImage); ?>"  style="width: 100% !important; ">
								</td>
								<td><?php echo e($student->gender); ?></td>
								<td><?php echo e($student->name); ?></td>
								<td><?php echo e($student->lastName); ?></td>
								<td><?php echo e($student->dob); ?></td>
								<td><?php echo e($student->entery_year); ?></td>
								<td><?php echo e($student->graduate_year); ?></td>
								<td><?php echo e($student->field); ?></td>
								<td><?php echo e($student->phone); ?></td>
								<td><?php echo e($student->address); ?></td>
								<td><?php echo e($student->email); ?></td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="<?php echo e(url('editUser').'/' .$student->id); ?>" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href = 'blockUser/<?php echo e($student->id); ?>'> <i class="fa fa-ban text-warning"></i></a>
									&nbsp;&nbsp;&nbsp;
									<a href="<?php echo e(url('deleteUser').'/' .$student->id); ?>" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
										<i class="ti ti-trash text-danger"></i>
									</a>
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