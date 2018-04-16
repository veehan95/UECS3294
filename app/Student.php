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
      'nric',
      'gender',
      'address',
      'postcode',
      'city',
      'state',
      'contact',
      'parent_contact',
      'email',
      'school',
    ];
}
