@extends('template')
@section('main')
<div class="container-fluid">
  @if (count($errors) > 0) {{-- just list down all errors found --}}
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  {!! Form::open(['files'=>true]) !!}
  <div class="form-group">
    {!! Form::label('nickname', 'Nick name:', ['class' => 'control-label']) !!}
    {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('fullname', 'Full name:', ['class' => 'control-label']) !!}
    {!! Form::text('fullname', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('kattisaccount', 'Kattis Account:', ['class' => 'control-label']) !!}
    {!! Form::text('kattisaccount', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
            {!! Form::label('image', 'Choose an image') !!}
            {!! Form::file('image') !!}
  </div>
  <div class="form-group">
    {!! Form::label('nationality', 'Nationality:', ['class' => 'control-label']) !!}
    {!! Form::select('nationality', ['SG' => 'SGP - Singaporean', 'CN' => 'CHN - Chinese', 'VN' => 'VNM - Vietnamese', 'ID' => 'IDN - Indonesian', 'OTH' => 'OTH - Other Nationality'], null, ['placeholder' => 'Select Nationality']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Create', ['class' => 'form-control btn-primary']) !!}
  </div>
  {!! Form::close() !!}
</div>
@stop

@section('navbar')
  @include('navbarTemplate', ['isLoggedIn' => true, 'activePage' => 'create'])
@overwrite
