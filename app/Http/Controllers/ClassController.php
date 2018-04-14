<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $class = new Class();

      return view('class.create', [
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
      $class = new Class;
      $class->fill($request->all());
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
      $class = Class::orderBy('name', 'asc')->get();

      return view('class.index', [
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
      $class = Class::find($id);
      if(!$class) throw new ModelNotFoundException;

      return view('class.show', [
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
      $class = Class::find($id);
      if(!$class) throw new ModelNotFoundException;

      return view('class.edit', [
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
      $class = Class::find($id);
      if(!$class) throw new ModelNotFoundException;

      $class->fill($request->all());

      $class->save();

      return redirect()->route('class.index');
    }
}
