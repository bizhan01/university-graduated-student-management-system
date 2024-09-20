<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['sender_id', 'subject', 'message', 'reply',  'replier_id', 'status' ];
}
