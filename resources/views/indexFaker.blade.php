@extends('template')
@section('main')
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
			for ($i = 0; i < $limit; $i++) { 
				echo
				"<tr>
					<td>".$i."</td>
					<td class=\"hidden-xs\"><img src=\"img/smiley.jpg\" class=\"flag\"> ".$data[$i][0]."</td>
					<td class=\"hidden-xs\"><img src=\"img/smiley.jpg\" class=\"photo\"><a href=\"{{url('student/".$i."')}}\"> ".$data[$i][1]." </a> </td>
					<td class=\"hidden-sm hidden-md hidden-lg\"><a href=\"{{url('student/".$i."')}}\">".$data[$i][2]."</a></td>
					<td class=\"hidden-xs hidden-sm\">".$data[$i][3]."</td>
					<td class=\"hidden-xs hidden-sm highlighted\">".$data[$i][4]."</td>
					<td>".$data[$i][5]."</td>
					<td class=\"hidden-xs hidden-sm highlighted\">".$data[$i][6]."</td>
					<td class=\"hidden-xs hidden-sm highlighted\">".$data[$i][7]."</td>
					<td class=\"hidden-xs hidden-sm highlighted\">".$data[$i][8]."</td>
					<td class=\"hidden-xs hidden-sm\">".$data[$i][9]."</td>
					<td>".$data[$i][10]."</td>
					<td>".$data[$i][11]."</td>
				</tr>";
			}
		?>
	</tbody>
</table>

@stop
