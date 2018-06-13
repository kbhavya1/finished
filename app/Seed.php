<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model
{
    //
    protected $table = 'questions';
    public $fillable = ['subject','ques','op1','op2','op3','op4','op5','op6','iscorrect_op1','iscorrect_op2','iscorrect_op3','iscorrect_op4','iscorrect_op5','iscorrect_op6'];
}
