<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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

      do{
        $number = '0'.(date("y")%100).date("m")
          .str_pad(mt_rand(0, 100), 3, '0', STR_PAD_LEFT);
      }while(Student::where('id', '=', $number)->exists());
      $student->id=$number;

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
      $students = Student::orderBy('name', 'asc')->paginate(15);

      return view('students.index', [
        'students' => $students
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

      return view('students.show', [
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
      $student = Student::where('id', '=', $id)->get()->first();
      if(!$student) throw new ModelNotFoundException;

      return view('students.edit', [
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
      $student = Student::where('id', '=', $id)->get()->first();
      if(!$student) throw new ModelNotFoundException;

      $student->fill($request->all());

      $student->save();

      return redirect()->route('student.index');
    }
}
