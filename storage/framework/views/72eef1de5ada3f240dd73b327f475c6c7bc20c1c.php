<?php $__env->startSection('main'); ?>
<!-- table of students-->
<table id="ranktable" class="table table-condensed table-hover">
	<thead>
		<tr>
			<th width="10px">R</th>
			<th width="80px" class="hidden-xs">Flag</th>
			<th class="hidden-xs">Name</th>
			<th class="hidden-sm hidden-md hidden-lg">Nick</th>
			<th class="hidden-xs hidden-sm">MC</th>
			<th class="hidden-xs hidden-sm">TC</th>
			<th>SPE</th>
			<th class="hidden-xs hidden-sm">HW</th>
			<th class="hidden-xs hidden-sm">Bs</th>
			<th class="hidden-xs hidden-sm">KS</th>
			<th class="hidden-xs hidden-sm">Ac</th>
			<th>DIL</th>
			<th>Sum</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($data as $value) {
                                $studentName = ($loginState ? "<td class=\"hidden-xs\"><img src=\"img/smiley.jpg\" class=\"photo\"><a href=\"student/{$value['id']}\"> {$value['name']} </a><a href=\"student/{$value['id']}/edit\"> [edit] </a> </td>":"<td class=\"hidden-xs\"><img src=\"img/smiley.jpg\" class=\"photo\"><a href=\"student/{$value['id']}\"> {$value['name']} </a> </td>");
                                $studentNickName = ($loginState ?  "<td class=\"hidden-sm hidden-md hidden-lg\"><a href=\"".url('student')."/{$value['id']}\">{$value['nickname']}</a><a href=\"student/{$value['id']}/edit\"> [edit] </a></td>": "<td class=\"hidden-sm hidden-md hidden-lg\"><a href=\"'student'/{$value['id']}\">{$value['nickname']}</a></td>");
			    echo
				"<tr>
					<td>{$value['id']}</td>
					<td class=\"hidden-xs\"><span class=\"flag-icon flag-icon-".strtolower($value['country'])." flag-icon-squared\"></span> {$value['country']}</td>
					".$studentName."
                                        ".$studentNickName."
					<td class=\"hidden-xs hidden-sm\">{$value['mini_contests']}</td>
					<td class=\"hidden-xs hidden-sm highlighted\">{$value['team_contests']}</td>
					<td>{$value['speed']}</td>
					<td class=\"hidden-xs hidden-sm highlighted\">{$value['homework']}</td>
					<td class=\"hidden-xs hidden-sm highlighted\">{$value['problem_bs']}</td>
					<td class=\"hidden-xs hidden-sm highlighted\">{$value['kattie_sets']}</td>
					<td class=\"hidden-xs hidden-sm\">{$value['achievements']}</td>
					<td>{$value['diligence']}</td>
					<td>{$value['sum']}</td>
				</tr>";
			}
		?>
	</tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make($loginState ? 'templateLogin' : 'template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>