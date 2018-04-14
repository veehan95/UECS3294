<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'student_id',
      'name',
      'age',
      'nric',
      'address',
      'contact',
      'parents_contact',
      'email',
      'school',
    ];
}
