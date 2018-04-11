<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = [
      'student_id',
      'name',
      'age',
      'ic',
      'address',
      'contact',
      'parents_contact',
      'email',
      'school',
    ];
}
