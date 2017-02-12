@extends('templateLogin')
@section('main')
<div class="container-fluid">
  <div>
    <h3><strong>{{$data[$id][1]}}</strong> in CS3233 S2 AY 2016/17</h3>
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
    {!! Form::text('nickname', $data[$id]['nickname'], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('fullname', 'Full name:', ['class' => 'control-label']) !!}
    {!! Form::text('fullname', $data[$id][1], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('kattisaccount', 'Kattis account:', ['class' => 'control-label']) !!}
    {!! Form::text('kattisaccount', $data[$id][2], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('mc', 'Mini contest scores:', ['class' => 'control-label']) !!}
    {!! Form::text('mc', $data[$id][3], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('tc', 'Team contest scores:', ['class' => 'control-label']) !!}
    {!! Form::text('tc', $data[$id][4], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('hw', 'Homework scores:', ['class' => 'control-label']) !!}
    {!! Form::text('hw', $data[$id][6], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('bs', 'Problem B scores:', ['class' => 'control-label']) !!}
    {!! Form::text('bs', $data[$id][7], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('ks', 'Kattis set scores:', ['class' => 'control-label']) !!}
    {!! Form::text('ks', $data[$id][8], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('ac', 'Achievement scores:', ['class' => 'control-label']) !!}
    {!! Form::text('ac', $data[$id][9], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('sum', 'Sum of scores (automatically computed):', ['class' => 'control-label']) !!}
    {!! Form::text('sum', null, ['class' => 'form-control', 'disabled']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('specficcomments', 'Specific comments:', ['class' => 'control-label']) !!}
    {!! Form::text('specficcomments', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Update', ['class' => 'form-control btn-primary']) !!}
  </div>
  {!! Form::close() !!}
</div>
@stop
