<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Carbon\Carbon;

class StudentController extends Controller
{
    function stu_dashbard()
    {
            $paper=Subscription::where("user_id",\Auth::user()->id)->get();

        return view("exam.dashboard",["paper"=>$paper,"currentTimestamp"=>new Carbon(),"activeOption"=>"QuestionPaper"]);
    }
}
