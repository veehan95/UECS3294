<?php
  use App\Common;
?>
@extends('layouts.app')

@section('content')
<!-- Bootstrap Boilerplate... -->
<div class="panel-body">

  @if (count($teachers) > 0)
  <table class="table table-striped task-table">

    <!-- Table Headings -->
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>NRIC</th>
        <th>Gender</th>
        <th>State</th>
        <th>Contact</th>
        <th>Actions</th>
      </tr>
    </thead>

    <!-- Table Body -->
    <tbody>
      @foreach ($teachers as $i => $teacher)
      <tr>
        <td class="table-text">
          <div>
            {!! link_to_route(
              'teacher.show',
              $title = $teacher->teacher_id,
              $parameters = [
                'id' => $teacher->teacher_id,
              ]
            ) !!}
          </div>
        </td>
        <td class="table-text">
          <div>{{ $teacher->name }}</div>
        </td>
        <td class="table-text">
          <div>{{ $teacher->nric }}</div>
        </td>
        <td class="table-text">
          <div>{{ Common::$gender[$teacher->gender] }}</div>
        </td>
        <td class="table-text">
          <div>{{ Common::$state[$teacher->state] }}</div>
        </td>
        <td class="table-text">
          <div>{{ $teacher->contact }}</div>
        </td>
        <td class="table-text">
          <div>
            {!! link_to_route(
              'teacher.edit',
              $title = 'Edit',
              $parameters = [
                'id' => $teacher->teacher_id,
              ]
            ) !!}
          </div>
        </td>
      </tr>
      @endforeach
      {{$teachers->links()}}
    </tbody>

  </table>

  @else
  <div>
    No records found
  </div>
  @endif
</div>
@endsection
