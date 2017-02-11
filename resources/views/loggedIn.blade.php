@extends('templateLogin')
@section('main') 
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p>You are logged in!</p>
			
			<button type="button" class="btn"><a href="{{url('logout')}}">Logout</a></button>
					
		</div>
	</div>
</div>
@stop