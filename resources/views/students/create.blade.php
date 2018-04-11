@extends('layouts.app')

@section('content')

  <!-- Bootstrap Boilerplate... -->

  <div class="panel-body">
  <!-- New Student Form -->
    {!! Form::model($student, [
      ’route’ => [’student.store’],
      ’class’ => ’form-horizontal’
    ]) !!}

  <!-- Student ID -->
  <div class="form-group row">
    {!! Form::label(’student-id’, ’Student ID’, [
      ’class’ => ’control-label col-sm-3’,
    ]) !!}
    <div class="col-sm-9">
      {!! Form::text(’student_id’, null, [
        ’id’ => ’student-id’,
        ’class’ => ’form-control’,
        ’maxlength’ => 100,
      ]) !!}
    </div>
  </div>

<!-- Name -->
<div class="form-group row">
    {!! Form::label(’division-name’, ’Name’, [
      ’class’ => ’control-label col-sm-3’,
    ]) !!}
    <div class="col-sm-9">
      {!! Form::text(’name’, null, [
        ’id’ => ’division-name’,
        ’class’ => ’form-control’,
        ’maxlength’ => 100,
      ]) !!}
    </div>
  </div>

<!-- Submit Button -->
<div class="form-group row">
<div class="col-sm-offset-3 col-sm-6">
{!! Form::button(’Save’, [
’type’ => ’submit’,
’class’ => ’btn btn-primary’,
]) !!}
</div>
</div>
{!! Form::close() !!}
</div>

@endsection
