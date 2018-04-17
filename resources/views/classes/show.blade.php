<?php
use App\Common;
use App\Teacher;
use App\Student;
?>
@extends('layouts.app')
@section('content')
    <!-- Bootstrap Boilerplate... -->
    <div class="panel-body">
      <table class="table table-striped task-table"  style="margin: 0px auto;width: 60vw">
        <thead class="form-group row">
          <td colspan="2"><h1>Class</h1></td>
        </thead>
        <tbody>
          <tr>
            <td>ID</td>
            <td>{{ $class->id }}</td>
          </tr>
          <tr>
            <td>Subject</td>
            <td>{{ $class->subject.' - '
              .Common::$subject[$class->subject] }}</td>
          </tr>
          <tr>
            <td>Time</td>
            <td>
              {{ date("h:i A", strtotime($class->start_time)).
                ' to '.
                date("h:i A", strtotime($class->end_time)) }}
            </td>
          </tr>
          <tr>
            <td>Day</td>
            <td>{{ Common::$day[$class->day] }}</td>
          </tr>
          <tr>
            <td>Effective Date</td>
            <td>{{ date("Y F d", strtotime($class->effective_date)) }}</td>
          </tr>
          <tr>
            <td>Close Date</td>
            <td>{{ date("Y F d", strtotime($class->close_date)) }}</td>
          </tr>
          <tr>
            <td>Max Sit</td>
            <td>{{ $class->max_sit }}</td>
          </tr>
          <tr>
            <td>Available Sit</td>
            <td>{{ 10 - $class->max_sit }}</td>
          </tr>
          <tr>
            <td>Venue</td>
            <td>{{ $class->venue }}</td>
          </tr>
          <tr>
            <td>Teacher</td>
            <td>{{ Teacher::find($class->teacher_id)->name }}</td>
          </tr>
          <tr>
            {!! Form::open(array('route' => 'class.ctos')) !!}
            <td>
              {!! Form::select('student_id',
                Student::pluck('name', 'id'),
                null, [
                  'class' => 'form-control',
                  'placeholder' => 'Select Student',
              ]) !!}
            </td>
            <td>
              {!! Form::button('Save', [
                'type' => 'submit',
                'class' => 'btn btn-primary',
                'href' => action('TuitionClassController@ctos'),
              ]) !!}
            </td>
            {!! Form::close() !!}
          </tr>
        </tbody>
@endsection
