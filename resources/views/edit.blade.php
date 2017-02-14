@extends('template')
@section('main')
<div class="container-fluid">
  <div>
    <h3><strong>{{$data['name']}}</strong> in CS3233 S2 AY 2016/17</h3>
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
    {!! Form::text('nickname', $data['nickname'], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('fullname', 'Full name:', ['class' => 'control-label']) !!}
    {!! Form::text('fullname', $data['name'], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('kattisaccount', 'Kattis account:', ['class' => 'control-label']) !!}
    {!! Form::text('kattisaccount', $data['kattis_account'], ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('mc', 'Mini contest scores:', ['class' => 'control-label']) !!}
    {!! Form::text('mc', $data['mini_contests'], ['id' => 'mc', 'class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('tc', 'Team contest scores:', ['class' => 'control-label']) !!}
    {!! Form::text('tc', $data['team_contests'], ['id' => 'tc', 'class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('hw', 'Homework scores:', ['class' => 'control-label']) !!}
    {!! Form::text('hw', $data['homework'], ['id' => 'hw', 'class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('bs', 'Problem B scores:', ['class' => 'control-label']) !!}
    {!! Form::text('bs', $data['problem_bs'], ['id' => 'bs', 'class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('ks', 'Kattis set scores:', ['class' => 'control-label']) !!}
    {!! Form::text('ks', $data['kattie_sets'], ['id' => 'ks', 'class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('ac', 'Achievement scores:', ['class' => 'control-label']) !!}
    {!! Form::text('ac', $data['achievements'], ['id' => 'ac', 'class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('sum', 'Sum of scores (automatically computed):', ['class' => 'control-label']) !!}
    {!! Form::text('sum', null, ['id' => 'sum', 'class' => 'form-control', 'disabled']) !!}
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
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{URL::asset('js/sumFieldsForEditForm.js')}}"></script>
@stop

@section('navbar')
  @include('navbarTemplate', ['isLoggedIn' => true, 'activePage' => 'edit'])
@overwrite
