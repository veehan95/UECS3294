<?php

use App\Common;

?>
@extends('layouts.app')

@section('content')

  <!-- Bootstrap Boilerplate... -->
  <div class="panel-body">
  <!-- New Class Form -->
  {!! Form::model($class, [
    'route' => ['class.store'],
    'class' => 'form-horizontal'
  ]) !!}
  <div class="form-group row">
    <h1 class="control-label col-sm-3">Class</h1>
  </div>

  <!-- NRIC -->
  <div class="form-group row">
    {!! Form::label('class-nric', 'NRIC', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('nric', null, [
        'id' => 'class-nric',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Address -->
  <div class="form-group row">
    {!! Form::label('class-address', 'Address', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('address', null, [
        'id' => 'class-address',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Postcode -->
  <div class="form-group row">
    {!! Form::label('class-postcode', 'Postcode', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('postcode', null, [
        'id' => 'class-postcode',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- City -->
  <div class="form-group row">
    {!! Form::label('class-city', 'City', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('city', null, [
        'id' => 'class-city',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- State -->
  <div class="form-group row">
    {!! Form::label('class-state', 'State', [
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
    {!! Form::label('class-contact', 'Contact', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('contact', null, [
        'id' => 'class-contact',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Email -->
  <div class="form-group row">
    {!! Form::label('class-email', 'E-mail', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('email', null, [
        'id' => 'class-email',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Education Background -->
  <div class="form-group row">
    {!! Form::label('class-education-background', 'Education Background', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::textarea('education_background', null, [
        'id' => 'class-education-background',
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
