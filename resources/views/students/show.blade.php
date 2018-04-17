<?php
use App\Common;
use App\TuitionClass;
?>
@extends('layouts.app')
@section('content')
    <!-- Bootstrap Boilerplate... -->
    <div class="panel-body">
      <table class="table table-striped task-table"  style="margin: 0px auto;width: 60vw">
        <thead class="form-group row">
          <td colspan="2"><h1>Student</h1></td>
        </thead>
        <tbody>
          <tr>
            <td>ID</td>
            <td>{{ $student->id }}</td>
          </tr>
          <tr>
            <td>Name</td>
            <td>{{ $student->name }}</td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>{{ Common::$gender[$student->gender] }}</td>
          </tr>
          <tr>
            <td>NRIC</td>
            <td>{{ $student->nric }}</td>
          </tr>
          <tr>
            <td>Address</td>
            <td>{!! nl2br($student->address) !!}</td>
          </tr>
          <tr>
            <td>Postcode</td>
            <td>{{ $student->postcode }}</td>
          </tr>
          <tr>
            <td>City</td>
            <td>{{ $student->city }}</td>
          </tr>
          <tr>
            <td>State</td>
            <td>{{ Common::$state[$student->state] }}</td>
          </tr>
          <tr>
            <td>Contact</td>
            <td>{{ $student->contact }}</td>
          </tr>
          <tr>
            <td>Parent's Contact</td>
            <td>{{ $student->parent_contact }}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>{{ $student->email }}</td>
          </tr>
          <tr>
            <td>School</td>
            <td>{{ $student->school }}</td>
          </tr>
          <td>
              @foreach ($relations as $i => $relation)
               {{ $relation->class_id }}<<br/>
              @endforeach
          </td>

        </tbody>
@endsection
