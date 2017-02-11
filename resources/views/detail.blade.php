@extends($loginState ? 'templateLogin' : 'template')
@section('main') 
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-9">
		<?php
			$title = ($loginState ? "<h1>{$data['name']} in CS3233 S2 AY 2016/17 <a href = '{$data['id']}/edit'>[EDIT]</a></h1>"
				: "<h1>{$data['name']} in CS3233 S2 AY 2016/17 </h1>");
			echo $title;
			
		?>
			<p>
				<h2>Kattis account: {{$data['nickname']}}</h2>
			</p>

			<p>
				<b>SPE</b>(ed) component: <b>{{$data['mini_contests']}} + {{$data['team_contests']}} = {{$data['speed']}}</b><br>
				<b>DIL</b>(igence) component: <b>{{$data['homework']}} + {{$data['problem_bs']}} + {{$data['kattie_sets']}} + {{$data['achievements']}} = {{$data['diligence']}}</b><br>
				<b>Sum = SPE + DIL = {{$data['speed']}} + {{$data['diligence']}} = {{$data['sum']}} </b><br>
			</p>
		</div>
		<div class="flag-icon-background flag-icon-{{strtolower($data['country'])}} flag-div hidden-xs hidden-sm col-sm-1" style="width:100px; height:50px; background-size:contain; background-position:50%; background-repeat:no-repeat;"></div>
		<div class="hidden-xs hidden-sm col-sm-2">
			<img src="{{URL::asset('img/winterfell.jpg')}}" width="150px">
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
				<td>{{$data['mini_contests']}}</td>
				<td class="hidden-xs hidden-sm">{{$data['mini_contests']}}</td>
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
				<td>{{$data['team_contests']}}</td>
				<td class="hidden-xs hidden-sm">{{$data['team_contests']}}</td>
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
				<td>{{$data['homework']}}</td>
				<td class="hidden-xs hidden-sm">{{$data['homework']}}</td>
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
				<td>{{$data['problem_bs']}}</td>
				<td class="hidden-xs hidden-sm">{{$data['problem_bs']}}</td>
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
				<td>{{$data['kattie_sets']}}</td>
				<td class="hidden-xs hidden-sm">{{$data['kattie_sets']}}</td>
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
				<td>{{$data['achievements']}}</td>
				<td class="hidden-xs hidden-sm">{{$data['achievements']}}</td>
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
	<script type="text/javascript" src="{{URL::asset('js/confirmDelete.js')}}"></script>
@if ($loginState == true)
{!! Form::open(['onsubmit' => 'return ConfirmDelete()']) !!}

  <div class="form-group">
    {!! Form::submit('Delete student', ['class' => 'form-control btn-primary']) !!}
  </div>

{!! Form::close() !!}
@endif
</div>

@stop
