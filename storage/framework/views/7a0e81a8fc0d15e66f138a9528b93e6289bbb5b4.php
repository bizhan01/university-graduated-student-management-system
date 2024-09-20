<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>لیست کارمندان برحال</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">داشبورد</a></li>
			<li class="breadcrumb-item"><a href="">کارمندان</a></li>
			<li class="breadcrumb-item active">لیست کارمندان</li>
		</ol>

		<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<td style="width: 50px !important; ">عکس</td>
							<th>آی دی(ID)</th>
							<th>اسم کامل</th>
							<th>اسم پدر</th>
							<th>درجه تحصل</th>
							<th>وظیفه</th>
							<td>عملیات</td>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td  style="width: 50px !important; padding: 2px;">
									<img src="<?php echo e(asset('UploadedImages/employees').'/'.$employee->photo); ?>"  style="width: 100% !important; ">
								</td>
								<td dir="ltr" style="text-align: center;"><?php echo e($employee->id); ?></td>
								<td><?php echo e($employee->full_name); ?></td>
								<td><?php echo e($employee->father_name); ?></td>
								<td><?php echo e($employee->degree); ?></td>
								<td><?php echo e($employee->position); ?></td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href="<?php echo e(url('employeeDetails').'/'.$employee->id); ?>" title="جزییات">
										<i class="ti-info-alt text-info"></i>
									</a>&nbsp;&nbsp;&nbsp;
									<a href="<?php echo e(url('editEmployee').'/' .$employee->id); ?>" title="ویرایش">
										<i class="ti-pencil-alt"></i>
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="<?php echo e(url('deleteEmployee').'/' .$employee->id); ?>" title="حذف" onclick='return confirm("آیا مطمیین استید که حذف شود ؟")'>
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
