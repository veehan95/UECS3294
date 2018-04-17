<?php
  use App\Common;
?>
@extends('layouts.app')

@section('content')
<!-- Bootstrap Boilerplate... -->
<div class="panel-body">

  @if (count($classes) > 0)
  <table class="table table-striped task-table">

    <!-- Table Headings -->
    <thead>
      <tr>
        <td colspan="7"><h1>Classes</h1></td>
      </tr>
      <tr>
        <th>ID</th>
        <th>Subject</th>
        <th>Time</th>
        <th>Day</th>
        <th>Available Sit</th>
        <th>Venue</th>
        <th>Actions</th>
      </tr>
    </thead>

    <!-- Table Body -->
    <tbody>
      @foreach ($classes as $i => $class)
      <tr>
        <td class="table-text">
          <div>
            {!! link_to_route(
              'class.show',
              $title = $class->id,
              $parameters = [
                'id' => $class->id,
              ]
            ) !!}
          </div>
        </td>
        <td class="table-text">
          <div>{{ $class->subject.' - '
            .Common::$subject[$class->subject] }}</div>
        </td>
        <td class="table-text">
          <div>
            {{ date("h:i A", strtotime($class->start_time)).
              ' to '.
              date("h:i A", strtotime($class->end_time)) }}
            </div>
        </td>
        <td class="table-text">
          <div>{{ Common::$day[$class->day] }}</div>
        </td>
        <td class="table-text">
          <div>{{ 10 - $class->max_sit }}</div>
        </td>
        <td class="table-text">
          <div>{{ $class->venue }}</div>
        </td>
        <td class="table-text">
          <div>
            {!! link_to_route(
              'class.edit',
              $title = 'Edit',
              $parameters = [
                'id' => $class->id,
              ]
            ) !!}
          </div>
        </td>
      </tr>
      @endforeach
      {{$classes->links()}}
    </tbody>

  </table>

  @else
  <div>
    No records found
  </div>
  @endif
</div>
@endsection
