<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        $class = new TuitionClass;
        $class->fill($request->all());
            
        do{
          $number = 'C'.(date("y")%100).date("m")
            .str_pad(mt_rand(0, 100), 3, '0', STR_PAD_LEFT);
        }while(TuitionClass::where('class_id', '=', $number)->exists());
        $class->class_id=$number;
            
        $class->save();

        return redirect()->route('classes.index');
      }

      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
        $class = TuitionClass::orderBy('name', 'asc')->paginate(15);

        return view('classes.index', [
          'class' => $class
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
        $class = TuitionClass::where('class_id', '=', $id)->get()->first();
        if(!$class) throw new ModelNotFoundException;

        return view('classes.show', [
          'class' => $class,
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
        $class = TuitionClass::where('class_id', '=', $id)->get()->first();
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
        $class = TuitionClass::where('class_id', '=', $id)->get()->first();
        if(!$class) throw new ModelNotFoundException;

        $class->fill($request->all());

        $class->save();

        return redirect()->route('classes.index');
      }
}
