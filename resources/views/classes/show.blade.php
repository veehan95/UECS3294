<?php
use App\Common;
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
            <td>{{ $class->time }}</td>
          </tr>
          <tr>
            <td>Day</td>
            <td>{{ Common::$day[$class->day] }}</td>
          </tr>
          <tr>
            <td>Effective Date</td>
            <td>{{ $class->effective_date }}</td>
          </tr>
          <tr>
            <td>Close Date</td>
            <td>{{ $class->close_date }}</td>
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
            <td>{{ $class->teacher_id }}</td>
          </tr>

        </tbody>
@endsection
