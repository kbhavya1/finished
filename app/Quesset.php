<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quesset extends Model
{
    protected $fillable = ['package', 'set','question_id'];
}
