<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\TuitionClass;
use Carbon\Carbon;

class TuitionClassController extends Controller
{
      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
        $class = new TuitionClass();

        return view('classes.create', [
         'class' => $class,
        ]);
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param \Illuminate\Http\Request $request
       *
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
        $request->validate([
          'subject' => [
            'required',
          ],
          'day' => [
            'required',
          ],
          'close_date' => [
            'after:'.$request->effective_date,
          ],
          'max_sit' => [
            'required',
            'integer',
          ],
          'venue' => [
            'required',
          ],
          'teacher_id' => [
            'required',
          ],
        ]);
        $class = new TuitionClass;
        $class->fill($request->all());

        do{
          $number = '2'.(date("y")%100).date("m")
            .str_pad(mt_rand(0, 100), 3, '0', STR_PAD_LEFT);
        }while(TuitionClass::where('id', '=', $number)->exists());
        $class->id=$number;

        $class->save();

        return redirect()->route('class.index');
      }

      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
        $classes = TuitionClass::orderBy('subject', 'asc')->paginate(15);

        return view('classes.index', [
          'classes' => $classes
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
        $relations = \DB::table('piviot_cs')->get();;
        $class = TuitionClass::where('id', '=', $id)->get()->first();
        if(!$class) throw new ModelNotFoundException;

        return view('classes.show', [
          'class' => $class,
          'relations' => $relations,
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
        $class = TuitionClass::where('id', '=', $id)->get()->first();
        if(!$class) throw new ModelNotFoundException;

        return view('classes.edit', [
          'class' => $class
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
        $request->validate([
          'subject' => [
            'required',
          ],
          'day' => [
            'required',
          ],
          'close_date' => [
            'after:'.$request->effective_date,
          ],
          'max_sit' => [
            'required',
            'integer',
          ],
          'venue' => [
            'required',
          ],
          'teacher_id' => [
            'required',
          ],
        ]);
        $class = TuitionClass::where('id', '=', $id)->get()->first();
        if(!$class) throw new ModelNotFoundException;

        $class->fill($request->all());

        $class->save();

        return redirect()->route('class.index');
      }
      
      
      public function ctos($class_id, $student_id)
       {
         \DB::table('piviot_cs')->insert([
            'student_id' => '91702123',
            'class_id' => '21804051',
         ]);
       }
}
