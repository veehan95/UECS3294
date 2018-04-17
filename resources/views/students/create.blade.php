<?php
use App\Common;
unset(Common::$state[NULL]);
?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->
<div class="panel-body">
  @if($errors->any())
    <div class='alert alert-danger'>
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <!-- New student Form -->
  {!! Form::model($student, [
    'route' => ['student.store'],
    'class' => 'form-horizontal'
  ]) !!}
  <div class="form-group row">
    <h1 class="control-label col-sm-3">Student</h1>
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

  <!-- Gender -->
  <div class="form-group row">
    {!! Form::label('member-gender', 'Gender', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      @foreach(Common::$gender as $key => $val)
      {!! Form::radio('gender', $key) !!} {{$val}}
      @endforeach
    </div>
  </div>

  <!-- NRIC -->
  <div class="form-group row">
    {!! Form::label('student-nric', 'NRIC', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('nric', null, [
        'id' => 'student-nric',
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

  <!-- Postcode -->
  <div class="form-group row">
    {!! Form::label('student-postcode', 'Postcode', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('postcode', null, [
        'id' => 'student-postcode',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- City -->
  <div class="form-group row">
    {!! Form::label('student-city', 'City', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('city', null, [
        'id' => 'student-city',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- State -->
  <div class="form-group row">
    {!! Form::label('student-state', 'State', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::select('state',
        Common::$state,
        null, [
          'class' => 'form-control',
          'placeholder' => 'Select State',
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

  <!-- Parent Contact -->
  <div class="form-group row">
    {!! Form::label('student-parent-contact', 'Parent\'s Contact', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('parent_contact', null, [
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
