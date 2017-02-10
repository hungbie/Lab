@extends('template')
@section('main') 

<div class="container">
	<div class="row">
		
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
				{!! Form::open(['class'=>'form-horizontal']) !!} 
				<div class="form-group"> 
					{!! Form::label('userID', 'Username: ', ['class' => 'col-md-4 control-label']) !!}
					{!! Form::text('userID', null, ['class' => 'col-md-6']) !!}
				</div>
				<div class="form-group"> 
					{!! Form::label('password', 'Password: ', ['class' => 'col-md-4 control-label']) !!}
					{!! Form::password('password', null, ['class' => 'col-md-6'], ['id' => 'password']) !!}
				</div>
				<div class="form-group"> 
					<div class="col-md-8 col-md-offset-4">
						{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
					</div>
				</div>
				@if (count($errors) > 0) 
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop