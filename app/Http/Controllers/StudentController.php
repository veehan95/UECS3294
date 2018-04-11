<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    //
    public function create()
    {
      $student = new Student();

      return view('students.create', [
        'student' => $student,
      ]);
    }
}
