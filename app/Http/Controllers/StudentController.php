<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
      $student = new Student();

      return view('students.create', [
        'student' => $student,
      ]);
    }

    /**
     * Store a newly created resource in storage.\
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
      $student = new Student;
      $student->fill($request->all());
      $student->save();

      return redirect()->route('student.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $student = Student::orderBy('name', 'asc')->get();

      return view('student.index', [
        'student' => $student
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $student = Student::find($id);
      if(!$student) throw new ModelNotFoundException;

      return view('student.show', [
        'student' => $student,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $student = Student::find($id);
      if(!$student) throw new ModelNotFoundException;

      return view('student.edit', [
        'student' => $student
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $student = Student::find($id);
      if(!$student) throw new ModelNotFoundException;

      $student->fill($request->all());

      $student->save();

      return redirect()->route('student.index');
    }
}
