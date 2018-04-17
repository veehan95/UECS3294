<?php
use App\Common;
use App\Teacher;
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
  <!-- Edit Teacher Form -->
  {!! Form::model($class, [
    'route' => ['class.update', $class->id],
    'method' => 'put',
    'class' => 'form-horizontal'
  ]) !!}
  <div class="form-group row">
    <h1 class="control-label col-sm-3">Class</h1>
  </div>
  <!-- Subject -->
  <div class="form-group row">
    {!! Form::label('class-subject', 'Subject', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      <select class="form-control" id="class-subject "name="subject" placeholder="Select Subject">
        @foreach(Common::$subject as $key=>$subject)
          @if($class->subject == $key)
            <option value="{{$key}}" selected>{{$key.' - '.$subject}}</option>
          @else
            <option value="{{$key}}">{{$key.' - '.$subject}}</option>
          @endif
        @endforeach
      </select>
    </div>
  </div>

  <!-- Start Time -->
  <div class="form-group row">
    {!! Form::label('class-start-time', 'Start Time', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::time('start_time', null, [
            'id' => 'class-start_time',
            'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Ending Time -->
  <div class="form-group row">
    {!! Form::label('class-ending-time', 'Ending Time', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::time('end_time', null, [
            'id' => 'class-end_time',
            'class' => 'form-control',
          ]) !!}
    </div>
  </div>

  <!-- Day -->
  <div class="form-group row">
    {!! Form::label('class-day', 'Day', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::select('day',
        Common::$day,
        null, [
            'id' => 'class-day',
          'class' => 'form-control',
          'placeholder' => 'Select Day',
      ]) !!}
    </div>
  </div>

  <!-- Effective Date -->
  <div class="form-group row">
    {!! Form::label('class-effective-date', 'Effective Date', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::date('effective_date', null, [
          'id' => 'class-effective_date',
          'class' => 'form-control',
        ]) !!}
    </div>
  </div>

  <!-- Close Date -->
  <div class="form-group row">
    {!! Form::label('class-close-date', 'Close Date', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::date('close_date', null, [
          'id' => 'class-close_date',
          'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Sit Number -->
  <div class="form-group row">
    {!! Form::label('class-max-sit', 'Sit Number', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('max_sit', null, [
        'id' => 'class-max-sit',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Venue -->
  <div class="form-group row">
    {!! Form::label('class-venue', 'Venue', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::text('venue', null, [
        'id' => 'class-venue',
        'class' => 'form-control',
      ]) !!}
    </div>
  </div>

  <!-- Teacher -->
  <div class="form-group row">
    {!! Form::label('class-teacher-id', 'Teacher', [
      'class' => 'control-label col-sm-3',
    ]) !!}
    <div class="col-sm-6">
      {!! Form::select('teacher_id',
        Teacher::pluck('name', 'id'),
        null, [
        'class' => 'form-control',
        'placeholder' => 'Select Teacher',
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
