<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  protected $fillable = ['title','branch', 'shift', 'gender', 'field', 'experience', 'deadLine', 'description',];
}
