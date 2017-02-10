@extends('template')
@section('main')
<div class="container-fluid">
  <div>
    <h3><strong>some guy</strong> in some sem some year</h3>
  </div>
  @if (count($errors) > 0) {{-- just list down all errors found --}}
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  {!! Form::open() !!}
  <div class="form-group">
    {!! Form::label('nickname', 'Nick name:', ['class' => 'control-label']) !!}
    {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('fullname', 'Full name:', ['class' => 'control-label']) !!}
    {!! Form::text('fullname', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('kattisaccount', 'Kattis account:', ['class' => 'control-label']) !!}
    {!! Form::text('kattisaccount', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('minicontestscores', 'Mini contest scores:', ['class' => 'control-label']) !!}
    {!! Form::text('minicontestscores', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('teamcontestscores', 'Team contest scores:', ['class' => 'control-label']) !!}
    {!! Form::text('teamcontestscores', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('homeworkscores', 'Homework scores:', ['class' => 'control-label']) !!}
    {!! Form::text('homeworkscores', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('problembscores', 'Problem B scores:', ['class' => 'control-label']) !!}
    {!! Form::text('problembscores', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('kattissetcores', 'Kattis set scores:', ['class' => 'control-label']) !!}
    {!! Form::text('kattissetcores', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('achievementscores', 'Achievement scores:', ['class' => 'control-label']) !!}
    {!! Form::text('achievementscores', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('sumofscores', 'Sum of scores (automatically computed):', ['class' => 'control-label']) !!}
    {!! Form::text('sumofscores', null, ['class' => 'form-control', 'disabled']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('specficcomments', 'Specific comments:', ['class' => 'control-label']) !!}
    {!! Form::text('specficcomments', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Create', ['class' => 'form-control btn-primary']) !!}
  </div>
  {!! Form::close() !!}
</div>
@stop
