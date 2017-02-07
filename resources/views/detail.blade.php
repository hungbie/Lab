@extends('template')
@section('main') 
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-9">
			<h1>{{$data[$id][1]}} in CS3233 S2 AY 2016/17</h1>
			<p>
				<h2>Kattis account: {{$data[$id][2]}}</h2>
			</p>

			<p>
				<b>SPE</b>(ed) component: <b>{{$data[$id][3]}} + {{$data[$id][4]}} = {{$data[$id][5]}}</b><br>
				<b>DIL</b>(igence) component: <b>{{$data[$id][6]}} + {{$data[$id][7]}} + {{$data[$id][8]}} + {{$data[$id][9]}} = {{$data[$id][10]}}</b><br>
				<b>Sum = SPE + DIL = {{$data[$id][5]}} + {{$data[$id][10]}} = {{$data[$id][11]}} </b><br>
			</p>
		</div>
		<div class="flag-icon-background flag-icon-{{strtolower($data[$id][0])}} flag-div hidden-xs hidden-sm col-sm-1" style="width:100px; height:50px; background-size:contain; background-position:50%; background-repeat:no-repeat;"></div>
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
				<td>{{$data[$id][3]}}</td>
				<td class="hidden-xs hidden-sm">{{$data[$id][3]}}</td>
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
				<td>{{$data[$id][4]}}</td>
				<td class="hidden-xs hidden-sm">{{$data[$id][4]}}</td>
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
				<td>{{$data[$id][6]}}</td>
				<td class="hidden-xs hidden-sm">{{$data[$id][6]}}</td>
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
				<td>{{$data[$id][7]}}</td>
				<td class="hidden-xs hidden-sm">{{$data[$id][7]}}</td>
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
				<td>{{$data[$id][8]}}</td>
				<td class="hidden-xs hidden-sm">{{$data[$id][8]}}</td>
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
				<td>{{$data[$id][9]}}</td>
				<td class="hidden-xs hidden-sm">{{$data[$id][9]}}</td>
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
</div>

@stop
