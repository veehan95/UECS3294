<?php
  use App\Common;
?>
@extends('layouts.app')

@section('content')
<!-- Bootstrap Boilerplate... -->
<div class="panel-body">

  @if (count($students) > 0)
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
        <th>Parent's Contact</th>
        <th>Actions</th>
      </tr>
    </thead>

    <!-- Table Body -->
    <tbody>
      @foreach ($students as $i => $student)
      <tr>
        <td class="table-text">
          <div>
            {!! link_to_route(
              'teacher.show',
              $title = $student->student_id,
              $parameters = [
                'id' => $student->student_id,
              ]
            ) !!}
          </div>
        </td>
        <td class="table-text">
          <div>{{ $student->name }}</div>
        </td>
        <td class="table-text">
          <div>{{ $student->nric }}</div>
        </td>
        <td class="table-text">
          <div>{{ Common::$gender[$student->gender] }}</div>
        </td>
        <td class="table-text">
          <div>{{ Common::$state[$student->state] }}</div>
        </td>
        <td class="table-text">
          <div>{{ $student->contact }}</div>
        </td>
        <td class="table-text">
          <div>{{ $student->parent_contact }}</div>
        </td>
        <td class="table-text">
          <div>
            {!! link_to_route(
              'teacher.edit',
              $title = 'Edit',
              $parameters = [
                'id' => $student->student_id,
              ]
            ) !!}
          </div>
        </td>
      </tr>
      @endforeach
      {{$students->links()}}
    </tbody>

  </table>

  @else
  <div>
    No records found
  </div>
  @endif
</div>
@endsection
