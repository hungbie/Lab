@extends($loginState ? 'templateLogin' : 'template')
@section('main')
<div class='container-fluid'>
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
			function echoTd($highestValue, $tdValue, $class = "") {
                if ($tdValue == $highestValue) {
                    echo "<td {$class} style=\"background-color:orange\">{$tdValue}</td>";
                } else {
                    echo "<td {$class}>{$tdValue}</td>";
                }
			}

			$highestValues = array(
				'mini_contests'  => -1,
				'team_contests' => -1,
				'speed'   => -1,
				'homework' => -1,
				'problem_bs' => -1,
				'kattie_sets' => -1,
				'achievements' => -1,
				'diligence' => -1
			);

			foreach($data as $value) {
				$highestValues['mini_contests'] = $highestValues['mini_contests'] < $value['mini_contests'] ?  $value['mini_contests'] : $highestValues['mini_contests'];
				$highestValues['team_contests'] = $highestValues['team_contests'] < $value['team_contests'] ?  $value['team_contests'] : $highestValues['team_contests'];
				$highestValues['speed'] = $highestValues['speed'] < $value['speed'] ?  $value['speed'] : $highestValues['speed'];
				$highestValues['homework'] = $highestValues['homework'] < $value['homework'] ?  $value['homework'] : $highestValues['homework'];
				$highestValues['problem_bs'] = $highestValues['problem_bs'] < $value['problem_bs'] ?  $value['problem_bs'] : $highestValues['problem_bs'];
				$highestValues['kattie_sets'] = $highestValues['kattie_sets'] < $value['kattie_sets'] ?  $value['kattie_sets'] : $highestValues['kattie_sets'];
				$highestValues['achievements'] = $highestValues['achievements'] < $value['achievements'] ?  $value['achievements'] : $highestValues['achievements'];
				$highestValues['diligence'] = $highestValues['diligence'] < $value['diligence'] ?  $value['diligence'] : $highestValues['diligence'];
			}

			foreach ($data as $value) {
				$studentName = ($loginState ? "<td class=\"hidden-xs\"><img src=\"img/smiley.jpg\" class=\"photo\"><a href=\"student/{$value['id']}\"> {$value['name']} </a><a href=\"student/{$value['id']}/edit\"> [edit] </a> </td>":"<td class=\"hidden-xs\"><img src=\"img/smiley.jpg\" class=\"photo\"><a href=\"student/{$value['id']}\"> {$value['name']} </a> </td>");
				$studentNickName = ($loginState ?  "<td class=\"hidden-sm hidden-md hidden-lg\"><a href=\"".url('student')."/{$value['id']}\">{$value['nickname']}</a><a href=\"student/{$value['id']}/edit\"> [edit] </a></td>": "<td class=\"hidden-sm hidden-md hidden-lg\"><a href=\"'student'/{$value['id']}\">{$value['nickname']}</a></td>");

				echo"<tr>";
				echo "<td>{$value['id']}</td>";
				echo "<td class=\"hidden-xs\"><span class=\"flag-icon flag-icon-".strtolower($value['country'])." flag-icon-squared\"></span> {$value['country']}</td>
						".$studentName." ".$studentNickName."";
				echoTd($highestValues['mini_contests'], $value['mini_contests'], "class=hidden-xs hidden-sm");
				echoTd($highestValues['team_contests'], $value['team_contests'], "class=hidden-xs hidden-sm");
				echoTd($highestValues['speed'], $value['speed']);
				echoTd($highestValues['homework'], $value['homework'], "class=hidden-xs hidden-sm highlighted");
				echoTd($highestValues['problem_bs'], $value['problem_bs'], "class=hidden-xs hidden-sm highlighted");
				echoTd($highestValues['kattie_sets'], $value['kattie_sets'], "class=hidden-xs hidden-sm highlighted");
                echoTd($highestValues['achievements'], $value['achievements'], "class=hidden-xs hidden-sm");
                echoTd($highestValues['diligence'], $value['diligence']);
				echo "<td>{$value['sum']}</td>";
				echo "</tr>";
			}
        ?>
	</tbody>
</table>
</div>
@stop
