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
      'id',
      'name',
      'gender',
      'nric',
      'address',
      'postcode',
      'city',
      'state',
      'contact',
      'email',
      'education_background',
    ];
}
