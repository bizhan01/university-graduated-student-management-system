<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>پیام های جدید</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="#">فرصت های شغلی</a></li>
			<li class="breadcrumb-item"><a href="#">ثبت نظریه</a></li>
			<li class="breadcrumb-item active">پیام ها</li>
		</ol>
		<div class="row">
			<div class="col-md-12">
				<div class="box bg-white">
					<div class="">
						<table class="table table-hover mail-items mb-0">
							<tbody>
								<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr class="unread">
										<td class="mail-item-sender">
											<a class="mail-item-important" href="#">
												<i class="fa fa-bookmark fa-rotate-90"></i>
											</a>
											<a class="avatar box-32 mr-0-5" href="#">
												<img class="b-a-radius-circle" src="UploadedImages/<?php echo e($message->profileImage); ?>" alt="">
											</a>
											<a href="#"><?php echo e($message->name); ?></a>
										</td>
										<td>
											<i class="fa fa-circle text-info mr-0-5"></i>
											<a href="#"><?php echo e($message->subject); ?></a>
										</td>
										<td class="mail-item-time" colspan="3">
											<?php echo e($message->created_at); ?>

										</td>
							
										<td class="mail-item-attachment <?php if (Auth::user()->isAdmin == '1'): ?>
							            <?php echo 'hide' ?>
							          <?php endif ?>" >
											<a href="replyMessage/<?php echo e($message->id); ?>"><i class="fa fa-mail-reply" style="color: blue"></i></a>
										</td>
										<td class="mail-item-attachment" >
										<a href="deleteMessage/<?php echo e($message->id); ?>"><i class="fa fa-trash" style="color: red" onclick='return confirm("آیا مطمین استید حذف شود؟")'></i></a>
										</td>
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