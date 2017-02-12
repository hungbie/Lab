<?php $__env->startSection('main'); ?> 
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-9">
		<?php
			$title = ($loginState ? "<h1>{$data['name']} in CS3233 S2 AY 2016/17 <a href = '{$data['id']}/edit'>[EDIT]</a></h1>"
				: "<h1>{$data['name']} in CS3233 S2 AY 2016/17 </h1>");
			echo $title;
			
		?>
			<p>
				<h2>Kattis account: <?php echo e($data['nickname']); ?></h2>
			</p>

			<p>
				<b>SPE</b>(ed) component: <b><?php echo e($data['mini_contests']); ?> + <?php echo e($data['team_contests']); ?> = <?php echo e($data['speed']); ?></b><br>
				<b>DIL</b>(igence) component: <b><?php echo e($data['homework']); ?> + <?php echo e($data['problem_bs']); ?> + <?php echo e($data['kattie_sets']); ?> + <?php echo e($data['achievements']); ?> = <?php echo e($data['diligence']); ?></b><br>
				<b>Sum = SPE + DIL = <?php echo e($data['speed']); ?> + <?php echo e($data['diligence']); ?> = <?php echo e($data['sum']); ?> </b><br>
			</p>
		</div>
		<div class="flag-icon-background flag-icon-<?php echo e(strtolower($data['country'])); ?> flag-div hidden-xs hidden-sm col-sm-1" style="width:100px; height:50px; background-size:contain; background-position:50%; background-repeat:no-repeat;"></div>
		<div class="hidden-xs hidden-sm col-sm-2">
			<img src="<?php echo e(URL::asset('img/winterfell.jpg')); ?>" width="150px">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<p><h3>Detailed scores:</h3></p>
		</div>
	</div>

	<table id="detail" class = "table table-striped">
		<thead>
			<tr>
				<th>Component</th>
				<th>Sum</th>
				<th class="hidden-xs hidden-sm">01</th>
				<th class="hidden-xs hidden-sm">02</th>
				<th class="hidden-xs hidden-sm">03</th>
				<th class="hidden-xs hidden-sm">04</th>
				<th class="hidden-xs hidden-sm">05</th>
				<th class="hidden-xs hidden-sm">06</th>
				<th class="hidden-xs hidden-sm">07</th>
				<th class="hidden-xs hidden-sm">08</th>
				<th class="hidden-xs hidden-sm">09</th>
				<th class="hidden-xs hidden-sm">10</th>
				<th class="hidden-xs hidden-sm">11</th>
				<th class="hidden-xs hidden-sm">12</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Mini Contests</td>
				<td><?php echo e($data['mini_contests']); ?></td>
				<td class="hidden-xs hidden-sm"><?php echo e($data['mini_contests']); ?></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
			</tr>
			<tr>
				<td>Team Contests</td>
				<td><?php echo e($data['team_contests']); ?></td>
				<td class="hidden-xs hidden-sm"><?php echo e($data['team_contests']); ?></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
			</tr>
			<tr>
				<td>Homework</td>
				<td><?php echo e($data['homework']); ?></td>
				<td class="hidden-xs hidden-sm"><?php echo e($data['homework']); ?></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
			</tr>
			<tr>
				<td>Problem Bs</td>
				<td><?php echo e($data['problem_bs']); ?></td>
				<td class="hidden-xs hidden-sm"><?php echo e($data['problem_bs']); ?></td>
			<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
			</tr>
			<tr>
				<td>Kattie Sets</td>
				<td><?php echo e($data['kattie_sets']); ?></td>
				<td class="hidden-xs hidden-sm"><?php echo e($data['kattie_sets']); ?></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
			</tr>
			<tr>
				<td>Achievements</td>
				<td><?php echo e($data['achievements']); ?></td>
				<td class="hidden-xs hidden-sm"><?php echo e($data['achievements']); ?></td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
				<td class="hidden-xs hidden-sm">0</td>
			</tr>
		</tbody>
	</table>
	
        <canvas id="radarChart" width="300px" height="300px"></canvas>
       
	<p>Achievement details:</p>
		<ol>
			<li>Let it begins</li>
			<li>Quick starter</li>
			<li>Active in class 2/3</li>
		</ol>
	<p>Specific (public) comments about this student: <b>some comments</b></p>
	<script type="text/javascript" src="<?php echo e(URL::asset('js/confirmDelete.js')); ?>"></script>
<?php if($loginState == true): ?>
<?php echo Form::open(['onsubmit' => 'return ConfirmDelete()']); ?>


  <div class="form-group">
    <?php echo Form::submit('Delete student', ['class' => 'form-control btn-primary']); ?>

  </div>

<?php echo Form::close(); ?>

<?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make($loginState ? 'templateLogin' : 'template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>