<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    /**
     * Get all of the classes for the teacher.
     */
    public function classes()
    {
      return $this->belongToMany(Class::class);
    }
}
