
<?php $__env->startSection('main'); ?> 
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p>You are logged in!</p>
			
			<button type="button" class="btn"><a href="<?php echo e(url('logout')); ?>">Logout</a></button>
					
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templateLogin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>