<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $fillable = ['user_id', 'field', 'objection', 'suggestion', 'satisfaction', 'status' ];
}
