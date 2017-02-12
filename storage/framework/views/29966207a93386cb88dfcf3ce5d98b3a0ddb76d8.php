<?php $__env->startSection('main'); ?>
<div class="container-fluid">
  <div>
    <h3><strong><?php echo e($data[$id][1]); ?></strong> in CS3233 S2 AY 2016/17</h3>
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
  <?php echo Form::open(); ?>

  <div class="form-group">
    <?php echo Form::label('nickname', 'Nick name:', ['class' => 'control-label']); ?>

    <?php echo Form::text('nickname', $data[$id][2], ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('fullname', 'Full name:', ['class' => 'control-label']); ?>

    <?php echo Form::text('fullname', $data[$id][1], ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('kattisaccount', 'Kattis account:', ['class' => 'control-label']); ?>

    <?php echo Form::text('kattisaccount', $data[$id][2], ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('mc', 'Mini contest scores:', ['class' => 'control-label']); ?>

    <?php echo Form::text('mc', $data[$id][3], ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('tc', 'Team contest scores:', ['class' => 'control-label']); ?>

    <?php echo Form::text('tc', $data[$id][4], ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('hw', 'Homework scores:', ['class' => 'control-label']); ?>

    <?php echo Form::text('hw', $data[$id][6], ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('bs', 'Problem B scores:', ['class' => 'control-label']); ?>

    <?php echo Form::text('bs', $data[$id][7], ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('ks', 'Kattis set scores:', ['class' => 'control-label']); ?>

    <?php echo Form::text('ks', $data[$id][8], ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('ac', 'Achievement scores:', ['class' => 'control-label']); ?>

    <?php echo Form::text('ac', $data[$id][9], ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('sum', 'Sum of scores (automatically computed):', ['class' => 'control-label']); ?>

    <?php echo Form::text('sum', null, ['class' => 'form-control', 'disabled']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::label('specficcomments', 'Specific comments:', ['class' => 'control-label']); ?>

    <?php echo Form::text('specficcomments', null, ['class' => 'form-control']); ?>

  </div>
  <div class="form-group">
    <?php echo Form::submit('Update', ['class' => 'form-control btn-primary']); ?>

  </div>
  <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templateLogin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>