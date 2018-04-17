<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
      $teacher = new Teacher();

      return view('teachers.create', [
        'teacher' => $teacher,
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
      $teacher = new Teacher;
      $teacher->fill($request->all());

      do{
        $number = '1'.(date("y")%100).date("m")
          .str_pad(mt_rand(0, 100), 3, '0', STR_PAD_LEFT);
      }while(Teacher::where('id', '=', $number)->exists());
      $teacher->id=$number;

      $teacher->save();

      return redirect()->route('teacher.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $teachers = Teacher::orderBy('name', 'asc')->paginate(15);

      return view('teachers.index', [
        'teachers' => $teachers
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
      $teacher = Teacher::where('id', '=', $id)->get()->first();
      if(!$teacher) throw new ModelNotFoundException;

      return view('teachers.show', [
        'teacher' => $teacher,
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
      $teacher = Teacher::where('id', '=', $id)->get()->first();
      if(!$teacher) throw new ModelNotFoundException;

      return view('teachers.edit', [
        'teacher' => $teacher
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
      $teacher = Teacher::where('id', '=', $id)->get()->first();
      if(!$teacher) throw new ModelNotFoundException;

      $teacher->fill($request->all());

      $teacher->save();

      return redirect()->route('teacher.index');
    }
}
