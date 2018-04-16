<?php
use App\Common;
?>
@extends('layouts.app')
@section('content')
    <!-- Bootstrap Boilerplate... -->
    <div class="panel-body">

      <table class="table table-striped task-table">
        <tbody>
          <tr>
            <td>ID</td>
            <td>{{ $teacher->teacher_id }}</td>
          </tr>
          <tr>
            <td>Name</td>
            <td>{{ $teacher->name }}</td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>{{ Common::$gender[$teacher->gender] }}</td>
          </tr>
          <tr>
            <td>NRIC</td>
            <td>{{ $teacher->nric }}</td>
          </tr>
          <tr>
            <td>Address</td>
            <td>{!! nl2br($teacher->address) !!}</td>
          </tr>
          <tr>
            <td>Postcode</td>
            <td>{{ $teacher->postcode }}</td>
          </tr>
          <tr>
            <td>City</td>
            <td>{{ $teacher->city }}</td>
          </tr>
          <tr>
            <td>State</td>
            <td>{{ Common::$state[$teacher->state] }}</td>
          </tr>
          <tr>
            <td>Contact</td>
            <td>{{ $teacher->contact }}</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>{{ $teacher->email }}</td>
          </tr>
          <tr>
            <td>Education Background</td>
            <td>{!! nl2br($teacher->education_background) !!}</td>
          </tr>

        </tbody>
@endsection
