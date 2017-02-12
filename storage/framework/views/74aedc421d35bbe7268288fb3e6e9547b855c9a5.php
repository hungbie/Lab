<?php $__env->startSection('main'); ?>
<div class="container-fluid">
  <?php if(count($errors) > 0): ?> 
    <div class="alert alert-danger">
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  <?php endif; ?>
  <?php echo Form::open(); ?>

  <div class="form-group">
    <?php echo Form::label('nickname', 'Nick name:', ['class' => 'control-label']); ?>

    <?php echo Form::text('nickname', null, ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('fullname', 'Full name:', ['class' => 'control-label']); ?>

    <?php echo Form::text('fullname', null, ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('kattisaccount', 'Kattis Account:', ['class' => 'control-label']); ?>

    <?php echo Form::text('kattisaccount', null, ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('nationality', 'Nationality:', ['class' => 'control-label']); ?>

    <?php echo Form::select('nationality', ['SGP' => 'SGP - Singaporean', 'CHN' => 'CHN - Chinese', 'VNM' => 'VNM - Vietnamese', 'IDN' => 'IDN - Indonesian', 'OTH' => 'OTH - Other Nationality'], null, ['placeholder' => 'Select Nationality']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::submit('Create', ['class' => 'form-control btn-primary']); ?>

  </div>
  <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templateLogin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>