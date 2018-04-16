<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TuitionClass extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id',
    'class_id',
    'subject',
    'time',
    'day',
    'effective_date',
    'close_date',
    'max_sit',
    'venue',
    'teacher_id',
  ];

  /**
   * Get all of the students for the class.
   */
  public function students()
  {
    return $this->hasMany(Student::class);
  }

  /**
   * Get the teacher for the class.
   */
  public function teacher()
  {
    return $this->has(Teacher::class);
  }
}
