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
    	<?php include 'php/table.php';?>
	</tbody>
</table>
</div>
@stop
