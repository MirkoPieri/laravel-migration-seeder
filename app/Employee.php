<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $fillable = [
    'firtname',
    'lastname',
    'birthDay',
    'jobTitle',
    'salary'
  ];
}
