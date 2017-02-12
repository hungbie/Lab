
<?php $__env->startSection('main'); ?> 

<div class="container">
	<div class="row">
		
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
				<?php echo Form::open(['class'=>'form-horizontal']); ?> 
				<div class="form-group"> 
					<?php echo Form::label('userID', 'Username: ', ['class' => 'col-md-4 control-label']); ?>

					<?php echo Form::text('userID', null, ['class' => 'col-md-6']); ?>

				</div>
				<div class="form-group"> 
					<?php echo Form::label('password', 'Password: ', ['class' => 'col-md-4 control-label']); ?>

					<?php echo Form::password('password', null, ['class' => 'col-md-6'], ['id' => 'password']); ?>

				</div>
				<div class="form-group"> 
					<div class="col-md-8 col-md-offset-4">
						<?php echo Form::submit('Submit', ['class' => 'btn btn-primary']); ?>

					</div>
				</div>
				<?php if(count($errors) > 0): ?> 
				<div class="alert alert-danger">
					<ul>
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><?php echo e($error); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
				<?php endif; ?>
				<?php echo Form::close(); ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>