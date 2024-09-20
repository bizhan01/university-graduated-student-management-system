<?php if(auth()->user()->isAdmin == 0 && auth()->user()->status == 1): ?>
	<?php echo $__env->make('adminDashborad', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php elseif(auth()->user()->isAdmin == 1 && auth()->user()->status == 1): ?>
	<?php echo $__env->make('studentDashborad', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php else: ?>
	  <?php echo $__env->make('blocked', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php endif; ?>
