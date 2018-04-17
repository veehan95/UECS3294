@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-title">
                      Welcome Back, {{ Auth::user()->name }}!!!
                    </div>
                    <hr/>
                    <div class="panel-group">
                      <div class="panel-title">
                        Students' Info
                      </div>
                      <ul>
                          <a href="{{ route('student.index') }}">
                            View All Students
                          </a>
                          <br/>

                          <a href="{{ route('student.create') }}">
                            Add New Student
                          </a>
                      </ul>
                    </div>
                    <hr/>
                    <div class="panel-group">
                        <div class="panel-title">
                          Teachers' Info
                        </div>
                        <ul>
                          <a href="{{ route('teacher.index') }}">
                            View All Teachers
                          </a>
                          <br/>
                          <a href="{{ route('teacher.create') }}">
                            Add New Teacher
                          </a>
                      </ul>
                    </div>
                    <hr/>
                    <div class="panel-group">
                        <div class="panel-title">
                          Classes' Info
                        </div>
                        <ul>
                          <a href="{{ route('class.index') }}">
                            View All Classes
                          </a>
                          <br/>
                          <a href="{{ route('class.create') }}">
                            Add New Class
                          </a>
                        </ul>
                    </div>
                    <hr/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
