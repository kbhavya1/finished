<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Carbon\Carbon;
use DB;
use App\Users;

class StudentController extends Controller
{
    function stu_dashbard()
    {
            $papers=Subscription::where("user_id",\Auth::user()->id)->get();
            $deletedPapers=Subscription::onlyTrashed()->where("user_id",\Auth::user()->id)->get();
           // dd(["deletedPapers"=>$deletedPapers,"papers"=>$papers,"currentTimestamp"=>new Carbon(),"activeOption"=>"QuestionPaper"]);
            return view("exam.dashboard",["deletedPapers"=>$deletedPapers,"papers"=>$papers,"currentTimestamp"=>new Carbon(),"activeOption"=>"QuestionPaper"]);
    }

    public function details(){

        $user = new Users();
        $detail = $user->get();

        return view('exam.profile',["detail" => $detail]);

        }
}
