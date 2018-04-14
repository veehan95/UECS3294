<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'teacher_id',
      'name',
      'age',
      'nric',
      'address',
      'contact',
      'email',
      'education_background',
    ];

    /**
     * Get the teacher for the class.
     */
    public function classes()
    {
      return $this->belongToMany(Class::class);
    }
}
