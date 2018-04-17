<?php
use App\Common;
unset(Common::$state[NULL]);
?>

@extends('layouts.app')

@section('content')

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
    <!-- Edit Teacher Form -->
    {!! Form::model($teacher, [
      'route' => ['teacher.update', $teacher->teacher_id],
      'method' => 'put',
      'class' => 'form-horizontal'
    ]) !!}
    <div class="form-group row">
      <h1 class="control-label col-sm-3">Teacher</h1>
    </div>
    <!-- Name -->
    <div class="form-group row">
    {!! Form::label('teacher-name', 'Name', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('name', null, [
        'id' => 'teacher-name',
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
    {!! Form::label('teacher-nric', 'NRIC', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('nric', null, [
        'id' => 'teacher-nric',
        'class' => 'form-control',
      ]) !!}
    </div>
    </div>

    <!-- Address -->
    <div class="form-group row">
    {!! Form::label('teacher-address', 'Address', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('address', null, [
        'id' => 'teacher-address',
        'class' => 'form-control',
      ]) !!}
    </div>
    </div>

    <!-- Postcode -->
    <div class="form-group row">
    {!! Form::label('teacher-postcode', 'Postcode', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('postcode', null, [
        'id' => 'teacher-postcode',
        'class' => 'form-control',
      ]) !!}
    </div>
    </div>

    <!-- City -->
    <div class="form-group row">
    {!! Form::label('teacher-city', 'City', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('city', null, [
        'id' => 'teacher-city',
        'class' => 'form-control',
      ]) !!}
    </div>
    </div>

    <!-- State -->
    <div class="form-group row">
    {!! Form::label('teacher-state', 'State', [
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
    {!! Form::label('teacher-contact', 'Contact', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('contact', null, [
        'id' => 'teacher-contact',
        'class' => 'form-control',
      ]) !!}
    </div>
    </div>

    <!-- Email -->
    <div class="form-group row">
    {!! Form::label('teacher-email', 'E-mail', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('email', null, [
        'id' => 'teacher-email',
        'class' => 'form-control',
      ]) !!}
    </div>
    </div>

    <!-- Education Background -->
    <div class="form-group row">
    {!! Form::label('teacher-education-background', 'Education Background', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::textarea('education_background', null, [
        'id' => 'teacher-education-background',
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
