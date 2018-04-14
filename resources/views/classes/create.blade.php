@extends('layouts.app')

@section('content')

  <!-- Bootstrap Boilerplate... -->

  <div class="panel-body">
  <!-- New Student Form -->
    {!! Form::model($student, [
      'route' => ['student.store'],
      'class' => 'form-horizontal'
    ]) !!}

  <!-- Student ID -->
  <div class="form-group row">
    {!! Form::label('student-id', "Student ID", [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('student_id', null, [
        'id' => 'student-id',
        'class' => 'form-control',
        'maxlength' => 100,
      ]) !!}
    </div>
  </div>

  <!-- Name -->
  <div class="form-group row">
    {!! Form::label('student-name', 'Name', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('name', null, [
        'id' => 'student-name',
        'class' => 'form-control',
        'maxlength' => 100,
      ]) !!}
    </div>
  </div>

  <!-- Age -->
  <div class="form-group row">
    {!! Form::label('student-age', 'Age', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('age', null, [
        'id' => 'student-age',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- IC -->
  <div class="form-group row">
    {!! Form::label('student-ic', 'IC', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('age', null, [
        'id' => 'student-ic',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Address -->
  <div class="form-group row">
    {!! Form::label('student-address', 'Address', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('address', null, [
        'id' => 'student-address',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Contact -->
  <div class="form-group row">
    {!! Form::label('student-contact', 'Contact', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('contact', null, [
        'id' => 'student-contact',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Parents Contact -->
  <div class="form-group row">
    {!! Form::label('student-parent-contact', "Parent's Contact", [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('parent-contact', null, [
        'id' => 'student-parent-contact',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Email -->
  <div class="form-group row">
    {!! Form::label('student-email', 'E-mail', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('email', null, [
        'id' => 'student-email',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- School -->
  <div class="form-group row">
    {!! Form::label('student-school', 'School', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('school', null, [
        'id' => 'student-school',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Submit Button -->
  <div class="form-group row">
    <div class="col-sm-offset-3 col-sm-6">
      {!! Form::button('Save', [
        'type' => 'submit',
        'class' => 'btn btn-primary',
      ]) !!}
    </div>
  </div>

  {!! Form::close() !!}

</div>

@endsection
